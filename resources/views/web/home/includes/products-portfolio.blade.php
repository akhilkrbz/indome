<div class="page_section_offset">
    <main class="container">

        <div class="d_table w_full d_xs_block m_bottom_6">
            <div class="col-lg-9 col-md-9 col-sm-9 f_none d_table_cell v_align_m d_xs_block m_xs_bottom_10 p_xs_left_0 px_right_0">
                <h2 class="fw_light second_font color_dark tt_uppercase">Our Products</h2>
            </div>
            <!-- <div class="col-lg-3 col-md-3 col-sm-3 f_none d_table_cell v_align_m t_align_r d_xs_block t_xs_align_l p_xs_left_0 px_right_0">
                <div class="styled_select relative sort d_inline_b t_align_l">
                    <div class="select_title fw_light color_light relative d_none tr_all">All</div>
                    <select>
                        <option data-filter="*" value="All">All</option>
                        <option data-filter=".bedroom" value="Bedroom">Bedroom</option>
                        <option data-filter=".home_office" value="Home Office">Home Office</option>
                        <option data-filter=".living_room" value="Living Room">Living Room</option>
                    </select>
                    <ul class="options_list d_none tr_all hidden bg_grey_light"></ul>
                </div>
            </div> -->
        </div>
        
        <div class="portfolio_isotope_container three_columns wrapper m_bottom_10 m_xs_bottom_0" data-isotope-options='{
						"itemSelector": ".portfolio_isotope_item",
			  			"layoutMode": "masonry",
			  			"masonry" : {
			  				"columnWidth" : ".portfolio_isotope_item",
			  				"gutter" : 0
			  			}
					}'>

            @foreach($list as $key => $item)
            @php
                $firstImage = $item->images->first();
                $imageSrc = $firstImage ? asset('storage/products/' . $item->id . '/' . $firstImage->filename) : asset('assets/images/products/01.png');
            @endphp
            <!--isotope item-->
            <div class="portfolio_isotope_item masonry living_room" >
                <div class="frame_container relative r_image_container db_xs_centered">
                    <figure class="relative">
                        <div class="d_block wrapper scale_image_container popup_container relative">
                            <img src="{{ $imageSrc }}" alt="" class="tr_all scale_image">
                            <div class="item_title_container t_align_c">
                                <div class="item_title tr_all">
                                    <h5 class="second_font m_bottom_5 lh_small"><a href="#"
                                            class="color_lbrown color_white_hover"><b>{{ $item->name }}</b></a></h5>
                                    <div class="m_bottom_15 m_sm_bottom_10"><a href="#"
                                            class="fw_light color_white d_inline_b color_lbrown_hover d_sm_none d_xs_inline_b">{{ $item->category->category_name }}</a></div>
                                    <ul class="open_buttons_container relative hr_list in_masonry d_inline_b">
                                        <!-- <li class="m_right_5 tr_all"><a href="{{ asset('web/images/portfolio_img_1.jpg') }}"
                                                class="button_type_6 vc_child d_block t_align_c border_white tr_delay jackbox"
                                                data-group="lightbox" data-title="Title 1"><i
                                                    class="fa fa-plus d_inline_m"></i></a></li> -->
                                        <li class="m_right_5 tr_all"><a href="{{ route('view-product.details', ['id' => $item->id]) }}"
                                                class="button_type_6 vc_child d_block t_align_c border_white tr_delay"><i
                                                    class="fa fa-link d_inline_m"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            @endforeach
            
        </div>

        <div class="d-flex justify-content-center mt-4">
            <center>
                <a href="{{ route('products') }}" class="button_type_2 lbrown state_2 tr_all second_font fs_medium tt_uppercase">
                    View More Products
                </a>
            </center>
        </div>
    </main>
</div>