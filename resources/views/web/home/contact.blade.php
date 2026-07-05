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
                        <img src="{{ asset('web/images/banner_img_1.jpg') }}" alt="" class="tr_all scale_image">
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
                    <!--subscribe widget-->
                    <section class="m_bottom_40 m_xs_bottom_30">
                        <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Newsletter Sign Up</h5>
                        <hr class="divider_bg m_bottom_25">
                        <p class="second_font m_bottom_15">Get exclusive deals you will not find anywhere else straight to
                            your inbox!</p>
                        <form class="newsletter">
                            <input type="email" placeholder="Enter your email address" name="newsletter-email"
                                class="tr_all fw_light w_full fs_medium m_bottom_10">
                            <button
                                class="second_font w_full tt_uppercase fs_medium button_type_2 black state_2 d_block tr_all">Subscribe</button>
                        </form>
                    </section>
                </aside>
                <div class="col-lg-9 col-md-9 col-sm-9 m_bottom_30 m_xs_bottom_10">
                    <h2 class="fw_light second_font color_dark tt_uppercase m_bottom_27">Our Location</h2>
                    <div class="iframe_map_container m_bottom_38 m_xs_bottom_30">
                        <!-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24192.47098176581!2d-73.9988568586148!3d40.71672046030417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2z0JzQsNC90YXRjdGC0YLQtdC9LCDQndGM0Y4t0JnQvtGA0Lo!5e0!3m2!1sru!2s!4v1406833502695"
                            style="border:0"></iframe> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17157.03351382606!2d55.205020034480306!3d25.12350731111961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b2487788381%3A0xc7f09db98818f708!2sElite%20residence!5e0!3m2!1sen!2sae!4v1783164127504!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
                            
                        </iframe>
                    </div>
                    <div class="row">
                        <main class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Contact Us</h5>
                            <hr class="divider_bg m_bottom_25">
                            <p class="second_font m_bottom_15">Al Quoz Elite Tower, Dubai, UAE</p>
                            <ul class="second_font vr_list_type_2 m_bottom_33 m_xs_bottom_30">
                                <li><i class="fa fa-phone color_dark fs_large"></i>+971 58 58 96 152</li>
                                <li><i class="fa fa-weixin color_dark fs_large"></i>+971 52 65 47 994</li>
                                <li class="w_break" data-icon=""><i class="fa fa-envelope color_dark"></i><a href="mailto:#"
                                        class="sc_hover d_inline_b">info@indomegroup.com</a></li>
                            </ul>
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Opening Hours</h5>
                            <hr class="divider_bg m_bottom_25">
                            <ul class="second_font">
                                <li>Monday - Friday: 08.00-20.00</li>
                                <li>Saturday: 09.00-15.00</li>
                                <li>Sunday and holidays: closed</li>
                            </ul>
                        </main>
                        <section class="col-lg-8 col-md-8 col-sm-8">
                            <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Contact Form</h5>
                            <hr class="divider_bg m_bottom_25">
                            <p class="second_font m_bottom_14">Send an email. All fields with an <span
                                    class="color_red">*</span> are required.</p>
                            <form id="contactform" class="b_default_layout">
                                <ul>
                                    <li class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
                                            <label class="second_font required d_inline_b m_bottom_5 clickable"
                                                for="cf_name">First Name</label><br>
                                            <input type="text" name="cf_name" id="cf_name" class="tr_all w_full fw_light">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
                                            <label class="second_font required d_inline_b m_bottom_5 clickable"
                                                for="cf_email">Email Address</label><br>
                                            <input type="email" name="cf_email" id="cf_email"
                                                class="tr_all w_full fw_light">
                                        </div>
                                    </li>
                                    <li class="m_bottom_15">
                                        <label class="second_font d_inline_b m_bottom_5 clickable"
                                            for="cf_telephone">Telephone</label><br>
                                        <input type="text" name="cf_telephone" id="cf_telephone"
                                            class="tr_all w_full fw_light">
                                    </li>
                                    <li class="m_bottom_5">
                                        <label class="second_font d_inline_b m_bottom_5 clickable"
                                            for="cf_message">Message</label><br>
                                        <textarea id="cf_message" name="cf_message" rows="6"
                                            class="tr_all w_full fw_light"></textarea>
                                    </li>
                                    <li>
                                        <button
                                            class="button_type_2 black state_2 tr_all second_font fs_medium tt_uppercase d_inline_b"><span
                                                class="m_left_10 m_right_10 d_inline_b">Submit</span></button>
                                    </li>
                                </ul>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection