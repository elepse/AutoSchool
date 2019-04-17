<!DOCTYPE html>

<html lang="ru">
<head>
    <!-- Document Settings -->

    <meta charset="utf-8"/>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <!-- Favicon -->
    <!-- TODO: ЕСЛИ БУДЕТ ВРЕМЯ сделать фавикон-->

    <!-- Page Title -->
    <title>AutoSchool</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,600,700,900,200'
          rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Custom css file -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('css/jquery.fullPage.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('css/default-skin/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script
            src="https://code.jquery.com/jquery-3.4.0.js"
            integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
            crossorigin="anonymous"></script>
</head>
<body>

<!-- Container -->
<main class="container">

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay transition">
        <div class="mobile-menu">
            <i class="fa fa-times fa-2x"></i>
        </div>
        <ul class="mobile-menu-content">
            <li class="mobile-menu-item">
                <a href="{{route('mainPage')}}">Главная</a>
            </li>
            <li class="mobile-menu-item">
                <a href="{{route('news')}}">Новости</a>
            </li>
            <li class="mobile-menu-item">
                <a href="#">Галлерея</a>
            </li>
            <li class="mobile-menu-item">
                <a href="about.html">О нас</a>
            </li>
            <li class="mobile-menu-item">
                <a href="contact.html">Контакты</a>
            </li>
        </ul>
    </div>
    <!-- /Mobile Menu -->

    <!-- Header -->
    <header id="header" class="transition header fixed">
        @yield('paralax')
        <div class="main-menu">
            <div id="logo">
                <a href="index-1.html">
                    <img src="assets/images/logo.png" alt="alex-zane-logo">
                </a>
            </div>
            <!-- Menu -->
            <nav id="menu" class="col-md-10 col-sm-10">
                <ul class="hidden-xs">
                    <li>
                        <a class="menu-active" href="{{route('mainPage')}}">Главная</a>
                    </li>
                    <li>
                        <a href="{{route('news')}}">Новости</a>
                    </li>
                    <li>
                        <a href="#">Галлерея</a>
                    </li>
                    <li>
                        <a href="about.html">О нас</a>
                    </li>
                    <li>
                        <a href="contact.html">Контакты</a>
                    </li>
                </ul>
                <div class="mobile-menu col-xs-2 pull-right visible-xs">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
            </nav>
            <!-- /Menu -->

        </div>
        @yield('border')
    </header>
    @yield('content')
</main>
<!-- /Container -->

<!-- JS -->

<!-- jquery-1.11.3.min js -->
<script type="text/javascript" src="{{asset('js/jquery-1.11.3.min.js')}}"></script>

<!-- Plugins -->
<script type="text/javascript" src="{{asset('js/jquery.fullPage.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/imagesloaded.min.js')}}"></script>
<script type="text/javascript" src=" {{asset('js/masonry.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/website-smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/photoswipe.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/photoswipe-ui-default.min.js')}}"></script>
<!-- Main js -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
