@extends('web.layouts.app')

@section('content')
    <!--main content-->
    <div class="page_section_offset">
        <div class="container">
            <div class="row">
                <aside class="col-lg-3 col-md-3 col-sm-3 p_top_4 d-none">
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
                <section class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="fw_light second_font color_dark m_bottom_27 tt_uppercase">About Us</h2>
                    <div class="clearfix m_bottom_15">
                        <div class="t_xs_align_c f_left m_right_20 m_xs_bottom_15 f_xs_none"><img
                                src="{{ asset('web/images/about_1.jpg') }}" alt=""></div>
                        <p class="fw_light m_bottom_7 p_top_4">We are the leading provider of Indoor, Outdoor Furnitures and Fabric Supply Company located in Dubai. We are dedicated to providing high quality, customizable furnitures that meets the modern needs of hotels, offices, commercial spaces.</p>
                        <p class="fw_light m_bottom_7">For over years, we have been a trusted supplier of premium indoor and outdoor furniture, along with high-quality fabric solutions, proudly serving customers across Dubai. We are committed to delivering durable, stylish, and customizable furniture designed to meet the evolving needs of hotels, offices, restaurants, resorts, and commercial spaces. With a focus on exceptional craftsmanship, reliable service, and customer satisfaction, we provide furniture solutions that combine functionality, comfort, and modern design to enhance every environment.</p>
                        <p class="fw_light m_bottom_7">Our commitment goes beyond providing furniture — we aim to create inspiring spaces that reflect quality, elegance, and functionality. With innovative designs, attention to detail, and a customer-focused approach, we continue to build long-lasting partnerships by delivering solutions that bring comfort and style to every project.</p>
                        <p class="fw_light m_bottom_7">At our core, we believe every space deserves furniture that is both practical and visually appealing. Our experienced team works closely with clients to understand their requirements and deliver tailored solutions using quality materials and modern designs. Whether it’s a hospitality project, commercial space, or outdoor setting, we strive to provide products that enhance the overall experience and add lasting value.</p>
                        <p class="fw_light m_bottom_7">With a strong understanding of industry trends and customer expectations, we continuously strive to deliver furniture solutions that combine durability, aesthetics, and functionality. From concept selection to final installation, we ensure a seamless experience by maintaining high standards of quality, precision, and service for every project we undertake.</p>
                    </div>
                    <b class="d_block fs_large">Our Products</b>
                    <p class="fw_light m_bottom_14">
                        <ul class="vr_list_type_1">
                            <li class="fw_light m_bottom_14"><i class="fa fa-caret-right"></i>Customized furnitures as per the requirements</li>
                            <li class="fw_light m_bottom_14"><i class="fa fa-caret-right"></i>Beach Umbrellas and base</li>
                            <li class="fw_light m_bottom_14"><i class="fa fa-caret-right"></i>Sun Lounger with cushions</li>
                            <li class="fw_light m_bottom_14"><i class="fa fa-caret-right"></i>Towels</li>
                            <li class="fw_light m_bottom_14"><i class="fa fa-caret-right"></i>Fabric and Zippers</li>
                        </ul>
                    </p>
                    <br>


                    <b class="d_block fs_large">Customized Furnitures</b>
                    <p class="fw_light m_bottom_7">Bring your vision to life with our customized furniture solutions, tailored to suit your unique style, space, and functional needs.</p>
                    <p class="fw_light m_bottom_14">Our expert craftsmanship ensures every piece reflects your brand identity and design preferences. From concept to completion, we deliver furniture solutions built around your specific requirements.</p>



                    <b class="d_block fs_large">Beach Umbrellas and Furnitures</b>
                    <p class="fw_light m_bottom_7">Create the perfect seaside experience with our premium beach umbrellas and furniture.</p>
                    <p class="fw_light m_bottom_14">Designed for comfort, durability, and style, our collections enhance any coastal environment. Perfect for beach resorts, cafes, and outdoor leisure spaces seeking premium solutions.</p>



                    <b class="d_block fs_large">Sun Loungers</b>
                    <p class="fw_light m_bottom_7">Relax in style and comfort with our premium sun loungers, perfect for poolside, beaches, and outdoor spaces.</p>
                    <p class="fw_light m_bottom_14">Designed with ergonomic comfort and durable finishes for a relaxing outdoor experience. Ideal for resorts, hotels, and leisure spaces looking to enhance guest comfort and style.</p>



                    <b class="d_block fs_large">Restaurants and Café Furnitures</b>
                    <p class="fw_light m_bottom_7">Elevate your dining spaces with our stylish and durable restaurant and café furniture.</p>
                    <p class="fw_light m_bottom_14">Our furniture solutions are designed to create inviting atmospheres while offering long-lasting performance. From modern cafés to luxury restaurants, we provide designs that match every hospitality concept.</p>



                    <b class="d_block fs_large">Umbrella Canopy & Base</b>
                    <p class="fw_light m_bottom_7">Enhance your outdoor spaces with our durable and stylish umbrella canopies and bases. Designed to provide reliable shade and stability, they are perfect for patios, gardens, beaches, and poolside areas.</p>
                    <p class="fw_light m_bottom_14"> Crafted with high-quality materials to withstand outdoor conditions while maintaining elegant appeal. Available in versatile designs to complement commercial and residential outdoor settings.</p>



                    <b class="d_block fs_large">Towels</b>
                    <p class="fw_light m_bottom_7">Elevate your dining spaces with our stylish and durable restaurant and café furniture. Designed for comfort and practicality, our collection perfectly balances function and style to suit hospitality needs.</p>
                    <p class="fw_light m_bottom_14"> Premium-quality towels designed for exceptional softness, durability, and everyday hospitality use. Perfect for hotels, restaurants, spas, and resorts seeking comfort and a refined guest experience.</p>
                    
                </section>
            </div>
        </div>
    </div>
@endsection