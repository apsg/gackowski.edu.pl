<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Szymon Gackowski')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Szymon Gackowski - web developer"/>
    <meta name="keywords" content="web, developer, cv, portfolio, php, vue, js"/>
    <meta name="author" content="Szymon Gackowski"/>

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!--
        Load CSS
    -->
    {{--    <link rel="stylesheet" href="css/theme/basic.css"/>--}}
    {{--    <link rel="stylesheet" href="css/theme/layout.css"/>--}}
    {{--    <link rel="stylesheet" href="css/theme/blogs.css"/>--}}
    <link rel="stylesheet" href="css/theme/ionicons.css"/>
    <link rel="stylesheet" href="css/theme/magnific-popup.css"/>
    <link rel="stylesheet" href="css/theme/animate.css"/>
    <link rel="stylesheet" href="css/theme/owl.carousel.css"/>

    <link rel="stylesheet" href="{{ @asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/app.css') }}">

<!--
		Background Gradient
	-->
    <link rel="stylesheet" href="css/theme/gradient.css"/>

    <!--
        Template New-Skin
    -->
    <link rel="stylesheet" href="css/theme/new-skin/new-skin.css"/>

    <!--
        Template RTL
    -->
    <!--<link rel="stylesheet" href="css/theme/rtl.css" />-->

    <!--
        Template Colors
    -->
    <link rel="stylesheet" href="css/theme/demos/demo-1-colors.css"/>
    <!--<link rel="stylesheet" href="css/theme/template-colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/theme/template-colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/theme/template-colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/theme/template-colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/theme/template-colors/red.css" />-->

    <!--
        Template Dark
    -->
    <!--<link rel="stylesheet" href="css/theme/template-dark/dark.css" />-->


    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--
        Favicons
    -->
    <link rel="shortcut icon" href="images/favicons/favicon.ico">

</head>

<body>
<div class="page new-skin" id="app">

    <!-- preloader -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- background -->
    <div class="background gradient">
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!--
        Container
    -->
    <div class="container opened align-items-start" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

        <!--
            Header
        -->
        <header class="header">

            <!-- header profile -->
            <div class="profile">
                <div class="title">Szymon Gackowski</div>
                <div class="subtitle subtitle-typed">
                    <div class="typing-title">
                        <p>Web Developer</p>
                        <p>Full-stack developer</p>
                        <p>Web Engineer</p>
                        <p>Scientist</p>
                        <p>Photographer</p>
                    </div>
                </div>
            </div>

            <!-- menu btn -->
            <!--<a href="#" class="menu-btn"><span></span></a>-->

            <!-- menu -->
            <div class="top-menu">
                <ul>
                    <li class="active">
                        <a href="#about-card">
                            <span class="icon ion-person"></span>
                            <span class="link">About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#resume-card">
                            <span class="icon ion-android-list"></span>
                            <span class="link">Resume</span>
                        </a>
                    </li>
                    <li>
                        <a href="#works-card">
                            <span class="icon ion-paintbrush"></span>
                            <span class="link">Works</span>
                        </a>
                    </li>
                    <li>
                        <a href="#blog-card">
                            <span class="icon ion-chatbox-working"></span>
                            <span class="link">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contacts-card">
                            <span class="icon ion-at"></span>
                            <span class="link">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

        </header>

        <!--
            Card - Started
        -->
        <div class="card-started" id="home-card">

            <!--
                Profile
            -->
            <div class="profile no-photo">

                <!-- profile image -->
                <div class="slide" style="background-image: url(images/profile.jpg);"></div>

                <!-- profile titles -->
                <div class="title">Szymon Gackowski</div>
                <!--<div class="subtitle">Web Designer</div>-->
                <div class="subtitle subtitle-typed">
                    <div class="typing-title">
                        <p>Web Developer</p>
                        <p>Full-stack developer</p>
                        <p>Web Engineer</p>
                        <p>Scientist</p>
                        <p>Photographer</p>
                    </div>
                </div>

                <!-- profile socials -->
                <div class="social">
                    <a target="_blank" href="https://github.com/user/apsg">
                        <span class="fa fa-github"></span>
                    </a>
                    <a target="_blank" href="https://stackoverflow.com/users/177167/gacek">
                        <span class="fa fa-stack-overflow"></span>
                    </a>
                    <a target="_blank" href="https://profile.codersrank.io/user/apsg">
                        <span class="fa fa-codersrank"></span>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/szymon-gackowski-3a65a51a5/">
                        <span class="fa fa-linkedin"></span>
                    </a>
                    <a target="_blank" href="https://www.deviantart.com/gacek">
                        <span class="fa fa-deviantart"></span>
                    </a>
                </div>

                <!-- profile buttons -->
                <div class="lnks">
                    <a href="#" class="lnk">
                        <span class="text">Download CV</span>
                        <span class="ion ion-archive"></span>
                    </a>
                    <a href="#" class="lnk discover">
                        <span class="text">Contact Me</span>
                        <span class="arrow"></span>
                    </a>
                </div>

            </div>

        </div>

        <!--
            Card - About
        -->
        @include('layouts/sections/about')

        <!--
            Card - Resume
        -->
        @include('layouts/sections/resume')

        <!--
            Card - Works
        -->
        @include('layouts/sections/works')

        <!--
            Card - Blog
        -->
        @include('layouts/sections/blog')

        <!--
            Card - Contacts
        -->
        @include('layouts/sections/contact')

    </div>

    <div class="s_overlay"></div>
    <div class="content-sidebar">
        <div class="sidebar-wrap search-form">
            <aside id="secondary" class="widget-area">
                <section id="search-2" class="widget widget_search">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </section>
                <section class="widget widget_recent_entries">
                    <h2 class="widget-title">
                        <span class="widget-title-span"><span class="first-word">Recent</span> Posts</span>
                    </h2>
                    <ul>
                        <li>
                            <a href="#">Creativity Is More Than</a>
                        </li>
                        <li>
                            <a href="#">Designing the perfect</a>
                        </li>
                        <li>
                            <a href="#">Music Player Design</a>
                        </li>
                        <li>
                            <a href="#">A Song And Dance Act</a>
                        </li>
                        <li>
                            <a href="#">By spite about do of allow</a>
                        </li>
                    </ul>
                </section>
                <section class="widget widget_recent_comments">
                    <h2 class="widget-title">
                        <span class="widget-title-span"><span class="first-word">Recent</span> Comments</span>
                    </h2>
                    <ul>
                        <li class="recentcomments">
                            <span class="comment-author-link">JOHN SMITH</span> on <a href="#">Creativity Is More
                                Than</a>
                        </li>
                        <li class="recentcomments">
                            <span class="comment-author-link">ADAM SMITH</span> on <a href="#">Creativity Is More
                                Than</a>
                        </li>
                        <li class="recentcomments">
                            <span class="comment-author-link">admin</span> on <a href="#">Designing the perfect</a>
                        </li>
                        <li class="recentcomments">
                            <span class="comment-author-link">admin</span> on <a href=#">Designing the perfect</a>
                        </li>
                        <li class="recentcomments">
                            <span class="comment-author-link">James</span> on <a href="#">Designing the perfect</a>
                        </li>
                    </ul>
                </section>
                <section class="widget widget_archive">
                    <h2 class="widget-title">
							<span class="widget-title-span">
								<span class="first-letter">Archives</span>
							</span>
                    </h2>
                    <ul>
                        <li>
                            <a href="#">November 2018</a>
                        </li>
                    </ul>
                </section>
                <section class="widget widget_categories">
                    <h2 class="widget-title">
                        <span class="widget-title-span"><span class="first-letter">Categories</span></span>
                    </h2>
                    <ul>
                        <li class="cat-item cat-item-2">
                            <a href="#">Design</a>
                        </li>
                        <li class="cat-item cat-item-3">
                            <a href="#">Music</a>
                        </li>
                    </ul>
                </section>
                <section class="widget widget_meta">
                    <h2 class="widget-title">
                        <span class="widget-title-span"><span class="first-letter">Meta</span></span>
                    </h2>
                    <ul>
                        <li><a href="#">Log in</a></li>
                        <li><a href="#">Entries feed</a></li>
                        <li><a href="#">Comments feed</a></li>
                        <li><a href="#">WordPress.org</a></li>
                    </ul>
                </section>
            </aside>
        </div>
        <span class="close"></span>
    </div>

</div>

<!--
    jQuery Scripts
-->

<script src="{{ @asset('js/app.js') }}"></script>
{{--	<script src="js/jquery.min.js"></script>--}}
<script src="js/theme/jquery.validate.js"></script>
<script src="js/theme/jquery.magnific-popup.js"></script>
<script src="js/theme/imagesloaded.pkgd.js"></script>
<script src="js/theme/isotope.pkgd.js"></script>
<script src="js/theme/jquery.slimscroll.js"></script>
<script src="js/theme/owl.carousel.js"></script>
<script src="js/theme/typed.js"></script>
<script src="https://use.fontawesome.com/8da76d029b.js"></script>

<!--
    Google map api
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>

<!--
    Main Scripts
-->
<script src="js/theme/scripts.js"></script>

</body>
</html>
