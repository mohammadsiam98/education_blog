<!doctype html>
<html lang="en">



<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->
    <title>Website Name</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/elegant-font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">

    <!-- main style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>

<body>
    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
                <a href="{{route('homepage')}}">
                    <img src="assets/img/logo-dark.png" alt="" class="logo-dark">
                    <img src="assets/img/logo-white.png" alt="" class="logo-white">
                </a>
            </div>
            <!--/-->
    
            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                   
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('startups')}}"> Startups </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('lifestyle')}}"> Lifestyle </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('review')}}"> Review </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}"> Contact </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> More Categories</a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="{{route('howto')}}"> How To</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('brandstories')}}">Brand Stories</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('food')}}"> Food </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('travel')}}"> Travel </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('career')}}"> Career </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('education')}}"> Education </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('health')}}"> Health & Wellness </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('law')}}"> Law </a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
            <!--/-->
    
            <!--navbar-right-->
            <div class="navbar-right ml-auto">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <!--/-->

    <!--carousel-hero-->
    <section class="section carousel-hero">
        <div class="owl-carousel">
            <div class="hero d-flex align-items-center " style="background-image: url('assets/img/hero/2.jpg')">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="hero-content">
                                <a href="blog-grid.html" class="categorie">travel</a>
                                <h2>
                                    <a href="post-default.html">10 Best and Most Beautiful Places to Visit in Italy </a>
                                </h2>
            
                                <div class="post-card-info">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="author.html">
                                                <img src="assets/img/author/1.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="author.html">David Smith</a>
                                        </li>
                                        <li class="dot"></li>
                                        <li>January 15, 2021</li>
                                        <li class="dot"></li>
                                        <li>10 Min Reads</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero d-flex align-items-center" style="background-image: url('assets/img/hero/1.jpg')">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="hero-content">
                                <a href="blog-grid.html" class="categorie">Livestyle</a>
                                <h2><a href="post-default.html">Top 10 Fashion Trends from Spring/Summer 2021 Fashion Weeks </a></h2>
                                <div class="post-card-info">
                                    <ul class="list-inline">
                                        <li><a href="author.html"><img src="assets/img/author/1.jpg" alt=""></a></li>
                                        <li><a href="author.html">David smith</a></li>
                                        <li class="dot"></li>
                                        <li>January 12, 2021</li>
                                        <li class="dot"></li>
                                        <li>10 Min Reads</li>
                                    </ul>
                                </div> 
                            </div>
                         </div>
                     </div>
                 </div>
            </div> 
            <div class="hero d-flex align-items-center " style="background-image: url('assets/img/hero/3.jpg')">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="hero-content">
                                <a href="blog-grid.html" class="categorie">Travel</a>
                                <h2>
                                    <a href="post-default.html">Top 10 Forests That Every Nature Lover Must Visit</a>
                                </h2>
                          
                                <div class="post-card-info">
                                    <ul class="list-inline">
                                        <li><a href="author.html"><img src="assets/img/author/1.jpg" alt=""></a></li>
                                        <li><a href="author.html">David Smith</a></li>
                                        <li class="dot"></li>
                                        <li>January 15, 2021</li>
                                        <li class="dot"></li>
                                        <li>10 Min Reads</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->

    <!--masonry-layout-->
    <section class="mt-40 masonry-layout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                        @foreach($blogs as $blog)
                        <!--Post-1-->
                        <div class="card">
                            <div class="post-card">
                                <div class="post-card-image">
                                    <a href="{{route('allpost' , [$blog->id,$blog->category])}}">
                                    <img src="{{url($blog->image)}}" alt="img">
                                    </a>
                                    
                                </div>
                                <div class="post-card-content">
                                    <a href="{{route('allpost' , [$blog->id,$blog->category])}}" class="categorie">{{$blog->category}}</a>
                                    <h5>
                                        <a href="{{route('allpost' , [$blog->id,$blog->category])}}">{{$blog->title}}</a>
                                    </h5>
                                    <p>{{$blog->highlightedText}}
                                    </p>
                                    <div class="post-card-info">
                                        <ul class="list-inline">
                                        
                                            <li>
                                                <a>{{$blog->name}}</a>
                                            </li>
                                            <li class="dot"></li>
                                            <li><?php
                                                
                                                echo date("d.m.Y", strtotime($blog->created_at));
                                                
                                                 
                                             ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/-->
                        @endforeach
    

                    </div>




                      

                  










                   
                    <!--pagination-->
                    <div class="pagination mt-30">
                        @if ($blogs->lastPage() >1)
                        <ul class="list-inline">
                            <li class="{{$blogs->currentPage() == 1 ? 'disabled' : ''}}"><a class="" href="{{$blogs->url(1)}}"><i class="arrow_carrot-2left"></i></a>
                                @for($i=1; $i<=$blogs->lastPage();$i++)
                                <li class="siam {{$blogs->currentPage() == $i ? 'current' : ''}}">
                                  <a class='page-numbers' href='{{$blogs->url($i)}}'>{{$i}}</a></li>
                                @endfor
                                <li class="{{$blogs->currentPage() == $blogs->lastPage() ? 'disabled' : '' }}"><a class="disabled" href="{{$blogs->url($blogs->currentPage() +1 )}}"><i class="arrow_carrot-2right"></i></a></li>
                           
                        </ul> 
                        @endif
                    </div><!--/-->

                </div>
            </div>
        </div>
    </section>
    <!--/-->

    <!--newslettre-->
    <section class="newslettre">
        <div class="container-fluid">
            <div class="newslettre-width text-center">
                


                <div class="newslettre-info">
                    <h5>Subscribe to our Newslatter</h5>
                    <p> Sign up for free and be the first to get notified about new posts. </p>
                </div>
                <form action="{{route('subscriber.store')}}" method="POST" class="newslettre-form">
                    @csrf
                    <div class="form-flex">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Your email adress" required="required">
                        </div>
                        <button class="submit-btn" type="submit">Subscribe</button>
                    </div>
                </form>

                <div class="newslettre-info">
                    <h5>Want to be a author in our website ? </h5>
                    <p>Sign up for free and be the author. </p>
                </div>
               
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{route('user.dashboard')}}" class="text-sm text-gray-700 underline"
                        style="
                         background-color:#f67280;
                                                color:#ffffff !important;
                                                padding: 13px 20px;
                                                text-align:center;
                                                font-size:24px;
                                                border-radius:20px;
                                                font-weight:700 !important;
                                                text-transform: capitalize;"
                        >Write Blogs in this website</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" 
                        style="
                         background-color:#f67280;
                                                color:#ffffff !important;
                                                padding: 13px 26px;
                                                text-align:center;
                                                font-size:24px;
                                                border-radius:20px;
                                                font-weight:700 !important;
                                                text-transform: capitalize;
                                                "
                        
                        
                        >Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" style="
                             background-color:#f67280;
                                                color:#ffffff !important;
                                                padding: 13px 26px;
                                                text-align:center;
                                                font-size:24px;
                                                border-radius:20px;
                                                font-weight:700 !important;
                                                text-transform: capitalize;
                            
                            ">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>Facebook</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>Twitter </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>Instagram </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!--footer-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>© Copyright 2021 <a href="#">XYZ Company</a>, All rights reserved.</p>
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="arrow_up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  
    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="search-width  text-center">
                <button type="button" class="close">
                    <i class="icon_close"></i>
                </button>
                <form class="search-form" action="#">
                    <input type="search" value="" placeholder="What are you looking for?">
                    <button type="submit" class="search-btn">search</button>
                </form>
            </div>
        </div>
    </div>
    <!--/-->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/js/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- JS Plugins  -->
    <script src="{{asset('assets/js/ajax-contact.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/switch.js')}}"></script>

    <!-- JS main  -->
    <script src="{{asset('assets/js/main.js')}}"></script>


</body>


</html>