
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Gmag - Blog News Magazine   Template</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/color.css')}}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}">
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
        <div class="top-bar fl-wrap">
            <div class="container">
                <div class="date-holder">
                    <span class="date_num"></span>
                    <span class="date_mounth"></span>
                    <span class="date_year"></span>
                </div>
                <div class="header_news-ticker-wrap">
                    <div class="hnt_title">Hot News :</div>
                    <div class="header_news-ticker fl-wrap">
                        <ul>
                            <li><a href="{{asset('frontend/post-single.html')}}">They chose to leave rather than put up with a governor who follows science .</a></li>
                            <li><a href="{{asset('frontend/post-single.html')}}">Hold On to Your Travel Dreams in the World.</a></li>
                            <li><a href="{{asset('frontend/post-single.html')}}">White  endorses bill that would ensure abortion access.</a></li>
                            <li><a href="#">NFL Power Rankings 2021: How all 32 teams stack up after Week 2.</a></li>
                        </ul>
                    </div>
                    <div class="n_contr-wrap">
                        <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                        <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                    </div>
                </div>
                <ul class="topbar-social">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- top bar end -->
        <div class="header-inner fl-wrap">
            <div class="container">
                <!-- logo holder  -->
                <a href="{{route('home')}}" class="logo-holder"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a>
                <!-- logo holder end -->
                <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>
                <div class="srf_btn htact show-reg-form"><i class="fal fa-user"></i> <span class="header-tooltip">Sign In</span></div>
                <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Cart</span></div>
                <!-- header-search-wrap -->
                <div class="header-search-wrap novis_sarch">
                    <div class="widget-inner">
                        <form action="#">
                            <label for="se"></label><input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                            <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                        </form>
                    </div>
                </div>
                <!-- header-search-wrap end -->
                <!-- header-cart_wrap  -->
                <div class="header-cart_wrap novis_cart">
                    <div class="header-cart_title">Your Cart <span><strong>2</strong> items</span></div>
                    <div class="header-cart_wrap_container fl-wrap">
                        <div class="box-widget-content">
                            <div class="widget-posts fl-wrap">
                                <ol>
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img src="{{asset('frontend/images/shop/1.jpg')}}" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Awesome Merch Wallet</a>
                                            <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $845</div>
                                        </div>
                                        <div class="clear-cart_button"><i class="far fa-times"></i></div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img src="{{asset('frontend/images/shop/2.jpg')}}" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Gmag Merch Wallet</a>
                                            <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $222</div>
                                        </div>
                                        <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart_wrap_total fl-wrap">
                        <div class="header-cart_wrap_total_item">Subtotal : <span>$1559</span></div>
                    </div>
                    <div class="header-cart_wrap_footer fl-wrap">
                        <a href="cart.html"> View Cart</a>
                        <a href="checkout.html"> Checkout</a>
                    </div>
                </div>
                <!-- header-cart_wrap end  -->
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation -->
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="#" class="act-link">Home <i class="fas fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="index.html">Slider</a></li>
                                    <li><a href="index2.html">Carousel</a></li>
                                    <li><a href="index3.html">Grid</a></li>
                                </ul>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="#">Posts<i class="fas fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="blog.html">List</a></li>
                                    <li><a href="blog2.html">2 Sidebars</a></li>
                                    <li><a href="blog3.html">Grid Sidebar</a></li>
                                    <li><a href="blog4.html">Full Width Sidebar </a></li>
                                    <li><a href="blog5.html">3 Columns Grid</a></li>
                                    <li>
                                        <a href="#">Single<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="post-single.html">Style 1</a></li>
                                            <li><a href="post-single2.html">Style 2</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                </ul>
                                <!--second level end-->
                            </li>
                            <li><a href="blog.html">Business</a></li>
                            <li><a href="blog.html">Technology</a></li>
                            <li>
                                <a href="#">Shop <i class="fas fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="product-single.html">Product Single</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="#">Pages<i class="fas fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="category.html">Category</a></li>
                                    <li><a href="author-single.html">Author Single</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                                <!--second level end-->
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
            </div>
        </div>
    </header>
    <!-- header end  -->
    <!-- wrapper -->
    <div id="wrapper">
        <!-- content    -->
        <div class="content">
            <!-- hero grid    -->
            <div class="hero-hrid fl-wrap gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-slider-wrap fl-wrap">
                                <div class="single-slider fl-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!-- swiper-slide   -->
                                            <div class="swiper-slide">
                                                <div class="grid-post-item  bold_gpi  fl-wrap">
                                                    <div class="grid-post-media gpm_sing">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/20.jpg')}}"></div>
                                                        <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/4.jpg')}}" alt="">  <span>By Jessie Bond</span></a></div>
                                                        <div class="grid-post-media_title">
                                                            <a class="post-category-marker" href="category.html">Technology</a>
                                                            <h4><a href="post-single.html">Innovations that Bring Pleasure to All Peoples</a></h4>
                                                            <span class="video-date"><i class="far fa-clock"></i>  18 may 2022</span>
                                                            <ul class="post-opt">
                                                                <li><i class="far fa-comments-alt"></i>  25 </li>
                                                                <li><i class="fal fa-eye"></i>  164 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end   -->
                                            <!-- swiper-slide   -->
                                            <div class="swiper-slide ">
                                                <div class="grid-post-item  bold_gpi  fl-wrap">
                                                    <div class="grid-post-media gpm_sing">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/35.jpg')}}"></div>
                                                        <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/3.jpg')}}" alt="">  <span>By Ann Kowalsky</span></a></div>
                                                        <div class="grid-post-media_title">
                                                            <a class="post-category-marker" href="category.html">Technology</a>
                                                            <h4><a href="post-single.html">Perfect James Webb telescope on track for launch.</a></h4>
                                                            <span class="video-date"><i class="far fa-clock"></i>  05 April 2022</span>
                                                            <ul class="post-opt">
                                                                <li><i class="far fa-comments-alt"></i>  55 </li>
                                                                <li><i class="fal fa-eye"></i>  967 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end   -->
                                            <!-- swiper-slide   -->
                                            <div class="swiper-slide ">
                                                <div class="grid-post-item  bold_gpi  fl-wrap">
                                                    <div class="grid-post-media gpm_sing">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/38.jpg')}}"></div>
                                                        <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/4.jpg')}}" alt="">  <span>By Jessie Bond</span></a></div>
                                                        <div class="grid-post-media_title">
                                                            <a class="post-category-marker" href="category.html">Sports</a>
                                                            <h4><a href="post-single.html">Sports tag Club competition returns</a></h4>
                                                            <span class="video-date"><i class="far fa-clock"></i>  11 march 2022</span>
                                                            <ul class="post-opt">
                                                                <li><i class="far fa-comments-alt"></i>  25 </li>
                                                                <li><i class="fal fa-eye"></i>  164 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end   -->
                                        </div>
                                    </div>
                                </div>
                                <div class="ss-slider-cont ss-slider-cont-prev"><i class="fas fa-caret-left"></i></div>
                                <div class="ss-slider-cont ss-slider-cont-next"><i class="fas fa-caret-right"></i></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="grid-post-item  bold_gpi    fl-wrap">
                                <div class="grid-post-media  gpm_sing bold_gpi_half">
                                    <div class="bg" data-bg="{{asset('frontend/images/all/55.jpg')}}"></div>
                                    <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/3.jpg')}}" alt="">  <span>Ann Kowalsky</span></a></div>
                                    <div class="grid-post-media_title">
                                        <a class="post-category-marker" href="category.html">Politics</a>
                                        <h4><a href="post-single.html">Here's the proof that momentum strategies work</a></h4>
                                        <span class="video-date"><i class="far fa-clock"></i>  05 April 2022</span>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i>  15 </li>
                                            <li><i class="fal fa-eye"></i>  234 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-post-item  bold_gpi   fl-wrap">
                                <div class="grid-post-media gpm_sing bold_gpi_half">
                                    <div class="bg" data-bg="{{asset('frontend/images/all/56.jpg')}}"></div>
                                    <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/2.jpg')}}" alt="">  <span>By Mark Rose</span></a></div>
                                    <div class="grid-post-media_title">
                                        <a class="post-category-marker" href="category.html">Politics</a>
                                        <h4><a href="post-single.html">How Maps Reshape American Politics In World</a></h4>
                                        <span class="video-date"><i class="far fa-clock"></i> 22 march 2022</span>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i>  25 </li>
                                            <li><i class="fal fa-eye"></i>  164 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="grid-post-item  bold_gpi    fl-wrap">
                                <div class="grid-post-media gpm_sing bold_gpi_half">
                                    <div class="bg" data-bg="{{asset('frontend/images/all/48.jpg')}}"></div>
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
                            <div class="grid-post-item  bold_gpi   fl-wrap">
                                <div class="grid-post-media gpm_sing bold_gpi_half">
                                    <div class="bg" data-bg="{{asset('frontend/images/all/57.jpg')}}"></div>
                                    <div class="author-link"><a href="author-single.html"><img src="{{asset('frontend/images/avatar/1.jpg')}}" alt="">  <span>By Jane Taylor</span></a></div>
                                    <div class="grid-post-media_title">
                                        <a class="post-category-marker" href="category.html">Business</a>
                                        <h4><a href="post-single.html">First prototype flight using kinetic launch system</a></h4>
                                        <span class="video-date"><i class="far fa-clock"></i> 15 March 2022</span>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i> 67 </li>
                                            <li><i class="fal fa-eye"></i>  542 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hero grid end   -->
            <!-- section   -->
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
                                    <div id="ajax-content" class="fl-wrap">
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
                                                <div class="col-md-6">
                                                    <!--list-post-->
                                                    <div class="list-post fl-wrap">
                                                        <a class="post-category-marker" href="category.html">Science</a>
                                                        <div class="list-post-media">
                                                            <a href="post-single.html">
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="{{asset('frontend/images/all/16.jpg')}}"></div>
                                                                </div>
                                                            </a>
                                                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                        </div>
                                                        <div class="list-post-content">
                                                            <h3><a href="post-single.html">How to start Home renovation.</a></h3>
                                                            <span class="post-date"><i class="far fa-clock"></i>  05 April 2022</span>
                                                        </div>
                                                    </div>
                                                    <!--list-post end-->
                                                </div>
                                                <div class="col-md-6">
                                                    <!--list-post-->
                                                    <div class="list-post fl-wrap">
                                                        <a class="post-category-marker" href="category.html">Sports</a>
                                                        <div class="list-post-media">
                                                            <a href="post-single.html">
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="{{asset('frontend/images/all/24.jpg')}}"></div>
                                                                </div>
                                                            </a>
                                                            <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                        </div>
                                                        <div class="list-post-content">
                                                            <h3><a href="post-single.html">Warriors face season defining clash</a></h3>
                                                            <span class="post-date"><i class="far fa-clock"></i> 11 March 2022</span>
                                                        </div>
                                                    </div>
                                                    <!--list-post end-->
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
                        </div>
                        <div class="col-md-4">
                            <!-- sidebar   -->
                            <div class="sidebar-content fl-wrap fix-bar">
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <!-- content-tabs-wrap -->
                                        <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                            <div class="content-tabs fl-wrap">
                                                <ul class="tabs-menu fl-wrap no-list-style">
                                                    <li class="current"><a href="#tab-popular"> Popular News </a></li>
                                                    <li><a href="#tab-resent">Resent News</a></li>
                                                </ul>
                                            </div>
                                            <!--tabs -->
                                            <div class="tabs-container">
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="tab-popular" class="tab-content first-tab">
                                                        <div class="post-widget-container fl-wrap">
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img src="{{asset('frontend/images/all/thumbs/1.jpg')}}"  alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">How to start Home education.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 25 may 2022</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img src="{{asset('frontend/images/all/thumbs/2.jpg')}}"  alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">The secret to moving this   screening.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 13 april 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i> 6</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 1227</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img src="{{asset('frontend/images/all/thumbs/3.jpg')}}"  alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Fall ability to keep Congress on rails.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 02 December 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img src="{{asset('frontend/images/all/thumbs/4.jpg')}}"  alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Innovations that Bring Aesthetic Pleasure to All.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 30 september 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i> 44</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 684</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--tab  end-->
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="tab-resent" class="tab-content">
                                                        <div class="post-widget-container fl-wrap">
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img src="{{asset('frontend/images/all/thumbs/5.jpg')}}"  alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Magpie nesting zone sites.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 05 april 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i> 16</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 727</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img src="{{asset('frontend/images/all/thumbs/6.jpg')}}"  alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Locals help create whole new community.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 22 march 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i> 31</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 63</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                            <!-- post-widget-item -->
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="post-single.html"><img src="{{asset('frontend/images/all/thumbs/7.jpg')}}"  alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a href="post-single.html">Tennis season still to proceed.</a></h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i class="far fa-clock"></i> 06 December 2021</span></li>
                                                                        <li><span><i class="far fa-comments-alt"></i> 05</span></li>
                                                                        <li><span><i class="fal fa-eye"></i> 145</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--tab end-->
                                            </div>
                                            <!--tabs end-->
                                        </div>
                                        <!-- content-tabs-wrap end -->
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div id="weather-widget" class="ideaboxWeather" data-city="New York"></div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="widget-title">Follow Us</div>
                                    <div class="box-widget-content">
                                        <div class="social-widget">
                                            <a href="#" target="_blank" class="facebook-soc">
                                                <i class="fab fa-facebook-f"></i>
                                                <span class="soc-widget-title">Likes</span>
                                                <span class="soc-widget_counter">2640</span>
                                            </a>
                                            <a href="#" target="_blank" class="twitter-soc">
                                                <i class="fab fa-twitter"></i>
                                                <span class="soc-widget-title">Followers</span>
                                                <span class="soc-widget_counter">1456</span>
                                            </a>
                                            <a href="#" target="_blank" class="youtube-soc">
                                                <i class="fab fa-youtube"></i>
                                                <span class="soc-widget-title">Followers</span>
                                                <span class="soc-widget_counter">1456</span>
                                            </a>
                                            <a href="#" target="_blank" class="instagram-soc">
                                                <i class="fab fa-instagram"></i>
                                                <span class="soc-widget-title">Followers</span>
                                                <span class="soc-widget_counter">1456</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="widget-title">Popular Tags</div>
                                    <div class="box-widget-content">
                                        <div class="tags-widget">
                                            <a href="#">Science</a>
                                            <a href="#">Politics</a>
                                            <a href="#">Technology</a>
                                            <a href="#">Business</a>
                                            <a href="#">Sports</a>
                                            <a href="#">Food</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="widget-title">Our Last Twitts</div>
                                    <div class="box-widget-content">
                                        <div id="footer-twiit" class="fl-wrap"></div>
                                        <a href="#" target="_blank" class="btn float-btn color-btn">Read us <i class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                                <!-- box-widget -->
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="single-grid-slider slider_widget">
                                            <div class="slider_widget_title">Editor's Choice</div>
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!-- swiper-slide-->
                                                    <div class="swiper-slide">
                                                        <div class="grid-post-item     fl-wrap">
                                                            <div class="grid-post-media gpm_sing">
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="{{asset('frontend/images/all/21.jpg')}}"></div>
                                                                    <div class="overlay"></div>
                                                                </div>
                                                                <div class="grid-post-media_title">
                                                                    <a class="post-category-marker" href="category.html">Technology</a>
                                                                    <h4><a href="post-single.html">Tesla it tested hypersonic Model-C</a></h4>
                                                                    <span class="video-date"><i class="far fa-clock"></i>16 january 2022</span>
                                                                    <ul class="post-opt">
                                                                        <li><i class="far fa-comments-alt"></i> 11 </li>
                                                                        <li><i class="fal fa-eye"></i>  55 </li>
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
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="{{asset('frontend/images/all/41.jpg')}}"></div>
                                                                    <div class="overlay"></div>
                                                                </div>
                                                                <div class="grid-post-media_title">
                                                                    <a class="post-category-marker" href="category.html">Politics</a>
                                                                    <h4><a href="post-single.html">Blue Origin practices with   orbital rocket in Florida</a></h4>
                                                                    <span class="video-date"><i class="far fa-clock"></i> 05 december 2021</span>
                                                                    <ul class="post-opt">
                                                                        <li><i class="far fa-comments-alt"></i>  14 </li>
                                                                        <li><i class="fal fa-eye"></i>  134 </li>
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
                                                                <div class="bg-wrap">
                                                                    <div class="bg" data-bg="{{asset('frontend/images/all/22.jpg')}}"></div>
                                                                    <div class="overlay"></div>
                                                                </div>
                                                                <div class="grid-post-media_title">
                                                                    <a class="post-category-marker" href="category.html">Technology</a>
                                                                    <h4><a href="post-single.html">Scientific research goes to the next level</a></h4>
                                                                    <span class="video-date"><i class="far fa-clock"></i> 03 March 2022</span>
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
                                                <div class="sgs-pagination sgs_hor "></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- box-widget  end -->
                            </div>
                            <!-- sidebar  end -->
                        </div>
                    </div>
                    <div class="limit-box fl-wrap"></div>
                </div>
            </section>
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
        <footer class="fl-wrap main-footer">
            <div class="container">
                <!-- footer-widget-wrap -->
                <div class="footer-widget-wrap fl-wrap">
                    <div class="row">
                        <!-- footer-widget -->
                        <div class="col-md-4">
                            <div class="footer-widget">
                                <div class="footer-widget-content">
                                    <a href="index.html" class="footer-logo"><img src="{{asset('frontend/images/logo2.png')}}" alt=""></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                                    <div class="footer-social fl-wrap">
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget  end-->
                        <!-- footer-widget -->
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="footer-widget-title">Categories </div>
                                <div class="footer-widget-content">
                                    <div class="footer-list footer-box fl-wrap">
                                        <ul>
                                            <li> <a href="#">Politics</a></li>
                                            <li> <a href="#">Technology</a></li>
                                            <li> <a href="#">Business</a></li>
                                            <li> <a href="#">Sports</a></li>
                                            <li> <a href="#">Science</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget  end-->
                        <!-- footer-widget -->
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="footer-widget-title">Links</div>
                                <div class="footer-widget-content">
                                    <div class="footer-list footer-box fl-wrap">
                                        <ul>
                                            <li> <a href="#">Home</a></li>
                                            <li> <a href="#">About</a></li>
                                            <li> <a href="#">Contacts</a></li>
                                            <li> <a href="#">News</a></li>
                                            <li> <a href="#">Shop</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget  end-->
                        <!-- footer-widget -->
                        <div class="col-md-4">
                            <div class="footer-widget">
                                <div class="footer-widget-title">Subscribe</div>
                                <div class="footer-widget-content">
                                    <div class="subcribe-form fl-wrap">
                                        <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                        <form id="subscribe" class="fl-wrap">
                                            <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer-widget  end-->
                    </div>
                </div>
                <!-- footer-widget-wrap end-->
            </div>
            <div class="footer-bottom fl-wrap">
                <div class="container">
                    <div class="copyright"><span>&#169; Gmag 2022</span> . All rights reserved. </div>
                    <div class="to-top"> <i class="fas fa-caret-up"></i></div>
                    <div class="subfooter-nav">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
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
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/scripts.js')}}"></script>
</body>
</html>
