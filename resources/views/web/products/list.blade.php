@extends('web.layouts.app')

@section('content')
    <!--main content-->
    <div class="page_section_offset">
        <div class="container">
            <div class="row">
                <aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30 p_top_4">
                    <!--filter widget-->
                    @include('web.products.includes.filter')
                    <!--categories widget-->
                    @include('web.products.includes.categories')
                  
                </aside>
                <main class="col-lg-9 col-md-9 col-sm-9 m_bottom_30 m_xs_bottom_10">
                    
                    <hr class="divider_light m_bottom_5">
                    <div class="d_table w_full m_bottom_15">
                        <div
                            class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none fs_medium color_light fw_light m_xs_bottom_5">
                            
                        </div>
                        <div
                            class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none t_align_r t_xs_align_l p_xs_left_0">
                            <!--pagination-->
                            {{ $list->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                    <!--isotope-->
                    <div id="can_change_layout"
                        class="category_isotope_container three_columns wrapper m_bottom_10 m_xs_bottom_0"
                        data-isotope-options='{
                                        "itemSelector": ".category_isotope_item",
                                          "layoutMode": "fitRows"
                                    }'>

                        @foreach($list as $key => $item)
                        @php
                            $firstImage = $item->images->first();
                            $imageSrc = $firstImage ? asset('uploads/products/' . $item->id . '/' . $firstImage->filename) : asset('assets/images/products/01.png');
                        @endphp
                        
                        <!--isotope item-->
                        <div class="category_isotope_item">
                            <figure
                                class="product_item type_2 c_image_container relative frame_container t_sm_align_c r_image_container qv_container">
                                <!--image & buttons & label-->
                                <div class="relative">
                                    <div class="d_block">
                                        <img src="{{ $imageSrc }}" alt="" class="c_image_1 tr_all" height="263" width="263">
                                        <img src="{{ $imageSrc }}" alt="" class="c_image_2 tr_all" height="263" width="263">
                                    </div>
                                    <div
                                        class="product_label fs_ex_small circle color_white bg_lbrown t_align_c vc_child tt_uppercase">
                                        <i class="d_inline_m">Sale!</i>
                                    </div>
                                    
                                </div>
                                <figcaption class="bg_white relative p_bottom_0">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 m_bottom_9">
                                            <a class="second_font sc_hover d_xs_block" href="#">{{ $item->name }}</a>
                                            <div class="relative">
                                                <a href="#"
                                                    class="fw_light color_light sc_hover category_link tr_all">{{ $item->product_code }}</a><br
                                                    class="d_none">
                                                
                                            </div>
                                            <hr class="d_none divider_light m_bottom_15">
                                            <p class="fw_light d_none m_bottom_14 color_grey">{{ $item->description }}</p>
                                            <hr class="d_none divider_light m_bottom_15">
                                        </div>
                                        
                                    </div>

                                    <button data-popup="#add_to_cart_popup" data-popup-transition-in="bounceInUp"
                                        data-popup-transition-out="bounceOutUp"
                                        class="button_type_2 m_bottom_9 d_block w_full t_align_c lbrown state_2 tr_all second_font fs_medium tt_uppercase"><i
                                            class="fa fa-eye d_inline_m m_right_9"></i>View Details</button>
                                </figcaption>
                            </figure>
                        </div>

                        


                        @endforeach
                        
                    </div>
                    <hr class="m_bottom_5 divider_light">
                    <div class="d_table w_full m_bottom_5">
                        <div
                            class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none fs_medium color_light fw_light m_xs_bottom_5">
                           
                        </div>
                        <div
                            class="col-lg-6 col-md-6 col-sm-6 d_xs_block v_align_m d_table_cell f_none t_align_r t_xs_align_l p_xs_left_0">
                            <!--pagination-->
                            {{ $list->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>


    <!--popup-->
    


@endsection