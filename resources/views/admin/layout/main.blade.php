<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ url('/') }}/{{ url('/') }}/assets/images/favicon_1.ico">

        <title>{{ config('app.name', 'Laravel') }} - Admin Panel</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ url('/') }}/assets/plugins/morris/morris.css">

        <link href="{{ url('/') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ url('/') }}/assets/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo">{{ config('app.name', 'Laravel') }}</a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="{{ url('/') }}/assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="{{ url('/') }}/assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            

                            


                            <ul class="nav navbar-nav navbar-right pull-right">
                                
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{ url('/') }}/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        
                                        <li><a href="{{ url('logout') }}"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="{{ url('admin') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="{{ url('admin/products') }}" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Products </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="{{ url('admin/employees') }}" class="waves-effect"><i class="ti-user"></i><span> Employees </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="{{ url('admin/make_loop') }}" class="waves-effect"><i class="ti-light-bulb"></i> <span> Alphabet Pattern </span>  </a>
                                
                            </li>

                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                @yield('content')
                <!-- End content -->

                <footer class="footer text-right">
                    © 2020. All rights reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="{{ url('/') }}/assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ url('/') }}/assets/js/detect.js"></script>
        <script src="{{ url('/') }}/assets/js/fastclick.js"></script>

        <script src="{{ url('/') }}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.blockUI.js"></script>
        <script src="{{ url('/') }}/assets/js/waves.js"></script>
        <script src="{{ url('/') }}/assets/js/wow.min.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.scrollTo.min.js"></script>

        <script src="{{ url('/') }}/assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="{{ url('/') }}/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="{{ url('/') }}/assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="{{ url('/') }}/assets/plugins/morris/morris.min.js"></script>
        <script src="{{ url('/') }}/assets/plugins/raphael/raphael-min.js"></script>

        <script src="{{ url('/') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="{{ url('/') }}/assets/pages/jquery.dashboard.js"></script>

        <script src="{{ url('/') }}/assets/js/jquery.core.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>