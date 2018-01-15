<?php
$m4t_user = wp_get_current_user();
?>
<?php global $qode_options_proya, $wp_query, $qode_toolbar; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
		echo('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
	} ?>

	<title><?php wp_title(''); ?></title>

	<?php
	/**
	 * qode_header_meta hook
	 *
	 * @see qode_header_meta() - hooked with 10
	 * @see qode_user_scalable_meta() - hooked with 10
	 */
	do_action('qode_header_meta');
	?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url($qode_options_proya['favicon_image']); ?>">
	<link rel="apple-touch-icon" href="<?php echo esc_url($qode_options_proya['favicon_image']); ?>"/>
	<?php //wp_head(); ?>

	<!-- template additions -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" type="image/x-icon" href="https://mining4truth.com/wp-content/uploads/2017/12/preview-full-IMG_0136.jpg">

   

    <!-- Morris Chart CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/morris/morris.css">
     <!-- Circlifull chart css -->
    <link href="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css"/>

     <!-- Custom box (Modal) css -->
        <link href="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
        <!-- Dragula (Drag and drop) css -->
        <link href="<?php echo get_template_directory_uri(); ?>/Dark/assets/plugins/dragula/dragula.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="<?php echo get_template_directory_uri(); ?>/Dark/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo  get_template_directory_uri(); ?>/Dark/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo  get_template_directory_uri(); ?>/Dark/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo  get_template_directory_uri(); ?>/Dark/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo  get_template_directory_uri(); ?>/Dark/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo  get_template_directory_uri(); ?>/Dark/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo  get_template_directory_uri(); ?>/Dark/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo  get_template_directory_uri(); ?>/Dark/assets/js/modernizr.min.js"></script>
</head>

 <body class="fixed-left">

<!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="?page=index.html" class="logo">
<img src="https://mining4truth.com/wp-content/uploads/2017/12/looo-1.png" style="
    width: 157px;
">
</a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="zmdi zmdi-notifications-none"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php if(isset($_GET[page]) && $_GET[page]!="page-404.html") { ?>

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?php echo get_avatar_url($m4t_user->ID); ?>" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><div style="color:#000" id="fullname"><?php echo $m4t_user->display_name; ?></div> </h5>
                        <ul class="list-inline">
                            <li>
                                <a href="?page=change-profile.php" >
                                    <i class="zmdi zmdi-settings"></i>
                                </a>
                            </li>

                            <li>
                                <a href="?logout=1" class="text-custom">
                                    <i class="zmdi zmdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="?page=index.html" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Crytptocruncies </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">High</a></li>
                                    <li><a href="#">Low</a></li>
                                    <li><a href="#">24 hours Average </a></li>
                                    <li><a href="#">Weekly report</a></li>
                                    
                                </ul>
                            </li>

                         <!--    <li>
                                <a href="?page=typography.html" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> Typography </span> </a>
                            </li> -->

                           <!--  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="?page=ui-buttons.html">Buttons</a></li>
                                    <li><a href="?page=ui-cards.html">Cards</a></li>
                                    <li><a href="?page=ui-draggable-cards.html">Draggable Cards</a></li>
                                    <li><a href="?page=ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="?page=ui-material-icons.html">Material Design Icons</a></li>
                                    <li><a href="?page=ui-font-awesome-icons.html">Font Awesome</a></li>
                                    <li><a href="?page=ui-dripicons.html">Dripicons</a></li>
                                    <li><a href="?page=ui-themify-icons.html">Themify Icons</a></li>
                                    <li><a href="?page=ui-modals.html">Modals</a></li>
                                    <li><a href="?page=ui-notification.html">Notification</a></li>
                                    <li><a href="?page=ui-range-slider.html">Range Slider</a></li>
                                    <li><a href="?page=ui-components.html">Components</a>
                                    <li><a href="?page=ui-sweetalert.html">Sweet Alert</a>
                                    <li><a href="?page=ui-treeview.html">Tree view</a>
                                    <li><a href="?page=ui-widgets.html">Widgets</a></li>
                                </ul>
                            </li> -->

                          <!--   <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-text"></i><span class="label label-warning pull-right">7</span><span> Forms </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="?page=form-elements.html">General Elements</a></li>
                                    <li><a href="?page=form-advanced.html">Advanced Form</a></li>
                                    <li><a href="?page=form-validation.html">Form Validation</a></li>
                                    <li><a href="?page=form-wizard.html">Form Wizard</a></li>
                                    <li><a href="?page=form-fileupload.html">Form Uploads</a></li>
                                    <li><a href="?page=form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="?page=form-xeditable.html">X-editable</a></li>
                                </ul>
                            </li> -->

                           <!--  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="?page=tables-basic.html">Basic Tables</a></li>
                                    <li><a href="?page=tables-datatable.html">Data Table</a></li>
                                    <li><a href="?page=tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="?page=tables-editable.html">Editable Table</a></li>
                                    <li><a href="?page=tables-tablesaw.html">Tablesaw Table</a></li>
                                </ul>
                            </li> -->

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="?page=chart-flot.html">Flot Chart</a></li>
                                    <li><a href="?page=chart-morris.html">Morris Chart</a></li>
                                    <li><a href="?page=chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="?page=chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="?page=chart-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="?page=calendar.html" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Calendar </span></a>
                            </li>

                           <!--  <li>
                                <a href="?page=inbox.html" class="waves-effect"><i class="zmdi zmdi-email"></i><span class="label label-purple pull-right">New</span><span> Mail </span></a>
                            </li> -->

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-item"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <!-- <li><a href="?page=page-starter.html">Starter Page</a></li>
                                    <li><a href="?page=page-login.html">Login</a></li>
                                    <li><a href="?page=page-register.html">Register</a></li>
                                    <li><a href="?page=page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="?page=page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="?page=page-confirm-mail.html">Confirm Mail</a></li> -->
                                    <li><a href="?page=page-404.html">Error 404</a></li>
                                    <li><a href="?page=form-elements.html">General Elements</a></li>
                                   <!--  <li><a href="?page=page-500.html">Error 500</a></li> -->
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-layers"></i><span>other Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="?page=extras-projects.html">Projects</a></li>
                                    <!-- <li><a href="?page=extras-tour.html">Tour</a></li> -->
                                    <li><a href="?page=extras-taskboard.html">Taskboard</a></li>
                                    <!-- <li><a href="?page=extras-taskdetail.html">Task Detail</a></li> -->
                                    <li><a href="?page=extras-profile.html">Profile</a></li>
                                   <!--  <li><a href="?page=extras-maps.html">Maps</a></li>
                                    <li><a href="?page=extras-contact.html">Contact list</a></li>
                                    <li><a href="?page=extras-pricing.html">Pricing</a></li>
                                    <li><a href="?page=extras-timeline.html">Timeline</a></li>
                                    <li><a href="?page=extras-invoice.html">Invoice</a></li>
                                    <li><a href="?page=extras-faq.html">FAQ</a></li>
                                    <li><a href="?page=extras-gallery.html">Gallery</a></li>
                                    <li><a href="?page=extras-email-template.html">Email template</a></li>
                                    <li><a href="?page=extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="?page=extras-comingsoon.html">Coming soon</a></li> -->
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <?php } ?>
            <!-- Left Sidebar End -->


