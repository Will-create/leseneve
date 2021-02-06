        @if ($latests->count()>0)
        <section class="widget widget_latest_news_thumb">
            <h3 class="widget-title">Latest news</h3>
            @foreach ($latest as $key => $l)
            @if ($key < 5 )
            <article class="item">
                <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$l->slug])}}" class="thumb">
                    <img src={{ asset('storage').'/'.$s->image}} alt="image">
                </a>
                <div class="info">
                    <h4 class="title usmall">
                        <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$l->slug])}}">{{ $l->titre}}</a>
                    </h4>
                    <p>{{ formatDate($l->created_at) }}</p>
                </div>
            </article>
            @endif
        @endforeach
        </section>
        @else
            <p>Aucun article trouvé</p>
        @endif