@extends('admin.layout')
@section('content')
<div class="body-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--logo and logo icon start-->
            <div class="logo dark-logo-bg hidden-xs hidden-sm">
                <a href="index.html">
                    <img src="img/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">SlickLab</span>
                </a>
            </div>

            <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                <a href="index.html">
                    <img src="img/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                </a>
            </div>
            <!--logo and logo icon end-->

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
            <!--toggle button end-->

            <!--mega menu start-->
            <div id="navbar-collapse-1" class="navbar-collapse collapse yamm mega-menu">
                <ul class="nav navbar-nav">
                    <!-- Classic list -->
                    <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Mega <b
                            class=" fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu wide-full">
                            <li>
                                <!-- Content container to add padding -->
                                <div class="yamm-content">
                                    <div class="row">
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="title">Standard</p>
                                            </li>
                                            <li><a href="javascript:;"> Slick Mega Navigation </a>
                                            </li>
                                            <li><a href="javascript:;"> Built in BS3+</a>
                                            </li>
                                            <li><a href="javascript:;"> Full Customizable </a>
                                            </li>
                                            <li><a href="javascript:;"> Huge Components </a>
                                            </li>
                                            <li><a href="javascript:;"> Tons of widgets </a>
                                            </li>
                                            <li><a href="javascript:;"> Fontawesome </a>
                                            </li>
                                        </ul>
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="title">Description</p>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="d-title">2015 Mordern Design</span>
                                                    <span class="d-desk">Description goes here</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="d-title">Amaging Dashboard</span>
                                                    <span class="d-desk">Build with BS3</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="d-title">3500+ Satisfied Client</span>
                                                    <span class="d-desk">Max 5 star rating</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="d-title">Easy to Cutomize</span>
                                                    <span class="d-desk">Very easy to use</span>
                                                </a>
                                            </li>

                                        </ul>
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="title">Iconic</p>
                                            </li>
                                            <li><a href="javascript:;"><i class="fa fa-anchor text-muted"></i> Anchor Icon </a>
                                            </li>
                                            <li><a href="javascript:;"><i class="fa fa-desktop text-muted"></i> Desktop Icon </a>
                                            </li>
                                            <li><a href="javascript:;"><i class="fa fa-laptop text-muted"></i> Laptop Icon</a>
                                            </li>
                                            <li><a href="javascript:;"><i class="fa fa-automobile text-muted"></i> Automobile Icon </a>
                                            </li>
                                            <li><a href="javascript:;"><i class="fa fa-briefcase text-muted"></i> Briefcase Icon</a>
                                            </li>
                                        </ul>
                                        <ul class="col-sm-3 list-unstyled">
                                            <li>
                                                <p class="title">Image + Description</p>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <img class="icon-img" src="img/mega-menu/mega_icon1.png" alt="" />
                                                            <span class="icon-desk">
                                                                                    <span class="d-title">Full Flat Concept</span>
                                                            <span class="d-desk">Description goes here</span>
                                                            </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <img class="icon-img" src="img/mega-menu/mega_icon2.png" alt="" />
                                                            <span class="icon-desk">
                                                                                    <span class="d-title">Amaging Dashboard</span>
                                                            <span class="d-desk">Build with BS3</span>
                                                            </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <img class="icon-img" src="img/mega-menu/mega_icon3.png" alt="" />
                                                            <span class="icon-desk">
                                                                                    <span class="d-title">3500+ Satisfied Client</span>
                                                            <span class="d-desk">Max 5 star rating</span>
                                                            </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <img class="icon-img" src="img/mega-menu/mega_icon4.png" alt="" />
                                                            <span class="icon-desk">
                                                                                    <span class="d-title">Easy to Cutomize</span>
                                                            <span class="d-desk">Very easy to use</span>
                                                            </span>
                                                </a>
                                            </li>

                                        </ul>
                                        <ul class="col-sm-3 list-unstyled custom-nav-img">
                                            <li>
                                                <p class="title">Custom</p>
                                            </li>
                                            <li>

                                                <p class="desk">Ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Asperiores aut, autem commodi cumque illum pariatur
                                                    vero. Ad adipisci animi delectus</p>
                                            </li>
                                            <li><span class="mega-bg"></span></li>
                                        </ul>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- Classic dropdown -->
                    <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"> English  <b
                            class=" fa fa-angle-down"></b></a>
                        <ul role="menu" class="dropdown-menu language-switch">
                            <li>
                                <a tabindex="-1" href="javascript:;"><span> German </span><img src="img/flags/germany_flag.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a tabindex="-1" href="javascript:;"><span> Italian </span> <img src="img/flags/italy_flag.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a tabindex="-1" href="javascript:;"><span> French </span> <img src="img/flags/french_flag.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a tabindex="-1" href="javascript:;"><span> Spanish </span> <img src="img/flags/spain_flag.jpg" alt=""/></a>
                            </li>
                            <li>
                                <a tabindex="-1" href="javascript:;"><span> Russian </span> <img src="img/flags/russia_flag.jpg" alt=""/></a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--mega menu end-->
            <div class="notification-wrap">
            <!--left notification start-->
            <div class="left-notification">
            <ul class="notification-menu">
            <!--mail info start-->
            <li class="d-none">
                <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-primary">6</span>
                </a>

                <div class="dropdown-menu dropdown-title">
                    <div class="title-row">
                        <h5 class="title purple">
                            You have 6 Unread Mail
                        </h5>
                        <a href="javascript:;" class="btn-primary btn-view-all">View all</a>
                    </div>
                    <div class="notification-list mail-list">
                        <a href="javascript:;" class="single-mail">
                            <span class="icon bg-primary">
                                S
                            </span>
                            <strong>Smith Doe</strong>
                            <small> Just Now</small>
                            <p>
                                <small>Hello smith i have some query about your</small>
                            </p>
                            <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-circle"></i>
                            </span>
                        </a>
                        <a href="javascript:;" class="single-mail">
                            <span class="icon bg-success">
                                A
                            </span>
                            <strong>Anthony Jones </strong>
                            <small> 30 Mins Ago</small>
                            <p>
                                <small>Hello this is an example message</small>
                            </p>
                            <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-circle"></i>
                            </span>
                        </a>
                        <a href="javascript:;" class="single-mail">
                            <span class="icon bg-warning">
                                B
                            </span> Billy Jones
                            <small> 2 Days Ago</small>
                            <p>
                                <small>Slicklab is awesome Dashboard</small>
                            </p>
                            <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-circle-o"></i>
                            </span>
                        </a>
                        <a href="javascript:;" class="single-mail">
                            <span class="icon bg-dark">
                                J
                            </span> John Doe
                            <small> 1 Week Ago</small>
                            <p>
                                <small>Build with Twitter Bootstrap 3</small>
                            </p>
                            <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-circle-o"></i>
                            </span>
                        </a>
                        <a href="javascript:;" class="single-mail">
                            <span class="icon bg-danger">
                                S
                            </span> Smith Doe
                            <small> Just Now</small>
                            <p>
                                <small>No hassle, very easy to use</small>
                            </p>
                            <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-circle-o"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </li>
            <!--mail info end-->

            <!--task info start-->
            <li class="d-none">
                <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                    <i class="fa fa-tasks"></i>
                    <span class="badge bg-success">9</span>
                </a>

                <div class="dropdown-menu dropdown-title">
                    <div class="title-row">
                        <h5 class="title green">
                            You have 9 task
                        </h5>
                        <a href="javascript:;" class="btn-success btn-view-all">View all</a>
                    </div>
                    <div class="notification-list task-list">
                        <a href="javascript:;">
                            <span class="icon ">
                                <i class="fa fa-paw green-color"></i>
                            </span>
                            <span class="task-info">
                            Smith Doe
                            <small> Assigned new task 10 min ago</small>
                                </span>
                        </a>
                        <a href="javascript:;">
                            <span class="icon ">
                                <i class="fa fa-line-chart blue-color"></i>
                            </span>
                            <span class="task-info">Anthony Jones
                            <small> Done 60% of his task</small>

                            <div class="progress progress-striped">
                                <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66"
                                     role="progressbar" class="progress-bar progress-bar-info"></div>
                            </div>

                            </span>
                        </a>
                        <a href="javascript:;">
                            <span class="icon ">
                                <i class="fa fa-heart purple-color"></i>
                            </span>
                            <span class="task-info">Tawseef
                            <small> Like your task 10 min ago</small>
                                </span>

                        </a>
                        <a href="javascript:;">
                            <span class="icon ">
                                <i class="fa fa-check green-color"></i>
                            </span>
                            <span class="task-info">Anjelina Gomez
                            <small>completed his task Yesterday</small>
                                </span>
                        </a>
                        <a href="javascript:;">
                            <span class="icon ">
                                <i class="fa fa-comments-o"></i>
                            </span>
                            <span class="task-info">Franklin Anderson
                            <small>commented on your task 3 Days ago</small>
                            </span>
                        </a>
                    </div>
                </div>
            </li>
            <!--task info end-->

            <!--notification info start-->
            <li>
                <a href="javascript:;" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning">4</span>
                </a>

                <div class="dropdown-menu dropdown-title ">

                    <div class="title-row">
                        <h5 class="title yellow">
                            You have 4 New Notification
                        </h5>
                        <a href="javascript:;" class="btn-warning btn-view-all">View all</a>
                    </div>
                    <div class="notification-list-scroll sidebar">
                        <div class="notification-list mail-list not-list">
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-primary">
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                <strong>New User Registration</strong>

                                <p>
                                    <small>Just Now</small>
                                </p>
                                <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-success">
                                    <i class="fa fa-comments-o"></i>
                                </span>
                                <strong> Private message Send</strong>

                                <p>
                                    <small>30 Mins Ago</small>
                                </p>
                                <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-warning">
                                    <i class="fa fa-warning"></i>
                                </span> Application Error
                                <p>
                                    <small> 2 Days Ago</small>
                                </p>
                                <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-dark">
                                   <i class="fa fa-database"></i>
                                </span> Database Overloaded 24%
                                <p>
                                    <small>1 Week Ago</small>
                                </p>
                                <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle-o"></i>
                                </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                <span class="icon bg-danger">
                                    <i class="fa fa-warning"></i>
                                </span>
                                <strong>Server Failed Notification</strong>

                                <p>
                                    <small>10 Days Ago</small>
                                </p>
                                <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
            </li>
            <!--notification info end-->
            </ul>
            </div>
            <!--left notification end-->


            <!--right notification start-->
            <div class="right-notification">
                <ul class="notification-menu">
                    <li>
                        <form class="search-content" action="index.html" method="post">
                            <input type="text" class="form-control" name="keyword" placeholder="Search...">
                        </form>
                    </li>

                    <li>
                        <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="img/avatar-mini.jpg" alt="">John Doe
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                            <li><a href="javascript:;">  Profile</a></li>
                            <li>
                                <a href="javascript:;">
                                    <span class="badge bg-danger pull-right">40%</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="label bg-info pull-right">new</span>
                                    Help
                                </a>
                            </li>
                            <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="sb-toggle-right">
                            <i class="fa fa-indent"></i>
                        </div>
                    </li>

                </ul>
            </div>
            <!--right notification end-->
            </div>

        </div>
        <!-- header section end-->

        <!-- page head start-->
        <div class="page-head">
            <h3>
                Dashboard
            </h3>
            <span class="sub-title">Welcome to SlickLab dashboard</span>
            <div class="state-information">
                <div class="state-graph">
                    <div id="balance" class="chart"></div>
                    <div class="info">Balance $ 2,317</div>
                </div>
                <div class="state-graph">
                    <div id="item-sold" class="chart"></div>
                    <div class="info">Item Sold 1230</div>
                </div>
            </div>
        </div>
        <!-- page head end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <!--state overview start-->
            <div class="row state-overview">
                <div class="col-lg-3 col-sm-6">
                    <section class="panel purple">
                        <div class="symbol">
                            <i class="fa fa-send"></i>
                        </div>
                        <div class="value white">
                            <h1 class="timer" data-from="0" data-to="320"
                                data-speed="1000">
                                <!--320-->
                            </h1>
                            <p>New Order</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel ">
                        <div class="symbol purple-color">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="value gray">
                            <h1 class="purple-color timer" data-from="0" data-to="{{ $orders }}"
                                data-speed="1000">
                                <!--123-->
                            </h1>
                            <p>Total Orders</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel green">
                        <div class="symbol ">
                            <i class="fa fa-cloud-upload"></i>
                        </div>
                        <div class="value white">
                            <h1 class="timer" data-from="0" data-to="432"
                                data-speed="1000">
                                <!--432-->
                            </h1>
                            <p>Total Paid</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol green-color">
                            <i class="fa fa-bullseye"></i>
                        </div>
                        <div class="value gray">
                            <h1 class="green-color timer" data-from="0" data-to="2345"
                                data-speed="3000">
                                <!--2345-->
                            </h1>
                            <p>Cancled</p>
                        </div>
                    </section>
                </div>
            </div>
            <!--state overview end-->

            <div class="row">
                <div class="col-md-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Earning Graph
                            <span class="tools pull-right">
                                <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">

                            <div class="earning-chart-space" id="dashboard-earning-chart"></div>

                            <div class="row earning-chart-info">
                                <div class="col-sm-3 col-xs-6">
                                    <h4>$ 12,37</h4>
                                    <small class="text-muted"> Daily Sales Report</small>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <h4>$ 86,69</h4>
                                    <small class="text-muted">Weekly Sales Report</small>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <h4>$ 25,9770</h4>
                                    <small class="text-muted">Monthly Sales Report</small>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <h4>$ 948,160,50</h4>
                                    <small class="text-muted">Yearly Sales Report</small>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="panel">

                        <div class="slick-carousal">
                            <div class="overlay-c-bg"></div>
                            <div id="news-feed" class="owl-carousel owl-theme">
                                <div class="item">
                                    <h3 class="text-success">News</h3>
                                    <span class="date">12 March 2015</span>
                                    <h1>If today were the last day of your life, would you want to do what your are about to do today</h1>
                                    <div class="text-center">
                                        <a href="javascript:;" class="view-all">View All</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <h3 class="text-success">News</h3>
                                    <span class="date">11 February 2015</span>
                                    <h1>SlickLab build with Boostrap latest version 3+. Its very easy to customize. Hope you enjoy it..</h1>
                                    <div class="text-center">
                                        <a href="javascript:;" class="view-all">View All</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <h3 class="text-success">News</h3>
                                    <span class="date">10 January 2015</span>
                                    <h1>It has huge usable widgets, amazing design, clean code quality, super responsive and quick customar support.</h1>
                                    <div class="text-center">
                                        <a href="javascript:;" class="view-all">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </section>

                    <section class="panel">
                        <div class="panel-body">
                            <!--monthly page view start-->
                            <ul class="monthly-page-view">
                                <li class="pull-left page-view-label">
                                    <span class="page-view-value timer" data-from="0" data-to="93205"
                                          data-speed="4000">
                                        <!--93,205-->
                                    </span>
                                    <span>Monthly Page views</span>
                                </li>
                                <li class="pull-right">
                                    <div id="page-view-graph" class="chart"></div>
                                </li>
                            </ul>
                            <!--monthly page view end-->
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <section class="panel" id="block-panel">
                        <header class="panel-heading head-border">
                            mobile visit
                            <span class="tools pull-right">
                                <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <ul class="mobile-visit">
                                <li class="page-view-label">
                                    <span class="page-view-value"> 5,2105</span>
                                    <span>Unique visitors</span>
                                </li>
                                <li>
                                    <div class="easy-pie-chart">
                                        <div class="iphone-visitor" data-percent="45"><span>45</span>%</div>
                                    </div>
                                    <div class="visit-title">
                                        <i class="fa fa-apple green-color"></i>
                                        <span>iPhone</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="easy-pie-chart">
                                        <div class="android-visitor" data-percent="40"><span>40</span>%</div>
                                    </div>
                                    <div class="visit-title">
                                        <i class="fa fa-android purple-color"></i>
                                        <span>Android</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="panel">
                        <div class="panel-body- weather-widget">
                            <div class="weather-state">
                                <span class="weather-icon">
                                    <i class="slicon-weather_downpour_fullmoon"></i>
                                </span>

                                <span class="weather-type">Storm</span>
                            </div>
                            <div class="weather-info">
                                <span class="degree">13</span>
                                <span class="weather-city">New York</span>
                                <div class="switch-btn">
                                    <input type="checkbox" class="js-switch-small-green " checked>
                                </div>
                                <div class="weather-chart m-t-40" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="1.5" data-line-color="#0bc2af" data-spot-color="#0bc2af" data-fill-color=""  data-highlight-line-color="#0bc2af" data-spot-radius="0" data-data="[1,5,3,6,4,7,9]"></div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <section class="panel">
                    <header class="panel-heading head-border">
                        notification
                        <span class="tools pull-right">
                            <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                        </span>
                    </header>
                    <div class="noti-information notification-menu">
                        <!--notification info start-->
                        <div class="notification-list mail-list not-list">
                            <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-primary">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                <span class="purple-color">John Doe</span> send you a mail
                                <p>
                                    <small>Just Now</small>
                                </p>
                                    <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle-o"></i>
                                    </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-success">
                                        <i class="fa fa-comments-o"></i>
                                    </span>
                                <span class="red-color">Jim Doe</span> mentioned you a post
                                <p>
                                    <small>30 Mins Ago</small>
                                </p>
                                    <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle-o"></i>
                                    </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-warning">
                                        <i class="fa fa-warning"></i>
                                    </span> Application Error
                                <p>
                                    <small> 2 Days Ago</small>
                                </p>
                                    <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle-o"></i>
                                    </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-dark">
                                       <i class="fa fa-database"></i>
                                    </span>
                                <strong>Database Overloaded 24%</strong>
                                <p>
                                    <small>1 Week Ago</small>
                                </p>
                                    <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle"></i>
                                    </span>
                            </a>
                            <a href="javascript:;" class="single-mail">
                                    <span class="icon bg-danger">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                <strong>Server Failed Notification</strong>

                                <p>
                                    <small>10 Days Ago</small>
                                </p>
                                    <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                        <i class="fa fa-circle"></i>
                                    </span>
                            </a>

                            <a href="javascript:;" class="single-mail text-center">
                                View All Notification
                            </a>

                        </div>
                        <!--notification info end-->
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="panel post-wrap pro-box team-member">
                    <aside class="bg-primary v-align">
                        <div class="panel-body text-center">
                            <div class="team-member-wrap">
                                <div class="team-member-info">
                                    <div class="action-set">
                                        <a href="javascript:;" class="tooltips" data-original-title="Profile Info" data-toggle="tooltip" data-placement="top">
                                            <i class="fa fa-reorder"></i>
                                        </a>
                                    </div>
                                    <div class="team-title">
                                        <a href="javascript:;" class="m-name">
                                            Alison Jones
                                        </a>
                                        <span class="sub-title"> Project Manager</span>
                                    </div>

                                    <div class="call-info">
                                        <a href="javascript:;">
                                            <i class="fa fa-envelope-o"></i>
                                        </a>
                                        <img src="img/img2.jpg" alt="" />
                                        <a href="javascript:;">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                    </div>
                                    <div class="status">
                                        <h5>Status</h5>
                                        <span>Busy in a meeting with HK Group CEO</span>

                                </div>
                            </div>
                        </div>
                        </div>
                    </aside>
                    <aside>
                        <header class="panel-heading head-border">
                            team member
                            <span class="action-tools pull-right">
                                <a class="fa fa-reorder" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="post-info">
                            <ul class="team-list cycle-pager external" id='no-template-pager'>
                                <li>
                                    <a href="javascript:;">
                                        <span class="thumb-small">
                                            <img class="circle" src="img/img2.jpg" alt=""/>
                                            <i class="online dot"></i>
                                        </span>
                                        <span class="name">Alison Jones</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="thumb-small">
                                            <img class="circle" src="img/img1.jpg" alt=""/>
                                            <i class="away dot"></i>
                                        </span>
                                        <span class="name">Joliana Devis</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="thumb-small">
                                            <img class="circle" src="img/img3.jpg" alt=""/>
                                            <i class="busy dot"></i>
                                        </span>
                                        <span class="name">David Alexzender</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="thumb-small">
                                            <img class="circle" src="img/img4.jpg" alt=""/>
                                            <i class="offline dot"></i>
                                        </span>
                                        <span class="name">Emma Rose</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="thumb-small">
                                            <img class="circle" src="img/img1.jpg" alt=""/>
                                            <i class="online dot"></i>
                                        </span>
                                        <span class="name">Jacqueline Jones</span>
                                    </a>
                                </li>

                            </ul>
                            <div class="add-more-member">
                                <a href="javascript:;" class=" ">View All Member</a>
                                <a href="javascript:;" class="add-btn pull-right">
                                    +
                                </a>
                            </div>
                        </div>
                    </aside>
                </section>
            </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="w-map-size" id="world-map"> </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="sale-monitor">
                                        <div class="title">
                                            <h3>Sales Monitor</h3>
                                            <p>Proper sell monitoring through the world map to plan for the next marketing attempt</p>
                                        </div>
                                        <div class="states">
                                            <div class="info">
                                                <div class="desc pull-left">Australia</div>
                                                <div class="percent pull-right">70%</div>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                    <span class="sr-only">70% </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="states">
                                            <div class="info">
                                                <div class="desc pull-left">Europe</div>
                                                <div class="percent pull-right">45%</div>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                    <span class="sr-only">45% </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="states">
                                            <div class="info">
                                                <div class="desc pull-left">Latin America</div>
                                                <div class="percent pull-right">35%</div>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                                    <span class="sr-only">35% </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <section class="panel">
                        <div class="panel-body cpu-graph">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="c-info">
                                        <h3>cpu usages</h3>
                                        <p>Once this tab is open click the CPU button above the list of programs twice</p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="easy-pie-chart">
                                        <div class="percentage-light" data-percent="33"><span>33%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading">
                            To Do List
                            <span class="tools pull-right">
                                <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                                <a class="t-close fa fa-times" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <ul class="todo-list-item" id="todo-list">
                                <li class="clearfix">
                                    <div class="chk-todo pull-left">
                                        <input type="checkbox" value="0" />
                                    </div>
                                    <p class="todo-title">
                                        Donec ullamcorper nulla non metus auctor fringilla.
                                    </p>
                                    <div class="action-todo pull-right clearfix">
                                        <a href="#" class="todo-edit"><i class="icon-pencil"></i></a>
                                        <a href="#" class="todo-remove"><i class="icon-close"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">

                                    <div class="chk-todo pull-left">
                                        <input type="checkbox" value="0" />

                                    </div>
                                    <p class="todo-title">
                                        Etiam porta sem malesuada magna mollis euismod.
                                    </p>
                                    <div class="action-todo pull-right clearfix">
                                        <a href="#" class="todo-edit"><i class="icon-pencil"></i></a>
                                        <a href="#" class="todo-remove"><i class="icon-close"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">

                                    <div class="chk-todo pull-left">
                                        <input type="checkbox" value="0" />

                                    </div>
                                    <p class="todo-title">
                                        Aenean eu leo quam. Pellentesque sumon sem venenatis.
                                    </p>
                                    <div class="action-todo pull-right clearfix">
                                        <a href="#" class="todo-edit"><i class="icon-pencil"></i></a>
                                        <a href="#" class="todo-remove"><i class="icon-close"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>


        </div>
        <!--body wrapper end-->


        <!--footer section start-->
        <footer>
            2015 &copy; SlickLab by VectorLab.
        </footer>
        <!--footer section end-->


        <!-- Right Slidebar start -->
        <div class="sb-slidebar sb-right sb-style-overlay">
        <div class="right-bar">

        <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

        <ul class="nav nav-tabs nav-justified-">
            <li class="active">
                <a href="#chat" data-toggle="tab">Chat</a>
            </li>
            <li class="">
                <a href="#info" data-toggle="tab">Info</a>
            </li>
            <li class="">
                <a href="#settings" data-toggle="tab">Settings</a>
            </li>
        </ul>
        <div class="tab-content">
        <div role="tabpanel" class="tab-pane active " id="chat">
            <div class="online-chat">
                <div class="online-chat-container">
                    <div class="chat-list">
                        <h3>Chat list</h3>
                        <h5>34 Friends Online, 80 Offline</h5>
                        <a href="#" class="add-people tooltips" data-original-title="Add People" data-toggle="tooltip" data-placement="left">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <div class="side-title">
                        <h2>online</h2>
                        <div class="title-border-row">
                            <div class="title-border"></div>
                        </div>
                    </div>

                    <ul class="team-list chat-list-side">
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img2.jpg" alt="">
                            <i class="online dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Alison Jones
                            </span>
                                    <small class="text-muted">Start exploring</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img3.jpg" alt="">
                            <i class="online dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Jonathan Smith
                            </span>
                                    <small class="text-muted">Alien Inside</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img1.jpg" alt="">
                            <i class="away dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Anjelina Doe
                            </span>
                                    <small class="text-muted">Screaming...</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img3.jpg" alt="">
                            <i class="busy dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Franklin Adam
                            </span>
                                    <small class="text-muted">Don't lose the hope</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img2.jpg" alt="">
                            <i class="online dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Jeff Crowford
                            </span>
                                    <small class="text-muted">Just flying</small>
                                </div>
                            </a>
                        </li>

                    </ul>

                    <div class="side-title">
                        <h2>Offline</h2>
                        <div class="title-border-row">
                            <div class="title-border"></div>
                        </div>
                    </div>
                    <ul class="team-list chat-list-side">
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img2.jpg" alt="">
                            <i class="offline dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Alison Jones
                            </span>
                                    <small class="text-muted">Start exploring</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img3.jpg" alt="">
                            <i class="offline dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Jonathan Smith
                            </span>
                                    <small class="text-muted">Alien Inside</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img1.jpg" alt="">
                            <i class="offline dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Anjelina Doe
                            </span>
                                    <small class="text-muted">Screaming...</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img3.jpg" alt="">
                            <i class="offline dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Franklin Adam
                            </span>
                                    <small class="text-muted">Don't lose the hope</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="thumb-small">
                            <img class="circle" src="img/img2.jpg" alt="">
                            <i class="offline dot"></i>
                        </span>
                                <div class="inline">
                                        <span class="name">
                                Jeff Crowford
                            </span>
                                    <small class="text-muted">Just flying</small>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>


            </div>


        </div>

        <div role="tabpanel" class="tab-pane " id="info">
        <div class="chat-list info">
            <h3>Latest Information</h3>
            <a  href="javascript:;" class="add-people tooltips" data-original-title="Refresh" data-toggle="tooltip" data-placement="left">
                <i class="fa fa-repeat"></i>
            </a>
        </div>

        <div class="aside-widget">
            <div class="side-title-alt">
                <h2>Revenue</h2>
                <a href="#" class="close side-w-close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <ul class="team-list chat-list-side info">
                <li>
                            <span class="thumb-small">
                        <i class="fa fa-circle green-color"></i>
                    </span>
                    <div class="inline">
                                <span class="name">
                            Received Money from John Doe
                        </span>
                        <span class="value green-color">$12300</span>
                    </div>
                </li>
                <li>
                            <span class="thumb-small">
                        <i class="fa fa-circle purple-color"></i>
                    </span>
                    <div class="inline">
                                <span class="name">
                            Total Admin Template Sales
                        </span>
                        <span class="value purple-color">$40100</span>
                    </div>
                </li>
                <li>
                            <span class="thumb-small">
                        <i class="fa fa-circle red-color"></i>
                    </span>
                    <div class="inline">
                                <span class="name">
                            Monty Revenue
                        </span>
                        <span class="value red-color">$322300</span>
                    </div>
                </li>
                <li>
                            <span class="thumb-small">
                        <i class="fa fa-circle blue-color"></i>
                    </span>
                    <div class="inline">
                                <span class="name">
                            Received Money from John Doe
                        </span>
                        <span class="value blue-color">$1520</span>
                    </div>
                </li>
            </ul>
        </div>

        <div class="aside-widget">

            <div class="side-title-alt">
                <h2>Statistics</h2>
                <a href="#" class="close side-w-close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <ul class="team-list chat-list-side info statistics border-less-list">
                <li>
                    <div class="inline">
                                <span class="name">
                                     Foreign Visit
                                </span>
                        <small class="text-muted">25% Increase</small>
                    </div>
                            <span class="thumb-small">
                                <span id="foreign-visit" class="chart"></span>
                            </span>
                </li>
                <li>
                    <div class="inline">
                                <span class="name">
                            Montly Visit
                        </span>
                        <small class="text-muted">Average visit 12% Increase</small>
                    </div>
                            <span class="thumb-small">
                                <span id="monthly-visit" class="chart"></span>
                            </span>
                </li>
                <li>
                    <div class="inline">
                                <span class="name">
                            Unique Visit
                        </span>
                        <small class="text-muted">35% unique visitor </small>
                    </div>
                            <span class="thumb-small">
                                <span id="unique-visit" class="chart"></span>
                            </span>
                </li>
            </ul>
        </div>

        <div class="aside-widget">
            <div class="side-title-alt">
                <h2>Notification</h2>
                <a href="#" class="close side-w-close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <ul class="team-list chat-list-side info border-less-list">
                <li>
                            <span class="thumb-small">
                        <i class="fa fa-bell green-color"></i>
                    </span>
                    <div class="inline">
                                <span class="name">
                            Meeting with John Doe at
                        </span>
                        <span class="value text-muted">11.30 am</span>
                    </div>
                </li>
                <li>
                            <span class="thumb-small">
                        <i class="fa fa-users green-color"></i>
                    </span>
                    <div class="inline">
                                <span class="name">
                            3 membership request pending
                        </span>
                        <span class="value text-muted">John, Smith, Lira</span>
                    </div>
                </li>
            </ul>

        </div>

        <div class="aside-widget">


        <div class="side-title-alt">
                <h2>System</h2>
                <a href="#" class="close side-w-close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        <ul class="team-list chat-list-side info border-less-list">
                <li>
                    <div class="inline">
                                <span class="name">
                            Received database error report from hosting provider
                        </span>
                        <span class="value text-muted">11.30 am</span>
                    </div>
                </li>
                <li>
                    <div class="inline">
                                <span class="name">
                            Hosting Renew notification
                        </span>
                        <span class="value text-muted">12.00 pm</span>
                    </div>
                </li>

            </ul>
        </div>

        <div class="aside-widget">
            <div class="side-title-alt">
                <h2>Work Progress</h2>
                <a href="#" class="close side-w-close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
            <ul class="team-list chat-list-side info border-less-list sale-monitor">
                <li>
                    <div class="states">
                        <div class="info">
                            <div class="desc pull-left">Server Setup and Configuration</div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                        </div>
                        <div class="info">
                            <small class="percent pull-left text-muted">50% completed</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="states">
                        <div class="info">
                            <div class="desc pull-left">Website Design & Development</div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                        </div>
                        <div class="info">
                            <small class="percent pull-left text-muted">85% completed</small>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        </div>

        <div role="tabpanel" class="tab-pane " id="settings">
            <div class="chat-list bottom-border settings-head">
                <h3>Account Setting</h3>
                <h5>Configure your account as per your need.</h5>
            </div>
            <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                <li>
                    <div class="inline">
                            <span class="name">
                            Make my feature post public?
                        </span>
                        <small class="text-muted">Everyone will be able to see, like, comment
                            and share your feature post.</small>
                    </div>
                        <span class="thumb-small">
                        <input type="checkbox" class="js-switch-small" checked/>
                    </span>
                </li>
                <li>
                    <div class="inline">
                            <span class="name">
                            Show offline Contacts
                        </span>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit.</small>
                    </div>
                        <span class="thumb-small">
                        <input type="checkbox" class="js-switch-small2" checked/>
                    </span>
                </li>

                <li>
                    <div class="inline">
                            <span class="name">
                            Everyone will see my stuff
                        </span>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit.</small>
                    </div>
                        <span class="thumb-small">
                        <input type="checkbox" class="js-switch-small3"/>
                    </span>
                </li>

            </ul>

            <div class="chat-list bottom-border settings-head">
                <h3>General Setting</h3>
                <h5>Configure your account as per your need.</h5>
            </div>
            <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                <li>
                    <div class="inline">
                            <span class="name">
                            Show me Online
                        </span>
                    </div>
                        <span class="thumb-small">
                        <input type="checkbox" class="js-switch-small4" checked/>
                    </span>
                </li>
                <li>
                    <div class="inline">
                            <span class="name">
                            Status visible to all
                        </span>
                    </div>
                        <span class="thumb-small">
                        <input type="checkbox" class="js-switch-small5" />
                    </span>
                </li>

                <li>
                    <div class="inline">
                            <span class="name">
                            Show my work progess to all
                        </span>
                    </div>
                        <span class="thumb-small">
                        <input type="checkbox" class="js-switch-small6" checked/>
                    </span>
                </li>

            </ul>

        </div>

        </div>
        </div>
        </div>
        <!-- Right Slidebar end -->

    </div>    
@endsection