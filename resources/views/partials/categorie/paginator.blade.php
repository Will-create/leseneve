




@if ($paginator->lastPage() > 1)
<div class="pagination-area">
    <a href="{{ $paginator->url(1) }}" class="prev page-numbers {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <i class='bx bx-chevron-left'></i>
    </a>

    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
       @if ($paginator->currentPage() == $i)
       <span class="page-numbers current" aria-current="page">{{ $i }}</span>
           
       @else
       <a href="{{ $paginator->url($i) }}" class="page-numbers">{{ $i }}</a>
           
       @endif
       @endfor

       {{-- <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
           <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li> --}}
        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="next page-numbers {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <i class='bx bx-chevron-right'></i>
        </a>
    
</div>
@endif