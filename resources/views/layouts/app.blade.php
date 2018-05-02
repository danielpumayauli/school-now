<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}"> -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>{{ config('app.name') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/paper-kit.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
</head>
<body class="@yield('body-class')"> 
<!-- Se debe agregar un yield en linea como clase al body --> 
        <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav mr-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ml-auto">
                        
                        


                    </ul>
                </div>
            </div>
        </nav> --> 
        <!--  -->
        
        <nav class="navbar navbar-toggleable-md fixed-top navbar-transparent nav-down" color-on-scroll="500" style="background-color:  !important">
            <div class="container">
                <div class="navbar-translate">
                    <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ url('/') }}">School Now</a>
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="" data-scroll="true" href="javascript:void(0)">Todos los cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" data-scroll="true" href="javascript:void(0)">Mis cursos</a>
                            </li>

                            <li class="nav-item dropdown dropdown-danger">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="nc-icon nc-tile-56"></i>&nbsp; 
                                                     {{ __('Salir') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li>











                            
                        @endguest


                        <!-- <li class="nav-item">
                            <a class="nav-link" href="index.html" data-scroll="true" href="javascript:void(0)">Components</a>
                        </li>
                        <li class="nav-item dropdown dropdown-danger">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Sections</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item"><a href="sections.html#headers"><i class="nc-icon nc-tile-56"></i>&nbsp; Headers</a></li>
                                <li class="dropdown-item"><a href="sections.html#features"><i class="nc-icon nc-settings"></i>&nbsp; Features</a></li>
                                <li class="dropdown-item"><a href="sections.html#blogs"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a></li>
                                <li class="dropdown-item"><a href="sections.html#teams"><i class="nc-icon nc-single-02"></i>&nbsp; Teams</a></li>
                                <li class="dropdown-item"><a href="sections.html#projects"><i class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a></li>
                                <li class="dropdown-item"><a href="sections.html#pricing"><i class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a></li>
                                <li class="dropdown-item"><a href="sections.html#testimonials"><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a></li>
                                <li class="dropdown-item"><a href="sections.html#contact-us"><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-danger">
                            <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">Examples</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item"><a href="examples/about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About Us</a></li>
                                <li class="dropdown-item"><a href="examples/add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add Product</a></li>
                                <li class="dropdown-item"><a href="examples/blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog Post</a></li>
                                <li class="dropdown-item"><a href="examples/blog-posts.html"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a></li>
                                <li class="dropdown-item"><a href="examples/contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp; Contact Us</a></li>
                                <li class="dropdown-item"><a href="examples/discover.html"><i class="nc-icon nc-world-2"></i>&nbsp; Discover</a></li>
                                <li class="dropdown-item"><a href="examples/ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp; Ecommerce</a></li>
                                <li class="dropdown-item"><a href="examples/landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp; Landing</a></li>
                                <li class="dropdown-item"><a href="examples/login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login</a></li>
                                <li class="dropdown-item"><a href="examples/product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp; Product Page</a></li>
                                <li class="dropdown-item"><a href="examples/profile.html"><i class="nc-icon nc-single-02"></i>&nbsp; Profile</a></li>
                                <li class="dropdown-item"><a href="examples/register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Register</a></li>
                                <li class="dropdown-item"><a href="examples/search-with-sidebar.html"><i class="nc-icon nc-zoom-split"></i>&nbsp; Search</a></li>
                                <li class="dropdown-item"><a href="examples/settings.html"><i class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a></li>
                                <li class="dropdown-item"><a href="examples/twitter-redesign.html"><i class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-round btn-danger" href="https://www.creative-tim.com/product/paper-kit-2-pro">
                                <i class="nc-icon nc-cart-simple"></i> Buy now
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>


        <!--  -->
        <!-- <main class="py-4"> -->
            @yield('content')
        <!-- </main> -->
</body>
    <!-- Core JS Files -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/paper-kit28b5.js?v=2.0.0') }}"></script>

    <!-- Plugin for Share buttons -->
    <!-- <script src="js/jquery.sharrre.js"></script> -->

    <!-- Switches -->
    <script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>

    <!--  Plugins for Slider -->
    <script src="{{ asset('js/nouislider.js') }}"></script>

    <!--  Photoswipe files -->
    <script src="{{ asset('js/photo_swipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('js/photo_swipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('js/photo_swipe/init-gallery.js') }}"></script>

    <!--  Plugins for Select -->
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>

    <!--  for fileupload -->
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

    <!--  Plugins for Tags -->
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>

    <!--  Plugins for DateTimePicker -->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
</html>



