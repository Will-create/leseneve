        @if (count($articles) > 0)
            @foreach ($articles as $key => $a)
                @if ($key > 1)
                <div class="single-politics-news">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="politics-news-image">
                                <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$a->slug])}}">
                                    <img src={{ asset('storage') . '/' . $a->image }} alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="politics-news-content-box">
                                @if (count($a->categories) > 0)
                                    @foreach ($a->categories as $key => $c)
                                        <span class="tag">{{ $c->nom }}</span>
                                    @endforeach
                                @endif
                                <h3>
                                    <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$a->slug])}}">{{ $a->titre }}</a>
                                </h3>
                                <p>
                                    <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$a->slug])}}">{{ $a->resume }}</a>
                                </p>
                                <span class="date" >{{ formatDate($a->created_at) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
                        
        @else
            <p>Aucun article trouvé</p>
        @endif
