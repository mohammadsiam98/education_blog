@extends('layouts.website_layout')

@section('content')
    <!--category-->
    <section class="categorie-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="categorie-title"> 
                         <small>
                            <a href="index.html">Home</a>
                            <span class="arrow_carrot-right"></span> Food
                        </small>
                        <h3>Category : <span> Food</span></h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Incidunt quae explicabo, ducimus necessitatibus eum aut enim modi
                            saepe perspiciatis fugit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--blog-grid-->
    <section class="blog-grid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt-30">
                    <div class="row">
                         
                        @foreach($blogs as $blog)
                        <div class="col-lg-6 col-md-6">
                            <!--Post-1-->
                            <div class="post-card">
                                <div class="post-card-image">
                                    <a href="post-default.html">
                                        <img src="{{url($blog->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <a href="blog-grid.html" class="categorie">{{$blog->category}}</a>
                                    <h5>
                                        <a href="post-default.html">{{$blog->title}}</a>
                                    </h5>
                                    <p></p>
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
                                            <li>{{$blog->created_at}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/-->
                        </div>
                        @endforeach
                      

                        <!--pagination-->
                        <div class="col-lg-12">
                            <div class="pagination mt--10">
                                <ul class="list-inline">
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="arrow_carrot-2right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <!--/-->
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4 max-width">
                    <!--widget-latest-posts-->
                    <div class="widget ">
                        <div class="section-title">
                            <h5>Latest Posts</h5>
                        </div>
                        <ul class="widget-latest-posts">
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/1.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">1</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">5 Things I Wish I Knew Before Traveling to Malaysia</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/2.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">2</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">Everything you need to know about visiting the Amazon.</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/3.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">3</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">How to spend interesting vacation after hard work?</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/4.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">4</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">10 Best and Most Beautiful Places to Visit in Italy</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
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
                                <a href="#" class="categorie">Livestyle</a>
                                <span class="ml-auto">22 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">Travel</a>
                                <span class="ml-auto">18 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">Food</a>
                                <span class="ml-auto">14 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">fashion</a>
                                <span class="ml-auto">10 Posts</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!--widget-instagram-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Instagram</h5>
                        </div>
                        <ul class="widget-instagram">
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/1.jpg" alt="">
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
@endsection

  