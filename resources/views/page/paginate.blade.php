                            
                        @if ($paginator->hasPages())
                        <div id="action">
                            <div class="news_socail ml-auto">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                
            @else
               
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" ><i class="fa fa-backward" aria-hidden="true"></i> </a> 
          
            @endif
                                
            @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> <i class="fa fa-forward" aria-hidden="true"></i>  </a>
        
            @else
                
            @endif
            </div>
                             
                             </div>
@endif
