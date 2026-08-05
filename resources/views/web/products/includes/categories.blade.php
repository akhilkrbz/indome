<section class="m_bottom_30">
    <h5 class="color_dark tt_uppercase second_font fw_light m_bottom_13">Categories</h5>
    <hr class="divider_bg m_bottom_23">
    <ul class="categories_list second_font w_break">
        @foreach($categories as $category)
        <li class="relative"><a href="{{ route('products', ['category' => $category->id]) }}" class="fs_large_0 d_inline_b">{{ $category->category_name }}</a>
            @if($category->sub_categories->isNotEmpty())
            <button class="open_sub_categories fs_medium"></button>
            <!--second level-->
            <ul class="d_none">
                @foreach($category->sub_categories as $subCategory)
                <li class="relative"><a href="{{ route('products', ['category' => $category->id, 'subcategory' => $subCategory->id]) }}" class="tr_delay d_inline_b">{{ $subCategory->sub_category_name }}</a></li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
        
    </ul>
</section>