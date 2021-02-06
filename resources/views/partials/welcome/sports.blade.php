        <div class="section-title">
            <h2>Sports</h2>
        </div>
        @if (count($sports) >0)
        @foreach ($sports as $key => $s)
        @if ($key < 3 )
        <div class="single-sports-news">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-4">
                    <div class="sports-news-image">
                        <a href="{{route('article',['categorie'=>$s->slug,'article'=>$s->slug])}}">
                            <img src={{ asset('storage').'/'.$s->image}} alt="image">

                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <div class="sports-news-content">
                        <h3>
                            <a href="{{route('article',['categorie'=>$s->slug,'article'=>$s->slug])}}">{{ $s->titre}}</a>
                        </h3>
                        <p>{{ formatDate($s->created_at) }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @else
            <p>Aucun article trouvé</p>
        @endif