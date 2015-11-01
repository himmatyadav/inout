<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="../themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="../themes/css/flexslider.css" rel="stylesheet"/>
		<link href="../themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="../themes/js/jquery-1.7.2.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>				
		<script src="../themes/js/superfish.js"></script>	
		<script src="../themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
				<div class="span4">
					 <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Search
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <form action="search1.php" method="post">
                                        <div class="form-group">
                                
                                            <input class="form-control" placeholder="city name" name="search" required>
                                             <button type="submit" class="btn btn-default">go</button>
                                        </div>
										

									
                                </div>
                              	
                                       
                                        
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            </form>
                            <!-- /.row (nested) -->
                        </div>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">Checkout</a></li>
							<li><a href="order.php">Customize Order</a></li>
                            <li>Hi!<?php session_start(); echo $_SESSION["user"];?>
                            <li><a href="logout.php">logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
			<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
				
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="paintings.php">Paintings</a>					
								<!--<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>-->
							</li>															
							<li><a href="prints.php">Prints</a></li>			
							<li><a href="crafts.php">Crafts</a>
								<!--<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>-->
							</li>							
							
                            <li><a href="sculptures.php">Sculptures</a></li>
                            <li><a href="sculptures.php">Ornaments</a></li>
                            <li><a href="sculptures.php">Misc</a></li>
						</ul>
					</nav>
				</div>
			</section>
            </div>
		<!--	<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="../themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="../themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>		
			</section> -->
			<section class="header_text">
            <a href="welcome.php" class="logo pull-left"><img src="../themes/images/logo.png" class="site_logo" alt="" /></a>
           <!-- <h1 class="jumbotron">TradKart</h1> -->
				<section class="header_text">
				We stand for top quality traditional art.
                		<br/>
			</section>
            </section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="../themes/images/paint.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Baarish</a><br/>
														<a href="products.html" class="category">Mawsynram</a>
														<p class="price">INR 4000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="../themes/images/paint1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Sandhya</a><br/>
														<a href="products.html" class="category">bhuj</a>
														<p class="price">INR 3350</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="../themes/images/paint2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Basant</a><br/>
														<a href="products.html" class="category">Navsari</a>
														<p class="price">INR 6000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="../themes/images/paint3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Shishir</a><br/>
														<a href="products.html" class="category">Anand</a>
														<p class="price">INR 4299</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="../themes/images/paint4.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Saathiya</a><br/>
														<a href="products.html" class="category">kosli</a>
														<p class="price">INR 7499</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="../themes/images/paint5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Raaste ka vaasta</a><br/>
														<a href="products.html" class="category">Bhiwani</a>
														<p class="price">INR 8000</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="../themes/images/print2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Tanhayi</a><br/>
														<a href="products.html" class="category">Dharuhera</a>
														<p class="price">INR 2500</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="../themes/images/print3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Anjaan</a><br/>
														<a href="products.html" class="category">Rewari</a>
														<p class="price">INR 1500</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="../themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="../themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="../themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
		
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>