@if ( count($topvideos) > 0)
<div class="video-news">
    <div class="section-title">
        <h2>Top video</h2>
    </div>
    <div class="video-slides owl-carousel owl-theme">
        @foreach ($topvideos as $key => $v)

        @if ($key < 5)
            
        <div class="video-item">
            <div class="video-news-image">
                <a href="#">
                    <img src={{ asset('storage').'/'.$v->image}} alt="image">
                </a>
                <a href="{{ $v->url}}" class="popup-youtube">
                    <i class='bx bx-play-circle'></i>
                </a>
            </div>
            <div class="video-news-content">
                <h3>
                    <a href="#">{{ $v->titre}}</a>
                </h3>
                <span>{{ formatDate($v->created_at) }}</span>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@else
<p>Aucune video trouvée</p>
@endif
