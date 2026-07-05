<!doctype html>
<html lang="en">
	@include('web.layouts.header')
	<body class="sticky_menu">
		<div id="preloader"></div>
		 
		<!--layout-->
		<div class="wide_layout db_centered bg_white">
			<!--[if (lt IE 9) | IE 9]>
				<div class="bg_red" style="padding:5px 0 12px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix color_white" style="padding:9px 0 0;float:left;width:80%;"><i class="fa fa-exclamation-triangle f_left m_right_10" style="font-size:25px;"></i><b>Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:20%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium" target="_blank" style="margin-top:6px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--cookie-->
			<!-- 
			<div class="cookie">
				<div class="container">
					<div class="d_table w_full">
						<div class="d_table_cell v_align_m color_white fw_medium">
							Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.
						</div>
						<div class="d_table_cell v_align_m color_white">
							<a href="#" class="button_type_1 grey tr_all second_font d_block f_right fs_medium">Read More</a>
							<button class="button_type_1 d_block f_right lbrown tr_all second_font fs_medium m_right_3">Accept Cookies</button>
						</div>
					</div>
				</div>
			</div> -->
			@include('web.layouts.menus')
			

            @yield('content')
			

            @include('web.layouts.footer')

		</div>

		<!--back to top-->
		<button class="back_to_top animated button_type_6 grey state_2 d_block black_hover f_left vc_child tr_all"><i class="fa fa-angle-up d_inline_m"></i></button>
		<button data-popup="#subscribe_popup" data-popup-transition-in="bounceInUp" data-popup-transition-out="bounceOutUp"></button>
		<!--popup-->
		<div class="init_popup d-none" id="subscribe_popup">
			<div class="popup init banner_type_2 color_lbrown">
				<section class="bg_lbrown inner color_white">
					<h2 class="second_font color_white fw_light m_bottom_27 t_align_c">Subscribe Now to Get 20% Off on Any Product!</h2>
					<div class="row color_white">
						<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_30">
							<img src="images/popup_img_1.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_30 fw_light">
							<p class="m_bottom_13">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
							<p> Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel.</p>
						</div>
					</div>
					<form class="newsletter">
						<div class="row fs_medium">
							<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_10">
								<input type="email" placeholder="Enter your email address" name="newsletter-email" class="tr_all fw_light w_full b_none color_light">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_10">
								<input type="text" name="newsletter-name" placeholder="Name" class="tr_all fw_light w_full b_none color_light">
							</div>
						</div>
						<div class="t_align_c">
							<button class="second_font tt_uppercase color_white fs_medium button_type_2 d_inline_b bg_transparent bg_white_h color_lbrown_h bg_white_hover tr_all">Subscribe</button>
						</div>
					</form>
				</section>
				<button class="close_popup fw_light color_white fs_large color_dark_hover tr_all">x</button>
			</div>
		</div>
		<!--popup-->
		<div class="init_popup" id="quick_view">
			<div class="popup init">
				<div class="clearfix">
					<div class="product_preview f_left f_xs_none wrapper m_xs_bottom_15">
						<div class="d_block relative r_image_container">
							<img id="zoom" src="images/product_img_0.jpg" alt="" data-zoom-image="images/p_image1.jpg">
							<div class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase"><i class="d_inline_m">Sale!</i></div>
						</div>
						<!--thumbnails-->
						<div class="product_thumbnails_wrap relative m_bottom_3">
							<div class="owl-carousel" id="thumbnails" data-nav="thumbnails_product_" data-owl-carousel-options='{
								"responsive" : {
									"0" : {
										"items" : 3
									},
									"321" : {
										"items" : 4
									},
									"769" : {
										"items" : 2
									},
									"992" : {
										"items" : 3
									}
								},
								"stagePadding" : 40,
								"margin" : 10,
								"URLhashListener" : false
							}'>	
								<a href="#" data-image="images/product_img_0.jpg" data-zoom-image="images/p_image1.jpg" class="d_block">
									<img src="images/product_thumb_1.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_1.jpg" data-zoom-image="images/p_image2.jpg" class="d_block">
									<img src="images/product_thumb_2.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_2.jpg" data-zoom-image="images/p_image3.jpg" class="d_block">
									<img src="images/product_thumb_3.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_3.jpg" data-zoom-image="images/p_image4.jpg" class="d_block">
									<img src="images/product_thumb_4.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_6.jpg" data-zoom-image="images/p_image7.jpg" class="d_block">
									<img src="images/product_thumb_5.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_9.jpg" data-zoom-image="images/p_image10.jpg" class="d_block">
									<img src="images/product_thumb_6.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_4.jpg" data-zoom-image="images/p_image5.jpg" class="d_block">
									<img src="images/product_thumb_7.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_7.jpg" data-zoom-image="images/p_image8.jpg" class="d_block">
									<img src="images/product_thumb_8.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_5.jpg" data-zoom-image="images/p_image6.jpg" class="d_block">
									<img src="images/product_thumb_9.jpg" alt="">
								</a>
								<a href="#" data-image="images/product_img_8.jpg" data-zoom-image="images/p_image9.jpg" class="d_block">
									<img src="images/product_thumb_10.jpg" alt="">
								</a>
							</div>
							<button class="thumbnails_product_prev black_hover button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-left d_inline_m"></i></button>
							<button class="thumbnails_product_next black_hover button_type_4 grey state_2 tr_all d_block vc_child"><i class="fa fa-angle-right d_inline_m"></i></button>
						</div>
						<p class="d_inline_m m_right_5 fw_light m_md_bottom_3">Share this:</p>
						<div class="d_inline_m addthis_widget_container">
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
							<a class="addthis_button_preferred_1"></a>
							<a class="addthis_button_preferred_2"></a>
							<a class="addthis_button_preferred_3"></a>
							<a class="addthis_button_preferred_4"></a>
							<a class="addthis_button_compact"></a>
							<a class="addthis_counter addthis_bubble_style"></a>
							</div>
							<!-- AddThis Button END -->
						</div>
					</div>
					<div class="product_description f_left f_xs_none">
						<h3 class="second_font m_bottom_3 product_title"><a href="#" class="sc_hover">Sed in lacus ut enim</a></h3>
						<div class="relative m_bottom_18">
							<ul class="rating_list wrapper hr_list d_inline_m tr_all m_right_5">
								<li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
								<li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
								<li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
								<li><i class="fa fa-star tr_all"></i></li>
								<li><i class="fa fa-star tr_all"></i></li>
							</ul>
							<span class="color_light d_inline_m m_top_2">
								<a href="#" class="sc_hover fs_medium fw_light">3 Review(s)</a> | <a href="#" class="color_dark sc_hover fs_medium fw_light">Add Your Review</a>
							</span>
						</div>
						<ul class="m_bottom_14">
							<li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Manufacturer:</span> <span class="color_dark fw_light">Chanel</span></li>
							<li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Availability:</span> <span class="scheme_color fw_light">in stock</span> <span class="fw_light">20 items(s)</span></li>
							<li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Product Code:</span> <span class="fw_light">PS06</span></li>
						</ul>
						<hr class="divider_light m_bottom_15">
						<p class="fw_light m_bottom_14 color_grey">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>
						<div class="product_options">
							<b class="second_font d_block m_bottom_10">Available Options</b>
							<p class="second_font m_bottom_3">Size:</p>
							<div class="styled_select size_select relative m_bottom_15">
								<div class="select_title type_2 fs_medium fw_light color_light relative d_none tr_all">Queen</div>
								<select>
									<option value="Queen">Queen</option>
									<option value="King">King</option>
									<option value="Grand">Grand</option>
								</select>
								<ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul>
							</div>
							<p class="second_font">Color:</p>
							<ul class="hr_list m_bottom_17">
								<li class="m_right_5 m_bottom_3"><button class="color_button bg_light_red tr_all"></button></li>
								<li class="m_right_5 m_bottom_3"><button class="color_button bg_light_blue tr_all"></button></li>
								<li class="m_right_5 m_bottom_3"><button class="color_button bg_light_green tr_all"></button></li>
								<li class="m_right_5 m_bottom_3"><button class="color_button bg_grey tr_all"></button></li>
								<li class="m_right_5 m_bottom_3"><button class="color_button bg_light_yellow tr_all"></button></li>
							</ul>
							<hr class="divider_light">
							<footer class="bg_grey_light_2">
								<div class="fs_big second_font m_bottom_17"><s class="color_light">$1 302.00</s> <b class="scheme_color">$1 102.00</b></div>
								<div class="clearfix">
									<div class="quantity clearfix t_align_c f_left f_md_none m_right_10 m_md_bottom_3">
										<button class="f_left d_block minus black_hover tr_all bg_white">-</button>
										<input type="text" value="1" name="" readonly="" class="f_left color_light">
										<button class="f_left d_block black_hover tr_all bg_white">+</button>
									</div>
									<br class="d_md_block d_none">
									<button class="button_type_2 d_block f_sm_none m_sm_bottom_3 t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase f_left m_right_3 product_button"><i class="fa fa-shopping-cart d_inline_m m_right_9"></i>Add To Cart</button>
									<br class="d_sm_block d_none">
									<button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-heart fs_large d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
									<button class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i class="fa fa-arrow-right fs_small d_inline_m"></i><i class="fa fa-arrow-left fs_small d_inline_m"></i><span class="tooltip top fs_small color_white hidden animated" data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
								</div>
							</footer>
						</div>
					</div>
				</div>
				<button class="close_popup fw_light fs_large tr_all">x</button>
			</div>
		</div>

		<!--popup-->
		<div class="init_popup" id="add_to_cart_popup">
			<div class="popup init">
				<div class="clearfix m_bottom_15">
					<a href="#" class="f_left d_block m_right_20">
						<img src="images/bestsellers_img_1.jpg" alt="">
					</a>
					<p class="second_font fs_large color_dark">1 x Eget elementum vel<br> was added to your cart</p>
				</div>
				<div class="clearfix">
					<a href="#" class="button_type_2 d_block f_left t_align_c grey state_2 tr_all second_font fs_medium tt_uppercase m_top_15">Continue Shopping</a>
					<a href="pages_shopping_cart.html" class="button_type_2 d_block f_right t_align_c grey state_2 tr_all second_font fs_medium tt_uppercase m_top_15">Show Cart</a>
				</div>
				<button class="close_popup fw_light fs_large tr_all">x</button>
			</div>
		</div>

		@include('web.layouts.footer-scripts')
	</body>
</html>