<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="author" content="Mosaddek" />
        <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina" />
        <meta name="description" content="" />
        {{-- <link rel="shortcut icon" href="javascript:;" type="image/png"> --}}

        <title>SlickLab - Responsive Admin Dashboard Template</title>

        <!--easy pie chart-->
        <link href="{{ asset('js/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />

        <!--vector maps -->
        <link rel="stylesheet" href="{{ asset('js/vector-map/jquery-jvectormap-1.1.1.css') }}">

        <!--right slidebar-->
        <link href="{{ asset('css/slidebars.css') }}" rel="stylesheet">

        <!--switchery-->
        <link href="{{ asset('js/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />

        <!--jquery-ui-->
        <link href="{{ asset('js/jquery-ui/jquery-ui-1.10.1.custom.min.css') }}" rel="stylesheet" />

        <!--iCheck-->
        <link href="{{ asset('js/icheck/skins/all.css') }}" rel="stylesheet">

        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">


        <!--common style-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">


            <!--Data Table-->
        <link href="{{ asset('js/data-table/css/jquery.dataTables.css') }}" rel="stylesheet">
        <link href="{{ asset('js/data-table/css/dataTables.tableTools.css') }}" rel="stylesheet">
        <link href="{{ asset('js/data-table/css/dataTables.colVis.min.css') }}" rel="stylesheet">
        <link href="{{ asset('js/data-table/css/dataTables.responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('js/data-table/css/dataTables.scroller.css') }}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="sticky-header">
        <section>
            @include('admin.sidebar')
            @include('admin.header')
            @yield('content')
        </section>    
            @include('admin.footer')
        @stack('scripts')
 
     </body>
 </html>
 
 
 
 
 

    