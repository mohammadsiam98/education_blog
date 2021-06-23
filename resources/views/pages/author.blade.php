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
    <title></title>
    
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

    <!--author-->
    <section class="section author full-space mb-40 pt-55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--widget-author-->
                    <div class="widget-author inner-width">
                        <a href="#" class="image">
                            <img src="{{url($user->image)}}" alt="">
                        </a>
                        <h6><span>{{ $user->name }}</span></h6>
                      
                        <p> 
                            {{ $user->channel_name_description }}
                        </p>
                        
                        <div class="social-media">
                            <ul class="list-inline">
                                <li>
                                    <a href=" {{ $user->facebook }}" class="color-facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=" {{ $user->instagram }}" class="color-instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=" {{ $user->twitter }}" class="color-twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=" {{ $user->youtube }}" class="color-youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
   
    <!--mansory-layout-->
    <section class="masonry-layout col2-layout mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--cards-->
                    <div class="card-columns">
                        <!--Post-1-->
                    
                        @foreach($users_blogs_one as $blog)
                        <div class="card">
                            <div class="post-card post-full">
                                <div class="post-card-image">
                                    <a href="{{route('allpost' , [$blog->id,$blog->category])}}"><img src="{{url($blog->image)}}" alt=""></a>
                                </div>
                                <div class="post-card-content">
                                    <a href="{{route('allpost' , [$blog->id,$blog->category])}}" class="categorie">{{$blog->category}}</a>
                                    <h5>
                                        <a href="{{route('allpost' , [$blog->id,$blog->category])}}">{{$blog->title}}</a>
                                    </h5>
                                    <p>{{$blog->highlightedText}}</p>
                                    <div class="post-card-info">
                                        <ul class="list-inline">
                                            <li>
                                                <a >
                                                    <img src="{{asset('assets/img/author/1.jpg')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a>{{ $blog->name }}</a>
                                            </li>
                                            <li class="dot"></li>
                                            <li>
                                                <?php 

                                                 echo date("d M, Y", strtotime($blog->created_at));

                                                ?>
                                                
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/-->
                        </div>

                        @endforeach
        
                    </div>
        
                    
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
                <form action="#" class="newslettre-form">
                    <div class="form-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email adress" required="required">
                        </div>
                        <button class="submit-btn" type="submit">Subscribe</button>
                    </div>
                </form>
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
                        <p>© Copyright 2021 <a href="#">AssiaGroupe</a>, All rights reserved.</p>
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
    <script src="{{ asset('assets/js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
    <!-- JS Plugins  -->
    <script src="{{ asset('assets/js/ajax-contact.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/switch.js') }}"></script>
    
    <!-- JS main  -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>


</html>