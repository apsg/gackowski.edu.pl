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

    <link rel="stylesheet" href="/css/theme/ionicons.css"/>
    <link rel="stylesheet" href="/css/theme/magnific-popup.css"/>
    <link rel="stylesheet" href="/css/theme/animate.css"/>
    <link rel="stylesheet" href="/css/theme/owl.carousel.css"/>

    <link rel="stylesheet" href="{{ @asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/app.css') }}">

<!--
		Background Gradient
	-->
    <link rel="stylesheet" href="/css/theme/gradient.css"/>

    <!--
        Template New-Skin
    -->
    <link rel="stylesheet" href="/css/theme/new-skin/new-skin.css"/>

    <!--
        Template RTL
    -->
    <!--<link rel="stylesheet" href="/css/theme/rtl.css" />-->

    <!--
        Template Colors
    -->
    <link rel="stylesheet" href="/css/theme/demos/demo-1-colors.css"/>
    <!--<link rel="stylesheet" href="/css/theme/template-colors/blue.css" />-->
    <!--<link rel="stylesheet" href="/css/theme/template-colors/orange.css" />-->
    <!--<link rel="stylesheet" href="/css/theme/template-colors/pink.css" />-->
    <!--<link rel="stylesheet" href="/css/theme/template-colors/purple.css" />-->
    <!--<link rel="stylesheet" href="/css/theme/template-colors/red.css" />-->

    <!--
        Template Dark
    -->
    <!--<link rel="stylesheet" href="/css/theme/template-dark/dark.css" />-->


    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--
        Favicons
    -->
    <link rel="shortcut icon" href="/images/favicons/favicon.ico">

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
                        <a href="#contact-card">
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
                <div class="slide" style="background-image: url('/images/profile.jpg');"></div>

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
                        <img src="/images/codersrank.png" />
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
                    <a href="{{ url('/contact') }}" class="lnk discover">
                        <span class="text">Contact Me</span>
                        <span class="arrow"></span>
                    </a>
                </div>

            </div>

        </div>

        @yield('content')

    </div>

</div>

<!--
    jQuery Scripts
-->

<script src="{{ @asset('/js/app.js') }}"></script>
<script src="/js/theme/jquery.validate.js"></script>
<script src="/js/theme/jquery.magnific-popup.js"></script>
<script src="/js/theme/imagesloaded.pkgd.js"></script>
<script src="/js/theme/isotope.pkgd.js"></script>
<script src="/js/theme/jquery.slimscroll.js"></script>
<script src="/js/theme/owl.carousel.js"></script>
<script src="/js/theme/typed.js"></script>
{{--<script src="https://use.fontawesome.com/8da76d029b.js"></script>--}}

<!--
    Main Scripts
-->
<script src="/js/theme/scripts.js"></script>

@stack('scripts')

</body>
</html>
