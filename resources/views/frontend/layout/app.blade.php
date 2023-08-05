<!DOCTYPE HTML>
<html lang="en">
<head>
@include('frontend/includes/head')
</head>
<body>
<!-- main start  -->
<div id="main">
    <!-- progress-bar  -->
    <div class="progress-bar-wrap">
        <div class="progress-bar color-bg"></div>
    </div>
    <!-- progress-bar end -->
    <!-- header -->
    <header class="main-header">
        <!-- top bar -->
      @include('frontend/includes/topbar')
        <!-- top bar end -->
        @include('frontend/includes/navbar')
    </header>
    <!-- header end  -->
    <!-- wrapper -->
    <div id="wrapper">
        <!-- content    -->
        <div class="content">
            <!-- hero grid    -->
            @include('frontend/includes/hero')
            <!-- hero grid end   -->
            <!-- section   -->
            @yield('content')
            <!-- section end -->
            <!-- section   -->
            <section class="dark-bg no-bottom-padding">
                <div class="container">
                    <div class="main-video-wrap fl-wrap">
                        <div class="video-main-cont">
                            <div class="video-section-title fl-wrap">
                                <h2>Featured  Video</h2>
                                <h4>Stay up-to-date</h4>
                                <a href="category.html">View All <i class="fas fa-caret-right"></i></a>
                            </div>
                            <a class="video-holder vh-main fl-wrap  image-popup"  href="#">
                                <div class="bg"></div>
                                <div class="overlay"></div>
                                <div class="big_prom"> <i class="fas fa-play"></i></div>
                            </a>
                            <div class="video-holder-title fl-wrap">
                                <div class="video-holder-title_item"><a href="#"></a></div>
                                <span class="video-date"><i class="far fa-clock"></i> <strong></strong></span>
                                <a class="post-category-marker" href="category.html"></a>
                            </div>
                            <div class="vh-preloader"></div>
                        </div>
                        <!-- video-links-wrap   -->
                        <div class="video-links-wrap">
                            <!-- video-item  -->
                            <div class="video-item video-item_active fl-wrap" data-url="post-single2.html" data-video-link="https://www.youtube.com/watch?v=VLoqKdRxPSc">
                                <div class="video-item-img fl-wrap">
                                    <img src="{{asset('frontend/images/all/33.jpg')}}" class="respimg" alt="">
                                    <div class="play-icon"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="video-item-title">
                                    <h4>London Stay Most Popular City</h4>
                                    <span class="video-date"><i class="far fa-clock"></i> <strong>25may 2022</strong></span>
                                </div>
                                <a class="post-category-marker" href="category.html">Business</a>
                            </div>
                            <!--video-item end   -->
                            <!-- video-item  -->
                            <div class="video-item fl-wrap" data-url="post-single2.html" data-video-link="https://www.youtube.com/watch?v=K-6tPkm6cZA">
                                <div class="video-item-img fl-wrap">
                                    <img src="{{asset('frontend/images/all/43.jpg')}}" class="respimg" alt="">
                                    <div class="play-icon"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="video-item-title">
                                    <h4>Oculus in Trending Now</h4>
                                    <span class="video-date"><i class="far fa-clock"></i> <strong>20april 2022</strong></span>
                                </div>
                                <a class="post-category-marker" href="category.html">Technology</a>
                            </div>
                            <!--video-item end   -->
                            <!-- video-item  -->
                            <div class="video-item fl-wrap" data-url="posts-ingle2.html" data-video-link="https://vimeo.com/390742893">
                                <div class="video-item-img fl-wrap">
                                    <img src="{{asset('frontend/images/all/3.jpg')}}" class="respimg" alt="">
                                    <div class="play-icon"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="video-item-title">
                                    <h4>Additional Jobs and Economic Growth After the Pandemic</h4>
                                    <span class="video-date"><i class="far fa-clock"></i><strong> 14december 2021</strong></span>
                                </div>
                                <a class="post-category-marker" href="category.html">Politics</a>
                            </div>
                            <!--video-item end   -->
                            <!-- video-item  -->
                            <div class="video-item fl-wrap" data-url="post-single2.html" data-video-link="https://www.youtube.com/watch?v=vgVr_OpEVMQ">
                                <div class="video-item-img fl-wrap">
                                    <img src="{{asset('frontend/images/all/42.jpg')}}" class="respimg" alt="">
                                    <div class="play-icon"><i class="fas fa-play"></i></div>
                                </div>
                                <div class="video-item-title">
                                    <h4>Scientific research goes to the next level</h4>
                                    <span class="video-date"><i class="far fa-clock"></i> <strong>05december 2021</strong></span>
                                </div>
                                <a class="post-category-marker" href="category.html">Business</a>
                            </div>
                            <!--video-item end   -->
                        </div>
                        <!-- video-links-wrap end   -->
                    </div>
                </div>
                <div class="video_carousel-wrap fl-wrap">
                    <div class="container">
                        <div class="video_carousel-container">
                            <div class="video_carousel_title">
                                <h4>Popular Videos</h4>
                                <div class="vc-pagination pag-style"></div>
                            </div>
                            <!-- fw-carousel  -->
                            <div class="video_carousel  lightgallery">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <!-- video-item  -->
                                            <div class="video-item fl-wrap">
                                                <div class="video-item-img fl-wrap">
                                                    <img src="{{asset('frontend/images/all/1.jpg')}}" class="respimg" alt="">
                                                    <a class="play-icon image-popup" href="https://www.youtube.com/watch?v=65YhmHsuD-M"><i class="fas fa-play"></i></a>
                                                </div>
                                                <div class="video-item-title">
                                                    <h4><a href="post-single2.html">London Stay Most Popular City</a></h4>
                                                    <span class="video-date"><i class="far fa-clock"></i> 05december 2021</span>
                                                </div>
                                                <a class="post-category-marker" href="category.html">Science</a>
                                            </div>
                                            <!--video-item end   -->
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <!-- video-item  -->
                                            <div class="video-item fl-wrap">
                                                <div class="video-item-img fl-wrap">
                                                    <img src="{{asset('frontend/images/all/44.jpg')}}" class="respimg" alt="">
                                                    <a class="play-icon image-popup" href="https://vimeo.com/155428349"><i class="fas fa-play"></i></a>
                                                </div>
                                                <div class="video-item-title">
                                                    <h4><a href="post-single2.html">Options, options: As clock ticks on, climate talks  </a></h4>
                                                    <span class="video-date"><i class="far fa-clock"></i> 05december 2021</span>
                                                </div>
                                                <a class="post-category-marker" href="category.html">Business</a>
                                            </div>
                                            <!--video-item end   -->
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <!-- video-item  -->
                                            <div class="video-item fl-wrap">
                                                <div class="video-item-img fl-wrap">
                                                    <img src="{{asset('frontend/images/all/2.jpg')}}" class="respimg" alt="">
                                                    <a class="play-icon image-popup" href="https://vimeo.com/108359069"><i class="fas fa-play"></i></a>
                                                </div>
                                                <div class="video-item-title">
                                                    <h4><a href="post-single2.html">Efforts to cut car, plane and ship   get small boost</a></h4>
                                                    <span class="video-date"><i class="far fa-clock"></i> 05december 2021</span>
                                                </div>
                                                <a class="post-category-marker" href="category.html">Science</a>
                                            </div>
                                            <!--video-item end   -->
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <!-- video-item  -->
                                            <div class="video-item fl-wrap">
                                                <div class="video-item-img fl-wrap">
                                                    <img src="{{asset('frontend/images/all/46.jpg')}}" class="respimg" alt="">
                                                    <a class="play-icon image-popup" href="https://www.youtube.com/watch?v=s-TySen2xLo"><i class="fas fa-play"></i></a>
                                                </div>
                                                <div class="video-item-title">
                                                    <h4><a href="post-single2.html"> Climate change and your future health</a></h4>
                                                    <span class="video-date"><i class="far fa-clock"></i> 05december 2021</span>
                                                </div>
                                                <a class="post-category-marker" href="category.html">Technology</a>
                                            </div>
                                            <!--video-item end   -->
                                        </div>
                                        <!-- swiper-slide end-->
                                    </div>
                                </div>
                            </div>
                            <!-- fw-carousel end -->
                            <div class="cc-prev cc_btn"><i class="fas fa-caret-left"></i></div>
                            <div class="cc-next cc_btn"><i class="fas fa-caret-right"></i></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
            <!-- section  -->
            <section>
                <div class="container">
                    <div class="section-title sect_dec">
                        <h2>Best In Categories</h2>
                        <h4>Don't miss daily news</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="list-post-wrap list-post-wrap_column list-post-wrap_column_fw">
                                <!--list-post-->
                                <div class="list-post fl-wrap">
                                    <a class="post-category-marker" href="#">Sports</a>
                                    <div class="list-post-media">
                                        <a href="post-single.html">
                                            <div class="bg-wrap">
                                                <div class="bg" data-bg="{{asset('frontend/images/all/15.jpg')}}"></div>
                                            </div>
                                        </a>
                                        <span class="post-media_title">&copy; Image Copyrights Title</span>
                                    </div>
                                    <div class="list-post-content">
                                        <h3><a href="post-single.html">Goodwin must Break Clarkson hold  </a></h3>
                                        <span class="post-date"><i class="far fa-clock"></i> 18 may 2022</span>
                                        <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempor.  </p>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i> 6 </li>
                                            <li><i class="fal fa-eye"></i>  587 </li>
                                        </ul>
                                        <div class="author-link"><a href="author-single.html"><img src="images/avatar/1.jpg" alt="">  <span>By Jane Taylor</span></a></div>
                                    </div>
                                </div>
                                <!--list-post end-->
                            </div>
                            <a href="blog2.html" class="dark-btn fl-wrap"> Read all News </a>
                        </div>
                        <div class="col-md-7">
                            <div class="picker-wrap-container fl-wrap">
                                <div class="picker-wrap-controls">
                                    <ul class="fl-wrap">
                                        <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                        <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                        <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                    </ul>
                                </div>
                                <div class="picker-wrap fl-wrap">
                                    <div class="list-post-wrap  fl-wrap">
                                        <!--list-post-->
                                        <div class="list-post fl-wrap">
                                            <div class="list-post-media">
                                                <a href="post-single.html">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/5.jpg')}}"></div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                                            </div>
                                            <div class="list-post-content">
                                                <a class="post-category-marker" href="#">Sports</a>
                                                <h3><a href="post-single.html">Winton SuperSprint cars cancelled</a></h3>
                                                <span class="post-date"><i class="far fa-clock"></i> 18 may 2022</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  .</p>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i> 6 </li>
                                                    <li><i class="fal fa-eye"></i>  587 </li>
                                                </ul>
                                                <div class="author-link"><a href="author-single.html"><img src="images/avatar/1.jpg" alt="">  <span>By Jane Taylor</span></a></div>
                                            </div>
                                        </div>
                                        <!--list-post end-->
                                        <!--list-post-->
                                        <div class="list-post fl-wrap">
                                            <div class="list-post-media">
                                                <a href="post-single.html">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/48.jpg')}}"></div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                                            </div>
                                            <div class="list-post-content">
                                                <a class="post-category-marker" href="category.html">Science</a>
                                                <h3><a href="post-single.html">Countries at COP26 launch plan for net-zero shipping lanes</a></h3>
                                                <span class="post-date"><i class="far fa-clock"></i> 15 may 2022</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  .</p>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i>  5 </li>
                                                    <li><i class="fal fa-eye"></i>  456 </li>
                                                </ul>
                                                <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                                            </div>
                                        </div>
                                        <!--list-post end-->
                                        <!--list-post-->
                                        <div class="list-post fl-wrap">
                                            <div class="list-post-media">
                                                <a href="post-single.html">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/2.jpg')}}"></div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                                            </div>
                                            <div class="list-post-content">
                                                <a class="post-category-marker" href="category.html">Technology</a>
                                                <h3><a href="post-single.html">New VR Glasses and Headset System Release</a></h3>
                                                <span class="post-date"><i class="far fa-clock"></i> 15 may 2022</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  .</p>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i>  5 </li>
                                                    <li><i class="fal fa-eye"></i>  456 </li>
                                                </ul>
                                                <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                                            </div>
                                        </div>
                                        <!--list-post end-->
                                        <!--list-post-->
                                        <div class="list-post fl-wrap">
                                            <div class="list-post-media">
                                                <a href="post-single.html">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/49.jpg')}}"></div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                                            </div>
                                            <div class="list-post-content">
                                                <a class="post-category-marker" href="category.html">Science</a>
                                                <h3><a href="post-single.html">How to start Home renovation.</a></h3>
                                                <span class="post-date"><i class="far fa-clock"></i> 05 April 2022</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  .</p>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i>  55</li>
                                                    <li><i class="fal fa-eye"></i>  987 </li>
                                                </ul>
                                                <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/3.jpg')}}" alt="">  <span>By Ann Kowalsky</span></a></div>
                                            </div>
                                        </div>
                                        <!--list-post end-->
                                    </div>
                                </div>
                                <div class="controls-limit fl-wrap"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="limit-box"></div>
            </section>
            <!-- section end -->
            <!-- section -->
            <section class="no-padding">
                <div class="fs-carousel-wrap">
                    <div class="fs-carousel-wrap_title">
                        <div class="fs-carousel-wrap_title-wrap fl-wrap">
                            <h4>Trending News</h4>
                            <h5>Don't Miss And  Stay Up-to-date. Top pic for you.</h5>
                        </div>
                        <div class="abs_bg"></div>
                        <div class="gs-controls">
                            <div class="gs_button gc-button-next"><i class="fas fa-caret-right"></i></div>
                            <div class="gs_button gc-button-prev"><i class="fas fa-caret-left"></i></div>
                        </div>
                    </div>
                    <div class="fs-carousel fl-wrap">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="grid-post-item  bold_gpi  fl-wrap">
                                        <div class="grid-post-media gpm_sing">
                                            <div class="bg" data-bg="{{asset('frontend/images/all/50.jpg')}}"></div>
                                            <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                                            <div class="grid-post-media_title">
                                                <a class="post-category-marker" href="category.html">Business</a>
                                                <h4><a href="post-single.html">Envatocoin Vulnerable To Retest 20K Support</a></h4>
                                                <span class="video-date"><i class="far fa-clock"></i> 02 March 2022</span>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i>  7 </li>
                                                    <li><i class="fal fa-eye"></i>  88 </li>
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
                                            <div class="bg" data-bg="images/all/53.jpg"></div>
                                            <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/3.jpg')}}" alt="">  <span>By Ann Kowalsky</span></a></div>
                                            <div class="grid-post-media_title">
                                                <a class="post-category-marker" href="category.html">Technology</a>
                                                <h4><a href="post-single.html">Videos show SpaceX's Dragon capsule as it returns to Earth</a></h4>
                                                <span class="video-date"><i class="far fa-clock"></i> 13 april 2021</span>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i>  3 </li>
                                                    <li><i class="fal fa-eye"></i> 89</li>
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
                                            <div class="bg" data-bg="images/all/54.jpg"></div>
                                            <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                                            <div class="grid-post-media_title">
                                                <a class="post-category-marker" href="category.html">Sports</a>
                                                <h4><a href="post-single.html">Sports season ends with more surprises</a></h4>
                                                <span class="video-date"><i class="far fa-clock"></i> 23 may 2021</span>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i>  34</li>
                                                    <li><i class="fal fa-eye"></i>  567 </li>
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
                                            <div class="bg" data-bg="{{asset('frontend/images/all/52.jpg')}}"></div>
                                            <div class="author-link"><a href="author-single.html"><img src="images/avatar/1.jpg" alt="">  <span>By Jane Taylor</span></a></div>
                                            <div class="grid-post-media_title">
                                                <a class="post-category-marker" href="category.html">Science</a>
                                                <h4><a href="post-single.html">World electric ready to race tomorrow</a></h4>
                                                <span class="video-date"><i class="far fa-clock"></i> 6 april 2021</span>
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
            <!-- section  -->
            <div class="gray-bg ad-wrap fl-wrap">
                <div class="content-banner-wrap">
                    <img src="{{asset('frontend/images/all/banner.jpg')}}" class="respimg" alt="">
                </div>
            </div>
            <!-- section end -->
        </div>
        <!-- content  end-->
        <!-- footer -->
       @include('frontend/includes/footer')
        <!-- footer end-->
        <div class="aside-panel">
            <ul>
                <li> <a href="category.html"><i class="far  fa-podium"></i><span>Politics</span></a></li>
                <li> <a href="category.html"><i class="far fa-atom"></i><span>Technology</span></a></li>
                <li> <a href="category.html"><i class="far fa-user-chart"></i><span>Business</span></a></li>
                <li> <a href="category.html"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
                <li> <a href="category.html"><i class="far fa-flask"></i><span>Science</span></a></li>
            </ul>
        </div>
    </div>
    <!-- wrapper end -->
    <!-- cookie-info-bar -->
    <div class="cookie-info-bar">
        <div class="container">
            <div class="cookie-info-bar_title"><i class="fal fa-cookie"></i>Our site uses cookies. Learn more about our use of cookies: <a href="#">Cookie policy</a></div>
            <a href="#" class="sicb_btn color-bg">Accept</a>
            <a href="#" class="sicb_btn">Reject</a>
        </div>
    </div>
    <!-- cookie-info-bar end -->
    <!--register form -->
    <div class="main-register-container">
        <div class="reg-overlay close-reg-form"></div>
        <div class="main-register-holder">
            <div class="main-register-wrap fl-wrap">
                <div class="main-register_bg">
                    <div class="bg-wrap">
                        <div class="bg par-elem "  data-bg="{{asset('frontend/images/bg/1.jpg')}}"></div>
                        <div class="overlay"></div>
                    </div>
                    <div class="mg_logo"><img src="{{asset('frontend/images/logo2.png')}}" alt=""></div>
                </div>
                <div class="main-register tabs-act fl-wrap">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                        <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                    </ul>
                    <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                    <!--tabs -->
                    <div id="tabs-container">
                        <div class="tab">
                            <!--tab -->
                            <div id="tab-1" class="tab-content first-tab">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address <span>*</span> </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password <span>*</span> </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check" checked>
                                            <label for="check-a">Remember me</label>
                                        </div>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                    </form>
                                </div>
                            </div>
                            <!--tab end -->
                            <!--tab -->
                            <div class="tab">
                                <div id="tab-2" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>Full Name <span>*</span> </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Email Address <span>*</span></label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password <span>*</span></label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--tab end -->
                        </div>
                        <!--tabs end -->
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div class="soc-log  fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
@include('frontend/includes/footer-scripts')
</body>
</html>
