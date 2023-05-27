@extends('Backend.master')
@section('title', 'Post Management : Admin Control Panel!!')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Blog Post Management</h1>
                <div class="ml-auto">
                    <a href=""  data-toggle="modal" data-target="#addpost" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
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
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blog as $blg)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src={{$blg->image}} style="height:40px;width:40px" alt=""></td>
                                                <td>{{$blg->title}}</td>
                                                <td>{{$blg->body}}</td>
                                                <td class="pt_10 pb_10">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$blg->id}}">Edit</button>
                                                    <a href={{route('post.delete',$blg->id)}} class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                </td>
                                                <div class="modal fade" id="exampleModal{{$blg->id}}" tabindex="-1" aria-hidden="true">
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
                                                                                <form action={{route('post.update',$blg->id)}} method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control" name="title" value="{{$blg->title}}">
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
                                                                                        <textarea name="body" class="form-control h_100" cols="30" rows="10">{{$blg->body}}</textarea>
                                                                                    </div>
                                                                                    <div class="form-group mb-3">
                                                                                        <label>Image</label>
                                                                                        <div class="py-2">
                                                                                            @if ($blg->image)
                                                                                                <img src="{{$blg->image}}"
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
            <div class="modal fade" id="addpost" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Blog Post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action={{route('post.add')}} method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" value="">
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
                                                    <label>Body</label>
                                                    <textarea name="body" id="body" class="form-control h_100" cols="30" rows="10"></textarea>
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
