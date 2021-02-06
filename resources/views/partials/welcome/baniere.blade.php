        @if ($banieres->count()>0)
        <section class="main-news-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        @foreach ($banieres as $key => $b)
                            @if ($key == 0 )
                            <div class="single-main-news">
                                
                                <a   href="{{route('article',['categorie'=>$b->slug,'article'=>$b->slug])}}">
                                    <img  src={{ asset('storage').'/'.$b->image}} alt="image">
                                </a>
                                <div class="news-content">
                                    @if ( count($b->categories) > 0)
                                        
                                    @foreach ($b->categories as $key => $c)
                                    
                                    <a href="{{route('categorie',$c->slug)}}">
                                        <span class="tag">{{ $c->nom}}</span>    
                                    </a>
                                    @endforeach
                                    @endif
                                    <h3>
                                        <a href="{{route('article',['categorie'=>$b->slug,'article'=>$b->slug])}}">{{ $b->titre}}</a>
                                    </h3>
                                    @if ($b->auteurs->count() > 0)
                                    @endif 
                                    <span>{{ formatDate($b->created_at) }}</span>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-lg-4">
                        @foreach ($banieres as $key => $b)
                        @if ($key == 1 )
                        <div class="single-main-news-inner">
                            <a href="#">
                                <img src={{ asset('storage').'/'.$b->image}} alt="image">
                            </a>
                            <div class="news-content">
                                @if ($b->categories->count() > 0)
                                @foreach ($b->categories as $key => $c)
                                <a  href="{{route('categorie',$c->slug)}}" class="tag">{{ $c->nom}}</a>
                                @endforeach
                                @endif
                                <h3>
                                    <a href="{{route('article',['categorie'=>$b->slug,'article'=>$b->slug])}}">{{ $b->titre}}</a>
                                </h3>
                                <span>{{ formatDate($b->created_at) }}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @foreach ($banieres as $key => $b)
                        @if ($key > 1 && $key < 4)
                        <div class="baniere-sub">

                                <a class="img" href="{{route('article',['categorie'=>$b->slug,'article'=>$b->slug])}}">
                                    <img src={{ asset('storage').'/'.$b->image}} alt="image">
                                </a>
                            <div class="news-content">
                                <span>
                                    <a href="{{route('article',['categorie'=>$b->slug,'article'=>$b->slug])}}">{{ substr($b->titre,0,90) }}...</a>
                                </span>
                                <br>
                                <span style="text-dark" >{{ formatDate($b->created_at) }}</span>
                            </div>

                        </div>
                        @endif
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </section>
        @else
            <p>Aucun article trouvé</p>
        @endif