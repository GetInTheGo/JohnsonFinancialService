<?php require_once( '../Users/models/config.php'); require_once( '../Users/models/header.php'); ?>


<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="Teamreset.css">
<link rel="stylesheet" href="Teamstyle.css">
<script src="Teammodernizr.js"></script>
<script src="Teammain.js"></script>
<script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
<script src= "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-animate.js")></script>
<script src="/JS/app.js"></script>
<link rel='stylesheet' href='/CSS/style.css' type='text/css'>

<body ng-app="MainSite" scroll ng-controller="agentCtrl">
		<div class='site-header newMenu' style='z-index: 9;' ng-hide="boolChangeClass">
			<div class='inner-header'>
				<div class='container' style='z-index: 9; '>
					<a href='index.html' id='branding'>
						<img src='/Images/Logos/JohnsonFinance.png' alt='' class='logo' style='height:120px;margin-top:-20px;'>
						<div class='logo-text'>
							<h1 class='site-title'><span class='GText'></span></h1>
							<small class='site-description'><span class='GText'></span></small>
						</div>
					</a>
					<!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class='main-navigation'>
						<button type='button' class='menu-toggle'><i class='fa fa-bars'></i>
						</button>
						<ul class='menu'>
							<li class='menu-item'><a href='/'>Home</a>
							</li>
							<li class='menu-item'><a href='/Careers'>Careers</a>
							</li>
							<li class='menu-item'><a href='/AboutUs'>About</a>
							</li>
							<li class='menu-item current-menu-item'><a href='/Agents'>Agents</a>
							</li>
							<li class='menu-item'><a href='contact.html'>Contact</a>
							</li>
							<?php if(isUserLoggedIn()){ if ($loggedInUser->checkPermission(array(2))){ echo "
							<li class='menu-item'><a href='Admin/ManagmentPortal/AngularApp/'>Admin</a>
							</li>"; } } ?>
						</ul>
						<!-- .menu -->
					</div>
					<!-- .main-navigation -->

					<div class='mobile-navigation'></div>
					<div class='login-link'>
						<?php if(!isUserLoggedIn()) { echo "<a href='Users/loginold.php'>Log In</a>"; } else { echo "<a href='Users/logout.php'>Log Out</a>"; } ?>
					</div>
				</div>
			</div>
		</div>
	<section class='newMenu'style="width:100%;z-index:99; position:fixed;display:block" ng-show="boolChangeClass">
		<header class="cdHead-header">
		<a href="#0" class="cdHead-logo"><img src="/Images/Logos/logosimp.png" alt="Logo" height= 50 style="z-index:50"></a>
		<a href="#0" class="cdHead-3d-nav-trigger">
			Menu
			<span></span>
		</a>
	</header> <!-- .cdHead-header -->

	<nav class="cdHead-3d-nav-container">
		<ul class="cdHead-3d-nav">
			<li>
				<a href="/"><i class="fa fa-home menuicon"></i><br>Home</a>
			</li>

			<li>
				<a href="/Careers"><i class="fa fa-mortar-board menuicon"></i><br>Careers</a>
			</li>
	
			<li>
				<a href="#0"><i class="fa fa-building menuicon"></i><br>About</a>
			</li>
			<li class="cdHead-selected">
				<a href="/Agents"><i class="fa fa-child menuicon"></i><br>Agents</a>
			</li>
			<li>
				<a href="#0"><i class="fa fa-envelope menuicon"></i><br>Contact</a>
			</li>
			<?php if(isUserLoggedIn()){ if ($loggedInUser->checkPermission(array(2))){ echo "
							<li>
							<a href='/Admin/ManagmentPortal/AngularApp/'><i class='fa fa-line-chart menuicon'></i><br>Admin</a>
							</li>"; } } ?>
		</ul> <!-- .cdHead-3d-nav -->
	
		<span class="cdHead-marker color-1"></span>	
		
	</nav> <!-- .cdHead-3d-nav-container -->
	</section>
		<div class='header-banner' style="height:400px; background-image:url('/Images/Backgrounds/room-jpg.jpg')"></div> 
		<main class="cdcd-main-content" id="mainC">
					
			<section id="cd-team" class="cd-section" style="top:0px; position:relative">
				<div class="cd-container">
					<h2>Agents</h2>
					<ul>
						<li ng-repeat="agent in Agents">
							<a id="open-bio" ng-click="setindex(agent.agentid)" data-type="member-{{agent.agentid}}" style="cursor: pointer">
								<figure>
									<img src="{{agent.profilepic}}" alt="Team member 1">
									<div class="cd-img-overlay"><span>View Bio</span>
									</div>
								</figure>

								<div class="cd-member-info">
									{{agent.fname + ' ' + agent.lname}} <span>{{agent.city+ ', ' + agent.state}}</span>
								</div>
								<!-- cd-member-info -->
							</a>
						</li>
					</ul>
					<ul>
				

										</div>
				<!-- cd-container -->
			</section>
			<!-- cd-team -->

			<div class="cd-overlay"></div>
		</main>

		<div ng-repeat="agent in Agents" class="cd-member-bio member-{{agent.agentid" data-ng-class="{'slide-in':index==agent.agentid}"  style='z-index: 999;'>
			<div class="cd-member-bio-pict">
				<img src="/Images/Backgrounds/ForestBackGround.jpg" alt="Member Bio image">
			</div>
			<!-- cd-member-bio-pict -->

			<div class="cd-bio-content">
				<h1>{{agent.fname + ' ' + agent.lname}}</h1>
				<h3>{{agent.city+ ', ' + agent.state}}</h3>
				<p>Pamela was born and raised in Southern California and attended Dixie State University. She is a nutrition weight loss specialist and Is a certified personal trainer with The National Academy of Sports Medicine (NASM) with over 20 years of experience.
					Additionally, she is Zumba certified and specializes in bootcamp and cross-training. She has years of experience in conducting international fitness programs and is our lead instructor in Guatemala. Her classes have yielded hundreds of success stories
					and lifelong friends. We consider her to be essential in the Lose Yourself in Guatemala program.

				</p>
			</div>
			<!-- cd-bio-content -->
		</div>
		<!-- cd-member-bio -->
		<!-- cd-member-bio -->
		
		<!-- cd-member-bio -->
		<a href="#0" class="cd-member-bio-close" data-ng-class="{'bio-close-is-visible':index!=0}"><i class="fa fa-times"></i></a> 
		<!-- close the author bio section -->
	</div>

	</section>

</body>

</html>
