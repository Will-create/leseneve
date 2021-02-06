        <div class="section-title">
            <h2>Tech</h2>
        </div>
        @if (count($techs)>0)
        @foreach ($techs as $key => $t)
        @if ($key < 3)
        <div class="single-sports-news">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-4">
                    <div class="sports-news-image">
                        <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$t->slug])}}">
                            <img src={{ asset('storage').'/'.$t->image}} alt="image">

                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <div class="sports-news-content">
                        <h3>
                            <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$t->slug])}}">{{ $t->titre}}</a>
                        </h3>
                        <p>{{ $t->created_at->format('d/m/y') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @else
            <p>Aucun article trouvé</p>
        @endif