@if (count($business) > 0)
    <div class="business-news">
        <div class="section-title">
            <h2>Business</h2>
        </div>
        <div class="business-news-slides owl-carousel owl-theme">
            @foreach ($business as $key => $b)
                @if ($key < 5)
                    <div class="single-business-news">
                        <div class="business-news-image">
                            <a href="{{route('article',['categorie'=>$b->slug,'article'=>$b->slug])}}">
                                <img src={{ asset('storage') . '/' . $b->image }} alt="image">
                            </a>
                        </div>
                        <div class="business-news-content">
                            @if (count($b->categories) > 0)
                                @foreach ($b->categories as $key => $c)
                                    <span class="tag">{{ $c->nom }}</span>
                                @endforeach
                            @endif
                            <h3>
                                <a href="{{route('article',['categorie'=>$b->slug,'article'=>$b->slug])}}">{{ $b->titre }}</a>
                            </h3>
                            <p>
                                @if ($b->auteurs->count() > 0)
                                    @foreach ($b->auteurs as $a)
                                        <span><a href="">{{ $a->nom }} {{ $a->prenom }}</a></span>
                                    @endforeach
                                @endif
                                <span>{{ formatDate($b->created_at) }}</span>
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@else
    <p>Aucun article trouvé</p>
@endif