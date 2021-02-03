<footer>
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Hızlı Ulaşım</h5>
                    <ul class="link-list">
                        <li><a href="#">Our company</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Press release</a></li>
                        <li><a href="#">What we have done</a></li>
                        <li><a href="#">Our support forum</a></li>
                    </ul>

                </div>
            </div>
            <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Bize Ulaşın</h5>
                    <address>
                        <strong>MMG Yazılım</strong><br>
                        {{$setting->adress}}
                    </address>
                    <p>
                        <i class="icon-phone"></i> {{$setting->fax}} <br>
                        <i class="icon-envelope-alt"></i> {{$setting->email}}
                    </p>
                </div>
            </div>
            <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Sosyal Medya</h5>
                    <p>
                        Bizi Takip Edin...
                    </p>
                    <form class="subscribe">
                        <div>
                                <a href="{{$setting->facebook}}" data-placement="bottom" title="" data-original-title="Facebook"><i class="icon-facebook icon-white"></i></a>
                                <a href="{{$setting->twitter}}" data-placement="bottom" title="" data-original-title="Twitter"><i class="icon-twitter icon-white"></i></a>
                                <a href="{{$setting->instagram}}" data-placement="bottom" title="" data-original-title="Instagram"><i class="icon-linkedin icon-white"></i></a>
                                <a href="#" data-placement="bottom" title="" data-original-title="Pinterest"><i class="icon-pinterest  icon-white"></i></a>
                                <a href="#" data-placement="bottom" title="" data-original-title="Google +"><i class="icon-google-plus icon-white"></i></a>
                                <a href="#" data-placement="bottom" title="" data-original-title="Dribbble"><i class="icon-dribbble icon-white"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="copyright">
                        <p><span>&copy; MMG company. Bizim tasarım</span></p>
                    </div>

                </div>

                <div class="span6">
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                        -->
                        Designed by <a href="#">MMG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

<!-- javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('assets')}}/js/jquery.js"></script>
<script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.js"></script>

<script src="{{asset('assets')}}/js/modernizr.custom.js"></script>
<script src="{{asset('assets')}}/js/toucheffects.js"></script>
<script src="{{asset('assets')}}/js/google-code-prettify/prettify.js"></script>
<script src="{{asset('assets')}}/js/jquery.bxslider.min.js"></script>
<!-- parallax slider -->
<script src="{{asset('assets')}}/js/modernizr.custom.js"></script>
<script src="{{asset('assets')}}/js/jquery.cslider.js"></script>

<script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
<script src="{{asset('assets')}}/js/portfolio/jquery.quicksand.js"></script>
<script src="{{asset('assets')}}/js/portfolio/setting.js"></script>

<script src="{{asset('assets')}}/js/jquery.flexslider.js"></script>
<script src="{{asset('assets')}}/js/animate.js"></script>
<script src="{{asset('assets')}}/js/inview.js"></script>
<script>
    $(function() {
        $('#da-slider').cslider();
    });
</script>

<!-- Template Custom JavaScript File -->
<script src="{{asset('assets')}}/js/custom.js"></script>
