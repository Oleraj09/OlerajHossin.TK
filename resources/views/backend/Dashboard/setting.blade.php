@extends('Backend.master')
@section('title', 'Site Information : Admin Control Panel!!')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Site Information</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action={{ route('update.setting') }} method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if (Session::has('msg'))
                                        <p class="py-1 alert alert-success">{{ Session::get('msg') }}</p>
                                    @endif
                                    @if ($errors->any())
                                        <p class="py-1 alert alert-warning">Ops! Fill all the input field!!</p>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Site Logo</label>
                                                <div class="py-2">
                                                    @if ($data->logo ?? '')
                                                        <img src="{{ $data->logo }}"
                                                            style="height: 50px;width:100px;">
                                                    @else
                                                        <span>No image found!</span>
                                                    @endif
                                                </div>
                                                <div>
                                                    <input type="file" name="logo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Owner Photo</label>
                                                <div class="py-2">
                                                    @if ($data->logo ?? '')
                                                        <img src="{{ $data->image }}"
                                                            style="height: 100px;width:100px;">
                                                    @else
                                                        <span>No image found!</span>
                                                    @endif
                                                </div>
                                                <div>
                                                    <input type="file" name="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $data->name ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $data->email ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $data->phone ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Adress</label>
                                        <input type="text" class="form-control" name="adress" value="{{ $data->adress ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Type</label>
                                        <input type="text" class="form-control" name="type" value="{{ $data->type ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Status</label>
                                        <input type="text" class="form-control" name="status" value="{{ $data->status ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Graduate Title</label>
                                        <input type="text" class="form-control" name="bsct" value="{{ $data->bsct ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Graduate Institute</label>
                                        <input type="text" class="form-control" name="bscv" value="{{ $data->bscv ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Graduate Information</label>
                                        <input type="text" class="form-control" name="bsci" value="{{ $data->bsci ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>College Title</label>
                                        <input type="text" class="form-control" name="hsct" value="{{ $data->hsct ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>College Institue</label>
                                        <input type="text" class="form-control" name="hscv" value="{{ $data->hscv ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>College Information</label>
                                        <input type="text" class="form-control" name="hsci" value="{{ $data->hsci ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>School Title</label>
                                        <input type="text" class="form-control" name="ssct" value="{{ $data->ssct ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>School Institute</label>
                                        <input type="text" class="form-control" name="sscv" value="{{ $data->sscv ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>School Information</label>
                                        <input type="text" class="form-control" name="{{ $data->ssci ?? '' }}" value="{{ $data->ssci ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>HTML</label> is <span style="font-weight: 600"
                                            id="valueh">{{ $data->html ?? '' }}</span>%
                                        <input type="range" class="form-control" name="html" id="html"
                                            value="{{ $data->html ?? '' }}" min="0" max="100">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>CSS</label> is <span style="font-weight: 600" id="valuec">{{ $data->css ?? '' }}</span>%
                                        <input type="range" class="form-control" name="css" id="css"
                                            value="{{ $data->css ?? '' }}" min="0" max="100">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>JS</label> is <span style="font-weight: 600" id="valuej">{{ $data->js ?? '' }}</span>%
                                        <input type="range" class="form-control" name="js" id="js"
                                            value="{{ $data->js ?? '' }}" min="0" max="100">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Jquery and AJax</label> is <span style="font-weight: 600"
                                            id="valuejq">{{ $data->jq ?? '' }}</span>%
                                        <input type="range" class="form-control" name="jq" id="jq"
                                            value="{{ $data->jq ?? '' }}" min="0" max="100">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Php and Laravel</label> is <span style="font-weight: 600"
                                            id="valuep">{{ $data->php ?? '' }}</span>%
                                        <input type="range" class="form-control" name="php" id="php"
                                            value="{{ $data->php ?? '' }}" min="0" max="100">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>React and Next</label> is <span style="font-weight: 600"
                                            id="valuer">{{ $data->react ?? '' }}</span>%
                                        <input type="range" class="form-control" name="react" id="react"
                                            value="{{ $data->react ?? '' }}" min="0" max="100">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Facebook Link</label>
                                        <input type="text" class="form-control" name="fb" value="{{ $data->fb ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Twitter Link</label>
                                        <input type="text" class="form-control" name="tw" value="{{ $data->tw ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Google plus</label>
                                        <input type="text" class="form-control" name="ggl" value="{{ $data->ggl ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Instagram Link</label>
                                        <input type="text" class="form-control" name="ins" value="{{ $data->ins ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>LinkedIn Link</label>
                                        <input type="text" class="form-control" name="ln" value="{{ $data->ln ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Github Link</label>
                                        <input type="text" class="form-control" name="git" value="{{ $data->git ?? '' }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Copyright Text</label>
                                        <input type="text" class="form-control" name="copyright" value="{{ $data->copyright ?? '' }}">
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
        </section>
    </div>



@endsection
