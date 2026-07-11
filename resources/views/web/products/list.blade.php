@extends('web.layouts.app')

@section('content')
    <!--main content-->
    <div class="page_section_offset">
        <div class="container">
            <div class="row">
                <aside class="col-lg-3 col-md-3 col-sm-3 p_top_4">
                    <!--categories widget-->
                    <section class="m_bottom_30">
                        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Categories</h5>
                        <hr class="divider_bg m_bottom_23">
                        <ul class="categories_list second_font w_break">
                            <li class="relative"><a href="#" class="fs_large_0 d_inline_b tr_delay">Living Rooms</a><button
                                    class="open_sub_categories fs_medium"></button>
                                <!--second level-->
                                <ul class="d_none">
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Beds</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Dressers/Chests</a><button
                                            class="open_sub_categories fs_medium"></button>
                                        <!--third level-->
                                        <ul class="d_none fs_small categories_third_level_list">
                                            <li><a href="#" class="tr_delay sc_hover bg_grey_light_2_hover">King Beds</a>
                                            </li>
                                            <li><a href="#" class="sc_hover bg_grey_light_2_hover tr_delay">Queen Beds</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Nightstands</a></li>
                                </ul>
                            </li>
                            <li class="relative"><a href="#" class="fs_large_0 d_inline_b tr_delay">Bedrooms</a><button
                                    class="open_sub_categories fs_medium"></button>
                                <!--second level-->
                                <ul class="d_none">
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Beds</a><button
                                            class="open_sub_categories fs_medium"></button>
                                        <!--third level-->
                                        <ul class="d_none fs_small categories_third_level_list">
                                            <li><a href="#" class="tr_delay sc_hover bg_grey_light_2_hover">King Beds</a>
                                            </li>
                                            <li><a href="#" class="sc_hover bg_grey_light_2_hover tr_delay">Queen Beds</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Dressers/Chests</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Nightstands</a></li>
                                </ul>
                            </li>
                            <li class="relative"><a href="#" class="fs_large_0 d_inline_b tr_delay">Dining Rooms</a><button
                                    class="open_sub_categories fs_medium"></button>
                                <!--second level-->
                                <ul class="d_none">
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Beds</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Dressers/Chests</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Nightstands</a></li>
                                </ul>
                            </li>
                            <li class="relative"><a href="#" class="fs_large_0 d_inline_b tr_delay">Kids Rooms</a><button
                                    class="open_sub_categories fs_medium"></button>
                                <!--second level-->
                                <ul class="d_none">
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Beds</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Dressers/Chests</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Nightstands</a></li>
                                </ul>
                            </li>
                            <li class="relative"><a href="#" class="fs_large_0 d_inline_b tr_delay">New</a><button
                                    class="open_sub_categories fs_medium"></button>
                                <!--second level-->
                                <ul class="d_none">
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Beds</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Dressers/Chests</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Nightstands</a></li>
                                </ul>
                            </li>
                            <li class="relative"><a href="#" class="fs_large_0 d_inline_b tr_delay">Sale</a><button
                                    class="open_sub_categories fs_medium"></button>
                                <!--second level-->
                                <ul class="d_none">
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Beds</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Dressers/Chests</a></li>
                                    <li class="relative"><a href="#" class="tr_delay d_inline_b">Nightstands</a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                    <figure class="relative wrapper scale_image_container m_bottom_40 r_image_container m_xs_bottom_30">
                        <img src="images/banner_img_1.jpg" alt="" class="tr_all scale_image">
                        <!--caption-->
                        <figcaption class="caption_type_1 tr_all">
                            <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                                Special Offer
                            </div>
                            <div class="caption_inner">
                                <h3 class="color_white second_font fw_light m_bottom_5 w_break">Your Bedroom Lives Here. <a
                                        href="#" class="color_lbrown color_white_hover second_font fw_light fs_ex_small">Buy
                                        Now!</a></h3>
                            </div>
                        </figcaption>
                    </figure>
                </aside>
                <section class="col-lg-9 col-md-9 col-sm-9">
                    <h2 class="fw_light second_font color_dark m_bottom_27 tt_uppercase">About Us</h2>
                    <div class="clearfix m_bottom_15">
                        <div class="t_xs_align_c f_left m_right_20 m_xs_bottom_15 f_xs_none"><img
                                src="{{ asset('web/images/about_1.jpg') }}" alt=""></div>
                        <p class="fw_light m_bottom_14 p_top_4">Ut tellus dolor, dapibus eget, elementum vel, cursus
                            eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit
                            amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum
                            magna.</p>
                        <p class="fw_light">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut
                            tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.
                            Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>
                    </div>
                    <b class="d_block fs_large">Integer retrum ante eu lacus.</b>
                    <p class="fw_light m_bottom_14">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec erat volutpat. Duis ac
                        turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris
                        fermentum dictum magna. Ut pharetra augue nec erat volutpat.</p>
                    <b class="d_block fs_large">Nam elit agna, endrerit sit amet, tincidunt ac.</b>
                    <p class="fw_light m_bottom_14">Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Lorem ipsum dolor sit amet,
                        consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus
                        dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat
                        volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel,
                        scelerisque eget, malesuada at, neque. Vivamus eget nibh.</p>
                    <b class="d_block fs_large">Integer retrum ante eu lacus.</b>
                    <p class="fw_light m_bottom_14">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        cubilia Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec erat volutpat. Duis ac
                        turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris
                        fermentum dictum magna. Ut pharetra augue nec erat volutpat.</p>
                </section>
            </div>
        </div>
    </div>
@endsection