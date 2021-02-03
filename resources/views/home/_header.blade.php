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
                                <li class="dropdown active">
                                    <a href="index.html"><i class="icon-home"></i> Home <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-alt2.html">Homepage 2</a></li>
                                        <li><a href="index-alt3.html">Homepage 3</a></li>
                                        <li><a href="index-alt4.html">Parallax slider</a></li>
                                        <li><a href="index-landingpage.html">Landing page</a></li>
                                    </ul>
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
                                    <a href="{{ route('contact') }}">İletişim </a>
                                </li>
                                @auth
                                <li class="dropdown">
                                    {{ Auth::user()->name }}
                                    <ul class="dropdown-menu">
                                        <li>@include('home.usermenu')</li>
                                    </ul>
                                </li>
                                @endauth
                                @guest
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="margin-left: 10px;" class="fas fa-user"></i><b> Login / Join </b><i class="fas fa-sort-down"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('login') }}" style="margin-right: 20px;"><b>Login</b></a>
                                            <a class="dropdown-item" href="{{ route('register') }}" style="margin-right: 20px;"><b>Register</b></a>
                                        </div>
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
