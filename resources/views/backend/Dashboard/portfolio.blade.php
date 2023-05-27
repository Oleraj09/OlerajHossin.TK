@extends('Backend.master')
@section('title', 'Portfolio Management : Admin Control Panel!!')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Portfolio Management</h1>
                <div class="ml-auto">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Button</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example1">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Link</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($portfolio as $proj)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src={{$proj->image}} style="height:40px;width:40px" alt=""></td>
                                                <td>{{$proj->name}}</td>
                                                <td>{{$proj->link}}</td>
                                                <td>{{$proj->desc}}</td>
                                                <td>{{$proj->status == 0 ? 'Running' : 'Completed'}}</td>
                                                <td class="pt_10 pb_10">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$proj->id}}">Edit</button>
                                                    <a href={{route('porject.delete',$proj->id)}} class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                </td>
                                                <div class="modal fade" id="exampleModal{{$proj->id}}" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <form action={{route('porject.update',$proj->id)}} method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control" name="name" value="{{$proj->name}}">
                                                                                    </div>
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Live On Link</label>
                                                                                        <input type="text" class="form-control" name="link" value="{{$proj->link}}">
                                                                                    </div>
                                                                                    {{-- <div class="form-group mb-3">
                                                                                        <label>Datepicker</label>
                                                                                        <input type="text" class="form-control datepicker" name="" value="">
                                                                                    </div>
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Datepicker</label>
                                                                                        <input type="text" class="form-control timepicker" name="" value="">
                                                                                    </div>
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Color</label>
                                                                                        <input type="text" class="form-control jscolor" name="" value="A2A5FF">
                                                                                    </div> --}}
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Tag</label>
                                                                                        <select class="form-control" name="tag" id="">
                                                                                            <option value="php" {{$proj->status == 'php' ? 'selected' : ''}}>PHP</option>
                                                                                            <option value="laravel" {{$proj->status == 'laravel' ? 'selected' : ''}}>Laravel</option>
                                                                                            <option value="react" {{$proj->status == 'react' ? 'selected' : ''}}>React</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Description</label>
                                                                                        <textarea name="desc" class="form-control h_100" cols="30" rows="10">{{$proj->desc}}</textarea>
                                                                                    </div>
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Project Status</label>
                                                                                        <select class="form-control" name="status" id="">
                                                                                            <option value="0" {{$proj->status == 0 ? 'selected' : ''}}>Running</option>
                                                                                            <option value="1" {{$proj->status == 1 ? 'selected' : ''}}>Completed</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Image</label>
                                                                                        <div class="py-2">
                                                                                            @if ($proj->image)
                                                                                                <img src="{{$proj->image}}"
                                                                                                    style="height: 50px;width:100px;">
                                                                                            @else
                                                                                                <span>No image found!</span>
                                                                                            @endif
                                                                                        </div>
                                                                                        <div>
                                                                                            <input type="file" name="image">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Project</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action={{route('porject.add')}} method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="name" id="name" value="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Live On Link</label>
                                                    <input type="text" class="form-control" name="link" id="link" value="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Tag</label>
                                                    <select class="form-control" name="tag" id="">
                                                        <option value="php">PHP</option>
                                                        <option value="laravel">Laravel</option>
                                                        <option value="react">React</option>
                                                    </select>
                                                </div>
                                                {{-- <div class="form-group mb-3">
                                                    <label>Datepicker</label>
                                                    <input type="text" class="form-control datepicker" name="" value="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Datepicker</label>
                                                    <input type="text" class="form-control timepicker" name="" value="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Color</label>
                                                    <input type="text" class="form-control jscolor" name="" value="A2A5FF">
                                                </div> --}}
                                                <div class="form-group mb-3">
                                                    <label>Description</label>
                                                    <textarea name="desc" id="desc" class="form-control h_100" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Image</label>
                                                    <div>
                                                        <input type="file" name="image" id="image">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary" id="addproject">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



@endsection
