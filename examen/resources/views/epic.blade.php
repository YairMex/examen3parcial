<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">Wish</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="index.html">home</a></li>
					<li><a href="categories.html">clothes</a></li>
					<li><a href="categories.html">accessories</a></li>
					<li><a href="categories.html">lingerie</a></li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button"><img src="images/magnifying-glass.svg" alt=""></button>
					</form>
				</div>
				<div class="shopping">
					<!-- Cart -->
					<a href="#">
						<div class="cart">
							<img src="images/shopping-bag.svg" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									<div class="cart_num">1</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Star -->
					<a href="#">
						<div class="star">
							<img src="images/star.svg" alt="">
							<div class="star_num_container">
								<div class="star_num_inner">
									<div class="star_num">0</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Avatar -->
					<a href="#">
						<div class="avatar">
							<img src="images/avatar.svg" alt="">
						</div>
					</a>
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Wish</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">home</a></li>
				<li class="menu_mm"><a href="#">clothes</a></li>
				<li class="menu_mm"><a href="#">accessories</a></li>
				<li class="menu_mm"><a href="#">lingerie</a></li>
				<li class="menu_mm"><a href="#">contact</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/categories.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Woman</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Woman</li>
									<li>Accessories</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row products_container">
		<div class="col">
			
			<!-- Products -->

			<div class="product_grid">
				@foreach($items as $item)
					<!-- Product -->
					<div class="product">
						<div class="product_image"><img src="{{$item['image']}}" alt=""></div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">{{$item['rarity']}}</a></div>
								<div class="product_price">{{$item['name']}}</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
			
	</div>

	
		
		
		<!-- Sidebar Right -->

		<div class="sidebar_right clearfix">

			
		</div>

	</div>

	<!-- Extra -->

	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(images/newsletter.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">only the best</div>
							<div class="section_title">subscribe for a 20% discount</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail here">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>
						<div class="newsletter_text">Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestib ulum ultrices nulla. Aliquam egestas tempor leo.</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo"><a href="#">Wish</a></div>
					<nav class="footer_nav">
						<ul>
							<li><a href="index.html">home</a></li>
							<li><a href="categories.html">clothes</a></li>
							<li><a href="categories.html">accessories</a></li>
							<li><a href="categories.html">lingerie</a></li>
							<li><a href="contact.html">contact</a></li>
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>
</body>
</html>

