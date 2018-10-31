<!DOCTYPE html>
<html>
    
<!-- Mirrored from hubancreative.com/projects/templates/coco/classy/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jun 2018 01:14:43 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Gallery | Coco - Responsive Bootstrap Admin Template</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	<div class="md-modal md-3d-flip-vertical" id="task-progress">
		<div class="md-content">
			<h3><strong>Task Progress</strong> Information</h3>
			<div>
				<p>CLEANING BUGS</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					<span class="sr-only">80&#37; Complete</span>
				  </div>
				</div>
				<p>POSTING SOME STUFF</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
					<span class="sr-only">65&#37; Complete</span>
				  </div>
				</div>
				<p>BACKUP DATA FROM SERVER</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
					<span class="sr-only">95&#37; Complete</span>
				  </div>
				</div>
				<p>RE-DESIGNING WEB APPLICATION</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
					<span class="sr-only">100&#37; Complete</span>
				  </div>
				</div>
				<p class="text-center">
				<button class="btn btn-danger btn-sm md-close">Close</button>
				</p>
			</div>
		</div>
	</div>
		
	<!-- Modal Logout -->
	<div class="md-modal md-just-me" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
				<p class="text-center">Are you sure want to logout from this awesome system?</p>
				<p class="text-center">
				<button class="btn btn-danger md-close">Nope!</button>
				<a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
				</p>
			</div>
		</div>
	</div>        <!-- Modal End -->	
	<!-- Begin page -->
	<div id="wrapper">
		
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="assets/img/logo.png" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                        <div class="dropdown-menu grid-dropdown">
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                </div>
                            </div>
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li class="language_bar dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                            <li class="unread">
                                <a href="#">
                                    <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                        <br /><i>2 minutes ago</i>
                                    </p>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                        <br /><i>8 minutes ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>John Malkovich</strong> Added 3 products
                                        <br /><i>3 hours ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                        <br /><i>12 hours ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>Johnny Depp</strong> Updated his avatar
                                        <br /><i>Yesterday</i>
                                    </p>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="images/users/user-35.jpg"></span> Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Account Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                            <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="right-opener">
                        <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="profile.html" class="rounded-image profile-image"><img src="images/users/user-100.jpg"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b>Jane</b></div>
                        <div class="profile-buttons">
                          <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                          <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a>
                          <a href="javascript:;" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                        </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul><li class='has_sub'><a href='javascript:void(0);'><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='index.html'><span>Dashboard v1</span></a></li><li><a href='index2.html'><span>Dashboard v2</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><i class='icon-feather'></i><span>UI Elements</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='alerts.html'><span>Alerts</span></a></li><li><a href='buttons.html'><span>Buttons</span></a></li><li><a href='calendar.html'><span>Calendar</span></a></li><li><a href='grid.html'><span>Grid</span></a></li><li><a href='icons.html'><span>Icons</span></a></li><li><a href='modals.html'><span>Modals</span></a></li><li><a href='nested-list.html'><span>Nested List</span></a></li><li><a href='notifications.html'><span>Notifications</span></a></li><li><a href='portlets.html'><span>Portlets</span></a></li><li><a href='progress-bars.html'><span>Progress Bars</span></a></li><li><a href='tabs-accordions.html'><span>Tabs & Accordions</span></a></li><li><a href='typography.html'><span>Typography</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><i class='icon-pencil-3'></i><span>Forms</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='forms.html'><span>Form Elements</span></a></li><li><a href='advanced-forms.html'><span>Advanced Forms</span></a></li><li><a href='form-wizard.html'><span>Form Wizard</span></a></li><li><a href='form-validation.html'><span>Form Validation</span></a></li><li><a href='form-uploads.html'><span>File Uploads</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Tables</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='tables.html'><span>Basic Tables</span></a></li><li><a href='datatables.html'><span>Datatables</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-map-marker'></i><span>Maps</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='google-maps.html'><span>Google Maps</span></a></li><li><a href='vector-maps.html'><span>Vector Maps</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Email</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='inbox.html'><span>Inbox</span></a></li><li><a href='read-message.html'><span>View Email</span></a></li><li><a href='new-message.html'><span>New Message</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><i class='icon-chart-line'></i><span>Charts</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='sparkline-charts.html'><span>Sparkline Charts</span></a></li><li><a href='morris-charts.html'><span>Morris Charts</span></a></li><li><a href='rickshaw-charts.html'><span>Rickshaw Charts</span></a></li><li><a href='other-charts.html'><span>Other Charts</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><i class='icon-megaphone'></i><span>Extras</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='blank.html'><span>Blank Page</span></a></li><li><a href='login.html'><span>Login</span></a></li><li><a href='register.html'><span>Register</span></a></li><li><a href='lockscreen.html'><span>Lock Screen</span></a></li><li><a href='404.html'><span>404 Error</span></a></li><li><a href='500.html'><span>500 Error</span></a></li><li><a href='profile.html'><span>User Profile</span></a></li><li><a href='invoice.html'><span>Invoice</span></a></li><li><a href='gallery.html' class='active'><span>Gallery</span></a></li><li><a href='maintenance.html'><span>Maintenance</span></a></li><li class='has_sub'><a href='javascript:void(0);'><span>3 Level menu</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='javascript:void(0);'><span>Sub Item</span></a></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><span>4 Level Menu</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li class='has_sub'><a href='javascript:void(0);'><span>Sub Item - level 3</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='javascript:void(0);'><span>Sub Item - level 4</span></a></li></ul></li></ul></li><li class='has_sub'><a href='javascript:void(0);'><span>Submenu with icons</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='javascript:void(0);'><i class='fa fa-camera'></i><span>Item with icon</span></a></li><li><a href='javascript:void(0);'><i class='entypo entypo-users'></i><span>Another Item</span></a></li></ul></li></ul></li></ul>                    <div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            <div class="portlets">
                <div id="chat_groups" class="widget transparent nomargin">
                    <h2>Chat Groups</h2>
                    <div class="widget-content">
                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><i class="fa fa-circle-o text-red-1"></i> Colleagues</a></li>
                            <li><a href="javascript:;"><i class="fa fa-circle-o text-blue-1"></i> Family</a></li>
                            <li><a href="javascript:;"><i class="fa fa-circle-o text-green-1"></i> Friends</a></li>
                        </ul>
                    </div>
                </div>

                <div id="recent_tickets" class="widget transparent nomargin">
                    <h2>Recent Tickets</h2>
                    <div class="widget-content">
                        <ul class="list-unstyled">
                            <li>
                                <a href="javascript:;">My wordpress blog is broken <span>I was trying to save my page and...</span></a>
                            </li>
                            <li>
                                <a href="javascript:;">Server down, need help!<span>My server is not responding for the last...</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div><br><br><br>
        </div>
            <div class="left-footer">
                <div class="progress progress-xs">
                  <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="progress-precentage">80%</span>
                  </div>
                  
                  <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
                </div>
            </div>
        </div>
        <!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
    <div class="right side-menu">
    	<ul class="nav nav-tabs nav-justified" id="right-tabs">
		  <li class="active"><a href="#feed" data-toggle="tab" title="Live Feed"><i class="icon-rss-2"></i></a></li>
		  <li><a href="#connect" data-toggle="tab" title="Chat"><i class="icon-chat"></i></a></li>
		  <li><a href="#settings" data-toggle="tab" title="Preferences"><i class="icon-wrench"></i></a></li>
		</ul>
		<div class="clearfix"></div>
		<div class="tab-content">
			<div class="tab-pane active" id="feed">
				<div class="tab-inner slimscroller">
					<div class="search-right">
					    <input type="text" class="form-control" placeholder="Search">
					</div>
					<div class="right-toolbar">
						<a href="javascript:;" class="pull-right">Settings <i class="icon-cog"></i></a>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="panel-group" id="collapse">
					  <div class="panel panel-default">
					    <div class="panel-heading bg-orange-1">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#rnotifications">
					          <i class="icon-bell-2"></i> Notifications
					          <span class="label bg-darkblue-1 pull-right">4</span>
					        </a>
					      </h4>
					    </div>
					    <div id="rnotifications" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="notification-list">
					      		<li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-video"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-users-1"></i></span> 3 Users signed up <span class="muted">16 minutes ago</span></a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-picture-1"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-hourglass-1"></i></span> Deadline for 1 project <span class="muted">12 minutes ago</span></a></li>
					      	</ul>
					      	<a class="btn btn-block btn-sm btn-warning">See all notifications</a>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading bg-green-3">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#remails">
					          <i class="icon-mail"></i> E-mails
					          <span class="label bg-darkblue-1 pull-right">3</span>
					        </a>
					      </h4>
					    </div>
					    <div id="remails" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="inbox-list">
					      		<li><a href="javascript:;"><span class="sender"><i class="icon-star text-yellow-2"></i> Kim Wilde</span> <span class="datetime">6 mins ago</span>
					      			<span class="title">You keep me hangin on</span>
					      			<span class="content">Where are you? I am waiting for 3 hours in the restaurant. I ate 3 hamburgers.</span>
					      		</a></li>
					      		<li><a href="javascript:;"><span class="sender">Tyler Durden</span> <span class="datetime">13 hours ago</span>
					      			<span class="title">Buy some soap from market before</span>
					      			<span class="content">We are crowded here. We need some more soap at home. Buy some before you come home.</span>
					      		</a></li>
					      		<li><a href="javascript:;"><span class="sender">John Bonomo</span> <span class="datetime">Yesterday</span>
					      			<span class="title">Late delivery</span>
					      			<span class="content">Hello, I ordered 15 box of viagra for a friend of mine but he still hasn't receive them.</span>
					      		</a></li>
					      	</ul>
					      	<a class="btn btn-block btn-sm btn-primary">Go to inbox</a>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading bg-blue-1">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#rupdates">
					          <i class="icon-signal-2"></i> Updates
					          <span class="label bg-darkblue-1 pull-right">5</span>
					        </a>
					      </h4>
					    </div>
					    <div id="rupdates" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="updates-list">
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-green-1"><i class="icon-comment-1"></i></span> <b>David Guetta</b> came online <abbr title="15 seconds ago">just now</abbr>.</a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-red-1"><i class="icon-user-3"></i></span> <b>Katy Perry</b> updated her profile <abbr title="4 mins ago">4 mins ago</abbr>.</a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-blue-1"><i class="icon-twitter-2"></i></span> <b>4 tweets posted</b> with cronjob <abbr title="22 mins ago">22 mins ago</abbr>.</a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-orange-3"><i class="icon-water"></i></span> <b>Adele</b> set fire to the rain <abbr title="43 mins ago">43 mins ago</abbr>.</a></li>
					      		<li><a href="javascript:;"><span class="icon-wrapper bg-pink-2"><i class="icon-heart-broken"></i></span> <b>Taylor Swift</b> learned that you are trouble <abbr title="3 hours ago">3 days ago</abbr>.</a></li>
					      	</ul>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="connect">
				<div class="tab-inner slimscroller">
					<div class="search-right">
					    <input type="text" class="form-control" placeholder="Search">
					</div>	
					<div class="panel-group" id="collapse">
					  <div class="panel panel-default" id="chat-panel">
					    <div class="panel-heading bg-darkblue-2">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#chat-coll">
					          <i class="icon-briefcase-1"></i> Colleagues
					          <span class="label bg-darkblue-1 pull-right">14</span>
					        </a>
					      </h4>
					    </div>
					    <div id="chat-coll" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="chat-list">
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg">Where is my mind</span></a></li>
					      		<li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
					      		<li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
					      		<li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
					      	</ul>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default" id="chat-panel">
					    <div class="panel-heading bg-darkblue-2">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					          <i class="icon-heart-3"></i> Friends
					          <span class="label bg-darkblue-1 pull-right">3</span>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse in">
					      <div class="panel-body">
					      	<ul class="list-unstyled" id="chat-list">
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
					      		<li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg" title="Eminem - The Monster ft. Rihanna"><i class="icon-play"></i> Eminem - The Monster ft. Rihanna</span></a></li>
					      		<li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
					      		<li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
					      		<li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
					      	</ul>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="settings">
				<div class="tab-inner slimscroller">
					<div class="col-sm-12">
						<h3>Preferences</h3>
						<div class="row">
							<div class="col-xs-8">
								Live data updates
							</div>
							<div class="col-xs-4">
								<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8">
								Live feeds
							</div>
							<div class="col-xs-4">
								<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8">
								Sync data to cloud
							</div>
							<div class="col-xs-4">
								<input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8">
								Keep activity record
							</div>
							<div class="col-xs-4">
								<input type="checkbox" class="ios-switch ios-switch-danger ios-switch-sm" checked />
							</div>
						</div>
						<h4>Other Settings</h4>
						<div class="row">
							<div class="col-xs-12">
								<label class="checkboxw"><input type="checkbox" checked> Autosave settings</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<label class="checkboxw"><input type="checkbox"> Always online</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- Right Sidebar End -->		
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">				
				<!-- Your awesome content goes here -->
				<div class="widget transparent animated fadeInDown">
					<h2><strong>Simple</strong> Gallery</h2>
						
						<h4>Image responsive zoom</h4>
						
						<div class="gallery-wrap">
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img001.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img001_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img002.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img002_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img003.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img003_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img004.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img004_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img005.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img005_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
								</div>
							</div>
						</div>

						<hr />
						
						<h4>Static gallery</h4>
						
						<div class="gallery-wrap">
							<div class="column">
								<div class="inner">
									<div class="img-wrap">
										<img src="images/small/img001_small.jpg" title="Image title here">
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-wrap">
										<img src="images/small/img002_small.jpg" title="Image title here">
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-wrap">
										<img src="images/small/img003_small.jpg" title="Image title here">
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-wrap">
										<img src="images/small/img004_small.jpg" title="Image title here">
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-wrap">
										<img src="images/small/img005_small.jpg" title="Image title here">
									</div>
								</div>
							</div>
						</div>
						
						<hr />
						
						
						
						<h4>Image gallery with frame border</h4>
						
						<div class="gallery-wrap">
							<div class="column">
								<div class="inner">
									<div class="img-frame">
										<a class="zooming" href="images/big/img001.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img001_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame">
										<a class="zooming" href="images/big/img002.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img002_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame">
										<a class="zooming" href="images/big/img003.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img003_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame">
										<a class="zooming" href="images/big/img004.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img004_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame">
										<a class="zooming" href="images/big/img005.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img005_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										</a>
									</div>
								</div>
							</div>
						</div>
				
				</div>
				
				<div class="box-info animated fadeInDown">
					<h2><strong>Gallery</strong> with caption</h2>
						
						<div class="gallery-wrap">
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img001.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img001_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img002.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img002_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
									<div class="caption-hover success">
									Hi, I'm a success caption!
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img003.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img003_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover warning">
									Hi, I'm a warning caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img004.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img004_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover danger">
									Hi, I'm a danger caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img005.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img005_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover info">
									Hi, I'm a info caption!
									</div>
									</a>
								</div>
							</div>
						</div>	
						
						<hr />
						
						<h4>Another caption style</h4>
						
						<div class="gallery-wrap">
							<div class="column">
								<div class="inner">
									<div class="img-frame">
										<a class="zooming" href="images/big/img006.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img006_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-hover">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame success">
										<a class="zooming" href="images/big/img007.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img007_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-hover success">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame warning">
										<a class="zooming" href="images/big/img008.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img008_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-hover warning">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame danger">
										<a class="zooming" href="images/big/img009.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img009_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-hover danger">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame info">
										<a class="zooming" href="images/big/img010.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img010_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-hover info">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						
						<hr />
						
						<h4>Static caption style</h4>
						
						<div class="gallery-wrap">
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img006.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img006_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img007.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img007_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static success">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img008.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img008_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static warning">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img009.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img009_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static danger">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<a class="zooming" href="images/big/img010.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img010_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static info">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
						</div>
						
						<div class="gallery-wrap">
							<div class="column">
								<div class="inner">
									<div class="img-frame">
										<a class="zooming" href="images/big/img006.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img006_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-static">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame success">
										<a class="zooming" href="images/big/img007.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img007_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-static success">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame warning">
										<a class="zooming" href="images/big/img008.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img008_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-static warning">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame danger">
										<a class="zooming" href="images/big/img009.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img009_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-static danger">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="inner">
									<div class="img-frame info">
										<a class="zooming" href="images/big/img010.jpg" title="Image title here">
										<div class="img-wrap">
											<img src="images/small/img010_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
										</div>
										<div class="caption-static info">
										Hi, I'm a caption!
										</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					
					
				</div>
				
				<div class="box-info animated fadeInDown">
					<h2><strong>Gallery</strong> column</h2>
					
						<div class="gallery-wrap">
							<div class="column-4">
								<div class="inner">
									<a class="zooming" href="images/big/img001.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img001_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-4">
								<div class="inner">
									<a class="zooming" href="images/big/img002.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img002_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-4">
								<div class="inner">
									<a class="zooming" href="images/big/img003.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img003_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-4">
								<div class="inner">
									<a class="zooming" href="images/big/img004.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img004_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-4">
								<div class="inner">
									<a class="zooming" href="images/big/img005.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img005_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-4">
								<div class="inner">
									<a class="zooming" href="images/big/img006.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img006_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-4">
								<div class="inner">
									<a class="zooming" href="images/big/img007.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img007_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-4">
								<div class="inner">
									<a class="zooming" href="images/big/img008.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img008_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-static">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
						</div>

						<hr />
						
					
						<div class="gallery-wrap">
							<div class="column-3">
								<div class="inner">
									<a class="zooming" href="images/big/img001.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img001_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-3">
								<div class="inner">
									<a class="zooming" href="images/big/img009.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img009_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-3">
								<div class="inner">
									<a class="zooming" href="images/big/img003.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img003_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									<div class="caption-hover">
									Hi, I'm a caption!
									</div>
									</a>
								</div>
							</div>
							<div class="column-3">
								<div class="inner">
									<a class="zooming" href="images/big/img004.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img004_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
								</div>
							</div>
							<div class="column-3">
								<div class="inner">
									<a class="zooming" href="images/big/img005.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img005_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
								</div>
							</div>
							<div class="column-3">
								<div class="inner">
									<a class="zooming" href="images/big/img006.jpg" title="Image title here">
									<div class="img-wrap">
										<img src="images/small/img006_small.jpg" alt="Image gallery" title="Image title here" class="mfp-fade">
									</div>
									</a>
								</div>
							</div>
						</div>
				
				</div>

				            <!-- Footer Start -->
            <footer>
                Huban Creative &copy; 2014
                <div class="footer-links pull-right">
                	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                </div>
            </footer>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->
	</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="assets/libs/fastclick/fastclick.js"></script>
	<script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="assets/libs/nifty-modal/js/classie.js"></script>
	<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
	<script src="assets/libs/sortable/sortable.min.js"></script>
	<script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/libs/bootstrap-select2/select2.min.js"></script>
	<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<script src="assets/libs/pace/pace.min.js"></script>
	<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="assets/libs/prettify/prettify.js"></script>

	<script src="assets/js/init.js"></script>
	</body>

<!-- Mirrored from hubancreative.com/projects/templates/coco/classy/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jun 2018 01:15:13 GMT -->
</html>
