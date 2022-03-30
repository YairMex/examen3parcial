<!DOCTYPE html>
<html lang="en">
<head>
<title>Buddha blessed this site</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">BVLLS</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="{{route('inicio')}}">Inicio</a></li>
					<li><a href="{{route('categorias')}}">Categorias</a></li>
					<li><a href="categories.html">Accesorios</a></li>
					<li><a href="{{route('mapa')}}">Mapa</a></li>
					<li><a href="{{route('contacto')}}">Contacto</a></li>
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
		<div class="logo menu_mm"><a href="#">BVLLS</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="#">Inicio</a></li>
				<li class="menu_mm"><a href="#">Skins</a></li>
				<li class="menu_mm"><a href="#">Accesorios</a></li>
				<li class="menu_mm"><a href="#">Recientes</a></li>
				<li class="menu_mm"><a href="#">Contacto</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/pride.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Todo sobre</div>
							<div class="home_slider_title">Cosmeticos de Fortnite</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/ariana.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Todo sobre</div>
							<div class="home_slider_title">Cosmeticos de Fortnite</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/batman.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Todo sobre</div>
							<div class="home_slider_title">Cosmeticos de Fortnite</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Promo -->

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">conoce más de</div>
						<div class="section_title">Principales Skins</div>
					</div>
				</div>
			</div>
			<div class="row promo_container">
			@php
			$count=0;
			@endphp
			@foreach($items as $item)
			@break($count==9)
				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<a href="{{route('objeto', $item['id'])}}"><img src="{{$item['image']}}" alt=""></a>
							<div class="promo_content promo_content_1">
								<div class="promo_title">{{$item['name']}}</div>
								<div class="promo_subtitle">{{$item['type']}}</div>
							</div>
						</div>
						<div class="promo_link"><a href="{{route('objeto', $item['id'])}}">{{$item['rarity']}}</a></div>
					</div>
				</div>
				@php
				$count++;
				@endphp
			@endforeach

			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">conoce más de</div>
						<div class="section_title">Recién llegados</div>
					</div>
				</div>
			</div>
			<div class="row products_container">
				@php
				$count=0;
				@endphp
				@foreach($itemsNuevos as $item)
					@break($count==9)
					<!-- Product -->
					<div class="col-lg-4 product_col">
						<div class="product">
							<div class="product_image">
								<a href="{{route('objeto', $item['id'])}}"><img src="{{$item['image']}}" alt=""></a>
							</div>
							<div class="product_content clearfix">
								<div class="product_info">
									<div class="product_name">{{$item['rarity']}}</div>
									<div class="product_price"><a href="{{route('objeto', $item['id'])}}">{{$item['name']}}</a></div>
								</div>
							</div>
						</div>
					</div>
					@php
					$count++;
					@endphp
				@endforeach

			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra clearfix">
		<div class="extra_promo extra_promo_1">
			<div class="extra_promo_image" style="background-image:url({{$data2['data']['images']['pois']}})"></div>
			
		</div>
		<div class="extra_promo ">
			
			<div class="extra_2_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_2_title">
					<div class="extra_2_center">&</div>
					<div class="extra_2_top">Mapa</div>
					<div class="extra_2_bottom">Ubicaciones</div>
				</div>
				<div class="extra_2_text">*El mapa y las ubicaciones pueden cambiar a lo largo de la temporada.</div>
				<div class="button extra_2_button"><a href="{{route('mapa')}}">Ver más</a></div>
			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_image" style="background-image:url(images/kit.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="gallery_title text-center">
						<ul>
							<li><a href="{{route('banners')}}">Banners</a></li>
						</ul>
					</div>
					<div class="gallery_text text-center">Más divertidos de lo que parecen.</div>
					<div class="button gallery_button"><a href="{{route('banners')}}">Ver más</a></div>
				</div>
			</div>
		</div>	
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				@foreach($itemsBanner as $item)
					<!-- Gallery Item -->
					<div class="owl-item gallery_item">
						<a  href="{{route('banners')}}">
							<img src="{{$item['image']}}" alt="">
						</a>
					</div>
				@endforeach
			</div>
		</div>	
	</div>

	

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
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail">
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
					<div class="footer_logo"><a href="#">BVLLS</a></div>
					<nav class="footer_nav">
						<ul>
							<li><a href="{{route('inicio')}}">Inicio</a></li>
							<li><a href="{{route('categorias')}}">Categorias</a></li>
							<li><a href="categories.html">accessorios</a></li>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>