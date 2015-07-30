<?php
require_once('../../../Users/models/config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Agent Portal</title>		
		<link href="../../../Images/Icons/Chart1.png" rel="shortcut icon" />
		<!-- Import google fonts - Heading first/ text second -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Droid+Sans:400,700' />
        <!--[if lt IE 9]>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
<![endif]-->

		<!-- Fav and touch icons -->
		<link href="../Images/Icons/Chart1.png" rel="shortcut icon" />

	    <!-- Css files -->
		
	    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">		
		<link href="../assets/css/jquery.mmenu.css" rel="stylesheet">		
		<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="../assets/css/climacons-font.css" rel="stylesheet">
		<link href="../assets/plugins/xcharts/css/xcharts.min.css" rel=" stylesheet">		
		<link href="../assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet">
		<link href="../assets/plugins/morris/css/morris.css" rel="stylesheet">
		<link href="../assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
		<link href="../assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">	    
	    <link href="../assets/css/style.min.css" rel="stylesheet">
		<link href="../assets/css/add-ons.min.css" rel="stylesheet">		

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
</head>

<body>

	
	
	
<?php
	// Set session variables
	$Username = $_SESSION["userCakeUser"];
?>
<!--Start Navigation Bar-->
	<div class="navbar" role="navigation">
	
		<div class="container-fluid">		
			
			<ul class="nav navbar-nav navbar-actions navbar-left">
				<li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
				<li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>			
			</ul>
			
			<form class="navbar-form navbar-left">
				<button type="submit" class="fa fa-search"></button>
				<input type="text" class="form-control" placeholder="Search..."></a>
			</form>
			
	        <ul class="nav navbar-nav navbar-right">
				<li class="dropdown visible-md visible-lg">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="badge">5</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
							    <span class="sr-only">30% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="page-inbox.html">
								<img class="avatar" src="assets/img/avatar1.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="page-inbox.html">
								<img class="avatar" src="assets/img/avatar2.jpg">
								<div>New message</div>
								<small>3 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="page-inbox.html">
								<img class="avatar" src="assets/img/avatar3.jpg">
								<div>New message</div>
								<small>4 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="page-inbox.html">
								<img class="avatar" src="assets/img/avatar4.jpg">
								<div>New message</div>
								<small>30 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="page-inbox.html">
								<img class="avatar" src="assets/img/avatar5.jpg">
								<div>New message</div>
								<small>1 hours ago</small>
							</a>
						</li>						
						<li class="dropdown-menu-footer text-center">
							<a href="page-inbox.html">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
				<li class="dropdown visible-md visible-lg">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="badge">3</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Notifications</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
							    <span class="sr-only">30% Complete (success)</span>
							  </div>
							</div>
						</li>							
                        <li class="clearfix">
							<i class="fa fa-comment"></i> 
                            <a href="page-activity.html" class="notification-user"> Sharon Rose </a> 
                            <span class="notification-action"> replied to your </span> 
                            <a href="page-activity.html" class="notification-link"> comment</a>
                        </li>
                        <li class="clearfix">
                            <i class="fa fa-pencil"></i> 
                            <a href="page-activity.html" class="notification-user"> Nadine </a> 
                            <span class="notification-action"> just write a </span> 
                            <a href="page-activity.html" class="notification-link"> post</a>
                        </li>
                        <li class="clearfix">
                            <i class="fa fa-trash-o"></i> 
                            <a href="page-activity.html" class="notification-user"> Lorenzo </a> 
                            <span class="notification-action"> just remove <a href="#" class="notification-link"> 12 files</a></span> 
                        </li>                        
						<li class="dropdown-menu-footer text-center">
							<a href="page-activity.html">View all notification</a>
						</li>
	        		</ul>
	      		</li>
				<li class="dropdown visible-md visible-lg">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></a>					
					<ul class="dropdown-menu update-menu" role="menu">
						<li><a href="#"><i class="fa fa-database"></i> Database </a>
                        </li>
                        <li><a href="#"><i class="fa fa-bar-chart-o"></i> Connection </a>
                        </li>
                        <li><a href="#"><i class="fa fa-bell"></i> Notification </a>
                        </li>
                        <li><a href="#"><i class="fa fa-envelope"></i> Message </a>
                        </li>
                        <li><a href="#"><i class="fa fa-flash"></i> Traffic </a>
                        </li>
						<li><a href="#"><i class="fa fa-credit-card"></i> Invoices </a>
                        </li>
                        <li><a href="#"><i class="fa fa-dollar"></i> Finances </a>
                        </li>
                        <li><a href="#"><i class="fa fa-thumbs-o-up"></i> Orders </a>
                        </li>
						<li><a href="#"><i class="fa fa-folder"></i> Directories </a>
                        </li>
                        <li><a href="#"><i class="fa fa-users"></i> Users </a>
                        </li>		
					</ul>
				</li>
				<li class="dropdown visible-md visible-lg">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="user-avatar" style="border-radius:20px;" src="<?php echo "../../../Images/ProfilePhotos/" . $loggedInUser->returnProfilePic();?>" alt="user-mail"><?php echo $Username->displayname; ?></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Account</strong>
						</li>						
						<li><a href="page-profile.html"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="page-login.html"><i class="fa fa-wrench"></i> Settings</a></li>
						<li><a href="page-invoice.html"><i class="fa fa-usd"></i> Payments <span class="label label-default">10</span></a></li>
						<li><a href="gallery.html"><i class="fa fa-file"></i> File <span class="label label-primary">27</span></a></li>
						<li class="divider"></li>						
						<li><a href="index.html"><i class="fa fa-sign-out"></i> Logout</a></li>	
	        		</ul>
	      		</li>
				<li><a href="../../../Users/logout.php"><i class="fa fa-power-off"></i></a></li>
			</ul>
			
		</div>
		
	</div>
<!--End Navigation Bar-->

<!--Start Side Bar-->
			<div class="sidebar ">
								
				<div class="sidebar-collapse">
					<div class="sidebar-header t-center">
                        <span><img class="text-logo" style="width:40%;diplay:block;bottom:20px;position:relative" src="../../../Images/Logos/TempLogo2.png"></span>
                    </div>										
					<div class="sidebar-menu">						
						<ul class="nav nav-sidebar">
							<li><a href="index.html"><i class="fa fa-laptop"></i><span class="text"> Dashboard</span></a></li>
							<li><a href="#"><i class="fa fa-user"></i><span class="text"> <?php echo $Username->displayname; ?></span><span class="fa fa-angle-down pull-right"></span></a>
								<ul class="nav sub">
									<li><a href="../../../Users/account.php"><i class="fa fa-gear"></i><span class="text"> Settings</span></a></li>
									<li><a href="ui-nestable-list.html"><i class="fa fa-book"></i><span class="text"> Contact Info</span></a></li>
									<li><a href="ui-elements.html"><i class="fa fa-bar-chart-o"></i><span class="text"> Update Numbers</span></a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-bar-chart-o"></i><span class="text"> Reports</span> <span class="fa fa-angle-down pull-right"></span></a></li>
							<li>
								<a href="#"><i class="fa  fa-pencil-square-o"></i><span class="text"> Training</span> <span class="fa fa-angle-down pull-right"></span></a>
								<ul class="nav sub">
									<li><a href="ui-sliders-progress.html"><i class="fa fa-envelope"></i><span class="text"> Videos</span></a></li>
									<li><a href="ui-nestable-list.html"><i class="fa fa-picture-o"></i><span class="text"> Documents</span></a></li>
									<li><a href="ui-nestable-list.html"><i class="fa fa-film"></i><span class="text"> Meeting Notes</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa fa-briefcase"></i><span class="text"> Rescources</span> <span class="fa fa-angle-down pull-right"></span></a>
								<ul class="nav sub">
									<li><a href="ui-sliders-progress.html"><i class="fa fa-envelope"></i><span class="text"> Emails</span></a></li>
									<li><a href="ui-nestable-list.html"><i class="fa fa-picture-o"></i><span class="text"> Graphics</span></a></li>
									<li><a href="ui-nestable-list.html"><i class="fa fa-film"></i><span class="text"> Videos</span></a></li>
									<li><a href="ui-elements.html"><i class="fa fa-list"></i><span class="text"> Presentations</span></a></li>
									<li><a href="ui-elements.html"><i class="fa fa-file-text"></i><span class="text"> Marketing</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa fa-group"></i><span class="text"> Manage Agents</span> <span class="fa fa-angle-down pull-right"></span></a>
								<ul class="nav sub">
									<li><a href="ui-sliders-progress.html"><i class="fa fa-align-left"></i><span class="text"> Agent List</span></a></li>
									<li><a href="ui-nestable-list.html"><i class="fa fa-outdent"></i><span class="text"> Add Agent</span></a></li>
									<li><a href="ui-elements.html"><i class="fa fa-list"></i><span class="text"> Reports</span></a></li>
								</ul>
							</li>
							<li><a href="index.html"><i class="fa fa-sitemap"></i><span class="text"> Recruiting</span></a></li>
											
							
						</ul>
					</div>					
				</div>
				
		
	
	
		
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="../assets/js/jquery-2.1.1.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>	
	
	
	<!-- page scripts -->
	<script src="../assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
	<script src="../assets/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script src="../assets/plugins/moment/moment.min.js"></script>
	<script src="../assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
	<!--[if lte IE 8]>
		<script language="javascript" type="text/javascript" src="assets/plugins/excanvas/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.stack.min.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="../assets/plugins/flot/jquery.flot.spline.min.js"></script>
	<script src="../assets/plugins/xcharts/js/xcharts.min.js"></script>
	<script src="../assets/plugins/autosize/jquery.autosize.min.js"></script>
	<script src="../assets/plugins/placeholder/jquery.placeholder.min.js"></script>
	<script src="../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/raphael/raphael.min.js"></script>
	<script src="../assets/plugins/morris/js/morris.min.js"></script>
	<script src="../assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../assets/plugins/jvectormap/js/gdp-data.js"></script>	
	<script src="../assets/plugins/gauge/gauge.min.js"></script>
	
	
	<!-- theme scripts -->
	<script src="../assets/js/SmoothScroll.js"></script>
	<script src="../assets/js/jquery.mmenu.min.js"></script>
	<script src="../assets/js/core.min.js"></script>
	<script src="../assets/plugins/d3/d3.min.js"></script>	
	
	<!-- inline scripts related to this page -->
	<script src="../assets/js/pages/index.js"></script>	
	
	<!-- end: JavaScript-->
	
</body>
</html>