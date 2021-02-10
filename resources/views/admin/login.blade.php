<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kullanıcı Girişi</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets')}}/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">
        <form class="form-login" action="{{route('admin_logincheck')}}" method="post">
            @csrf
            <div class="message">@include('home.message')</div>
            <h2 class="form-login-heading">Kullanıcı Girişi</h2>
            <div class="login-wrap">
                <input id="email" type="email" class="form-control" placeholder="Email"  name="email" autofocus>
                <br>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Şifremi Unuttum?</a>

		                </span>
                </label>
                <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> GİRİŞ</button>
                <hr>

                <div class="login-social-link centered">
                    <a class="" href="#">
                        Hesap Oluştur
                    </a>
                </div>

            </div>
        </form>
        <form>
            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

        </form>

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('assets')}}/admin/js/jquery.js"></script>
<script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="{{asset('assets')}}/admin/js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("{{asset('assets')}}/admin/img/login-bg.jpg", {speed: 500});
</script>


</body>
</html>
