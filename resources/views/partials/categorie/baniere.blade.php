        @if (count($articles) > 0)
                            @foreach ($articles as $key => $a)
                                @if ($key < 2 )
                                <div class="col-lg-6">
                                    <div class="single-politics-news">
                                        <div class="politics-news-image">
                                            <a style="height: 50vh;" href="{{route('article',['categorie'=>$cat->slug,'article'=>$a->slug])}} ">
                                                <img src={{ asset('storage') . '/' . $a->image }} alt="image">

                                            </a>
                                        </div>
                                        <div class="politics-news-content">
                                            @if (count($a->categories) > 0)
                                                @foreach ($a->categories as $key => $c)
                                                    <span class="tag">{{ $c->nom }}</span>
                                                @endforeach
                                            @endif
                                            <h3>
                                                <a style="font-size:15px;" href="{{route('article',['categorie'=>$cat->slug,'article'=>$a->slug])}}">{{ substr($a->titre,0,102)  }}...</a>

                                            </h3>
                                            @if ($a->auteurs->count() > 0)
                                                @foreach ($a->auteurs as $a)
                                                    <span><a href="">{{ $a->nom }} {{ $a->prenom }}</a></span>
                                                @endforeach
                                            @endif
                                            <span>{{ formatDate($a->created_at) }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        
        @else
            <p>Aucun article trouvé</p>
        @endif
