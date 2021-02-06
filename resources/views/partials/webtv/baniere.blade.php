        @if (count($videos) > 0)
        <div class="col-lg-6">
                            @foreach ($videos as $key => $v)
                                @if ($key < rount(count($videos))/2 )
                                    <div class="single-politics-news">
                                        <div class="politics-news-image">
                                            <a href="{{route('article',['categorie'=>$v->slug,'article'=>$v->slug])}} ">
                                                <img src={{ asset('storage') . '/' . $v->image }} alt="image">
                                            </a>
                                        </div>
                                        <div class="politics-news-content">
                                            @if (count($v->categories) > 0)
                                                @foreach ($v->categories as $key => $c)
                                                    <span class="tag">{{ $c->nom }}</span>
                                                @endforeach
                                            @endif
                                            <h3>
                                                <a href="{{route('article',['categorie'=>$cat->slug,'article'=>$v->slug])}}">{{ $v->titre }}</a>
                                            </h3>
                                            
                                            <span>{{ formatDate($v->created_at) }}</span>
                                        </div>
                                    </div>
                                @endif
                             @endforeach
            </div>
                        
        @else
            <p>Aucun article trouvé</p>
        @endif
