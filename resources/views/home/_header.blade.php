@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
<!-- start header -->
<header>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="navigation">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row nomargin">
            <div class="span4">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="span8">
                <div class="navbar navbar-static-top">
                    <div class="navigation">
                        <nav>
                            <ul class="nav topnav">
                                <li class="dropdown">
                                    <a href="{{route('home')}}"><i class="icon-home"></i> Home <i></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Features <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="components.html">Components</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="icon-variations.html">Icon variations</a></li>
                                        <li class="dropdown"><a href="#">3rd menus<i class="icon-angle-right"></i></a>
                                            <ul class="dropdown-menu sub-menu-level1">
                                                <li><a href="index.html">Sub menu</a></li>
                                                <li><a href="index.html">Sub menu</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('aboutus')}}">Hakkımızda</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('references')}}">Referanslarımız</a>
                                </li>
                                <li>
                                    <a href="{{ route('faq')}}">S.S.S.</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">İletişim </a>
                                </li>
                                @auth
                                <li class="dropdown active">
                                    <a>{{ Auth::user()->name }}</a>
                                    <ul class="dropdown-menu">
                                        @include('home.usermenu')
                                    </ul>
                                </li>
                                @endauth
                                @guest
                                    <li class="dropdown active"><a href="">Login / Join<i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </nav>
                    </div>
                    <!-- end navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
