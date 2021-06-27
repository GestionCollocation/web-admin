@if($paginator->hasPages())
    <ul class="pagination">
        <!-- Prevouis Pages links -->

        @if($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link"><span>&laquo;</span></a></li>
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link"
                    rel="prev"><span>&laquo;</span></a></li>

        @endif
        <!-- Pagination Element hrere  -->

        @foreach($elements as $element)

            @if(is_string($element))
                <li class="page-item disabled"><a class="page-link"><span>{{ $element }}</span></a></li>
            @endif

            @if(is_array($element))
                @foreach($element as $page=>$url)
                    @if($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link"><span>{{ $page }}</span></a></li>
                    @else
                        <li class="page-item"><a href="{{ $url }}" class="page-link"><span>{{ $page }}</span></a></li>
                    @endif


                @endforeach

            @endif


        @endforeach



        <!-- Next Pages Links -->

        @if($paginator->hasMorePages())
            <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link"><span>&raquo;</span></a>
            </li>
        @else
            <li class="page-item disabled"><a class="page-link"><span>&raquo;</span></a></li>
        @endif

    </ul>
@endif
