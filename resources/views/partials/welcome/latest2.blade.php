         @if (count($populaires)>0)
        <section class="widget widget_latest_news_thumb">
            <h3 class="widget-title">Actualité Récente</h3>
            @foreach ($populaires as $key => $p)
            @if ($key < 5 )
            <article class="item">
                <a href="#" class="thumb">
                    <img src={{ asset('storage').'/'.$p->image}} alt="image">
                </a>
                <div class="info">
                    <h4 class="title usmall">
                        <a href="#">{{ $p->titre}}</a>
                    </h4>
                    <p>{{ formatDate($p->created_at) }}</p>
                </div>
            </article>
            @endif
            @endforeach
        </section>
        @else
            <p>Aucun article trouvé</p>
        @endif 
       