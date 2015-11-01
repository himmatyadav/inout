
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
		<link href="../themes/css/main.css" rel="stylesheet"/>
		<link href="../themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="../themes/js/jquery-1.7.2.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>				
		<script src="../themes/js/superfish.js"></script>	
		<script src="../themes/js/jquery.scrolltotop.js"></script>
		<script src="../themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. Camel Painting">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<?php
							include('connect.php');
							session_start();
							$user=$_SESSION["user"];
							$id=$_GET["id"];
							$sql="SELECT * FROM product WHERE id= '$id'";
							$result=mysql_query($sql);
							$row=mysql_fetch_array($result);
							$image_name=$row['image'];
							$item=$row['id'];
							?>
							<li><a href="checkout.php?id=<?php echo $item; ?>">Checkout</a></li>					
							<li><a href="logout.php">logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
		<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="paintings.php">Paintings</a>					
								<!--<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>-->
							</li>															
							<li><a href="./products.html">Prints</a></li>			
							<li><a href="./products.html">Crafts</a>
								<!--<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>-->
							</li>							
							<li><a href="./products.html">Sculptures</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section class="header_text sub">
		<!--	<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" > -->
				<h4><span>Product Detail</span></h4>
			</section>
				<?php
				include('connect.php');

				$user=$_SESSION["user"];
				$id=$_GET["id"];
				$sql="SELECT * FROM product WHERE id= '$id'";
				$result=mysql_query($sql);
				$row=mysql_fetch_array($result);
				$image_name=$row['image'];
				?>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="see1.php?imagename=<?php echo $image_name; ?>"class="thumbnail" data-fancybox-group="group1" title="Description 1"><?php echo "<img src='../themes/images/$image_name' alt='Smiley face' class='img-thumbnail'>";?></a>												
								<!--<ul class="thumbnails small">								
									<li class="span1">
										<a href="themes/images/ladies/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="../themes/images/ladies/2.jpg" alt=""></a>
									</li>								
									<li class="span1">
										<a href="themes/images/ladies/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="../themes/images/ladies/3.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="themes/images/ladies/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="../themes/images/ladies/4.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="themes/images/ladies/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="../themes/images/ladies/5.jpg" alt=""></a>
									</li>
								</ul>-->
							</div>
							<div class="span5">
								<address>
									<strong>Name:</strong> <span><?php echo $row['name'];?></span><br>
									<strong>Category:</strong> <span><?php echo $row['category'];?></span><br>
									<strong>Vendor:</strong> <span><?php echo $row['vendor'];?></span><br>								
								</address>									
								<h4><strong>INR <?php echo $row['price'];?> </strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline" action="cart.php?id=<?php echo $row['id'];?>" method="post">
									<label>By Clicking Add to cart U Agree with our Terms And Conditions</label>
									<br/>
									<p>&nbsp;</p>
									<?php
									
									$user_id=$_SESSION["user"];
									$sql="SELECT * FROM cart WHERE itemID='$item' AND username='$user_id'";
									$result=mysql_query($sql);
									if(!mysql_fetch_array($result))
									{?>
									<button class="btn btn-inverse" type="submit">Add to cart</button>
									<?php 
									}
									else
									{?>
										<button class="btn btn-inverse" type="submit">Added to cart</button>
									<?php } ?>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?php echo $row['discription'];?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
				
					</div>
					<div class="span3 col">
					
			
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
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>