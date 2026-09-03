<!doctype html>
<html lang="en">
	@include('web.layouts.header')
	<style>
		.whatsapp-float {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 25px;
			right: 25px;
			background-color: #25D366;
			color: #fff;
			border-radius: 50%;
			text-align: center;
			font-size: 32px;
			line-height: 60px;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
			z-index: 9999;
			text-decoration: none;
			transition: all 0.3s ease;
		}

		.whatsapp-float:hover {
			transform: scale(1.1);
			color: #fff;
		}
	</style>
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
		
	

		@yield('modals')

		<!-- Floating WhatsApp Button -->
		<a href="https://wa.me/971585896152?text=Hello,%20I'm%20interested%20in%20your%20furniture%20collection.%20Could%20you%20please%20share%20more%20details%20and%20pricing?"
		class="whatsapp-float"
		target="_blank"
		rel="noopener noreferrer"
		aria-label="Chat with us on WhatsApp">

			<svg xmlns="http://www.w3.org/2000/svg"
				width="32"
				height="32"
				viewBox="0 0 24 24"
				fill="currentColor"
				aria-hidden="true">

				<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.669-1.611-.916-2.206-.242-.579-.487-.5-.669-.51-.173-.008-.372-.01-.57-.01-.198 0-.52.075-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>

				<path d="M20.52 3.449A11.866 11.866 0 0012.05 0C5.495 0 .16 5.335.16 11.89c0 2.096.547 4.142 1.588 5.946L.055 24l6.305-1.654a11.88 11.88 0 005.684 1.448h.005c6.554 0 11.89-5.335 11.89-11.89a11.86 11.86 0 00-3.419-8.455zM12.05 21.785h-.004a9.88 9.88 0 01-5.034-1.378l-.361-.214-3.743.982 1-3.649-.235-.374a9.87 9.87 0 01-1.515-5.262c0-5.45 4.434-9.884 9.892-9.884a9.84 9.84 0 017.003 2.906 9.84 9.84 0 012.897 7.009c-.003 5.45-4.437 9.884-9.9 9.884z"/>
			</svg>
		</a>

		@include('web.layouts.footer-scripts')
	</body>
</html>