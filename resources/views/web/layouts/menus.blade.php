<header role="banner" class="w_inherit">
    <!--top part-->
    <div class="header_top_part d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 fs_small color_light fw_light t_xs_align_c">
                    <b class="scheme_color">Free shipping</b> on orders over $100. Need Help? <b
                        class="scheme_color">866.526.3979</b>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c">
                    <!--shop nav-->
                    <nav class="d_inline_b">
                        <ul class="hr_list second_font si_list fs_small">
                            <li><a class="sc_hover tr_delay" href="account.html">My Account</a></li>
                            <li><a class="sc_hover tr_delay" href="orders_list.html">Orders List</a></li>
                            <li><a class="sc_hover tr_delay" href="wishlist.html">Wishlist</a></li>
                            <li><a class="sc_hover tr_delay" href="checkout.html">Checkout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="header_middle_part t_xs_align_c">
        <div class="container">
            <div class="d_table w_full d_xs_block">
                <div class="col-lg-4 col-md-4 col-sm-4 d_table_cell d_xs_block f_none v_align_m m_xs_bottom_15">
                    <!--logo-->
                    <a href="/" class="d_inline_b">
                        <img src="{{ asset('web/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 d_table_cell d_xs_block f_none v_align_m">
                    <div class="clearfix">
                        <div class="clearfix f_right f_xs_none d_xs_inline_b m_xs_bottom_15 t_xs_align_l">
                            
                            
                            <!--login-->
                            <div class="f_right m_right_3 relative transform3d d-none">
                                <button class="button_type_1 tr_all second_font color_dark grey state_2"
                                    data-open-dropdown="#login"><i class="fa fa-user d_inline_m m_right_5"></i> <span
                                        class="fs_small">Login</span></button>
                                <div id="login" data-show="fadeInUp" data-hide="fadeOutDown"
                                    class="dropdown bg_grey_light login_dropdown animated">
                                    <form class="m_bottom_15">
                                        <ul>
                                            <li class="m_bottom_15">
                                                <label for="username"
                                                    class="second_font m_bottom_4 d_inline_b fs_medium">Username</label>
                                                <input type="text" name="" id="username" class="w_full tr_all">
                                            </li>
                                            <li class="m_bottom_20">
                                                <label for="password"
                                                    class="second_font m_bottom_4 d_inline_b fs_medium">Password</label>
                                                <input type="password" name="" id="password" class="w_full tr_all">
                                            </li>
                                            <li class="m_bottom_20">
                                                <input type="checkbox" name="" id="remember_me">
                                                <label for="remember_me" class="second_font fs_medium">Remember
                                                    me</label>
                                            </li>
                                            <li>
                                                <button
                                                    class="t_align_c tt_uppercase w_full second_font d_block fs_medium button_type_2 lbrown tr_all">Log
                                                    In</button>
                                            </li>
                                        </ul>
                                    </form>
                                    <div class="m_bottom_14 t_align_c">
                                        <a href="#" class="second_font sc_hover fs_small">Forgot your password?</a><br>
                                        <a href="#" class="second_font sc_hover fs_small">Forgot your username?</a>
                                    </div>
                                    <hr class="divider_white m_bottom_25">
                                    <h5 class="color_dark tt_uppercase second_font t_align_c m_bottom_15 fw_light">New
                                        Customer?</h5>
                                    <a href="#" role="button"
                                        class="button_type_2 tt_uppercase fs_medium second_font d_block t_align_c black state_2">Create
                                        An Account</a>
                                </div>
                            </div>
                        </div>
                        <!--searchform-->
                        <form role="search" class="relative f_right f_xs_none m_right_3 db_xs_centered button_in_input">
                            <input type="text" name="" tabindex="1" placeholder="Search"
                                class="fs_medium color_light fw_light w_full tr_all">
                            <button class="color_dark tr_all color_lbrown_hover"><i
                                    class="fa fa-search d_inline_m"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom_part bg_white w_inherit">
        <div class="container">
            <hr class="divider_black">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <button id="mobile_menu_button"
                        class="vc_child d_xs_block db_xs_centered d_none m_bottom_10 m_top_15 bg_lbrown color_white tr_all"><i
                            class="fa fa-navicon d_inline_m"></i></button>
                    <!--main menu-->
                    <nav role="navigation" class="d_xs_none">
                        <ul class="main_menu relative hr_list second_font fs_medium">
                            <li class="{{ (request()->route()->getName() == 'home') ? 'current' : '' }}"><a href="{{ route('home') }}" class="tt_uppercase tr_delay">Home </a></li>
                            <li class="{{ (request()->route()->getName() == 'about-us') ? 'current' : '' }}"><a href="{{ route('about-us') }}" class="tt_uppercase tr_delay">About</a></li>
                            <li class="{{ (request()->route()->getName() == 'products') ? 'current' : '' }}"><a href="{{ route('products') }}" class="tt_uppercase tr_delay">Products</a></li>
                            <li class="{{ (request()->route()->getName() == 'contact-us') ? 'current' : '' }}"><a href="{{ route('contact-us') }}" class="tt_uppercase tr_delay">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3 clearfix t_sm_align_c">
                    <ul class="hr_list si_list shop_list f_right f_sm_none d_sm_inline_b t_sm_align_l">
                        <li>
                            <a href="#" class="color_lbrown_hover vc_child">
                                <span class="d_inline_m">
                                    <i class="fa fa-heart fs_large"></i><sup class="color_dark">7</sup>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="color_lbrown_hover vc_child">
                                <span class="d_inline_m">
                                    <i class="fa fa-arrow-right fs_small"></i><i
                                        class="fa fa-arrow-left fs_small"></i><sup class="color_dark">2</sup>
                                </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>