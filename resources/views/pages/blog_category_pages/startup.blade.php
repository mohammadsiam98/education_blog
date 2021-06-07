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
    <title> - Personal Blog HTML Template </title>

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
                <a href="index.html">
                    <img src="assets/img/logo-dark.png" alt="" class="logo-dark">
                    <img src="assets/img/logo-white.png" alt="" class="logo-white">
                </a>
            </div>
            <!--/-->
    
            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html" data-toggle="dropdown"> Home </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="index.html">Demo 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-2.html">Demo 2 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-3.html">Demo 3 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-4.html">Demo 4 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-5.html">Demo 5</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-6.html">Demo 6 </a>
                            </li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle active" href="blog-grid.html" data-toggle="dropdown"> Blog </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="blog-grid.html"> Blog grid</a>
                            </li>
                            <li>
                                <a class="dropdown-item active" href="blog-masonry.html"> Blog masonry </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="blog-list.html"> Blog list </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="post-default.html" data-toggle="dropdown"> Posts Features </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="post-default.html"> post default</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-video.html"> post video</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-audio.html"> post audio</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-gallery.html"> post gallery</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-no-sidebar.html"> post no sidebar </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-left-sidebar.html"> post left sidebar </a>
                            </li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Pages </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="about.html"> About </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="author.html"> author </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.html"> Login </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="register.html"> Sign up </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="page404.html"> Page 404 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"> Contact </a>
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
    
                <div class="search-icon">
                    <i class="icon_search"></i>
                </div>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <!--/-->

    <!--Categorie-->
    <section class="categorie-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="categorie-title">
                        <small>
                            <a href="index.html">Home</a>
                            <span class="arrow_carrot-right"></span> Startups
                        </small>
                        <h3>Category : <span>Startups</span> </h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/-->

    <!--mansory-layout-->
    <section class="masonry-layout col2-layout mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt--10 ">
                    <!--cards-->
                    <div class="card-columns">
                        <!--Post-Start-->
                        @foreach($blogs_startups as $law)

                        <div class="card">
                            <div class="post-card">
                            <div class="post-card-image">
                                <a href="{{route('allpost' , [$law->id,$law->category])}}">
                                    <img src="{{url($law->image)}}" alt="">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <a href="blog-grid.html" class="categorie">{{$law->category}}</a>  
                                <h5><a href="post-default.html">{{$law->title}}</a> </h5>
                                <p>{{$law->highlightedText}}
                                </p>
                                <div class="post-card-info">
                                    <ul class="list-inline">
                                        <li><a href="author.html"><img src="assets/img/author/1.jpg" alt=""></a></li>
                                        <li>
                                            <a href="author.html">David Smith</a>
                                        </li>
                                        <li class="dot"></li>
                                        <li>January 15, 2021</li>
                                    </ul>
                                </div>
                            </div>
                            </div><!--/-->
                        </div>
                        <!-- Post-End-->

                        @endforeach
                        
                       
                    </div>

                    <!--pagination-->
                    <div class="pagination mt-30">
                        @if ($blogs_startups->lastPage() >1)
                        <ul class="list-inline">
                            <li class="{{$blogs_startups->currentPage() == 1 ? 'disabled' : ''}}"><a class="" href="{{$blogs_startups->url(1)}}"><i class="arrow_carrot-2left"></i></a>
                                @for($i=1; $i<=$blogs_startups->lastPage();$i++)
                                <li class="siam {{$blogs_startups->currentPage() == $i ? 'current' : ''}}">
                                  <a class='page-numbers' href='{{$blogs_startups->url($i)}}'>{{$i}}</a></li>
                                @endfor
                                <li class="{{$blogs_startups->currentPage() == $blogs_startups->lastPage() ? 'disabled' : '' }}"><a class="disabled" href="{{$blogs_startups->url($blogs_startups->currentPage() +1 )}}"><i class="arrow_carrot-2right"></i></a></li>
                           
                        </ul> 
                        @endif
                    </div><!--/-->
                    
                </div>
                <div class="col-lg-4 max-width">
                    <!--widget-latest-posts-->
                    <div class="widget ">
                        <div class="section-title">
                            <h5>Latest Posts</h5>
                        </div>
                        <ul class="widget-latest-posts">
                            @if (count($relatedposts)>0)
                            @foreach($relatedposts as $recentpost)
                            <li class="last-post">
                                <div class="image">
                                    <a href="{{route('allpost',[$recentpost->id,$recentpost->category])}}">
                                        <img src="{{url($recentpost->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="nb">1</div>
                                <div class="content">
                                    <p><a href="post-default.html">{{$recentpost->title}}</a></p>
                                    <small><span class="icon_clock_alt"></span>{{$recentpost->created_at->format('d.m.Y')}}</small>
                                </div>
                            </li>
                            @endforeach
                            @endif
                           
                        </ul>
                    </div>
                    <!--/-->
                    
                    <!--widget-categories-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Categories</h5>
                        </div>
                        <ul class="widget-categories">
                           
                            <li>
                                <a href="{{route('health')}}" class="categorie">Health & Wealth </a>
                                <span class="ml-auto">{{$categoryhealthCount}} Posts</span>
                            </li>
                            <li>
                                <a href="{{route('brandstories')}}" class="categorie">Brand Stories</a>
                                <span class="ml-auto">{{$categorybrandstoriesCount}} Posts</span>
                            </li>
                            <li>
                                <a href="{{route('startups')}}" class="categorie">Startups</a>
                                <span class="ml-auto">{{$categorystartupsCount}} Posts</span>
                            </li>
                            <li>
                                <a href="{{route('travel')}}" class="categorie">Travel</a>
                                <span class="ml-auto">{{$categorytravelCount}} Posts</span>
                            </li>
                            <li>
                                <a href="{{route('review')}}" class="categorie">Review</a>
                                <span class="ml-auto">{{$categoryreviewCount}} Posts</span>
                            </li>
                            <li>
                                <a href="{{route('howto')}}" class="categorie">HowTo</a>
                                <span class="ml-auto">{{$categoryhowtoCount}} Posts</span>
                            </li>
                            
                            
                            <li>
                                <a href="{{route('lifestyle')}}" class="categorie">Lifestyle</a>
                                <span class="ml-auto">{{$categorylifestyleCount}} Posts</span>
                            </li>
                            <li>
                                <a href="{{route('education')}}" class="categorie">Education</a>
                                <span class="ml-auto">{{$categoryeducationCount}} Posts</span>
                            </li>
                            
                            <li>
                                <a href="{{route('food')}}" class="categorie">Food</a>
                                <span class="ml-auto">{{$categoryfoodCount}} Posts</span>
                            </li>
                            <li>
                                <a href="{{route('career')}}" class="categorie">Career</a>
                                <span class="ml-auto">{{$categorycareerCount}} Posts</span>
                            </li>
                            <li>
                                <a href="{{route('law')}}" class="categorie">Law</a>
                                <span class="ml-auto">{{$categorylawCount}} Posts</span>
                            </li>
                            
                        </ul>
                    </div>
                    <!--/-->
                    
                    <!--widget-instagram-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Instagram</h5>
                        </div>
                        <ul class="widget-instagram">
                            <li>
                                <a class="image" href="#">
                                    <img src="{{asset('assets/img/instagram/1.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/2.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/3.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/4.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/5.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/6.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                    <!--/-->
                    <!--widget-tags-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Tags</h5>
                        </div>
                        <div class="widget-tags">
                            <ul class="list-inline">
                                <li>
                                    <a href="blog-grid.html">Travel</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">Nature</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">tips</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">forest</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">beach</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">fashion</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">livestyle</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">healty</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">food</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">breakfast</a>
                                </li>
                    
                            </ul>
                        </div>
                    </div>
                    <!--/-->
                </div>
            </div>
        </div>
    </section><!--/-->
    
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
                        <p>© Copyright 2021
                            <a href="#">AssiaGroupe</a>, All rights reserved.</p>
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