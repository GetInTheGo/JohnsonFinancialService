

<?php
require_once('Users/models/config.php');
require_once('Users/models/header.php');

	echo "
	<link href='/CSS/Menu.css' rel='stylesheet' type='text/css'>
	<body>
		<div id='perspective' class='perspective effect-rotateleft'>
			<div class='container'>
				<div class='wrapper'>
			<p><button id='showMenu'>Show Menu</button></p>
			<div id='site-content'>
			<div class='site-header' style='z-index: 9'>
				<div class='inner-header'>
				<div class='container' style='z-index: 9; '>
					<a href='index.html' id='branding'>
						<img src='Images/Logos/JohnsonFinance.png' alt='' class='logo' style='height:120px;margin-top:-20px;'>
						<div class='logo-text'>
							<h1 class='site-title'><span class='GText'></span></h1>
							<small class='site-description'><span class='GText'></span></small>
						</div>
					</a> <!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class='main-navigation'>
						<button type='button' class='menu-toggle'><i class='fa fa-bars'></i></button>
						<ul class='menu'>
							<li class='menu-item current-menu-item'><a href='index.html'>Home</a></li>
							<li class='menu-item'><a href='/Careers'>Careers</a></li>
							<li class='menu-item'><a href='about.html'>About</a></li>
							<li class='menu-item'><a href='project.html'>Agents</a></li>
							<li class='menu-item'><a href='contact.html'>Contact</a></li>";
							if(isUserLoggedIn()){
								if ($loggedInUser->checkPermission(array(2))){
								
								echo "<li class='menu-item'><a href='Admin/ManagmentPortal/AngularApp/'>Admin</a></li>";
								}
								}
								
					echo "
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class='mobile-navigation'></div>
					<div class='login-link'>";
					if(!isUserLoggedIn())
					{
					 echo  "<a href='Users/loginold.php'>Log In</a>";
					}
					else
					{
						echo "<a href='Users/logout.php'>Log Out</a>";
					}
					echo "
					</div>
				</div>
				</div>
			</div> <!-- .site-header -->
<div class='header-banner'></div> 
			<!--<div class='hero hero-slider'>
				<ul class='slides'>
					<li data-bg-image='/Images/Backgrounds/tie-jpg.jpg'>
						<div class='container'>
							<div class='slide-title'>
								<span>blanditiis deleniti</span> <br>
								<span>ducimus deleniti atque</span>
							</div>
						</div>
					</li>
					<li data-bg-image='/Images/Backgrounds/ForestBackGround.jpg'>
						<div class='container'>
							<div class='slide-title'>
								<span>blanditiis deleniti</span> <br>
								<span>ducimus deleniti atque</span>
							</div>
						</div>
					</li>
					<li data-bg-image='/Images/Backgrounds/room-jpg.jpg'>
						<div class='container'>
							<div class='slide-title'>
								<span>blanditiis deleniti</span> <br>
								<span>ducimus deleniti atque</span>
							</div>
						</div>
					</li>
				</ul> <!-- .slides -->
			<!--</div> <!-- .hero-slider -->

			<main class='main-content'>
				<div class='fullwidth-block latest-projects-section' style='background-image: '/Images/Backgrounds/tie-jpg.jpg''>
					<div class='container' style='background-image: '/Images/Backgrounds/tie-jpg.jpg''>
						<h2 class='section-title'><span class='GText'>Our latest projects<span></h2>
						<div class='row'>
							<div class='col-sm-6 col-md-3'>
								<div class='project'>
									<figure class='project-thumbnail'><img src='/Images/Backgrounds/tie-jpg.jpg' alt='Project 1'></figure>
									<h3 class='project-title'><a href='#'>Careers</a></h3>
									<small class='project-subtitle'>Start Now</small>
									<p>Begin building the future you've always wanted, while helping others protect theres</p>
									<a href='#' class='more-link'><img src='imgs/arrow.png' alt=''></a>
								</div>
							</div>
							<div class='col-sm-6 col-md-3'>
								<div class='project'>
									<figure class='project-thumbnail'><img src='dummy/thumb-2.jpg' alt='Project 2'></figure>
									<h3 class='project-title'><a href='#'>elit eiusmod tempor</a></h3>
									<small class='project-subtitle'>irure dolor voluptate</small>
									<p>Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit fugit consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
									<a href='#' class='more-link'><img src='images/arrow.png' alt=''></a>
								</div>
							</div>
							<div class='col-sm-6 col-md-3'>
								<div class='project'>
									<figure class='project-thumbnail'><img src='dummy/thumb-3.jpg' alt='Project 3'></figure>
									<h3 class='project-title'><a href='#'>elit eiusmod tempor</a></h3>
									<small class='project-subtitle'>irure dolor voluptate</small>
									<p>Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit fugit consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
									<a href='#' class='more-link'><img src='images/arrow.png' alt=''></a>
								</div>
							</div>
							<div class='col-sm-6 col-md-3'>
								<div class='project'>
									<figure class='project-thumbnail'><img src='dummy/thumb-4.jpg' alt='Project 4'></figure>
									<h3 class='project-title'><a href='#'>elit eiusmod tempor</a></h3>
									<small class='project-subtitle'>irure dolor voluptate</small>
									<p>Nemo enim ipsam voluptatem quia voluptas aspernatur aut odit fugit consequuntur magni dolores eos qui ratione voluptatem sequi.</p>
									<a href='#' class='more-link'><img src='images/arrow.png' alt=''></a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block.latest-projects-section -->

				<div class='fullwidth-block image-block' data-bg-image='dummy/section-img.png'></div>

				<div class='fullwidth-block'>
					<div class='container'>
						<div class='row'>
							<div class='col-md-4'>
								
								<h3 class='section-title'>About Us</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaque ipsa quae illo inventore veritatis quasi architecto beatae vitae dicta explicabo nemo ipsam voluptatem quia voluptas aspernatur.</p>
								<a href='#' class='button'>Read more</a>
								
							</div>
							<div class='col-md-4'>
								
								<h3 class='section-title'>High QUality</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaque ipsa quae illo inventore veritatis quasi architecto beatae vitae dicta explicabo nemo ipsam voluptatem quia voluptas aspernatur.</p>
								<a href='#' class='button'>Read more</a>
								
							</div>
							<div class='col-md-4'>
								
								<h3 class='section-title'>Safety Control</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaque ipsa quae illo inventore veritatis quasi architecto beatae vitae dicta explicabo nemo ipsam voluptatem quia voluptas aspernatur.</p>
								<a href='#' class='button'>Read more</a>
								
							</div>
						</div>

						<hr class='separator'>

						<div class='row'>
							<div class='col-md-6'>
								<h2 class='section-title'>Testimonials</h2>
								<div class='testimonial-slider'>
									<ul class='slides'>
										<li>
											<img src='/Images/ProfilePhotos/CodyDisplay.png' height=50 width=50 style='border-radius:25px;display:inline-block;margin-left:10px'>	
											<blockquote>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, dolorum nostrum suscipit. Sunt tenetur accusantium eligendi illo perferendis. Commodi iste nihil eius, doloremque aperiam iure repellat sequi enim sint similique!</p>
												<cite>Cody Johnson</cite>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>Ut ullam sed accusamus aliquam rerum tempora ab voluptatibus, nostrum vitae nesciunt quam atque! Tempora dolorem quas pariatur debitis nulla, molestiae, obcaecati voluptatibus quisquam, facilis quis sint eos, corporis assumenda.</p>
												<cite>Jessica Waton</cite>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>Fuga provident modi illo dolorum, neque labore natus ratione, totam id sequi vero repudiandae velit nemo nobis corporis tenetur. Magnam velit est cumque incidunt unde delectus labore inventore eaque vitae?</p>
												<cite>Jessica Waton</cite>
											</blockquote>
										</li>
										<li>
											
											<blockquote>
											<img src='/Images/ProfilePhotos/SherryDisplay.png' height=50 width=50 style='border-radius:25px;display:inline-block;margin-left:10px'>
												<p>''Best Company To Work With, Absolutely Amazing''</p>
												<cite>Sherry Johnson </cite>
												
											</blockquote>
										</li>
									</ul>
								</div>
							</div>
							<div class='col-md-6'>
								<h2 class='section-title'>Latest News</h2>
								<ul class='news'>
									<li>
										<div class='date'>30.09.2014</div>
										<h3 class='entry-title'><a href='#'>Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim...</a></h3>
									</li>
									<li>
										<div class='date'>30.09.2014</div>
										<h3 class='entry-title'><a href='#'>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur...</a></h3>
									</li>
								</ul>
							</div>
						</div> <!-- .row -->
						
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->
			</main> <!-- .main-content -->

			<footer class='site-footer'>
				<div class='container'>
					<div class='pull-left'>

						<address>
							<strong>Johnson Financial</strong>
							<p>533 West 2600 South Suite 135<br>
								Bountiful, Utah 84010</p>
						</address>

						<p><a href='#' class='phone'>+ 1 801 296 2000</a></p>
					</div> <!-- .pull-left -->
					<div class='pull-right'>

						<div class='social-links'>

							<a href='#'><i class='fa fa-facebook'></i></a>
							<a href='#'><i class='fa fa-google-plus'></i></a>
							<a href='#'><i class='fa fa-twitter'></i></a>
							<a href='#'><i class='fa fa-pinterest'></i></a>

						</div>

					</div> <!-- .pull-right -->

					<div class='colophon'>Copyright 2015 Johnson Financial.</div>

				</div> <!-- .container -->
			</footer> <!-- .site-footer -->
		</div>
</div>
</div>
<nav class='outer-nav right vertical'>
				<a href='#' class='icon-home'>Home</a>
				<a href='#' class='icon-news'>News</a>
				<a href='#' class='icon-image'>Images</a>
				<a href='#' class='icon-upload'>Uploads</a>
				<a href='#' class='icon-star'>Favorites</a>
				<a href='#' class='icon-mail'>Messages</a>
				<a href='#' class='icon-lock'>Security</a>
			</nav>
</div>
		<script src='JQuery/plugins.js'></script>
		<script src='JQuery/app.js'></script>
		<script src='JQuery/Menu.js'></script>
		<script src='JQuery/Modernizer.js'></script>
		<script src='JQuery/Menu.js'></script>
	</body>

</html>";
?>		