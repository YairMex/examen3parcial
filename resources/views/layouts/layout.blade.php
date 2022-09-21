<!DOCTYPE html>
<html lang="en">
<head>
@section('titulo1')@show
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
			<div class="logo"><a href="{{route('inicio')}}">BVLLS</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="{{route('inicio')}}">Inicio</a></li>
					<li><a href="{{route('categorias')}}">Categorias</a></li>
					<li><a href="{{route('banners')}}">Banners</a></li>
					<li><a href="{{route('mapa')}}">Mapa</a></li>
					<li><a href="public/images/reinscripcion.pdf">Contacto</a></li>
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
		<div class="logo menu_mm"><a href="{{route('inicio')}}">BVLLS</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="{{route('inicio')}}">Inicio</a></li>
				<li class="menu_mm"><a href="{{route('categorias')}}">Categorias</a></li>
				<li class="menu_mm"><a href="{{route('banners')}}">Banners</a></li>
				<li class="menu_mm"><a href="{{route('mapa')}}">Mapa</a></li>
				<li class="menu_mm"><a href="{{route('contacto')}}">Contacto</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/cap3s2.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							@section('texto')@show
							<div class="breadcrumbs">
								<ul>
									<li><a href="{{route('inicio')}}">Inicio</a></li>
									<li><a href="{{route('categorias')}}">Categorias</a></li>
									@section('titulo')@show
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row products_container">
			<div class="col">
				
				<!-- Products -->
				@section('skins')
				@show
				
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
			<div class="newsletter_image" style="background-image:url(images/batman.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">no te pierdas nada</div>
							<div class="section_title">Suscribete para recibir noticias</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail here">
								<button type="submit" class="newsletter_button">subscribir</button>
							</form>
						</div>
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
					<div class="footer_logo"><a href="{{route('inicio')}}">BVLLS</a></div>
					<nav class="footer_nav">
						<ul>
							<li><a href="{{route('inicio')}}">Inicio</a></li>
							<li><a href="{{route('categorias')}}">Categorias</a></li>
							<li><a href="{{route('banners')}}">Banners</a></li>
							<li><a href="{{route('mapa')}}">Mapa</a></li>
							<li><a href="{{route('contacto')}}">contacto</a></li>
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							<li><a href="https://www.facebook.com/Mex4Mafia" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://github.com/YairMex" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/yairmellody/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://wa.me/525585281986" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
							<li><a href="https://twitter.com/laravelphp" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Este sitio web fue hecho con <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://github.com/YairMex" target="_blank">BVLLS WEB</a>
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

