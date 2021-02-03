<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="@yield('viewport')" />
    <meta name="description" content="@yield('descriptione')" />
    <meta name="author" content="@yield('author')" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/flexslider.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/camera.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/cslider.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" />

    <!-- Theme skin -->
    <link href="{{asset('assets')}}/color/default.css" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets')}}/ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets')}}/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets')}}/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="{{asset('assets')}}/ico/favicon.png" />

    <!-- =======================================================
      Theme Name: Eterna
      Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body>

@include('home._header')

<!-- /section featured -->
@section('content')
    @include('home._content')
@show
@include('home._footer')

</body>
</html>
