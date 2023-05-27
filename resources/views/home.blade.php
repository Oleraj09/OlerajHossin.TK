<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleraj Hossin :: A Personal Portfolio about Oleraj!!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" />
    <link rel="stylesheet" href={{ asset('frontend/plugin/owlcarousel/owl.carousel.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/plugin/owlcarousel/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/plugin/owlcarousel/owl.theme.default.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('frontend/css/responsive.css') }}>
</head>

<body>
    <!--Header Section-->
    <header id="header">
        <nav class="navbar navbar-expand-lg mynavbar fixed-top header-inner">
            <div class="container">
                <a class="navbar-brand" href={{ route('home') }}>
                    <img src="{{ $setinfo->logo ?? '' }}" alt="" style="height: 60px;width: 140px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link active rounded-pill" aria-current="page" href="#home">Home</a>
                        <a class="nav-link rounded-pill" href="#aboutole">About Me</a>
                        <a class="nav-link rounded-pill" href="#blogs">Blogs</a>
                        <!-- <a class="nav-link rounded-pill" href="#service">Language</a> -->
                        <a class="nav-link rounded-pill" href="#portfolio">Portfolio</a>
                        <a class="nav-link rounded-pill" href="#contact">Contact Me</a>
                    </div>
                    <div class="loginbtn my-2">
                        @auth
                            <a href={{ route('dashboard') }} class="btn rounded-pill btn-mybtn">Dashboard</a>
                        @else
                            <a href={{ route('login') }} class="btn rounded-pill btn-mybtn">Login</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        <hr>
    </header>

    <!--Mian Content-->
    <main>
        <!--Home me Section-->
        <section id="home">
            <div class="container">
                <div class="aboutme px-4">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 py-4">
                            <div class="contents">
                                <h4 class="text-uppercase py-1"><b>I am {{ $setinfo->name ?? '' }}!!</b></h4>
                                <h4 class="text-uppercase py-1" id="typed"></h4>
                                <p class="text-white-50 py-2" style="text-align: justify">
                                    I am a skilled Laravel developer with a passion for creating efficient and robust
                                    web applications. With a solid understanding of the Laravel framework, I have
                                    successfully delivered high quality projects that meet client requirements.
                                </p>
                                <a
                                    href="https://raw.githubusercontent.com/Oleraj09/Oleraj09/5db9a4d51d0314289ccb4146294debeccc6f5ec7/Oleraj_CV.pdf"><button
                                        class="btn btn-outline-primary my-2">Download My CV</button></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 py-4">
                            <div class="image">
                                <div class="image-box3">
                                    <div class="image-box2">
                                        <div class="image-box1">
                                            <img src="{{ $setinfo->image ?? '' }}" alt="" class="img-fluid"
                                                style="height: 100%; width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About me Section-->
        <section id="aboutole">
            <div class="container">
                <div class="blog-intro">
                    <h1 class="title">ABOUT <span class="bcolor">ME</span></h1>
                    <p class="desc">Hi, I am {{ $setinfo->name ?? '' }}. Let me Introduce my self and Qualification!
                    </p>
                </div>
                <div class="myinfo py-2">
                    <div class="personalinfo">
                        <div class="row">
                            <div class="fuck col-lg-6 col-md-6 col-sm-12 col-12">
                                <ul id="itemgroup" class="px-5" style="margin-left: -30px;">
                                    <li id="info" class="mybuttonx activea">Information</li>
                                    <li id="edu" class="mybuttonx">Education</li>
                                    <li id="skill" class="mybuttonx">My Skills</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="content px-3 pb-5 pt-2">
                                    <div class="content-info show">
                                        <div class="func">
                                            <div class="infop">
                                                <h3 class="text-danger"><i
                                                        class="fa-solid fa-circle-info fa-sm me-2"></i>Personal Info
                                                </h3>
                                                <div class="personal">
                                                    <div class="ttl ps-3">
                                                        <label for="" class="text-white-50">Name</label>
                                                        <p class="text-muted pe-3">{{ $setinfo->name ?? '' }}</p>
                                                        <label for="" class="text-white-50">Email</label>
                                                        <p class="text-muted pe-3">{{ $setinfo->email ?? '' }}</p>
                                                        <label for="" class="text-white-50">Phone</label>
                                                        <p class="text-muted pe-3">{{ $setinfo->phone ?? '' }}</p>
                                                        <label for="" class="text-white-50">Adress</label>
                                                        <p class="text-muted pe-3">{{ $setinfo->adress ?? '' }}</p>
                                                        <label for="" class="text-white-50">Type</label>
                                                        <p class="text-muted pe-3">{{ $setinfo->type ?? '' }}</p>
                                                        <label for="" class="text-white-50">Status</label>
                                                        <p class="text-muted pe-3">{{ $setinfo->status ?? '' }} for
                                                            Work</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-edu">
                                        <div class="func">
                                            <div class="work">
                                                <h3 class="text-danger"><i
                                                        class="fa fa-briefcase fa-sm me-2"></i>Education</h3>
                                                <ul>
                                                    <li>
                                                        <span
                                                            class="text-uppercase text-info"><b>{{ $setinfo->bsct ?? '' }}</b></span><br>
                                                        <span
                                                            class="text-white-50"><i>{{ $setinfo->bscv ?? '' }}</i></span><br>
                                                        <span
                                                            class="text-muted"><i>{{ $setinfo->bsci ?? '' }}</i></span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="text-uppercase text-info"><b>{{ $setinfo->hsct ?? '' }}</b></span><br>
                                                        <span
                                                            class="text-white-50"><i>{{ $setinfo->hscv ?? '' }}</i></span><br>
                                                        <span
                                                            class="text-muted"><i>{{ $setinfo->hsci ?? '' }}</i></span>
                                                    </li>
                                                    <li>
                                                        <span
                                                            class="text-uppercase text-info"><b>{{ $setinfo->ssct ?? '' }}</b></span><br>
                                                        <span
                                                            class="text-white-50"><i>{{ $setinfo->sscv ?? '' }}</i></span><br>
                                                        <span
                                                            class="text-muted"><i>{{ $setinfo->ssci ?? '' }}</i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-skill">
                                        <div class="func">
                                            <div class="skillp">
                                                <h3 class="text-danger"><i class="fa-solid fa-link fa-sm me-2"></i>My
                                                    Skills</h3>
                                                <div class="skills ps-3 pe-4">
                                                    <label for="" class="size">HTML</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped"
                                                            role="progressbar"
                                                            style="width: {{ $setinfo->html ?? '' }}%;"
                                                            aria-valuenow="{{ $setinfo->html ?? '' }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <label for="" class="size">CSS</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-success"
                                                            role="progressbar"
                                                            style="width: {{ $setinfo->css ?? '' }}%;"
                                                            aria-valuenow="{{ $setinfo->css ?? '' }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <label for="" class="size">JS</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-info"
                                                            role="progressbar"
                                                            style="width: {{ $setinfo->js ?? '' }}%;"
                                                            aria-valuenow="{{ $setinfo->js ?? '' }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <label for="" class="size">JQuery-AJAX</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-warning"
                                                            role="progressbar"
                                                            style="width: {{ $setinfo->jq ?? '' }}%;"
                                                            aria-valuenow="{{ $setinfo->jq ?? '' }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <label for="" class="size">PHP and Laravel</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-danger"
                                                            role="progressbar"
                                                            style="width: {{ $setinfo->php ?? '' }}%;"
                                                            aria-valuenow="{{ $setinfo->php ?? '' }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <label for="" class="size">ReactJS and NextJS</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-primary"
                                                            role="progressbar"
                                                            style="width: {{ $setinfo->react ?? '' }}%;"
                                                            aria-valuenow="{{ $setinfo->react ?? '' }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio Section-->
        <section id="portfolio">
            <div class="blog-intro s1">
                <h1 class="title">ShowCase <span class="bcolor">MyWork</span></h1>
                <p class="desc">ALL The Previous work Done by Me! See my existing Work!</p>
            </div>
            <div class="container">
                <div class="text-center" id="buttongroup">
                    <button id="all" class="s3 rounded-pill px-4 py-2 my-2 mybtn activebtn">SHOW ALL</button>
                    <button id="php" class="s4 rounded-pill px-4 py-2 my-2 mybtn">PHP</button>
                    <button id="laravel" class="s5 rounded-pill px-4 my-2 py-2 mybtn">LARAVEL</button>
                    <button id="react" class="s6 rounded-pill px-4 my-2 py-2 mybtn">REACT</button>
                </div>
                <div class="projects py-4">
                    <div class="row">
                        @foreach ($portfolio as $p)
                            <div id="all {{$p->tag}}" class="filter col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="pinfo">
                                    <img class="rounded-2" style="height: 150px; width: 100%;"
                                        src="{{$p->image}}" alt="">
                                    <p class="ititle">{{$p->name}}</p>
                                    <div class="ioverlay rounded-2"></div>
                                    <div class="ibutton"><a href="{{$p->link}}"> <i class="fa-solid fa-link"></i> </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $portfolio->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </section>
        <!--Language aSection-->
        <section id="language">
            <div class="container">

                <div class="owl-carousel">
                    <div class="lang p-4 ms-4 text-warning"> <i class="fa-brands fa-html5 fa-4x"></i> </div>
                    <div class="lang p-4 ms-4 text-warning"> <i class="fa-brands fa-css3-alt fa-4x"></i> </div>
                    <div class="lang p-4 ms-4 text-warning"> <i class="fa-brands fa-js fa-4x"></i> </div>
                    <div class="lang p-4 ms-4 text-warning"> <i class="fa-brands fa-php fa-4x"></i> </div>
                    <div class="lang p-4 ms-4 text-warning"> <i class="fa-brands fa-laravel fa-4x"></i> </div>
                    <div class="lang p-4 ms-4 text-warning"> <i class="fa-brands fa-react fa-4x"></i> </div>
                </div>

            </div>
        </section>
        <!--Blogs Post Section-->
        <section id="blogs">
            <div class="container">
                <div class="blog-post">
                    <div class="blog-intro">
                        <h1 class="title">BLOG <span class="bcolor">POST</span></h1>
                        <p class="desc">TIPS, INSIGHTS, AND BEST PRACTICES ABOUT WEB DESIGN AND DEVELOPPMENT</p>
                    </div>
                    <div class="row">
                        @foreach ($blog as $b)
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12 py-3">
                                <div class="card shadow">
                                    <img src="{{ $b->image }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-white">{{ $b->title }}</h5>
                                        <p class="card-text text-muted py-2">
                                            {{ Str::limit($b->body, 100) }}
                                        </p>
                                        <a href="#" class="btn btn-outline-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $blog->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
        </section>
        <!--Contactus Section-->
        <section id="contact">
            <div class="container">
                <div class="blog-intro s2">
                    <h1 class="title">Contact <span class="bcolor">US</span></h1>
                    <p class="desc">Send Us Email and Find our Location and Information!!</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row py-2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="contactlogo pb-3">
                                    <img src={{ $setinfo->logo ?? '' }} alt=""
                                        style="height: 100px; width: 250px;">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="webinfo ps-4">
                                    <h3>Location</h3>
                                    <div class="iconinfo">
                                        <i class="fa-solid fa-house"></i> <span>{{ $setinfo->adress ?? '' }}</span>
                                    </div>
                                    <div class="iconinfo">
                                        <i class="fa-solid fa-phone"></i> <span>{{ $setinfo->phone ?? '' }}</span>
                                    </div>
                                    <div class="iconinfo">
                                        <i class="fa-solid fa-envelope"></i> <span>{{ $setinfo->email ?? '' }}</span>
                                    </div>
                                    <div class="iconinfo">
                                        <i class="fa-solid fa-location-dot"></i> <span>View in Google Map</span>
                                    </div>
                                    <div class="map my-3 rounded-4">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d767.358346921777!2d90.35688895532088!3d23.811769820076563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c120182ee2db%3A0x9f5b280efde47892!2s18%20Rupnagar%20Rd%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1680196693012!5m2!1sen!2sbd"
                                            class="map" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="formdesign px-3 pt-5">
                            <form action={{route('contact')}} method="POST" class="pb-5 pt-5">
                                @csrf
                                <label for="" class="py-2">Your Full Name</label>
                                <input class="form-control py-2" type="text">
                                <label for="" class="py-2">Email Adress</label>
                                <input class="form-control py-2" type="email">
                                <label for="" class="py-2">Your Messages</label>
                                <textarea class="form-control py-2" rows="6"></textarea>
                                <input class="btn btn-primary my-2" type="submit" value="SEND MESSAGE">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--Footer Section-->
    <footer id="footer">
        <footer class="footstyle1 text-center text-white">
            <div class="container pt-4">
                <section class="mb-4">
                    <a class="btn btn-outline-info rounded-pill btn-floating btn-lg text-light m-1"
                        href={{ $setinfo->fb ?? '' }} role="button" data-mdb-ripple-color="dark"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-info rounded-pill btn-floating btn-lg text-light m-1"
                        href={{ $setinfo->tw ?? '' }} role="button" data-mdb-ripple-color="dark"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-info rounded-pill btn-floating btn-lg text-light m-1"
                        href={{ $setinfo->ggl ?? '' }} role="button" data-mdb-ripple-color="dark"><i
                            class="fab fa-google"></i></a>
                    <a class="btn btn-outline-info rounded-pill btn-floating btn-lg text-light m-1"
                        href={{ $setinfo->ins ?? '' }} role="button" data-mdb-ripple-color="dark"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-info rounded-pill btn-floating btn-lg text-light m-1"
                        href={{ $setinfo->ln ?? '' }} role="button" data-mdb-ripple-color="dark"><i
                            class="fab fa-linkedin"></i></a>
                    <a class="btn btn-outline-info rounded-pill btn-floating btn-lg text-light m-1"
                        href={{ $setinfo->git ?? '' }} role="button" data-mdb-ripple-color="dark"><i
                            class="fab fa-github"></i></a>
                </section>
            </div>
            <div class="footstyle2 p-3">
                <div class="container d-flex">
                    <p class="end text-left py-2 text-white-50">{{ $setinfo->copyright ?? '' }} </p> <span
                        class="rounded-pill m-auto btn btn-secondary"><a class="iconlink" href="#header"><i
                                class="fa-solid fa-arrow-up"></i></a></span>
                </div>
            </div>
        </footer>
    </footer>


    <!--Custom JS and Plugin-->
    <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
    <script src={{ asset('frontend/js/typed.js') }}></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('frontend/js/scrooleffect.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="{{ asset('frontend/plugin/owlcarousel/owl.carousel.js') }}"></script>
    <!-- <script src="./assets/plugin/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="{{ asset('frontend/js/carousel.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.js"></script>

    <script src="{{ asset('frontend/js/navbar.js') }}"></script>
    <script src="{{ asset('frontend/js/filter.js') }}"></script>
</body>

</html>
