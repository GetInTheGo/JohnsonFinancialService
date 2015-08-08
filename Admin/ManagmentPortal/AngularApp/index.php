<?php
require_once('../../../Users/models/config.php');
if (!securePage($_SERVER['PHP_SELF'])){}
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
		
	    <!--<link href="../assets/css/bootstrap.min.css" rel="stylesheet">-->	
		<!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">-->	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">	
		<link href="../assets/css/jquery.mmenu.css" rel="stylesheet">	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!--<link href="../assets/css/font-awesome.min.css" rel="stylesheet">-->
		<link href="../assets/css/climacons-font.css" rel="stylesheet">
		<link href="../assets/plugins/xcharts/css/xcharts.min.css" rel=" stylesheet">		
		<link href="../assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet">
		<link href="../assets/plugins/morris/css/morris.css" rel="stylesheet">
		<link href="../assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
		<link href="../assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">	    
	    <link href="../assets/css/style.min.css" rel="stylesheet">
		<link href="../assets/css/add-ons.min.css" rel="stylesheet">		
		<link href="../assets/css/AgentPortal.css" rel="stylesheet">

		<script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
		<script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-animate.js")></script>
    	<script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-route.js")></script>
		 <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-sanitize.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>
</head>

<body ng-app="ManageAgents">

<div ng-controller="userCtrl">

	<div ng-include="'Partials/Header.php'"></div>
	<div style="height:5px;width:100%"></div>

      <div style="display:inline-block;position:relative;top:60px;left:250px;min-width:90%" ui-view></div>        
  </div>         
	<!--<div ng-view style="display:inline-block;position:relative;top:60px;left:250px;min-width:90%" ng-class="{reposition: (SideBarVis == one)}"></div>-->
</div>	


<script src= "JS/app.js"></script>

    
     

		<script src="../assets/js/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.min.js"</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
		</script>
	<script></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
	<!--<script src="../assets/js/bootstrap.min.js"></script>-->	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.2/ui-bootstrap.min.js"></script>
	<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.13.2.js"></script>
	
	
	<!-- page scripts 
	<script src="../assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
	<script src="../assets/plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script src="../assets/plugins/moment/moment.min.js"></script>
	<script src="../assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>-->
	<!--[if lte IE 8]>
		<script language="javascript" type="text/javascript" src="assets/plugins/excanvas/excanvas.min.js"></script>
	<![endif]
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
	<script src="../assets/plugins/gauge/gauge.min.js"></script>-->
	
	
	<!-- theme scripts -->
	<script src="../assets/js/SmoothScroll.js"></script>
	
	<script src="../assets/js/core.min.js"></script>
	<script src="../assets/plugins/d3/d3.min.js"></script>	
	
	<!-- inline scripts related to this page -->
	<!--<script src="../assets/js/pages/index.js"></script>	-->
	
</body>
</html>