<?php
require_once('../../../../Users/models/config.php');
?>
<?php
	// Set session variables
	$Username = $_SESSION["userCakeUser"];
?>

<!--Start Navigation Bar-->
<div ng-controller="userCtrl">
	<div class="navbar" role="navigation">
	
		<div class="container-fluid">		 
			<ul class="nav navbar-nav navbar-actions navbar-left"  ng-click="SideBarVis = { 'one': 'two', 'two':'one'}[SideBarVis]">
				<li class="visible-md visible-lg"><a id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
				<li class="visible-xs visible-sm"><a id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>			
			</ul>
			
	        <ul class="nav navbar-nav navbar-right">
				<li class="dropdown visible-md visible-lg" dropdown is-open="status.isopen" auto-close="disabled" >
	        		<a dropdown-toggle ng-disabled="disabled"><i class="fa fa-envelope-o"></i><span class="badge">{{Emails.Unread}}</span></a>
	        		<ul class="dropdown-menu" style="max-height:400px;width:400px;overflow-y: scroll;overflow-x: hidden;margin-right:-100px">
						<li class="dropdown-menu-header">
							<strong>{{Emails.AllEmails.Total}}</strong>
						</li>
						<li class="avatar" ng-repeat="email in Emails.AllEmails" style="width:400px;border-bottom:5px;border-color:black" >
							<a  style="width:400px">
								<div ng-click="showPopup(email);" style="width:400px;">
								<img class="avatar" src="../assets/img/avatar1.jpg">
								<div style="width:250px;overflow:hidden">{{email.subject}}</div>
								<small>{{email.date}}</small>
								</div>
								
								<span class="label label-info"  style="background:none;" ><i class="fa fa-navicon" style ="color:black;z-index:9" ng-click="email.Expand =1"></i></span>
							
							<div class="emailMenu" ng-show="email.Expand==1" style="top:0px;display:block;position:absolute;right:0px;height:100%;width:150px;background-color:blue;z-index:10">
									<div  style="float:left;background-color:green;position:relative;height:100%;width:40%;color:white;line-height:100%;text-align:center;vertical-align:middle"><i style="color:white" class="fa fa-mail-reply"></i></div>
									<div  style="float:left;background-color:red;position:relative;height:100%;width:40%;line-height:100%;text-align:center;vertical-align:middle"><i style="color:white;vertical-align:middle;font-weight:bolder" class="fa fa-trash-o" ></i></div>
									<div  ng-click="email.Expand =2" style="float:left;background-color:grey;position:relative;height:100%;width:20%;line-height:100%;text-align:center;vertical-align:middle"><i style="color:white" class="fa fa-remove" ></i></div>
								</div>	
							</a>
								
							</li>
						
						<li class="dropdown-menu-footer text-center">
							<a href="page-inbox.html">{{isPopupVisible}}</a>
						</li>	
	        		</ul>
			
	
					
	 <script type="text/ng-template" id="myModalContent.html">
        <div class="modal-header">
             <button type="button" class="close" aria-hidden="true" ng-click="closePopup()">&times;</button>
            <h3>{{Currentemail.subject}}</h3>
        </div>
        <div class="modal-body">
             <strong>From:</strong> {{Currentemail.from}}<br />
            <strong>Date:</strong> {{Currentemail.date}}<br />
            <br />
			<iframe src={{"/Test/GetSpecificEmail.php?id="+Currentemail.uid}} width="100%" height="300" style="border:none"></iframe>
			
        </div>
        <div class="modal-footer">
            <a class="btn btn-primary" ng-click="closePopup()">Close</a>
        </div>
    </script>

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
                            <a class="notification-user" ng-click="SideBarVis ='two'"> Sharon Rose </a> 
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
						<li><a href="../../../Users/account.php"><i class="fa fa-wrench"></i> Settings</a></li>
						<li><a href="page-invoice.html"><i class="fa fa-usd"></i> Payments <span class="label label-default">10</span></a></li>
						<li><a href="gallery.html"><i class="fa fa-file"></i> File <span class="label label-primary">27</span></a></li>
						<li class="divider"></li>						
						<li><a href="../../../Users/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>	
	        		</ul>
	      		</li>
				<li><a href="../../../Users/logout.php"><i class="fa fa-power-off"></i></a></li>
			</ul>
			
		</div>
		
	</div>
	
	
<!--End Navigation Bar-->

<!--Start Side Bar-->
	<div ng-show="SideBarVis=='one'">
	
			<div class="sidebar ">
								
				<div class="sidebar-collapse">
					<div class="sidebar-header t-center">
                        <span><img class="text-logo" style="width:80%;diplay:block;margin-top:10px;position:relative" src="../../../Images/Logos/logosimp3.png"></span>
                    </div>										
					<div class="sidebar-menu" style="margin-top:30px">						
						<ul class="nav nav-sidebar">
							<li><a href="index.html"><i class="fa fa-laptop"></i><span class="text"> Dashboard</span></a></li>
							<li><a href="" ng-model="collapsed1" ng-click="collapsed1=!collapsed1"><i class="fa fa-user"></i><span class="text"> <?php echo $Username->displayname; ?></span><span class="fa fa-angle-down pull-right"></span></a></li>
							<ul class="subMenu" ng-show="collapsed1">
									<li><a href="../../../Users/account.php"><i class="fa fa-gear"></i><span class="text"> Settings</span></a></li>
									<li><a href="ui-nestable-list.html"><i class="fa fa-book"></i><span class="text"> Contact Info</span></a></li>
									<li><a href="ui-elements.html"><i class="fa fa-bar-chart-o"></i><span class="text"> Update Numbers</span></a></li>
							</ul>
							<li><a href=""><i class="fa fa-bar-chart-o"></i><span class="text"> Reports</span></a></li>
							<li><a  href="" ng-model="collapsed2" ng-click="collapsed2=!collapsed2"><i class="fa  fa-pencil-square-o"></i><span class="text"> Training</span> <span class="fa fa-angle-down pull-right"></span></a></li>
								<ul class="subMenu" ng-show="collapsed2">
										<li><a href="ui-sliders-progress.html"><i class="fa fa-envelope"></i><span class="text"> Videos</span></a></li>
										<li><a href="ui-nestable-list.html"><i class="fa fa-picture-o"></i><span class="text"> Documents</span></a></li>
										<li><a href="ui-nestable-list.html"><i class="fa fa-film"></i><span class="text"> Meeting Notes</span></a></li>
								</ul>
							<li><a href="" ng-model="collapsed3" ng-click="collapsed3=!collapsed3"><i class="fa fa-briefcase"></i><span class="text"> Rescources</span> <span class="fa fa-angle-down pull-right"></span></a></li>
								<ul class="subMenu" ng-show="collapsed3">
										<li><a href="#SendEmail"><i class="fa fa-envelope"></i><span class="text"> Emails</span></a></li>
										<li><a href="#LostPassword"><i class="fa fa-picture-o"></i><span class="text"> Graphics</span></a></li>
										<li><a href="ui-nestable-list.html"><i class="fa fa-film"></i><span class="text"> Videos</span></a></li>
										<li><a href="ui-elements.html"><i class="fa fa-list"></i><span class="text"> Presentations</span></a></li>
										<li><a href="ui-elements.html"><i class="fa fa-file-text"></i><span class="text"> Marketing</span></a></li>
								</ul>
							<li><a href="" ng-model="collapsed4" ng-click="collapsed4=!collapsed4"><i class="fa fa-group"></i><span class="text"> Manage Agents</span> <span class="fa fa-angle-down pull-right"></span></a></li>
								<ul class="subMenu" ng-show="collapsed4">
										<li><a href="#AgentList"><i class="fa fa-align-left"></i><span class="text"> Agent List</span></a></li>
										<li><a href="ui-nestable-list.html"><i class="fa fa-outdent"></i><span class="text"> Add Agent</span></a></li>
										<li><a href="ui-elements.html"><i class="fa fa-list"></i><span class="text"> Reports</span></a></li>
								</ul>
							<li><a href="#ToDoList"><i class="fa fa-sitemap"></i><span class="text"> Recruiting</span></a></li>
											
							
						</ul>
					</div>					
				</div>
	</div>
	</div>
	
	<script src= "../../../ManageAgents/myUsers.js"></script>
