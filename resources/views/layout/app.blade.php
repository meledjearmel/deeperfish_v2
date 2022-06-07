
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Dashboard | DeeperFish</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vector-map.css">
    <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-sidebar" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row m-0">
            <div class="main-header-left">
                <div class="logo-wrapper"><a href="dashboard"><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a></div>
                <div class="dark-logo-wrapper"><a href="dashboard"><img class="img-fluid" src="assets/images/logo/dark-logo.png" alt=""></a></div>
                <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
            </div>
            <div class="left-menu-header col">
                <ul>
                    <li>
                        <form class="form-inline search-form">
                            <div class="search-bg"><i class="fa fa-search"></i>
                                <input class="form-control-plaintext" placeholder="Rechercher .....">
                            </div>
                        </form>
                        <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                    </li>
                </ul>
            </div>
            <div class="nav-right col pull-right right-menu p-0">
                <ul class="nav-menus">
                    <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>
                                <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                            </li>
                            <li class="noti-primary">
                                <div class="media">
                                    <span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                                    <div class="media-body">
                                        <p>Delivery processing </p>
                                        <span>10 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="noti-secondary">
                                <div class="media">
                                    <span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                                    <div class="media-body">
                                        <p>Order Complete</p>
                                        <span>1 hour ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="noti-success">
                                <div class="media">
                                    <span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                                    <div class="media-body">
                                        <p>Tickets Generated</p>
                                        <span>3 hour ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="noti-danger">
                                <div class="media">
                                    <span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                                    <div class="media-body">
                                        <p>Delivery Complete</p>
                                        <span>6 hour ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="mode"><i class="fa fa-moon-o"></i></div>
                    </li>
                    <li class="onhover-dropdown p-0">
                        <button onclick="document.getElementById('lougout-form').submit()" class="btn btn-primary-light" type="button"><i data-feather="log-out"></i>Se deconnecter</button>
                        <form style="display: none" id="lougout-form" action="{{ route('auth.logout') }}" method="post"> @csrf </form>
                    </li>
                </ul>
            </div>
            <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
            <div class="sidebar-user text-center">
                <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="assets/images/dashboard/1.png" alt="" />
                <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
                <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">{{ $user->display_name ?? $user->email }}</h6></a>
                <p class="mb-0 font-roboto">{{ $user->role->name }}</p>
            </div>
            <nav>
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>General</h6>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a @class(["nav-link", "menu-title"]) href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>
                                <ul class="nav-submenu menu-content" style="display: block;">
                                    <li><a href="{{ route('dashboard') }}">Mon tableau</a></li>
                                </ul>
                            </li>
                            @admin
                            <li class="dropdown">
                                <a @class(["nav-link", "menu-title"]) href="javascript:void(0)"><i data-feather="users"></i><span>User</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="{{ route('users.index') }}">Creer</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a @class(["nav-link", "menu-title"]) href="javascript:void(0)"><i data-feather="link"></i><span>Short link</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="{{ route('shortlink.index') }}">Creer</a></li>
                                </ul>
                            </li>
                            @endadmin
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <!-- Container-fluid starts-->
            <!-- Container-fluid starts-->
            <div class="container-fluid dashboard-default-sec">
                @yield('content')
            </div>
            <!-- Container-fluid Ends-->
            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2022-23 © DeeperFish All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- latest jquery-->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="assets/js/sidebar-menu.js"></script>
<script src="assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="assets/js/bootstrap/popper.min.js"></script>
<script src="assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
<script src="assets/js/chart/chartist/chartist.js"></script>
<script src="assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
<script src="assets/js/chart/knob/knob.min.js"></script>
<script src="assets/js/chart/knob/knob-chart.js"></script>
<script src="assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="assets/js/prism/prism.min.js"></script>
<script src="assets/js/clipboard/clipboard.min.js"></script>
<script src="assets/js/counter/jquery.waypoints.min.js"></script>
<script src="assets/js/counter/jquery.counterup.min.js"></script>
<script src="assets/js/counter/counter-custom.js"></script>
<script src="assets/js/custom-card/custom-card.js"></script>
<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<script src="assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
<script src="assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
<script src="assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
<script src="assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
<script src="assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
<script src="assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
<script src="assets/js/dashboard/default.js"></script>
<script src="assets/js/notify/index.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="assets/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
<script src="assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
<script src="assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
<script src="assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="assets/js/select2/select2.full.min.js"></script>
<script src="assets/js/select2/select2-custom.js"></script>
<script src="assets/js/datatable/datatable-extension/custom.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="assets/js/script.js"></script>
<script src="assets/js/theme-customizer/customizer.js"></script>
<!-- Plugin used-->
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
@stack('scripts')
</body>
</html>
