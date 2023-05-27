@extends('backend.master')
@section('title', 'Oleraj Hossin : Admin Control Panel!!')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fa-solid fa-user fa-2xl"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Running Project</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('portfolios')->where('status',0)->count()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-secondary">
                            <i class="fa-solid fa-cart-plus fa-2xl"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Completed Project</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('portfolios')->where('status',1)->count()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fa-solid fa-users fa-2xl"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Blog Post</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('my_posts')->count()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fa-solid fa-calendar-days fa-2xl"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Project</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('portfolios')->count()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-info">
                            <i class="fa-solid fa-sitemap fa-2xl"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>User</h4>
                            </div>
                            <div class="card-body">
                                {{ DB::table('users')->count()}}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </div>



@endsection
