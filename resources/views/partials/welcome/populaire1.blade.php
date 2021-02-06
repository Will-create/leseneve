        @if (count($populaires) > 0)
            @foreach ($populaires as $key => $p)
                @if ($key < 2)

                    <div class="single-most-popular-news">
                        <div class="popular-news-image">
                            <a href="{{route('article',['categorie'=>$p->slug,'article'=>$p->slug])}}">
                                <img src={{ asset('storage') . '/' . $p->image }} alt="image">
                            </a>
                        </div>
                        <div class="popular-news-content">
                            @if (count($p->categories) > 0)
                                @foreach ($p->categories as $key => $c)
                                    <span class="tag">{{ $c->nom }}</span>
                                @endforeach
                            @endif
                            <h3>
                                <a href="{{route('article',['categorie'=>$p->slug,'article'=>$p->slug])}}">{{ $p->titre }}</a>
                            </h3>
                            @if ($p->auteurs->count() > 0)
                                @foreach ($p->auteurs as $a)
                                    <span><a href="">{{ $a->nom }} {{ $a->prenom }}</a></span>
                                @endforeach
                            @endif
                            <span> / {{ formatDate($p->created_at) }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <p>Aucun article trouvé</p>
        @endif
