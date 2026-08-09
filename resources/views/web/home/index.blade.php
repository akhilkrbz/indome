@extends('web.layouts.app')

@section('content')

    <!--layerslider-->
    <div class="layerslider" style="width:100%;height:550px;">
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="{{ asset('web/images/sliders/slide3.jpg') }}" alt="" class="ls-bg">
            <!--slide thumbnail-->
            <img src="{{ asset('web/images/sliders/slide3.jpg') }}" alt="" class="ls-tn">
            <!--slide layers-->
            <p class="ls-l color_white fw_light tt_uppercase" style="left:0px;top:115px;font-size:1.285em;"
                data-ls="offsetxin:-100;delayin:400;easingin:easeOutBack;durationin:700;">Shapes, Sizes And Styles</p>
            <h1 class="ls-l color_white second_font tt_uppercase fw_thin"
                style="left:0px;top:156px;font-size:4.285em;line-height:.94em;"
                data-ls="offsetxin:-100;delayin:600;easingin:easeOutBack;durationin:700;"><b>Kitchen</b> That<br>works
                <b>perfectly</b><br><b>for you</b></h1>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent slider_button color_white tt_uppercase fw_light"
                style="left:0px;font-size:1.428em;top:368px;"
                data-ls="offsetxin:-100;delayin:700;easingin:easeOutBack;durationin:700;">Find It Here</a>
        </div>
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="{{ asset('web/images/sliders/slide4.jpg') }}" alt="" class="ls-bg">
            <!--slide thumbnail-->
            <img src="{{ asset('web/images/sliders/slide4.jpg') }}" alt="" class="ls-tn">
            <!--slide layers-->
            <div class="ls-l circle bg_scheme_color color_white slider_label vc_child t_align_c"
                style="left:207px; top:50px;"
                data-ls="scalexin:0.5;offsetxin:0;delayin:200;easingin:easeOutBack;durationin:700;">
                <div class="d_inline_m second_font" style="line-height:1.8em;">
                    <div class="fs_large">for only</div>
                    <b style="font-size:2.142em;">$299</b>
                </div>
            </div>
            <p class="ls-l color_white fw_light tt_uppercase" style="left:50%;top:143px;font-size:1.285em;"
                data-ls="offsetxin:0; offsetyin:120;delayin:400;easingin:easeOutBack;durationin:700;">By Charles and Ray
                Eames</p>
            <h1 class="ls-l color_white second_font tt_uppercase t_align_c"
                style="left:50%;top:185px;font-size:4.285em;line-height:.94em;"
                data-ls="offsetxin:0; offsetyin:120;delayin:600;easingin:easeOutBack;durationin:700;"><b>Eames Molded
                    Plastic<br>Side Chair</b></h1>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent slider_button color_white tt_uppercase fw_light"
                style="left:50%;font-size:1.428em;top:342px;"
                data-ls="offsetxin:0; offsetyin:120;delayin:800;easingin:easeOutBack;durationin:700;">Buy Now!</a>
        </div>
        <div class="ls-slide" data-ls="transition2d: all;">
            <!--slide image-->
            <img src="{{ asset('web/images/sliders/slide2.jpg') }}" alt="" class="ls-bg">
            <!--slide thumbnail-->
            <img src="{{ asset('web/images/sliders/slide2.jpg') }}" alt="" class="ls-tn">
            <!--slide layers-->
            <p class="ls-l color_white fw_light tt_uppercase" style="left:50%;top:171px;font-size:1.285em;"
                data-ls="offsetxin:0; offsetyin:120; delayin:400;easingin:easeOutBack;durationin:700;">BATHROOM INSPIRATION
            </p>
            <h1 class="ls-l color_white second_font tt_uppercase t_align_c"
                style="left:50%;top:213px;font-size:4.285em;line-height:.94em;"
                data-ls="offsetxin:0; offsetyin:0; rotatein:360;scalexin:0.5;scaleyin:0.5; delayin:800;easingin:easeOutBack;durationin:700;">
                <b>New bathroom ideas</b></h1>
            <a href="#" class="ls-l d_block button_type_5 bg_transparent slider_button color_white tt_uppercase fw_light"
                style="left:50%;font-size:1.428em;top:315px;"
                data-ls="offsetxin:0; offsetyin:120;delayin:1100;easingin:easeOutBack;durationin:700;">View Collection</a>
        </div>
    </div>
    <!--main content-->
    <section class="section_offset hidden animated" data-animation="fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--banner-->
                    <figure class="relative wrapper scale_image_container m_bottom_30 r_image_container">
                        <img src="{{ asset('web/images/home/home1.jpg') }}" alt="" class="tr_all scale_image">
                        <!--caption-->
                        <figcaption class="caption_type_1 tr_all">
                            <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                                Special Offer
                            </div>
                            <div class="caption_inner">
                                <h3 class="color_white second_font fw_light m_bottom_5 fs_sm_default">Your Bedroom Lives
                                    Here</h3>
                                <p class="color_light fw_light color_light_2">Donec sit amet eros. Lorem ipsum. <a href="#"
                                        class="color_lbrown color_white_hover">Buy Now!</a></p>
                            </div>
                        </figcaption>
                    </figure>
                    <!--banner-->
                    <a href="{{ route('contact-us') }}" class="banner_type_2 scheme_color m_xs_bottom_30 d_block">
                        <span class="bg_scheme_color inner color_white t_align_c d_block">
                            <span class="second_font tt_uppercase fw_light m_bottom_11 d_block fs_big_2 ba_title">Contact Now!</span>
                            <span class="fs_large fw_light m_bottom_15 d_block ba_title_2">For Orders </span>
                            <span
                                class="second_font tt_uppercase color_white fs_medium button_type_7 d_inline_b bg_transparent tr_all">Click Here</span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--banner-->
                    <figure class="relative wrapper scale_image_container r_image_container m_xs_bottom_30">
                        <img src="{{ asset('web/images/home/home2.jpg') }}" alt="" class="tr_all scale_image">
                        <!--caption-->
                        <figcaption class="caption_type_1 tr_all">
                            <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                                Smart Ideas
                            </div>
                            <div class="caption_inner">
                                <h3 class="color_white second_font fw_light m_bottom_5 fs_sm_default">Relax &amp; Work</h3>
                                <p class="color_light fw_light color_light_2">Mauris fermentum dictum magna. <a href="#"
                                        class="color_lbrown color_white_hover">More info</a></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--banner-->
                    <div class="banner_type_2 color_lbrown m_bottom_30">
                        <div class="bg_lbrown inner color_white t_align_c">
                            <h1 class="second_font fw_light m_bottom_10">Newsletter Sign Up</h1>
                            <p class="fw_light m_bottom_15">Get exclusive deals you will not find anywhere else straight to
                                your inbox!</p>
                            <!--newsletter form-->
                            <form class="newsletter relative color_default button_in_input">
                                <input type="email" placeholder="Enter your email address" name="newsletter-email"
                                    class="w_full fs_medium fw_light b_none">
                                <button class="color_dark tr_all color_lbrown_hover"><i
                                        class="fa fa-envelope d_inline_m"></i></button>
                            </form>
                        </div>
                    </div>
                    <!--banner-->
                    <figure class="relative wrapper scale_image_container r_image_container">
                        <img src="{{ asset('web/images/home/home3.jpg') }}" alt="" class="tr_all scale_image">
                        <!--caption-->
                        <figcaption class="caption_type_1 tr_all">
                            <div class="d_inline_b color_white fw_light caption_title tt_uppercase bg_lbrown_translucent">
                                Stylish Space
                            </div>
                            <div class="caption_inner">
                                <h3 class="color_white second_font fw_light m_bottom_5 fs_sm_default">Liven Up Your Room
                                </h3>
                                <p class="color_light fw_light color_light_2">Mauris fermentum dictum magna. <a href="#"
                                        class="color_lbrown color_white_hover">Click Here</a></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!--tabs-->
    @include('web.home.includes.products-portfolio')
    

    <div class="section_offset bg_grey_light_2 d-none">
        <section class="container">
            <div class="d_table m_bottom_5 w_full animated hidden" data-animation="fadeInLeft">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 v_align_m d_table_cell f_none">
                    <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_4">What Our Customers Say
                    </h5>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 t_align_r d_table_cell f_none">
                    <!--carousel navigation-->
                    <div class="clearfix d_inline_b">
                        <button
                            class="cs_prev black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child m_right_5"><i
                                class="fa fa-angle-left d_inline_m"></i></button>
                        <button class="cs_next black_hover button_type_4 grey state_2 tr_all d_block f_left vc_child"><i
                                class="fa fa-angle-right d_inline_m"></i></button>
                    </div>
                </div>
            </div>
            <hr class="divider_bg m_bottom_15 animated hidden" data-animation="fadeInLeft" data-animation-delay="100">
            <!--carousel-->
            <div class="owl-carousel" data-nav="cs_" data-owl-carousel-options='{
                            "stagePadding" : 15,
                            "margin" : 30,
                            "responsive" : {
                                    "0" : {
                                        "items" : 1
                                    },
                                    "768" : {
                                        "items" : 2
                                    }
                                }
                            }'>
                <!--item-->
                <figure class="animated hidden" data-animation="fadeInLeft" data-animation-delay="200">
                    <a href="#" class="d_block scale_image_container f_left m_right_20 photoframe wrapper color_white">
                        <img src="{{ asset('web/images/customer_img_1.jpg') }}" alt="" class="tr_all scale_image">
                    </a>
                    <figcaption>
                        <blockquote class="fw_light fs_large color_dark lh_medium m_bottom_15">
                            <i>Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantim doloremque laudantim.</i>
                        </blockquote>
                        <p class="second_font color_light m_bottom_3"><a href="#" class="sc_hover">Brenda Grosh</a>, New
                            York</p>
                        <ul class="rating_list hr_list">
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li><i class="fa fa-star tr_all"></i></li>
                        </ul>
                    </figcaption>
                </figure>
                <!--item-->
                <figure class="animated hidden" data-animation="fadeInLeft" data-animation-delay="350">
                    <a href="#" class="d_block scale_image_container f_left m_right_20 photoframe wrapper color_white">
                        <img src="{{ asset('web/images/customer_img_2.jpg') }}" alt="" class="tr_all scale_image">
                    </a>
                    <figcaption>
                        <blockquote class="fw_light fs_large color_dark lh_medium m_bottom_15">
                            <i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos. Ut tellus dolor, dapibus eget, elementum vel.</i>
                        </blockquote>
                        <p class="second_font color_light m_bottom_3"><a href="#" class="sc_hover">John McCoist</a>, Los
                            Angeles</p>
                        <ul class="rating_list hr_list">
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li><i class="fa fa-star tr_all"></i></li>
                        </ul>
                    </figcaption>
                </figure>
                <!--item-->
                <figure class="animated hidden" data-animation="fadeInLeft" data-animation-delay="500">
                    <a href="#" class="d_block scale_image_container f_left m_right_20 photoframe wrapper color_white">
                        <img src="{{ asset('web/images/customer_img_1.jpg') }}" alt="" class="tr_all scale_image">
                    </a>
                    <figcaption>
                        <blockquote class="fw_light fs_large color_dark lh_medium m_bottom_15">
                            <i>Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantim doloremque laudantim.</i>
                        </blockquote>
                        <p class="second_font color_light m_bottom_3"><a href="#" class="sc_hover">Brenda Grosh</a>, New
                            York</p>
                        <ul class="rating_list hr_list">
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li><i class="fa fa-star tr_all"></i></li>
                        </ul>
                    </figcaption>
                </figure>
                <!--item-->
                <figure class="animated hidden" data-animation="fadeInLeft" data-animation-delay="750">
                    <a href="#" class="d_block scale_image_container f_left m_right_20 photoframe wrapper color_white">
                        <img src="{{ asset('web/images/customer_img_2.jpg') }}" alt="" class="tr_all scale_image">
                    </a>
                    <figcaption>
                        <blockquote class="fw_light fs_large color_dark lh_medium m_bottom_15">
                            <i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos. Ut tellus dolor, dapibus eget, elementum vel.</i>
                        </blockquote>
                        <p class="second_font color_light m_bottom_3"><a href="#" class="sc_hover">John McCoist</a>, Los
                            Angeles</p>
                        <ul class="rating_list hr_list">
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                            <li><i class="fa fa-star tr_all"></i></li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
        </section>
    </div>
 
    <div class="section_offset">
        <div class="container">
            <hr class="divider_lbrown m_bottom_25 animated hidden" data-animation="fadeInLeft" data-animation-delay="100">
            <div class="row sh_container">
                <div class="col-lg-4 col-md-4 col-sm-4 same_height animated hidden" data-animation="fadeInLeft"
                    data-animation-delay="200">
                    <section class="item_represent relative m_bottom_25 m_xs_bottom_30 h_inherit t_sm_align_c">
                        <!--icon-->
                        <div
                            class="d_inline_m m_sm_bottom_15 m_sm_right_0 bg_lbrown color_white m_right_17 icon_wrap_1 t_align_c vc_child">
                            <i class="fa fa-lock d_inline_m"></i></div>
                        <!--description-->
                        <div class="d_inline_m description w_sm_full">
                            <h3 class="second_font color_dark m_bottom_10">Quality Guaranteed</h3>
                            <p class="fw_light m_bottom_10">Every product is crafted with premium materials and undergoes strict quality checks for lasting durability.</p>
                            <a href="{{ route('about-us') }}" class="sc_hover second_font">Click Here to Read More</a>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 same_height animated hidden" data-animation="fadeInLeft"
                    data-animation-delay="350">
                    <section class="item_represent with_divider relative m_bottom_25 m_xs_bottom_30 h_inherit t_sm_align_c">
                        <!--icon-->
                        <div
                            class="d_inline_m m_sm_bottom_15 m_sm_right_0 bg_lbrown color_white m_right_17 icon_wrap_1 t_align_c vc_child">
                            <i class="fa fa-truck d_inline_m"></i></div>
                        <!--description-->
                        <div class="d_inline_m description">
                            <h3 class="second_font color_dark m_bottom_10">Bulk Order Support</h3>
                            <p class="fw_light m_bottom_10">Efficiently fulfill large orders with reliable stock availability and competitive wholesale pricing.</p>
                            <a href="{{ route('about-us') }}" class="sc_hover second_font">Click Here to Read More</a>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 same_height animated hidden" data-animation="fadeInLeft"
                    data-animation-delay="500">
                    <section class="item_represent with_divider relative m_bottom_25 m_xs_bottom_30 h_inherit t_sm_align_c">
                        <!--icon-->
                        <div
                            class="d_inline_m m_sm_bottom_15 m_sm_right_0 bg_lbrown color_white m_right_17 icon_wrap_1 t_align_c vc_child">
                            <i class="fa fa-certificate d_inline_m"></i></div>
                        <!--description-->
                        <div class="d_inline_m description">
                            <h3 class="second_font color_dark m_bottom_10">Trusted by Businesses</h3>
                            <p class="fw_light m_bottom_10">Preferred by retailers, hotels, resorts, and commercial projects for quality, reliability, and exceptional service.</p>
                            <a href="{{ route('about-us') }}" class="sc_hover second_font">Click Here to Read More</a>
                        </div>
                    </section>
                </div>
            </div>
            <hr class="divider_lbrown m_bottom_35 m_xs_bottom_0 animated hidden" data-animation="fadeInLeft"
                data-animation-delay="200">
        </div>
    </div>

@endsection