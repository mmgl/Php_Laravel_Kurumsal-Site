<section>
<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2014 - Alvarez.is
        <a href="index.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('assets')}}/admin/js/jquery.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery-1.8.3.min.js"></script>
<script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="{{asset('assets')}}/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('assets')}}/admin/js/jquery.sparkline.js"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<!--common script for all pages-->
<script src="{{asset('assets')}}/admin/js/common-scripts.js"></script>

<script type="text/javascript" src="{{asset('assets')}}/admin/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/admin/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="{{asset('assets')}}/admin/js/sparkline-chart.js"></script>
<script src="{{asset('assets')}}/admin/js/zabuto_calendar.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
