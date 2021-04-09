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
    <link rel="stylesheet" href="{{ @asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ @asset('css/app.css') }}">

    <link rel="stylesheet" href="/css/theme/gradient.css"/>
    <link rel="stylesheet" href="/css/theme/new-skin/new-skin.css"/>
    <link rel="stylesheet" href="/css/theme/demos/demo-1-colors.css"/>

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--
        Favicons
    -->
    <link rel="shortcut icon" href="/images/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/72x72.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/120x120.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/180x180.png">
    <link rel="icon" type="image/png" href="/images/favicons/32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicons/192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/images/favicons/96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/images/favicons/16x16.png" sizes="16x16">
</head>

<body>
<div class="page new-skin" id="app">

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
                <div class="subtitle subtitle-typed" id="typed">
                    <div class="typing-title" id="typed-strings">
                        <p>Web Developer</p>
                        <p>Full-stack developer</p>
                        <p>Web Engineer</p>
                        <p>Scientist</p>
                        <p>Photographer</p>
                    </div>
                </div>
            </div>

            <!-- menu btn -->
            <div class="p-1 text-center d-none d-md-block bg-white rounded mb-2">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo_400.png') }}" width="60" height="60"/>
                </a>
            </div>

            <!-- menu -->
            <div class="top-menu">
                <ul>
                    <li>
                        <router-link to="/" exact>
                            <span class="icon ion-person"></span>
                            <span class="link">About</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="resume">
                            <span class="icon ion-android-list"></span>
                            <span class="link">Resume</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/works">
                            <span class="icon ion-paintbrush"></span>
                            <span class="link">Works</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/blog">
                            <span class="icon ion-chatbox-working"></span>
                            <span class="link">Blog</span>
                        </router-link>
                    </li>
                    <li>
                        <router-link to="/contact">
                            <span class="icon ion-at"></span>
                            <span class="link">Contact</span>
                        </router-link>
                    </li>
                </ul>
            </div>
        </header>

        <div class="card-started mb-2"
             v-bind:class="{
                'd-none' : !isAbout,
                'd-sm-none': !isAbout,
                'd-md-none' : !isAbout,
                'd-lg-block' : !isAbout
             }"
             id="home-card">
            @include('layouts.sections.profile')
        </div>

        <div>
            <router-view></router-view>
            @yield('content')
        </div>
    </div>

    <modal ref="modal"></modal>
</div>

<script src="{{ @asset('/js/app.js') }}"></script>

@stack('scripts')

</body>
</html>
