<div class="section-title">
    <h2>Santé</h2>
</div>
@if (count($health) > 0)
    <div class="business-news">
        <div class="business-news-slides owl-carousel owl-theme">
            @foreach ($health as $key => $h)
                @if ($key < 5)
                <div class="single-health-news">
                    <div class="health-news-image">
                        <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$h->slug])}}">
                            <img src={{ asset('storage') . '/' . $v->image }} alt="image">
                        </a>
                    </div>
                    <div class="health-news-content">
                        @if (count($h->categories) > 0)
                                @foreach ($h->categories as $key => $c)
                                    <span class="tag">{{ $c->nom }}</span>
                                @endforeach
                            @endif
                        <h3>
                            <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$h->slug])}}">{{ $h->titre }}</a>
                        </h3>
                        <span>{{ formatDate($h->created_at) }}</span>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@else
    <p>Aucun article trouvé</p>
@endif
