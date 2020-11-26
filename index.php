<!DOCTYPE html>
<html lang="en">
<head>
<title>Horizon Travel Plus - Accueil</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<?php

		include('./components/navbar.php');

	?>
	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1 style="font-size:90px;">Laissez-nous</h1>
							<h1 style="font-size:80px;">Vous guider</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Explorer<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home3.jpeg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1 style="font-size:90px;">Votre Agence</h1>
							<h1 style="font-size:80px;">de voyage</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Explorer<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home4.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1 style="font-size:90px;">Des sejours</h1>
							<h1 style="font-size:80px;">inoubliables</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">Explorer<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>Hotels</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">Location vehicules</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">Vols</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">Voyages</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">Croisières</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">Visa</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>Depart</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>Retour</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adultes</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<div class="search_item">
								<div>Enfants</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<button class="button search_button">Reserver<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>Depart</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>Retour</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adultes</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<div class="search_item">
								<div>Enfants</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<button class="button search_button">Reserver<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>Depart</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>Retour</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adultes</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<div class="search_item">
								<div>Enfants</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<button class="button search_button">Reserver<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>Depart</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>Retour</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adultes</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<div class="search_item">
								<div>Enfants</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<button class="button search_button">Reserver<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>Depart</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>Retour</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adultes</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<div class="search_item">
								<div>Enfants</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>plus</option>
								</select>
							</div>
							<button class="button search_button">Reserver<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>Depart</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>Retour</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<button class="button search_button">Demander<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">Nous sommes </h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Horizon Travel Plus, votre agence de voyage, nous vous facilitons entre autre la location des véhicules, l'assurance voyage, la reservation d'Hotel ou meme dans l'assistance pour l'obtention des Visa pour tout pays </p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">Explorez le monde</div>
							<!-- <div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div> -->
							<div class="intro_center text-center">
								<h1>Les plages d'Afrique</h1>
								<!-- <div class="intro_price">From $1450</div> -->
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<!-- <i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@hellolightbulb -->
						<div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">Explorez le monde</div>
							<!-- <div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div> -->
							<div class="intro_center text-center">
								<h1>L'Europe de l'Est</h1>
								<!-- <div class="intro_price">From $1450</div> -->
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<!-- <i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@willianjusten -->
						<div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">Explorez le monde</div>
							<!-- <div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div> -->
							<div class="intro_center text-center">
								<h1>Les Iles du monde Entier</h1>
								<!-- <div class="intro_price">From $1450</div> -->
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<!-- <i class="fa fa-star"></i>
									<i class="fa fa-star"></i> -->
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">the best offers with rooms</h2>
				</div>
			</div>
			<div class="row offers_items">

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>
									<div class="offer_name"><a href="#">grand castle</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$70<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by Egzon Bytyqi -->
									<div class="offers_image_background" style="background-image:url(images/offer_2.jpg)"></div>
									<div class="offer_name"><a href="#">turkey hills</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$50<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@nevenkrcmarek -->
									<div class="offers_image_background" style="background-image:url(images/offer_3.jpg)"></div>
									<div class="offer_name"><a href="#">island dream</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$90<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@mantashesthaven -->
									<div class="offers_image_background" style="background-image:url(images/offer_4.jpg)"></div>
									<div class="offer_name"><a href="#">travel light</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$30<span>per night</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<?php
		include('./components/testimonies.php');
	?>

	<div class="trending">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">tendances actuelles</h2>
				</div>
			</div>
			<div class="row trending_container">

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="contact">
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">get in touch</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php
	
		include('./components/footer.php');
	
	?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>