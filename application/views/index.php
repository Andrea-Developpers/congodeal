<!DOCTYPE html>
<html lang="en">
<head>
<title>Congo Deal</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/bootstrap4/bootstrap.min.css');?>">
<link href="<?=base_url('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/slick-1.8.0/slick.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/main_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/responsive.css');?>">

</head>
<style>
	/*********************************
	6.1 Deals
	*********************************/ 
	.deals_featured
	{ 
		width: 100%;
	} 
	.deals
	{
		width: 40%; 
		margin-right: 0%;
		padding-top: 85px;
		padding-left: 50px;
		padding-right: 50px;
		padding-bottom: 35px;
		box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
		border-radius: 5px;
	}

	.top_bar
	{
		width: 100%;
		height: 40px;
		background: #fafafa;
		border-bottom: solid 1px rgba(0,0,0,0.05);
		z-index: 2;
	}

	.top_bar_contact_item,
	.top_bar_contact_item a,
	.standard_dropdown li a,
	.top_bar_user a
	{ 
		line-height: 40px; 
	}

	.top_bar_contact_item, 
	.top_bar_contact_item a, 
	.standard_dropdown li li a, 
	.standard_dropdown li a,
	.top_bar_user a
	{
		font-size: 14px;
	}
	 


	 /******************************

	[Table of Contents]

	1. 1600px
	2. 1440px
	3. 1280px
	4. 1199px
	5. 1024px
	6. 991px
	7. 959px
	8. 880px
	9. 768px
	10. 767px
	11. 539px
	12. 479px
	13. 400px

	******************************/

/************
4. 1199px
************/

@media only screen and (max-width: 1199px)
{

	.deals_timer_box
	{
		width: 150px;
	}
	.deals_timer_unit
	{
		font-size: 20px;
	}
}


/************
5. 1024px
************/

@media only screen and (max-width: 1024px)
{
	.deals
	{
		margin-right: 0%;
		width: 70%;
	}
}

/************
6. 991px
************/

@media only screen and (max-width: 991px)
{
	.deals
	{
		width: 100%;
		margin-right: 0px;
	}
}



/************
11. 575px
************/

@media only screen and (max-width: 575px)
{
	.deals
	{
		padding-left: 15px;
		padding-right: 15px;
	}
	.deals_title
	{
		left: 15px;
		font-size: 16px;
	}
	.deals_slider_nav_container
	{
		right: 5px;
	}
	.deals_item_name, .deals_item_price
	{
		font-size: 20px;
	}
	.deals_item_category a, .deals_item_price_a
	{
		font-size: 12px;
	}
	.deals_timer_unit
	{
		font-size: 16px;
	}
}

</style>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar fixed-top">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><a href="#">CongoDeal</a></div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?=base_url('assets/images/phone.png');?>" alt=""></div>+243 97 95 10 763</div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li><a href="mailto:fastsales@gmail.com" class="mini-text">infos@congodeal.com</a></li>
									<li>
										<a href="#">Français<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Lingala</a></li>
											<li><a href="#">Swahili</a></li>
											<li><a href="#">Kikongo</a></li>
											<!-- <li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li> -->
										</ul>
									</li>
									<li>
										<a href="#">$CDF dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">CDF Franc</a></li>
											<li><a href="#">EUR Euro</a></li> 
										</ul>
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="<?=base_url('assets/images/user.svg');?>" alt=""></div>
								<div><a href="<?=site_url('dealer')?>">S'inscrire</a></div>
								<div><a href="<?=site_url('home/login')?>">Se connecter</a></div>  
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row justify-content-center"> 

					<!-- Search -->
					<div class="col-lg-5 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Chercher un produit...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">Catégories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">

													<?php 
														$arr = array(
															'All Categories',
															'Computers',
															'Laptops',
															'Cameras',
															'Hardware',
															'Smartphones' 
														);

														$length = count($arr);

														for ($i=0; $i < $length; $i++) { 
															echo '<li><a class="clc" href="#">'.$arr[$i].'</a></li>';
														}

													?>
													 
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="<?=base_url('assets/images/search.png');?>" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					 
				</div>
			</div>
		</div>
		 
	</header>
	
	 
	<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">



			<?php 
			
				for ($i=0; $i < 10; $i++) { 
					echo
					'

					<!-- Row -->
					<div class="row pt-5">
						<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-center"> 
							
						
							<!-- Deals -->
							<div class="deals">
								<div class="deals_title">Deals of the Week</div>
								<div class="deals_slider_container">
		
									<!-- Deals Slider -->
									<div class="owl-carousel owl-theme deals_slider">
										<!-- Deals Item -->
										<div class="owl-item deals_item">
											<div class="deals_image"><img src="'.base_url('assets/images/deals.png').'" alt=""></div>
											<div class="deals_content">
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_category"><a href="#">Headphones</a></div>
													<div class="deals_item_price_a ml-auto">$300</div>
												</div>
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_name">Beoplay H7</div>
													<div class="deals_item_price ml-auto">$225</div>
												</div>
												<div class="available">
													<div class="available_line d-flex flex-row justify-content-start">
														<div class="available_title">Available: <span>6</span></div>
														<div class="sold_title ml-auto">Already sold: <span>28</span></div>
													</div>
													<div class="available_bar"><span style="width:17%"></span></div>
												</div>
												<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
													<div class="deals_timer_title_container">
														<div class="deals_timer_title">Hurry Up</div>
														<div class="deals_timer_subtitle">Offer ends in:</div>
													</div>
													<div class="deals_timer_content ml-auto">
														<div class="deals_timer_box clearfix" data-target-time="">
															<div class="deals_timer_unit">
																<div id="deals_timer1_hr" class="deals_timer_hr"></div>
																<span>hours</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer1_min" class="deals_timer_min"></div>
																<span>mins</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer1_sec" class="deals_timer_sec"></div>
																<span>secs</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
		
										<!-- Deals Item -->
										<div class="owl-item deals_item">
											<div class="deals_image"><img src="'.base_url('assets/images/deals.png').'" alt=""></div>
											<div class="deals_content">
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_category"><a href="#">Headphones</a></div>
													<div class="deals_item_price_a ml-auto">$300</div>
												</div>
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_name">Beoplay H7</div>
													<div class="deals_item_price ml-auto">$225</div>
												</div>
												<div class="available">
													<div class="available_line d-flex flex-row justify-content-start">
														<div class="available_title">Available: <span>6</span></div>
														<div class="sold_title ml-auto">Already sold: <span>28</span></div>
													</div>
													<div class="available_bar"><span style="width:17%"></span></div>
												</div>
												<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
													<div class="deals_timer_title_container">
														<div class="deals_timer_title">Hurry Up</div>
														<div class="deals_timer_subtitle">Offer ends in:</div>
													</div>
													<div class="deals_timer_content ml-auto">
														<div class="deals_timer_box clearfix" data-target-time="">
															<div class="deals_timer_unit">
																<div id="deals_timer2_hr" class="deals_timer_hr"></div>
																<span>hours</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer2_min" class="deals_timer_min"></div>
																<span>mins</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer2_sec" class="deals_timer_sec"></div>
																<span>secs</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
		
										<!-- Deals Item -->
										<div class="owl-item deals_item">
											<div class="deals_image"><img src="'.base_url('assets/images/deals.png').'" alt=""></div>
											<div class="deals_content">
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_category"><a href="#">Headphones</a></div>
													<div class="deals_item_price_a ml-auto">$300</div>
												</div>
												<div class="deals_info_line d-flex flex-row justify-content-start">
													<div class="deals_item_name">Beoplay H7</div>
													<div class="deals_item_price ml-auto">$225</div>
												</div>
												<div class="available">
													<div class="available_line d-flex flex-row justify-content-start">
														<div class="available_title">Available: <span>6</span></div>
														<div class="sold_title ml-auto">Already sold: <span>28</span></div>
													</div>
													<div class="available_bar"><span style="width:17%"></span></div>
												</div>
												<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
													<div class="deals_timer_title_container">
														<div class="deals_timer_title">Hurry Up</div>
														<div class="deals_timer_subtitle">Offer ends in:</div>
													</div>
													<div class="deals_timer_content ml-auto">
														<div class="deals_timer_box clearfix" data-target-time="">
															<div class="deals_timer_unit">
																<div id="deals_timer3_hr" class="deals_timer_hr"></div>
																<span>hours</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer3_min" class="deals_timer_min"></div>
																<span>mins</span>
															</div>
															<div class="deals_timer_unit">
																<div id="deals_timer3_sec" class="deals_timer_sec"></div>
																<span>secs</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
		
								<div class="deals_slider_nav_container">
									<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
									<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
								</div>
		
							</div>  
							<!-- Deals -->
		
		
		
		
							
						</div>
					</div>
					<!-- Row -->
		
					';
				}
			
			?>

			
		</div>
	</div>



	<!-- Deals of the week --> 

	 
</div>

<script src="<?=base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
<script src="<?=base_url('assets/styles/bootstrap4/popper.js');?>"></script>
<script src="<?=base_url('assets/styles/bootstrap4/bootstrap.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/greensock/TweenMax.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/greensock/TimelineMax.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/scrollmagic/ScrollMagic.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/greensock/animation.gsap.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/greensock/ScrollToPlugin.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js');?>"></script>
<script src="<?=base_url('assets/plugins/slick-1.8.0/slick.js');?>"></script>
<script src="<?=base_url('assets/plugins/easing/easing.js');?>"></script>
<script src="<?=base_url('assets/js/custom.js');?>"></script>
</body>

</html>