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
		
	

		@yield('modals')

		@include('web.layouts.footer-scripts')
	</body>
</html>