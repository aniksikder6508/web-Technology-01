<!doctype html>
<html lang="en" class="fixed left-sidebar-top">


<!-- Mirrored from myiideveloper.com/helsinki/last-version/helsinki_green-dark/src/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 13:03:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="../assets/vendor/pace/pace.min.js"></script>
    <link href="../assets/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="../assets/stylesheets/css/style.css">


</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        <div class="page-header">
            <!-- LEFTSIDE header -->
            <div class="leftside-header">
                <div class="logo">
                    <a href="index.html" class="on-click">
                        <img alt="logo" src="images/header-logo.png" />
                    </a>
                </div>
                <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            <!-- RIGHTSIDE header -->
            <div class="rightside-header">
                <div class="header-middle"></div>
                <!--SEARCH HEADERBOX-->
                <div class="header-section" id="search-headerbox">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                    <div class="header-separator"></div>
                </div>
                <!--NOCITE HEADERBOX-->
                <div class="header-section hidden-xs" id="notice-headerbox">
                    <!--check list-->
                    <div class="notice" id="checklist-notice">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <div class="dropdown-box basic">
                            <div class="drop-header">
                                <h3><i class="fa fa-check-square-o" aria-hidden="true"></i> To-Do List</h3>
                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-to-do">
                                    <ul>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s1" value="option1">
                                                <label class="check" for="check-s1">Accusantium eveniet ipsam neque</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s2" value="option1" checked>
                                                <label class="check" for="check-s2">Lorem ipsum dolor sit</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s3" value="option1">
                                                <label class="check" for="check-s3">Dolor eligendi in ipsum sapiente</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s4" value="option1">
                                                <label class="check" for="check-s4">Natus recusandae vel</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="check-s5" value="option1">
                                                <label class="check" for="check-s5">Adipisci amet officia tempore ut</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all Items</a>
                            </div>
                        </div>
                    </div>
                    <!--messages-->
                    <div class="notice" id="messages-notice">
                        <i class="fa fa-comments-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger"><i class="fa fa-exclamation"></i></span>
                        </i>
                        <div class="dropdown-box basic">
                            <div class="drop-header ">
                                <h3><i class="fa fa-comments" aria-hidden="true"></i> Messages</h3>
                                <span class="badge x-danger b-rounded">120</span>
                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_1.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">John Doe</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_2.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Alice Smith</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_3.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Klaus Wolf</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_4.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Sun Li</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><img alt="profile photo" src="images/avatar/avatar_5.jpg" /></div>
                                                <div class="text">
                                                    <span class="title">Sonia Valera</span>
                                                    <span class="subtitle">hello world</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all messages</a>
                            </div>
                        </div>
                    </div>
                    <!--alerts notices-->
                    <div class="notice" id="alerts-notice">
                        <i class="fa fa-bell-o" aria-hidden="true"><span class="badge badge-xs badge-top-right x-danger">7</span></i>

                        <div class="dropdown-box basic">
                            <div class="drop-header">
                                <h3><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</h3>
                                <span class="badge x-danger b-rounded">7</span>

                            </div>
                            <div class="drop-content">
                                <div class="widget-list list-left-element list-sm">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-warning color-warning"></i></div>
                                                <div class="text">
                                                    <span class="title">8 Bugs</span>
                                                    <span class="subtitle">reported today</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-flag color-danger"></i></div>
                                                <div class="text">
                                                    <span class="title">Error</span>
                                                    <span class="subtitle">sevidor C down</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-cog color-dark"></i></div>
                                                <div class="text">
                                                    <span class="title">New Configuration</span>
                                                    <span class="subtitle"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-tasks color-success"></i></div>
                                                <div class="text">
                                                    <span class="title">14 Task</span>
                                                    <span class="subtitle">completed</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                                <div class="text">
                                                    <span class="title">21 Menssage</span>
                                                    <span class="subtitle"> (see more)</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="drop-footer">
                                <a>See all notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-separator"></div>
                </div>
                <!--USER HEADERBOX -->
                <div class="header-section" id="user-headerbox">
                    <div class="user-header-wrap">
                        <div class="user-photo">
                            <img alt="profile photo" src="images/avatar/avatar_user.jpg" />
                        </div>
                        <div class="user-info">
                            <span class="user-name">Jane Doe</span>
                            <span class="user-profile">Admin</span>
                        </div>
                        <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                        <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                    </div>
                    <div class="user-options dropdown-box">
                        <div class="drop-content basic">
                            <ul>
                                <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                                <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-separator"></div>
                <!--Log out -->
                <div class="header-section">
                    <a href="pages_sign-in.html" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="active-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                                <!--UI ELEMENTENTS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>UI Elements</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="ui-elements_panels.html">Panels</a></li>
                                        <li><a href="ui-elements_accordions.html">Accordions</a></li>
                                        <li><a href="ui-elements_tabs.html">Tabs</a></li>
                                        <li><a href="ui-elements_buttons.html">Buttons</a></li>
                                        <li><a href="ui-elements_typography.html">Typography</a></li>
                                        <li><a href="ui-elements_alerts.html">Alerts</a></li>
                                        <li><a href="ui-elements_modals.html">Modals</a></li>
                                        <li><a href="ui-elements_lightbox.html">Lightbox</a></li>
                                        <li class="has-child-item close-item">
                                            <a>Notifications</a>
                                            <ul class="nav child-nav level-2 ">
                                                <li><a href="ui-elements_notifications-pnotify.html">PNotify</a></li>
                                                <li><a href="ui-elements_notifications-toastr.html">Toastr</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="ui-elements_animations-appear.html">Animations</a></li>
                                        <li><a href="ui-elements_badges-tags.html">Badge & Tags</a></li>
                                    </ul>
                                </li>
                                <!--CHARTS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Charts</span> </a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="charts_chart-js.html">CharJS</a></li>
                                        <li><a href="charts_morris.html">Morris</a></li>
                                        <li><a href="charts_peity.html">Peity</a></li>
                                    </ul>
                                </li>
                                <!--FORMS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-columns" aria-hidden="true"></i><span>Forms </span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="forms_layouts.html">Layouts</a></li>
                                        <li><a href="forms_elements.html">Elements</a></li>
                                        <li><a href="forms_advanced.html">Advanced</a></li>
                                        <li><a href="forms_validation.html">Validation</a></li>
                                        <li><a href="forms_wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <!--TABLES-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-table" aria-hidden="true"></i><span>Tables</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="tables_basic.html">Basic</a></li>
                                        <li><a href="tables_data-tables.html">DataTable</a></li>
                                        <li><a href="tables_responsive.html">Responsive</a></li>
                                    </ul>
                                </li>
                                <!--PAGES-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-files-o" aria-hidden="true"></i><span>Pages</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="pages_sign-in.html">Sign in</a></li>
                                        <li><a href="pages_register.html">Register</a></li>
                                        <li><a href="pages_lock-screen.html">Lock screen</a></li>
                                        <li><a href="pages_forgot-password.html">Forgot password</a></li>
                                        <li class="has-child-item close-item">
                                            <a>Error pages</a>
                                            <ul class="nav child-nav level-2 ">
                                                <li><a href="pages_error-404-content.html">Error 404 content</a></li>
                                                <li><a href="pages_error-404.html">Error 404 page</a></li>
                                                <li><a href="pages_error-500.html">Error 500</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="pages_faq.html">FAQ</a></li>
                                        <li><a href="pages_user-profile.html">User profile</a></li>
                                        <li class="has-child-item close-item">
                                            <a>Search results<span></a>
                                            <ul class="nav child-nav level-2 ">
                                                <li><a href="pages_search-results-list.html">List style</a></li>
                                                <li><a href="pages_search-results-grid.html">Grid Style</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child-item close-item">
                                            <a>Projects<span></a>
                                            <ul class="nav child-nav level-2 ">
                                                <li><a href="pages_project-list.html">List</a></li>
                                                <li><a href="pages_project-detail.html">Detail</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <!--WIDGETS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Widgets</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="widgets_boxes.html">Boxes</a></li>
                                        <li><a href="widgets_lists.html">Lists</a></li>
                                        <li><a href="widgets_posts.html">Posts</a></li>
                                        <li><a href="widgets_timelines.html">Timelines</a></li>
                                    </ul>
                                </li>
                                <!--HELPERS-->
                                <li class="has-child-item close-item">
                                    <a><i class="fa fa-magic" aria-hidden="true"></i><span>Helpers</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="helpers_background-border.html">Background & Border</a></li>
                                        <li><a href="helpers_margin-padding.html">Margin & Padding</a></li>
                                    </ul>
                                </li>
                                <!--MENU LEVELS-->
                                <li class=" has-child-item close-item">
                                    <a>
                                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                                        <span>Menu levels</span>
                                    </a>
                                    <ul class="nav child-nav level-1">
                                        <li><a>First Item</a></li>
                                        <li class="has-child-item close-item">
                                            <a>Second Item</a>
                                            <ul class="nav child-nav level-2 ">
                                                <li><a href="#">Option 1</a></li>
                                                <li><a href="#">Option 2</a></li>
                                                <li class="has-child-item close-item">
                                                    <a>Option 3</a>
                                                    <ul class="nav child-nav level-3 ">
                                                        <li><a href="#">Item 1</a></li>
                                                        <li><a href="#">Item 2</a></li>
                                                        <li><a href="#">Item 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>Third Item</a></li>
                                        <li class="has-child-item close-item">
                                            <a>Fourth Item</a>
                                            <ul class="nav child-nav level-2 ">
                                                <li><a href="#">Option 1</a></li>
                                                <li><a href="#">Option 2</a></li>
                                                <li class="has-child-item close-item">
                                                    <a>Option 3</a>
                                                    <ul class="nav child-nav level-3 ">
                                                        <li><a href="#">Item 1</a></li>
                                                        <li><a href="#">Item 2</a></li>
                                                        <li><a href="#">Item 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <!--DOCUMENTATION-->
                                <li><a target="_blank" href="http://myiideveloper.com/helsinki/last-version/documentation/index.html"><i class="fa fa-book" aria-hidden="true"></i><span>Online Documentation</span></a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12 col-lg-9">
                        <div class="row">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--WIDGETBOX-->
                            <div class="col-sm-12 col-md-4">
                                <div class="panel widgetbox wbox-2 bg-scale-0">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-globe color-darker-1"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-1">Views</h4>
                                                    <h1 class="title color-primary"> 154.609</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-user color-darker-2"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-darker-2">New Users</h4>
                                                    <h1 class="title color-w"> 105</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="panel widgetbox wbox-2 bg-darker-2 color-light">
                                    <a href="#">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <span class="icon fa fa-envelope color-lighter-1"></span>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="subtitle color-lighter-1">New Messages</h4>
                                                    <h1 class="title color-light"> 124</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--AREA CHART-->
                            <div class="col-sm-12 col-md-8">
                                <div class="panel">
                                    <div class="panel-content">
                                        <h5><b>First semester</b> Sells</h5>
                                        <p class="section-text">Lorem ipsum <span class="highlight">dolor sit amet</span> consectetur adipisicing elit. Assumenda fugit inventore ipsam nam, qui voluptatibus</p>
                                        <canvas id="area-chart" width="400" height="160"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--TO DO LIST-->
                            <div class="col-sm-12 col-md-4">
                                <div class="panel b-primary bt-md">
                                    <div class="panel-content p-none">
                                        <div class="widget-list list-to-do">
                                            <h4 class="list-title">To do List</h4>
                                            <button class="add-item btn btn-o btn-primary btn-xs"><i class="fa fa-plus"></i></button>
                                            <ul>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h1" value="option1">
                                                        <label class="check" for="check-h1">Accusantium eveniet ipsam neque</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h2" value="option1" checked>
                                                        <label class="check" for="check-h2">Lorem ipsum dolor sit</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h3" value="option1">
                                                        <label class="check" for="check-h3">Dolor eligendi in ipsum sapiente</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h4" value="option1">
                                                        <label class="check" for="check-h4">Natus recusandae vel</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h5" value="option1">
                                                        <label class="check" for="check-h5">Adipisci amet officia tempore ut</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="check-h6" value="option1">
                                                        <label class="check" for="check-h6">Possimus repellat repellendus</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--TABS WITH TABLET-->
                            <div class="col-sm-12 col-md-8">
                                <div class="tabs mt-none">
                                    <!-- Tabs Header -->
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a href="#home" data-toggle="tab">Employees</a></li>
                                        <li><a href="#profile" data-toggle="tab">Sells</a></li>
                                        <li><a href="#messages" data-toggle="tab">Messages</a></li>
                                        <li><a href="#settings" data-toggle="tab"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                                    </ul>
                                    <!-- Tabs Content -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>34</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <p><b>Profile</b> content</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus
                                                nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla
                                                libero. Donec iaculis sit amet nibh non laoreet.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="messages">
                                            <p><b>Message</b> content</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus
                                                nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla
                                                libero. Donec iaculis sit amet nibh non laoreet.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="settings">
                                            <p><b>Settings</b> content</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae tellus tincidunt, mattis odio eu, accumsan quam. Duis ultricies, erat nec suscipit mattis, risus est efficitur enim, sed finibus lacus
                                                nisi et mauris. Ut sed accumsan ipsum. Aliquam vel nibh et turpis euismod porttitor. In diam odio, cursus eget faucibus quis, efficitur id erat. Aliquam euismod in justo sit amet ornare. Quisque eu fringilla
                                                libero. Donec iaculis sit amet nibh non laoreet.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--PIE CHART-->
                            <div class="col-sm-12 col-md-4">
                                <div class="panel">
                                    <div class="panel-content">
                                        <h5><b>Lorem ipsum dolor sit</b></h5>
                                        <p>Dolor sit amet <span class="highlight">consectetur</span> erte</p>
                                        <canvas id="pie-chart" width="400" height="260"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                            <!--GALLERY-->
                            <div class="col-sm-12 col-md-8">
                                <div class=" gallery-wrap">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="first photo" src="images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="second photo" src="images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="third photo" src="images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="fourth photo" src="images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="fifth photo" src="images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="sixth photo" src="images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="seventh photo" src="images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="col-xs-6 col-md-3">
                                            <a href="images/helsinki-lg.jpg" title="By John Doe">
                                                <img alt="eighth photo" src="images/helsinki.jpg" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--TIMELINE left-->
                    <div class="col-sm-12 col-lg-3">
                        <div class="timeline">
                            <div class="timeline-box">
                                <div class="timeline-icon bg-primary">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4 class="tl-title">Ello impedit iusto</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                                </div>
                                <div class="timeline-footer">
                                    <span>Today. 14:25</span>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="timeline-icon bg-primary">
                                    <i class="fa fa-tasks"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4 class="tl-title">consectetur adipisicing </h4> Lorem ipsum dolor sit amet. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                                </div>
                                <div class="timeline-footer">
                                    <span>Today. 10:55</span>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="timeline-icon bg-primary">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4 class="tl-title">Impedit iusto minima nisi</h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                                </div>
                                <div class="timeline-footer">
                                    <span>Today. 9:20</span>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="timeline-icon bg-primary">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="timeline-content">
                                    <h4 class="tl-title">Lorem ipsum dolor sit</h4> Lorem ipsum dolor sit amet Consequatur distinctio illo impedit iusto minima nisi quo tempora ut!
                                </div>
                                <div class="timeline-footer">
                                    <span>Yesteday. 16:30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            </div>
            <!-- RIGHT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="right-sidebar">
                <div class="right-sidebar-toggle" data-toggle-class="right-sidebar-opened" data-target="html">
                    <i class="fa fa-cog fa-spin" aria-hidden="true"></i>
                </div>
                <div id="right-nav" class="nano">
                    <div class="nano-content">
                        <div class="template-settings">
                            <h4 class="text-center">Template Settings</h4>
                            <ul class="toggle-settings pv-xlg">
                                <li>
                                    <h6 class="text">Header fixed</h6>
                                    <label class="switch">
                                        <input id="header-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Content header fixed</h6>
                                    <label class="switch">
                                        <input id="content-header-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar collapsed</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-collapsed" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar Top</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-top" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar fixed</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-fixed" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar over</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-over" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                                <li>
                                    <h6 class="text">Left sidebar nav left-lines</h6>
                                    <label class="switch">
                                        <input id="left-sidebar-left-lines" type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </li>
                            </ul>
                            <h4 class="text-center">Template Colors</h4>

                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/dark_green.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_green-light/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_green.png" /></a>
                                </div>
                            </div>
                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_dark/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/dark_white.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_light/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_dark.png" /></a>
                                </div>
                            </div>
                            <div class="row toggle-colors">
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_blue-dark/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/dark_blue.png" /></a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="http://myiideveloper.com/helsinki/last-version/helsinki_blue-light/src/index.html" class="on-click"> <img alt="Helsinki-green" src="images/theme/white_blue.png" /></a>
                                </div>
                            </div>
                            <div class="row mt-lg">
                                <div class="col-sm-12 text-center">
                                    <a  target="_blank" href="http://myiideveloper.com/helsinki/last-version/documentation/index.html"><h5> <i class="fa fa-book mr-sm"></i>Online Documentation</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--scroll to top-->
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
    </div>
    <!--BASIC scripts-->
    <!-- ========================================================= -->
    <script src="../assets/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendor/nano-scroller/nano-scroller.js"></script>
    <!--TEMPLATE scripts-->
    <!-- ========================================================= -->
    <script src="../assets/javascripts/template-script.min.js"></script>
    <script src="../assets/javascripts/template-init.min.js"></script>
    <!-- SECTION script and examples-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <script src="../assets/vendor/toastr/toastr.min.js"></script>
    <!--morris chart-->
    <script src="../assets/vendor/chart-js/chart.min.js"></script>
    <!--Gallery with Magnific popup-->
    <script src="../assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--Examples-->
    <script src="../assets/javascripts/examples/dashboard.js"></script>
</body>


<!-- Mirrored from myiideveloper.com/helsinki/last-version/helsinki_green-dark/src/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Mar 2019 13:05:07 GMT -->
</html>