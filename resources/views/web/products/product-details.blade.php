@extends('web.layouts.app')

@section('content')

    <div class="page_section_offset">
        <div class="container">
            <section>
                <main class="clearfix m_xs_bottom_30">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_15">
                            <div class="wrapper">
                                <div class="d_block relative r_image_container">
                                    @if(count($images) > 0)
                                    <img id="zoom" src="{{ route('product.image', ['product' => $product->id, 'filename' => $images->first()->filename]) }}" alt=""
                                        data-zoom-image="{{ route('product.image', ['product' => $product->id, 'filename' => $images->first()->filename]) }}">
                                    @else
                                    <img id="zoom" src="{{ asset('web/images/no-image.jpg') }}" alt="No Image Available"
                                        data-zoom-image="{{ asset('web/images/no-image.jpg') }}">
                                    @endif
                                    <div
                                        class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase">
                                        <i class="d_inline_m">Sale!</i>
                                    </div>
                                </div>
                                <!--thumbnails-->
                                <div class="product_thumbnails_wrap relative">
                                    <div class="owl-carousel" id="thumbnails" data-nav="thumbnails_product_"
                                        data-owl-carousel-options='{
                                                        "responsive" : {
                                                            "0" : {
                                                                "items" : 3
                                                            },
                                                            "321" : {
                                                                "items" : 5
                                                            },
                                                            "769" : {
                                                                "items" : 3
                                                            },
                                                            "992" : {
                                                                "items" : 5
                                                            }
                                                        },
                                                        "stagePadding" : 40,
                                                        "margin" : 10,
                                                        "URLhashListener" : false
                                                    }'>
                                        @foreach($images as $image)
                                        <a href="#" data-image="{{ route('product.image', ['product' => $product->id, 'filename' => $image->filename]) }}"
                                            data-zoom-image="{{ route('product.image', ['product' => $product->id, 'filename' => $image->filename]) }}" class="d_block">
                                            <img src="{{ route('product.image', ['product' => $product->id, 'filename' => $image->filename]) }}" alt="">
                                        </a>
                                        @endforeach
                                        
                                    </div>
                                    <button
                                        class="thumbnails_product_prev black_hover type_2 button_type_4 grey state_2 tr_all d_block vc_child"><i
                                            class="fa fa-angle-left d_inline_m"></i></button>
                                    <button
                                        class="thumbnails_product_next black_hover type_2 button_type_4 grey state_2 tr_all d_block vc_child"><i
                                            class="fa fa-angle-right d_inline_m"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20">
                            <div class="wrapper">
                                <h3 class="second_font m_bottom_3 f_left product_title"><a href="#" class="sc_hover">{{ $product->name }}</a></h3>
                                <div class="clearfix f_right">
                                    <a href="#"
                                        class="t_align_c button_type_4 black_hover grey state_2 tr_all d_block f_left vc_child m_right_5"><i
                                            class="fa fa-angle-left d_inline_m"></i></a>
                                    <a href="#"
                                        class="t_align_c button_type_4 black_hover grey state_2 tr_all d_block f_left vc_child"><i
                                            class="fa fa-angle-right d_inline_m"></i></a>
                                </div>
                            </div>
                            <div class="relative m_bottom_18">
                                <ul class="rating_list wrapper hr_list d_inline_m tr_all m_right_5">
                                    <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                    <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                    <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                    <li><i class="fa fa-star tr_all"></i></li>
                                    <li><i class="fa fa-star tr_all"></i></li>
                                </ul>
                                <span class="color_light d_inline_m m_top_2">
                                    <a href="#" class="sc_hover fs_medium fw_light">3 Review(s)</a> | <a href="#"
                                        class="color_dark sc_hover fs_medium fw_light">Add Your Review</a>
                                </span>
                            </div>
                            <ul class="m_bottom_14">
                                <!-- <li class="m_bottom_3"><span
                                        class="project_list_title second_font d_inline_b">Manufacturer:</span> <span
                                        class="color_dark fw_light">Chanel</span></li>
                                <li class="m_bottom_3"><span
                                        class="project_list_title second_font d_inline_b">Availability:</span> <span
                                        class="scheme_color fw_light">in stock</span> <span class="fw_light">20
                                        items(s)</span></li> -->
                                <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Product
                                        Code:</span> <span class="fw_light">{{ $product->product_code }}</span></li>
                            </ul>
                            <hr class="divider_light m_bottom_15">
                            <p class="fw_light m_bottom_14 color_grey">{{ $product->description }}</p>
                            <div class="product_options m_bottom_20">
                                <b class="second_font d_block m_bottom_10">Available Options</b>
                                <p class="second_font m_bottom_3">Size:</p>
                                <div class="styled_select size_select relative m_bottom_15">
                                    <div class="select_title type_2 fs_medium fw_light color_light relative d_none tr_all">
                                        Queen</div>
                                    <select>
                                        <option value="Queen">Queen</option>
                                        <option value="King">King</option>
                                        <option value="Grand">Grand</option>
                                    </select>
                                    <ul class="options_list d_none tr_all hidden bg_grey_light_2"></ul>
                                </div>
                                <p class="second_font">Color:</p>
                                <ul class="hr_list m_bottom_17">
                                    <li class="m_right_5 m_bottom_3"><button
                                            class="color_button bg_light_red tr_all"></button></li>
                                    <li class="m_right_5 m_bottom_3"><button
                                            class="color_button bg_light_blue tr_all"></button></li>
                                    <li class="m_right_5 m_bottom_3"><button
                                            class="color_button bg_light_green tr_all"></button></li>
                                    <li class="m_right_5 m_bottom_3"><button class="color_button bg_grey tr_all"></button>
                                    </li>
                                    <li class="m_right_5 m_bottom_3"><button
                                            class="color_button bg_light_yellow tr_all"></button></li>
                                </ul>
                                @include('web.layouts.alerts')
                                <hr class="divider_light">
                                <footer class="bg_grey_light_2">
                                    <div class="fs_big second_font m_bottom_17"><s class="color_light">$1 302.00</s> <b
                                            class="scheme_color">$1 102.00</b></div>
                                    <div class="clearfix">
                                        <div class="quantity clearfix t_align_c f_left f_md_none m_right_10 m_md_bottom_3">
                                            <button class="f_left d_block minus black_hover tr_all bg_white">-</button>
                                            <input type="text" value="1" name="" readonly="" class="f_left color_light">
                                            <button class="f_left d_block black_hover tr_all bg_white">+</button>
                                        </div>
                                        
                                        <br class="d_md_block d_none">
                                        <button data-popup="#enquiry_modal" data-popup-transition-in="bounceInUp"
                                            data-popup-transition-out="bounceOutUp"
                                            class="button_type_2 d_block f_sm_none m_sm_bottom_3 t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase f_left m_right_3 product_button"><i
                                                class="fa fa-paper-plane d_inline_m m_right_9"></i>Send Enquiry</button>
                                        <!-- <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp"
                                            data-popup-transition-out="bounceOutUp"
                                            class="button_type_2 d_block f_sm_none m_sm_bottom_3 t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase f_left m_right_3 product_button"><i
                                                class="fa fa-shopping-cart d_inline_m m_right_9"></i>Add To Cart</button>
                                        <br class="d_sm_block d_none">
                                        <button
                                            class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i
                                                class="fa fa-heart fs_large d_inline_m"></i><span
                                                class="tooltip top fs_small color_white hidden animated"
                                                data-show="fadeInDown" data-hide="fadeOutUp">Add to Wishlist</span></button>
                                        <button
                                            class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i
                                                class="fa fa-arrow-right fs_small d_inline_m"></i><i
                                                class="fa fa-arrow-left fs_small d_inline_m"></i><span
                                                class="tooltip top fs_small color_white hidden animated"
                                                data-show="fadeInDown" data-hide="fadeOutUp">Add to Compare</span></button>
                                        <button
                                            class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative"><i
                                                class="fa fa-question fs_ex_large d_inline_m"></i><span
                                                class="tooltip top fs_small color_white hidden animated"
                                                data-show="fadeInDown" data-hide="fadeOutUp">Ask a Question</span></button> -->
                                    </div>
                                </footer>
                            </div>
                            <!-- <p class="d_inline_m m_right_5 fw_light m_md_bottom_3">Share this:</p>
                            <div class="d_inline_m addthis_widget_container"> -->
                                <!-- AddThis Button BEGIN -->
                                <!-- <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                    <a class="addthis_button_preferred_1"></a>
                                    <a class="addthis_button_preferred_2"></a>
                                    <a class="addthis_button_preferred_3"></a>
                                    <a class="addthis_button_preferred_4"></a>
                                    <a class="addthis_button_compact"></a>
                                    <a class="addthis_counter addthis_bubble_style"></a>
                                </div> -->
                                <!-- AddThis Button END -->
                            <!-- </div> -->
                        </div>
                    </div>
                </main>
                <!--tabs-->
                <div class="tabs styled_tabs m_bottom_18 m_top_10">
                    <nav class="second_font">
                        <ul class="hr_list">
                            <li class="m_right_3"><a href="#tab1" class="color_light border_light_3 d_block">Description</a>
                            </li>
                            <li class="m_right_3"><a href="#tab2"
                                    class="color_light border_light_3 d_block">Specifications</a></li>
                            <li class="m_right_3"><a href="#tab3" class="color_light border_light_3 d_block">Reviews</a>
                            </li>
                            <li class="m_right_3"><a href="#tab4" class="color_light border_light_3 d_block">Custom Tab</a>
                            </li>
                        </ul>
                    </nav>
                    <hr class="d_xs_none">
                    <div id="tab1" class="fw_light tab_content">
                        <p class="m_bottom_13">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec erat volutpat. Duis
                            ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris
                            fermentum dictum magna.Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec
                            sit amet eros. Lorem ipsum.</p>
                        <p>Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis unde omnis iste natus
                            error sit voluptatem accusantim doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                            illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                    </div>
                    <div id="tab2" class="tab_content">
                        <ul>
                            <li>
                                <div class="sp_label second_font d_inline_b m_right_8">Packaging Type:</div> <span
                                    class="fw_light">Box</span>
                                <hr class="divider_light m_top_7 m_bottom_7">
                            </li>
                            <li>
                                <div class="sp_label second_font d_inline_b m_right_8">Packaging Dimensions:</div> <span
                                    class="fw_light">44" x 29" x 28"</span>
                                <hr class="divider_light m_top_7 m_bottom_7">
                            </li>
                            <li>
                                <div class="sp_label second_font d_inline_b m_right_8">Packaging Weight:</div> <span
                                    class="fw_light">48 lbs</span>
                            </li>
                        </ul>
                    </div>
                    <div id="tab3" class="tab_content">
                        <div class="m_bottom_20">
                            <div class="m_bottom_12 clearfix">
                                <div class="f_left lh_small  f_xs_none">
                                    <a href="#" class="second_font color_default sc_hover d_inline_b v_align_b">John
                                        Smith,</a> <span class="color_light fs_medium d_inline_b v_align_b fw_light">28 May
                                        2014</span>
                                </div>
                                <div class="f_right f_xs_none">
                                    <ul class="rating_list wrapper hr_list tr_all">
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li><i class="fa fa-star tr_all"></i></li>
                                        <li><i class="fa fa-star tr_all"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="fw_light">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean
                                auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum
                                dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
                        </div>
                        <hr class="divider_light m_bottom_20">
                        <div class="m_bottom_20">
                            <div class="m_bottom_12 clearfix">
                                <div class="f_left lh_small  f_xs_none">
                                    <a href="#" class="second_font color_default sc_hover d_inline_b v_align_b">admin,</a>
                                    <span class="color_light fs_medium d_inline_b v_align_b fw_light">28 May 2014</span>
                                </div>
                                <div class="f_right f_xs_none">
                                    <ul class="rating_list wrapper hr_list tr_all">
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li><i class="fa fa-star tr_all"></i></li>
                                        <li><i class="fa fa-star tr_all"></i></li>
                                        <li><i class="fa fa-star tr_all"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="fw_light">Sed laoret aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus
                                eleifend, elit. Aenean auctor wisi et urna.</p>
                        </div>
                        <hr class="divider_light m_bottom_23">
                        <div class="m_bottom_30">
                            <div class="m_bottom_12 clearfix">
                                <div class="f_left lh_small  f_xs_none">
                                    <a href="#" class="second_font color_default sc_hover d_inline_b v_align_b">John
                                        Smith,</a> <span class="color_light fs_medium d_inline_b v_align_b fw_light">28 May
                                        2014</span>
                                </div>
                                <div class="f_right f_xs_none">
                                    <ul class="rating_list wrapper hr_list tr_all">
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                        <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="fw_light">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec
                                eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                Curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec erat volutpat. Duis ac
                                turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                        <h5 class="second_font color_dark tt_uppercase fw_light d_inline_m m_bottom_23">Write A Review</h5>
                        <form>
                            <ul>
                                <li class="m_bottom_15">
                                    <label for="reviewer_name"
                                        class="second_font required clickable d_inline_b m_bottom_5">Name</label><br>
                                    <input type="text" class="tr_all w_full fw_light fs_medium color_light"
                                        id="reviewer_name" name="">
                                </li>
                                <li class="m_bottom_9">
                                    <label for="review" class="second_font required clickable d_inline_b m_bottom_5">Your
                                        Review</label><br>
                                    <textarea class="tr_all w_full fw_light fs_medium color_light" id="review" name=""
                                        rows="5"></textarea>
                                </li>
                                <li class="clearfix">
                                    <div class="f_left m_top_2">
                                        <label class="second_font required clickable d_inline_m m_right_5">Rating</label>
                                        <ul class="rating_list wrapper hr_list tr_all d_inline_m">
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul>
                                    </div>
                                    <button
                                        class="button_type_2 d_block t_align_c black state_2 tr_all second_font fs_medium tt_uppercase f_right"><span
                                            class="d_inline_b m_left_10 m_right_10">Submit</span></button>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div id="tab4" class="fw_light tab_content">
                        <div class="iframe_video_container">
                            <iframe src="https://www.youtube.com/embed/-BrDlrytgm8?rel=0&amp;controls=1&amp;autohide=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                
            </section>
        </div>
    </div>


    

@endsection


@section('modals')
<div class="init_popup" id="enquiry_modal">
    <div class="popup init">
        <div class="clearfix">
            <div class="product_preview f_left f_xs_none wrapper m_xs_bottom_15">
                <div class="d_block relative r_image_container">
                    @if(count($images) > 0)
                    <img id="zoom" src="{{ route('product.image', ['product' => $product->id, 'filename' => $images->first()->filename]) }}" alt="" data-zoom-image="{{ route('product.image', ['product' => $product->id, 'filename' => $images->first()->filename]) }}">
                    <div class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase"><i class="d_inline_m">Sale!</i></div>
                    @else
                    <img id="zoom" src="{{ asset('web/images/no-image.jpg') }}" alt="No Image Available" data-zoom-image="{{ asset('web/images/no-image.jpg') }}">
                    @endif
                </div>
                <!--thumbnails-->
                
            </div>
            <div class="product_description f_left f_xs_none">
                <h3 class="second_font m_bottom_3 product_title"><a href="#" class="sc_hover">{{ $product->name }}</a></h3>
                
                <ul class="m_bottom_14">
                    <li class="m_bottom_3"><span class="project_list_title second_font d_inline_b">Product Code:</span> <span class="fw_light">{{ $product->product_code }}</span></li>
                </ul>
                <hr class="divider_light m_bottom_15">
                <p class="fw_light m_bottom_14 color_grey">{{ $product->description }}</p>
                <div class="product_options">

                    <form id="contactUsform" class="b_default_layout" method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <ul>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <li class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
                                    <label class="second_font required d_inline_b m_bottom_5 clickable"
                                        for="cf_name">First Name</label><br>
                                    <input type="text" name="name" id="cf_name" class="tr_all w_full fw_light" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_15">
                                    <label class="second_font required d_inline_b m_bottom_5 clickable"
                                        for="cf_email">Email Address</label><br>
                                    <input type="email" name="email" id="cf_email"
                                        class="tr_all w_full fw_light" required>
                                </div>
                            </li>
                            <li class="m_bottom_15">
                                <label class="second_font d_inline_b m_bottom_5 clickable"
                                    for="cf_telephone">Telephone</label><br>
                                <input type="text" name="phone" id="cf_telephone"
                                    class="tr_all w_full fw_light" required>
                            </li>
                            <li class="m_bottom_5">
                                <label class="second_font d_inline_b m_bottom_5 clickable"
                                    for="cf_message">Message</label><br>
                                <textarea id="cf_message" name="message" rows="6"
                                    class="tr_all w_full fw_light" required></textarea>
                            </li>
                            <li>
                                <button type="submit"
                                    class="button_type_2 black state_2 tr_all second_font fs_medium tt_uppercase d_inline_b"><span
                                        class="m_left_10 m_right_10 d_inline_b">Submit</span></button>
                            </li>
                        </ul>
                    </form>
                    
                    
                    
                </div>
            </div>
        </div>
        <button class="close_popup fw_light fs_large tr_all">x</button>
    </div>
</div>
@endsection