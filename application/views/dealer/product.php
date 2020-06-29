<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/bootstrap4/bootstrap.min.css');?>">
<link href="<?=base_url('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/plugins/OwlCarousel2-2.2.1/animate.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/product_styles.css');?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/styles/product_responsive.css');?>">

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

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?=base_url('assets/images/phone.png');?>" alt=""></div>+38 068 005 3570</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="<?=base_url('assets/images/mail.png');?>" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">English<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Italian</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									<li>
										<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">EUR Euro</a></li>
											<li><a href="#">GBP British Pound</a></li>
											<li><a href="#">JPY Japanese Yen</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="<?=base_url('assets/images/user.svg');?>" alt=""></div>
								<div><a href="#">Register</a></div>
								<div><a href="#">Sign in</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div> 
	</header>

	<!-- Single Product -->

	<div class="single_product">
		<div class="container"> 
			<div class="row">

				<!-- Images -->
				<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="<?=base_url('assets/images/single_4.jpg');?>"><img src="<?=base_url('assets/images/single_4.jpg');?>" alt=""></li>
						<li data-image="<?=base_url('assets/images/single_2.jpg');?>"><img src="<?=base_url('assets/images/single_2.jpg');?>" alt=""></li>
						<li data-image="<?=base_url('assets/images/single_3.jpg');?>"><img src="<?=base_url('assets/images/single_3.jpg');?>" alt=""></li>
					</ul>
				</div>

				<!-- Selected Image -->
				<div class="col-lg-3 order-lg-2 order-1">
					<div class="image_selected"><img src="<?=base_url('assets/images/single_4.jpg');?>" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-3 order-3">
					<div class="product_description">
						<!-- <div class="product_category">Laptops</div> -->
						<div class="product_name">MacBook Air 13</div>
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum. laoreet turpis, nec sollicitudin dolor cursus at.</p></div>
						<div class="h3 mt-2">$2000</div>
						<div class="order_info d-flex flex-row">
							<ul class="list-group list-group-flush">
								<li class="list-group-item list-group-item-action active">Cras justo odio</li>
								<li class="list-group-item list-group-item-action">Dapibus ac facilisis in</li>
								<li class="list-group-item list-group-item-action">Morbi leo risus</li>
								<li class="list-group-item list-group-item-action">Porta ac consectetur ac</li>
								<li class="list-group-item list-group-item-action">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
				</div> 

				<!-- Form -->
				<div class="col-lg-3 order-3">
				<form method="POST" action="<?=site_url('home')?>" id="contact_form" class="was-validated "> 
				
							<div class="form-group contact_form_inputs">
								<label for="photo" class="text-muted">4 Photos max de votre produit</label>
								<input type="file" name="photo" class="form-control rounded-0 btn btn-sm btn-primary btn-block btn-light" id="photo" multiple> 
							</div>
                            
							<div class="form-group contact_form_inputs">
								<!-- <label for="exampleInputEmail1">Email address</label> -->
								<textarea rows="4" name="description" class="form-control form-control-sm rounded-0" id="description" aria-describedby="description" placeholder="Un commentaire sur votre produit..."></textarea>
								<small id="emailHelp" class="form-text text-muted">255 caractères maximum.</small>
							</div>
							
							<div class="form-group contact_form_inputs"> 
								<input type="number" class="form-control form-control-sm rounded-0" id="price" aria-describedby="price" placeholder="Prix *">
							
								<!-- <label for="exampleInputEmail1">Email address</label> -->
								<div class="d-flex flex-nowrap bd-highlight">
									<div class="order-2 p-2 bd-highlight">
										<input type="radio" name="devise" value="dollar" id="devise">
										<label for="exampleInputEmail1">En dollar</label> 
									</div> 
									<div class="order-3 p-2 bd-highlight">
										<input type="radio" name="devise" value="franc" id="devise">
										<label for="exampleInputEmail1">En franc</label> 
									</div> 
									<div class="order-3 p-2 bd-highlight">
										<input type="radio" name="devise" value="euro" id="devise">
										<label for="exampleInputEmail1">En Euro</label> 
									</div>
									
								</div>
								 
							</div>
							
							
							<div class="form-group contact_form_inputs">
								<!-- <label for="exampleInputEmail1">Email address</label> -->
								<input type="number" name="reduction" class="form-control form-control-sm rounded-0" id="reduction" aria-describedby="reduction" placeholder="Réduction (en %)">
							</div>
							
							<div class="form-group contact_form_inputs">
								<!-- <label for="exampleInputEmail1">Email address</label> -->
								<input type="number" name="quantity" class="form-control form-control-sm rounded-0" id="quantity" aria-describedby="quantity" placeholder="Quantité en stock *">
                            </div>
							
							 
							
							<div class="form-group contact_form_inputs">
								<label for="quality" class="text-muted">Qualité</label><br>
								<ul>
									<li>
										<input type="radio" name="quality" id="quality">
										<label for="exampleInputEmail1">Originale</label> 
									</li>
									<li>
										<input type="radio" name="quality" id="quality">
										<label for="exampleInputEmail1">2ième main</label> 
									</li>
									<li>
										<input type="radio" name="quality" id="quality">
										<label for="exampleInputEmail1">3ième main</label> 
									</li>
								</ul>  
                            </div>
							
							
  
							<div class="form-group contact_form_inputs">
								<!-- <label for="exampleInputPassword1">Password</label> -->
								<input type="text" name="place" class="form-control form-control-sm rounded-0" id="place" name="place" placeholder="Lieu de vente">
							</div>
							<div class="form-group contact_form_inputs">
								<!-- <label for="exampleInputPassword1">Password</label> -->
								<input type="number" name="warranty" class="form-control form-control-sm rounded-0" id="warranty" name="warranty" placeholder="Garantie*">
							</div> 
                            
							<div class="form-group">
								<div class="d-flex flex-column bd-highlight mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Dealer</button>
								</div>
							</div>
							
						</form>

				</div> 

			</div>
		</div>
	</div>

	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?=base_url('assets/images/view_1.jpg');?>" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Beoplay H7</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?=base_url('assets/images/view_2.jpg');?>" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?=base_url('assets/images/view_3.jpg');?>" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225</div>
										<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?=base_url('assets/images/view_4.jpg');?>" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?=base_url('assets/images/view_5.jpg');?>" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?=base_url('assets/images/view_6.jpg');?>" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$375</div>
										<div class="viewed_name"><a href="#">Speedlink...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?=base_url('assets/images/brands_1.jpg');?>" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?=base_url('assets/images/brands_2.jpg');?>" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?=base_url('assets/images/brands_3.jpg');?>" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?=base_url('assets/images/brands_4.jpg');?>" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?=base_url('assets/images/brands_5.jpg');?>" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?=base_url('assets/images/brands_6.jpg');?>" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?=base_url('assets/images/brands_7.jpg');?>" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?=base_url('assets/images/brands_8.jpg');?>" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="<?=base_url('assets/images/send.png');?>" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
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

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">OneTech</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Find it Fast</div>
						<ul class="footer_list">
							<li><a href="#">Computers & Laptops</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Smartphones & Tablets</a></li>
							<li><a href="#">TV & Audio</a></li>
						</ul>
						<div class="footer_subtitle">Gadgets</div>
						<ul class="footer_list">
							<li><a href="#">Car Electronics</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="<?=base_url('assets/images/logos_1.png');?>" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets/images/logos_2.png');?>" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets/images/logos_3.png');?>" alt=""></a></li>
								<li><a href="#"><img src="<?=base_url('assets/images/logos_4.png');?>" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
<script src="<?=base_url('assets/plugins/easing/easing.js');?>"></script>
<script src="<?=base_url('assets/js/product_custom.js');?>"></script>
</body>

</html>