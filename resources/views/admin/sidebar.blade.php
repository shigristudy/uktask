<div class="sidebar-left">
        <!--responsive view logo start-->
        <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
            <a href="index.html">
                <img src="img/logo-icon.png" alt="">
                <!--<i class="fa fa-maxcdn"></i>-->
                <span class="brand-name">SlickLab</span>
            </a>
        </div>
        <!--responsive view logo end-->

        <div class="sidebar-left-info">
            <!-- visible small devices start-->
            <div class=" search-field">  </div>
            <!-- visible small devices end-->

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked side-navigation">
                <li>
                    <h3 class="navigation-title">Navigation</h3>
                </li>
                <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li class="active"><a href="{{ route('admin.allorders') }}"><i class="fa fa-home"></i> <span>Orders</span></a></li>
               

            </ul>
            <!--sidebar nav end-->


        </div>
    </div>