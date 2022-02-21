@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul style="font-size: 15px;" class="pagination justify-content-center">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><</a>
            </li>
        @else
            <li class="page-item"><a style="color: black;" class="page-link" href="{{ $paginator->previousPageUrl() }}"><</a></li>
        @endif
      
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled" >{{ $element }}</li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a style="color: white; background: #d3b895; border: 1px solid #d3b895; margin-left: 8px; font-weight: 600;" class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a style="color: black; margin-left: 8px; font-weight: 600" class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a style="color: black; margin-left: 8px;" class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">></a>
            </li>
        @else
            <li class="page-item disabled">
                <a style="color: black; margin-left: 8px;" class="page-link" href="#">></a>
            </li>
        @endif
    </ul>
@endif