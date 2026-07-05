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
                <section class="col-lg-9 col-md-9 col-sm-9 m_bottom_30">
                    <h1 class="tt_uppercase second_font color_dark fs_big_3 m_bottom_16">OOPS, The Page You Are
                        Looking<br>For Cannot Be Found.</h1>
                    <hr class="divider_bg type_2 m_bottom_25 m_xs_bottom_30">
                    <p class="second_font m_bottom_15"><b>The page you requested was not found, and we have a fine guess
                            why.</b></p>
                    <ul class="second_font vr_list_type_1 m_bottom_25 m_xs_bottom_30">
                        <li><i class="fa fa-circle"></i>If you typed the URL directly, please make sure the spelling is
                            correct.</li>
                        <li><i class="fa fa-circle"></i>If you clicked on a link to get here, the link is outdated.</li>
                    </ul>
                    <p class="second_font "><b>What can you do?</b></p>
                    <ul class="second_font vr_list_type_1 m_bottom_14 m_xs_bottom_30">
                        <li>Have no fear,help is near! There are many ways you can get back on track with Magento Store.
                        </li>
                    </ul>
                    <ul class="second_font vr_list_type_1 m_bottom_25 m_xs_bottom_30">
                        <li><i class="fa fa-circle"></i><a href="#" class="sc_hover">Go back</a> to the previous page.</li>
                        <li><i class="fa fa-circle"></i>Use the search bar at the top of the page to search for your
                            products.</li>
                        <li class="m_bottom_20"><i class="fa fa-circle"></i>Follow these links to get you back on track!
                        </li>
                        <li>
                            <a href="#" class="sc_hover d_inline_b m_right_3">Store Home</a> <span
                                class="d_inline_b m_right_3 color_dark">|</span> <a href="#" class="sc_hover">My Account</a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
@endsection