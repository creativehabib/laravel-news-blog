@extends('frontend.layout.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-container fl-wrap fix-container-init">
                        <div class="section-title">
                            <h2>Lastest World News</h2>
                            <h4>Don't miss daily news</h4>
                            <div class="ajax-nav">
                                <ul>
                                    <li><a href="{{asset('frontend/ajax/category1.html')}}" class="current_page">World</a></li>
                                    <li><a href="{{asset('frontend/ajax/category2.html')}}">Technology</a></li>
                                    <li><a href="{{asset('frontend/ajax/category3.html')}}">Business</a></li>
                                    <li><a href="{{asset('frontend/ajax/category4.html')}}">Sports</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ajax-wrapper fl-wrap">
                            <div class="ajax-loader"><img src="{{asset('frontend/images/loading.gif')}}" alt=""/></div>
                            <div class="ajax-inner fl-wrap">
                                <div class="list-post-wrap">
                                    <!--list-post-->
                                    @foreach($posts as $post)
                                    <div class="list-post fl-wrap">
                                        <div class="list-post-media">
                                            <a href="{{$post->slug}}">
                                                <div class="bg-wrap">
                                                    <div class="bg" data-bg="{{$post->image}}"></div>
                                                </div>
                                            </a>
                                            <span class="post-media_title">{{$post->title}}</span>
                                        </div>
                                        <div class="list-post-content">
                                            <a class="post-category-marker" href="#">Science</a>
                                            <h3><a href="{{$post->slug}}">{{$post->title}}</a></h3>
                                            <span class="post-date"><i class="far fa-clock"></i> {{$post->created_at->format('d M Y')}}</span>
                                            <p>{{$post->post_meta}}</p>
                                            <ul class="post-opt">
                                                <li><i class="far fa-comments-alt"></i> {{$post->comments->count()}}</li>
                                                <li><i class="fal fa-eye"></i>  {{$post->view_count}} </li>
                                            </ul>
                                            <div class="author-link"><a href="author-single.html"><img src="{{$post->user->image}}" alt="">  <span>By {{$post->user->name}}</span></a></div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!--list-post end-->
                                </div>
                            </div>
                        </div>
                        <div class="content-banner-wrap cbw_mar">
                            <img src="{{asset('frontend/images/all/banner.jpg')}}" class="respimg" alt="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="section-title sect_dec">
                            <h2>Top Stories</h2>
                            <h4>Don't miss daily news</h4>
                        </div>
                        <div class="grid-post-wrap">
                            <div class="more-post-wrap  fl-wrap">
                                <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                    <div class="row">
                                        @foreach($posts as $post)
                                        <div class="col-md-6">
                                            <!--list-post-->
                                            <div class="list-post fl-wrap">
                                                @foreach($post->category as $category)
                                                <a class="post-category-marker" href="{{$category->slug}}"> {{$category->name}}</a> @endforeach
                                                <div class="list-post-media">
                                                    <a href="{{$post->slug}}">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="{{$post->image}}"></div>
                                                        </div>
                                                    </a>
                                                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                </div>
                                                <div class="list-post-content">
                                                    <h3><a href="{{$post->slug}}">{{$post->title}}</a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i>{{$post->created_at->format('d M Y')}}</span>
                                                </div>
                                            </div>
                                            <!--list-post end-->
                                        </div>
                                        @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--grid-post-item-->
                            <div class="single-grid-slider-wrap fl-wrap">
                                <div class="single-grid-slider">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="grid-post-item  bold_gpi  fl-wrap">
                                                    <div class="grid-post-media gpm_sing">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/31.jpg')}}"></div>
                                                        <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                                                        <div class="grid-post-media_title">
                                                            <a class="post-category-marker" href="category.html">Technology</a>
                                                            <h4><a href="post-single.html">Videos show SpaceX's Dragon capsule as it returns to Earth</a></h4>
                                                            <span class="video-date"><i class="far fa-clock"></i> 13 april 2021</span>
                                                            <ul class="post-opt">
                                                                <li><i class="far fa-comments-alt"></i>  25 </li>
                                                                <li><i class="fal fa-eye"></i>  164 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="grid-post-item  bold_gpi  fl-wrap">
                                                    <div class="grid-post-media gpm_sing">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/40.jpg')}}"></div>
                                                        <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/3.jpg')}}" alt="">  <span>Ann Kowalsky</span></a></div>
                                                        <div class="grid-post-media_title">
                                                            <a class="post-category-marker" href="category.html">Business</a>
                                                            <h4><a href="post-single.html">Scientific research goes to the next level</a></h4>
                                                            <span class="video-date"><i class="far fa-clock"></i> 30 september 2021</span>
                                                            <ul class="post-opt">
                                                                <li><i class="far fa-comments-alt"></i>  25 </li>
                                                                <li><i class="fal fa-eye"></i>  164 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="grid-post-item  bold_gpi  fl-wrap">
                                                    <div class="grid-post-media gpm_sing">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/36.jpg')}}"></div>
                                                        <div class="author-link"><a href="author-single.html"><img src="{{asset('frontent/images/avatar/1.jpg')}}" alt="">  <span>By Jane Taylor</span></a></div>
                                                        <div class="grid-post-media_title">
                                                            <a class="post-category-marker" href="category.html">Technology</a>
                                                            <h4><a href="post-single.html">Climate change: What do scientists want this week?</a></h4>
                                                            <span class="video-date"><i class="far fa-clock"></i> 05 december 2021</span>
                                                            <ul class="post-opt">
                                                                <li><i class="far fa-comments-alt"></i>  25 </li>
                                                                <li><i class="fal fa-eye"></i>  164 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                        </div>
                                        <div class="sgs-pagination sgs_ver "></div>
                                    </div>
                                </div>
                            </div>
                            <!--grid-post-item end-->
                            <div class="more-post-wrap  fl-wrap">
                                <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!--list-post-->
                                            <div class="list-post fl-wrap">
                                                <a class="post-category-marker" href="category.html">Sports</a>
                                                <div class="list-post-media">
                                                    <a href="post-single.html">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="{{asset('frontend/images/all/37.jpg')}}"></div>
                                                        </div>
                                                    </a>
                                                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                </div>
                                                <div class="list-post-content">
                                                    <h3><a href="post-single.html">Female Hawks win $10,000 funding boost</a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i>  05 April 2022</span>
                                                </div>
                                            </div>
                                            <!--list-post end-->
                                        </div>
                                        <div class="col-md-6">
                                            <!--list-post-->
                                            <div class="list-post fl-wrap">
                                                <a class="post-category-marker" href="category.html">Technology</a>
                                                <div class="list-post-media">
                                                    <a href="post-single.html">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="{{asset('frontend/images/all/39.jpg')}}"></div>
                                                        </div>
                                                    </a>
                                                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                </div>
                                                <div class="list-post-content">
                                                    <h3><a href="post-single.html">Cape Town's Day Zero: We are axing trees to save water</a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11 March 2022</span>
                                                </div>
                                            </div>
                                            <!--list-post end-->
                                        </div>
                                        <div class="col-md-6">
                                            <!--list-post-->
                                            <div class="list-post fl-wrap">
                                                <a class="post-category-marker" href="category.html">Science</a>
                                                <div class="list-post-media">
                                                    <a href="post-single.html">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="{{asset('frontend/images/all/18.jpg')}}"></div>
                                                        </div>
                                                    </a>
                                                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                </div>
                                                <div class="list-post-content">
                                                    <h3><a href="post-single.html">High wind delays SpaceX crew homecoming after 6 months aloft</a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11 March 2022</span>
                                                </div>
                                            </div>
                                            <!--list-post end-->
                                        </div>
                                        <div class="col-md-6">
                                            <!--list-post-->
                                            <div class="list-post fl-wrap">
                                                <a class="post-category-marker" href="category.html">Politics</a>
                                                <div class="list-post-media">
                                                    <a href="post-single.html">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="{{asset('frontend/images/all/7.jpg')}}"></div>
                                                        </div>
                                                    </a>
                                                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                </div>
                                                <div class="list-post-content">
                                                    <h3><a href="post-single.html">What the federal infrastructure package means for Minnesota</a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11 March 2022</span>
                                                </div>
                                            </div>
                                            <!--list-post end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog2.html" class="dark-btn fl-wrap"> Read all News </a>
                    </div>
                @include('frontend/includes/sidebar')
                </div>

            </div>
            <div class="limit-box fl-wrap"></div>
        </div>
    </section>
@endsection
