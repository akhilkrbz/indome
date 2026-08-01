@if ($paginator->hasPages())
    <nav class="d_inline_b">
        <ul class="hr_list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="m_right_3">
                    <span aria-hidden="true" class="button_type_4 tr_delay grey state_2 d_block vc_child t_align_c fs_ex_small">
                        <i class="fa fa-angle-left d_inline_m"></i>
                    </span>
                </li>
            @else
                <li class="m_right_3">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"
                       class="button_type_4 tr_delay grey state_2 d_block vc_child t_align_c fs_ex_small">
                        <i class="fa fa-angle-left d_inline_m"></i>
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="m_right_3">
                        <span class="button_type_4 tr_delay grey state_2 d_block vc_child t_align_c">
                            <span class="d_inline_m fs_small">{{ $element }}</span>
                        </span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="m_right_3">
                                <span aria-current="page" class="button_type_4 tr_delay grey state_2 d_block vc_child t_align_c border_black">
                                    <span class="d_inline_m fs_small">{{ $page }}</span>
                                </span>
                            </li>
                        @else
                            <li class="m_right_3">
                                <a href="{{ $url }}" class="button_type_4 tr_delay grey state_2 d_block vc_child t_align_c">
                                    <span class="d_inline_m fs_small">{{ $page }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="m_right_3">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"
                       class="button_type_4 tr_delay grey state_2 d_block vc_child t_align_c fs_ex_small">
                        <i class="fa fa-angle-right d_inline_m"></i>
                    </a>
                </li>
            @else
                <li class="m_right_3">
                    <span aria-hidden="true" class="button_type_4 tr_delay grey state_2 d_block vc_child t_align_c fs_ex_small">
                        <i class="fa fa-angle-right d_inline_m"></i>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
