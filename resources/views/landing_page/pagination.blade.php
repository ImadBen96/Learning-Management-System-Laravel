


@if ($paginator->hasPages())
    <nav aria-label="Page navigation example" class="page-pagination mt-40">


        <ul class="pagination">

            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><a class="page-link" href="#"><i class="flaticon-left-arrow-1"></i></a></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="flaticon-left-arrow-1"></i></a></li>

            @endif



            @foreach ($elements as $element)

                @if (is_string($element))
                    <li class="page-item disabled"><span>{{ $element }}</span></li>
                @endif



                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <a class="page-link" href="#">{{ $page }}<span class="sr-only">(current)</span></a>
                                </li>

                        @else


                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>

                        @endif
                    @endforeach
                @endif
            @endforeach



            @if ($paginator->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="flaticon-right-arrow"></i></a></li>

            @else
                    <li class="page-item disabled"><a class="page-link" href="#"><i class="flaticon-right-arrow"></i></a></li>

            @endif
        </ul>




    </nav>

@endif
