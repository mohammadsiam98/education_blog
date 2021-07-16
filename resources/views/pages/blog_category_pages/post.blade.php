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
    <title>- Personal Blog HTML Template </title>
    
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


  
    <!--post-default-->
    <section class="section pt-55 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mb-20">
                    <!--Post-single-->
                    <div class="post-single">
                        <div class="post-single-image">
                            <img src="{{url($blogs->image)}}" alt="">
                        </div>
                        <div class="post-single-content">
                            <a href="blog-grid.html" class="categorie">{{$blogs->category}}</a> 
                            <h4>{{$blogs->title}} </h4>
                            <div class="post-single-info">
                                <ul class="list-inline">
                                  
                                    <li><a href="#">Admin</a> </li>
                                    <li class="dot"></li>
                                    <li>{{$blogs->created_at->format('d.m.Y')}}</li>
                                    <li class="dot"></li>
                                    <li>3 comments</li>
                                </ul>
                            </div>
                        </div>
                  
                        <div class="post-single-body">
                            <p>
                                {!!$blogs->description!!}
                            </p>
                          
                            <div class="quote">
                                <div><i class="icon_quotations_alt"></i></div>
                                <p>
                                    {!!$blogs->highlightedText!!}
                                </p>
                              
                            </div>

                        </div>

                
                    </div> <!--/-->

                    


                    <div class="widget mb-50">
                        <div class="title">
                            <h5>Total Comments: {{$countComments}}</h5>
                        </div>



                     
                            @foreach($comments as $data)
                            <ul class="widget-comments">
                              <li class="comment-item">


                                <li class="comment-item">
                                    <img src="{{asset('assets/img/user/1.jpg')}}" alt="">
                                    <div class="content">
                                        <ul class="info list-inline">
                                            <li>{{$data->username}}</li>
                                            <li class="dot"></li>
                                            <li>{{$data->updated_at}}</li>
                                        </ul>
                                        <p>{{$data->comment}}
                                        </p>
                                        <div class="reply">
                                            <button class="btn-reply text-uppercase" id="reply-btn" onclick="showReplyForm('{{$data->id}}','{{$data->username}}')"
                                                style="
                                                background-color:#f67280;
                                                color:#ffffff !important;
                                                padding: 1px 10px;
                                                text-align:center;
                                                font-size:13px;
                                                border-radius:20px;
                                                font-weight:700 !important;
                                                text-transform: capitalize;
                        
                                                
                                                ">
                                                <i class="arrow_back"></i> Reply</button>
                                           
                                        </div>

                                    </div>
                                </li>

                                         
                                     

                                         
                                       

                                            
                                          @foreach (App\CommentReply::where('comment_id', $data->id)->get() as $reply)  
                                              <li class="comment-item reply" style="margin-left: 6rem;" >
                                                <img src="{{asset('assets/img/user/1.jpg')}}" alt="">
                                                <div class="content">
                                                    <ul class="info list-inline">
                                                        <li>{{$reply->username}}</li>
                                                        <li class="dot"></li>
                                                        <li>{{$reply->created_at}}</li>
                                                    </ul>
                                                    <p>{{$reply->message}}
                                                    </p>
                                                    <div class="reply">
                                                        <button class="btn-reply text-uppercase" id="reply-btn"onclick="showReplyForm('{{$data->id}}','{{$data->username}}')" style="
                                                        background-color:#f67280;
                                                        color:#ffffff !important;
                                                        padding: 1px 10px;
                                                        text-align:center;
                                                        font-size:13px;
                                                        border-radius:20px;
                                                        font-weight:700 !important;
                                                        text-transform: capitalize;
                                
                                                        
                                                        ">
                                                            <i class="arrow_back"></i> Reply</button>
                                                       
                                                    </div>


                                                   

                                               </div>                                               
                                            </li>
                                          @endforeach



                                                          <!-- Another Comment Reply Form Start -->
                                                          @guest
                                                          <a href="{{route('login')}}" class="button" style=" background-color:#f67280;
                                                          color:#ffffff !important;
                                                          padding: 1px 10px;
                                                          text-align:center;
                                                          font-size:13px;
                                                          border-radius:20px;
                                                          font-weight:700 !important;
                                                          text-transform: capitalize;">login to comment</a>
                                                          @else
                                                          <div id="reply-form-{{$data->id}}" style="display: none;">
                                                          

                                                                <h1 class="title" id="reply-title">Leave a Reply <small><a style="display:none;" href="#" id="cancel-comment-reply-link" >Cancel reply</a></small></h1>
                                                              <form class="widget-form" method="POST" action="{{route('commentReply.store',$data->id)}}" id="main_contact_form">
                                                                  @csrf
                                                                 <div class="col-md-12">
                                                                    <div class="form-group">

                                                                        <textarea class="form-control" required="required" maxlength="65525" rows="8" cols="45" name="message" id="reply-form-{{$data->id}}-text"></textarea>

                                                                    </div>
                                                                    

                                                                 </div> 
                                                                  
                                                                      <button type="submit" value="Post Comment" class="submit btn-custom">Reply Comment</button>
                                                              </form>

                                                        
                                                              
                                                          </div><!-- #respond -->
                      
                                                      @endguest
                                                          <!-- Another Comment Reply Form End -->
            
            
                             
            
                                                      <!-- /.media -->
                           
                                                    
                                                </li>
                                              @endforeach        
                                              
                                              
                                              
                                @guest
                                <a href="{{route('login')}}" class="button"
                                style=" background-color:#f67280;
                                                          color:#ffffff !important;
                                                          padding: 1px 10px;
                                                          text-align:center;
                                                          font-size:13px;
                                                          border-radius:20px;
                                                          font-weight:700 !important;
                                                          text-transform: capitalize;">login to comment</a>
                                @else
                               
                                    <h1 class="title" id="reply-title">Leave a Reply <small><a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a></small></h1>
                                    <form class="widget-form" method="POST" action="{{route('comment.store',$blogs->id)}}">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <textarea class="form-control"  required="required" maxlength="65525" rows="8" cols="45" name="comment" id="comment"></textarea>

                                            </div>
                                            

                                         </div> 
                                          
                                       
                                            <button type="submit" value="Post Comment" class="submit btn-custom">Comment</button>
                                    </form>
                            @endguest

                    </div> <!-- This is my close div -->


            </div>



                <div class="col-lg-4 max-width">
                    <!--widget-author-->
                    <div class="widget">

                        @if ($user->channel_name != null)
                            <div class="widget-author">
                                <a href="{{ route('individualAuthorBlogs', $user->id ) }}" class="image">
                                    <img src="{{url($user->image)}}" alt="">
                                
                                    <h6>
                                        <span>{{$user->channel_name}}</span>
                                    </h6>
                                </a>

                                <p>
                                    {{$user->channel_name_description}}
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
                        @else
                        <div class="widget-author">
                            <a href="" class="image">
                                <img src="{{asset('assets/img/person.png')}}" alt="">
                            
                                <h6>
                                    <span>{{$user->name}}</span>
                                </h6>
                            </a>

                            <p>
                                {{$user->channel_name_description}}
                            </p>
                    
                    
                           
                        </div>    
                        @endif
                        
                    </div>
                    <!--/-->

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
                                    <p><a href="{{route('allpost',[$recentpost->id,$recentpost->category])}}">{{$recentpost->title}}</a></p>
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
                    </div><!--/-->
                    
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
                                    <img src="{{asset('assets/img/instagram/2.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="{{asset('assets/img/instagram/3.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="{{asset('assets/img/instagram/4.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="{{asset('assets/img/instagram/5.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="{{asset('assets/img/instagram/6.jpg')}}" alt="">
                                </a>
                            </li>
                        </ul>
                            
                    </div><!--/-->


                </div> 
            </div>
        </div>
    </section><!--/-->

    
    <!--newslettre-->
    <section class="newslettre">
        <div class="container-fluid">
            <div class="newslettre-width text-center">
                <div class="newslettre-info">
                    <h5>Want to be a author in our website ? </h5>
                    <p>Sign up for free and be the author. </p>
                </div>
                


                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="" class="text-sm text-gray-700 underline"
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
                        <p>© Copyright 2021  <a href="#">AssiaGroupe</a>, All rights reserved.</p>
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


    <script>
        function showReplyForm(commentId,username){
        var x = document.getElementById(`reply-form-${commentId}`);
        var input = document.getElementById(`reply-form-${commentId}-text`);
    
        if(x.style.display === "none") 
        {
            x.style.display = "block";
            input.innerText = `@${username}` ;
        }
        else
        {
            x.style.display = "none";
        }
    }
    </script>

</body>

</html>