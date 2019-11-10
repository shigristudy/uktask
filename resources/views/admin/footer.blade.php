<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>

<!--jquery-ui-->
<script src="{{ asset('js/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/jquery-migrate.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/modernizr.min.js') }}"></script>

<!--Nice Scroll-->
<script src="{{ asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>

<!--right slidebar-->
<script src="{{ asset('js/slidebars.min.js') }}"></script>

<!--switchery-->
<script src="{{ asset('js/switchery/switchery.min.js') }}"></script>
<script src="{{ asset('js/switchery/switchery-init.js') }}"></script>

<!--flot chart -->
<script src="{{ asset('js/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ asset('js/flot-chart/flot-spline.js') }}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.crosshair.js') }}"></script>


<!--earning chart init-->
<script src="{{ asset('js/earning-chart-init.js') }}"></script>


<!--Sparkline Chart-->
<script src="{{ asset('js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('js/sparkline/sparkline-init.js') }}"></script>

<!--easy pie chart-->
<script src="{{ asset('js/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('js/easy-pie-chart.js') }}"></script>


<!--vectormap-->
<script src="{{ asset('js/vector-map/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('js/vector-map/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('js/dashboard-vmap-init.js') }}"></script>

<!--Icheck-->
<script src="{{ asset('js/icheck/skins/icheck.min.js') }}"></script>
<script src="{{ asset('js/todo-init.js') }}"></script>

<!--jquery countTo-->
<script src="{{ asset('js/jquery-countTo/jquery.countTo.js') }}"  type="text/javascript"></script>

<!--owl carousel-->
<script src="{{ asset('js/owl.carousel.js') }}"></script>



<!--common scripts for all pages-->

<script src="{{ asset('js/scripts.js') }}"></script>


<script type="text/javascript">

    $(document).ready(function() {

        //countTo

        $('.timer').countTo();

        //owl carousel

        $("#news-feed").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true
        });
    });

    // $(window).on("resize",function(){
    //     var owl = $("#news-feed").data("owlCarousel");
    //     owl.reinit();
    // });

</script>