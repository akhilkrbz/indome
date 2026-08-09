<div class="section_offset p_bottom_0">
    <div class="container">
        <div class="tabs m_bottom_10">
            <!--tabs nav-->
            <nav class="m_bottom_10">
                <ul class="hr_list tabs_list second_font tt_uppercase fs_large fw_light">
                    <li data-animation="fadeInRight" class="m_right_40 m_xs_right_10 animated hidden"><a
                            class="color_light color_dark_hover" href="#tab-1">Latest Products</a></li>
                    
                </ul>
            </nav>
            <hr data-animation="fadeInLeft" data-animation-delay="600" class="hidden animated divider_bg m_bottom_30">
            <!--tabs content-->
            <div id="tab-1">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            @foreach($list as $key => $item)
                            @if($key < 2)

                            @php
                                $firstImage = $item->images->first();
                                $imageSrc = $firstImage ? asset('storage/products/' . $item->id . '/' . $firstImage->filename) : asset('assets/images/products/01.png');
                            @endphp


                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 w_mxs_full m_xs_bottom_30 animated hidden"
                                data-animation="fadeInDown">
                                <!--product-->
                                <figure
                                    class="product_item relative c_image_container frame_container t_sm_align_c r_image_container">
                                    <!--image & buttons & label-->
                                    <div class="relative">
                                        <a href="{{ route('view-product.details', $item->id) }}" class="d_block">
                                            <img src="{{ $imageSrc }}" alt=""
                                                class="c_image_1 tr_all">
                                            <img src="{{ $imageSrc }}" alt=""
                                                class="c_image_2 tr_all">
                                        </a>
                                        <div
                                            class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase">
                                            <i class="d_inline_m">New!</i>
                                        </div>
                                        <div class="product_buttons_container bg_white tr_all">
                                            <div class="row t_sm_align_c">
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="clearfix m_sm_bottom_3 d_sm_inline_b">
                                                        <a href="{{ route('view-product.details', $item->id) }}">
                                                            <button
                                                                class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative m_sm_right_0"><i
                                                                    class="fa fa-eye fs_large d_inline_m"></i><span
                                                                    class="tooltip top fs_small color_white hidden animated"
                                                                    data-show="fadeInDown" data-hide="fadeOutUp">
                                                                View Product</span></button>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="bg_white relative">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7 m_bottom_7">
                                                <a class="second_font sc_hover d_xs_block" href="{{ route('view-product.details', $item->id) }}">{{ $item->name }}</a>
                                                <a href="#" class="fw_light color_light sc_hover">{{ $item->product_code }}</a>
                                            </div>
                                            <!-- <div
                                                class="col-lg-5 col-md-5 color_light fs_large second_font t_align_r t_sm_align_c m_bottom_5">
                                                <s>$1 302.00</s>
                                                <b class="scheme_color d_block">$1 102.00</b>
                                            </div> -->
                                        </div>
                                        <!-- <ul class="rating_list hr_list d_sm_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul> -->
                                    </figcaption>
                                </figure>
                            </div>
                            
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            @foreach($list as $key => $item)
                            @if($key >= 2)
                            @php
                                $firstImage = $item->images->first();
                                $imageSrc = $firstImage ? asset('storage/products/' . $item->id . '/' . $firstImage->filename) : asset('assets/images/products/01.png');
                            @endphp
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 w_mxs_full m_xs_bottom_30 animated hidden"
                                data-animation="fadeInDown">
                                <!--product-->
                                <figure
                                    class="product_item relative c_image_container frame_container t_sm_align_c r_image_container">
                                    <!--image & buttons & label-->
                                    <div class="relative">
                                        <a href="{{ route('view-product.details', $item->id) }}" class="d_block">
                                            <img src="{{ $imageSrc }}" alt=""
                                                class="c_image_1 tr_all">
                                            <img src="{{ $imageSrc }}" alt=""
                                                class="c_image_2 tr_all">
                                        </a>
                                        <div
                                            class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase">
                                            <i class="d_inline_m">New!</i>
                                        </div>
                                        <div class="product_buttons_container bg_white tr_all">
                                            <div class="row t_sm_align_c">
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="clearfix m_sm_bottom_3 d_sm_inline_b">
                                                        <a href="{{ route('view-product.details', $item->id) }}">
                                                            <button
                                                                class="button_type_8 grey state_2 tr_delay color_dark t_align_c vc_child f_left m_right_3 tooltip_container relative m_sm_right_0"><i
                                                                    class="fa fa-eye fs_large d_inline_m"></i><span
                                                                    class="tooltip top fs_small color_white hidden animated"
                                                                    data-show="fadeInDown" data-hide="fadeOutUp">
                                                                View Product</span></button>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption class="bg_white relative">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7 m_bottom_7">
                                                <a class="second_font sc_hover d_xs_block" href="{{ route('view-product.details', $item->id) }}">{{ $item->name }}</a>
                                                <a href="#" class="fw_light color_light sc_hover">{{ $item->product_code }}</a>
                                            </div>
                                            <!-- <div
                                                class="col-lg-5 col-md-5 color_light fs_large second_font t_align_r t_sm_align_c m_bottom_5">
                                                <s>$1 302.00</s>
                                                <b class="scheme_color d_block">$1 102.00</b>
                                            </div> -->
                                        </div>
                                        <!-- <ul class="rating_list hr_list d_sm_inline_b">
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li class="color_lbrown"><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                            <li><i class="fa fa-star tr_all"></i></li>
                                        </ul> -->
                                    </figcaption>
                                </figure>
                            </div>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>