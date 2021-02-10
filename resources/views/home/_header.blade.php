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
                        <div class="input-append">
                            <form action="{{ route('getproduct') }}" method="post">
                                @csrf
                                @livewire('search')
                            </form>
                            @livewireScripts
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row nomargin">
            <div class="span4">
                <div class="logo">
                    <a  href="{{route('home')}}"><img style="width: 160px" src="{{asset('assets')}}/img/logo.png" alt="" /></a>
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
                                    @include('home._category')
                                <li>
                                    <a href="{{route('aboutus')}}">Hakkımızda</a>
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
                                    <li class="dropdown active">
                                        <a href="">Login / Join<i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('admin_login') }}">Login</a></li>
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
