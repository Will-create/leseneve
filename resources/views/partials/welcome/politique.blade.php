        @if (count($politiques) > 0)
        <div class="politics-news">
            <div class="section-title">
                <h2>Politique</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @foreach ($politiques as $key => $p)
                        @if ($key == 0)
                            
                        <div class="single-politics-news">
                            <div class="politics-news-image">
                                <a href="{{route('article',['categorie'=>$p->slug,'article'=>$p->slug])}}">
                                        <img src={{ asset('storage').'/'.$p->image}} alt="image">
                                </a>
                            </div>
                            <div class="politics-news-content">
                                @if ( count($p->categories) > 0)
                                        
                                    @foreach ($p->categories as $key => $c)
                                    
                                    <span class="tag">{{ $c->nom}}</span>    
                                    @endforeach
                                    @endif
                                <h3>
                                    <a href="{{route('article',['categorie'=>$p->slug,'article'=>$p->slug])}}">{{ $p->titre}}</a>

                                </h3>
                                @if ($p->auteurs->count() > 0)
                                     @foreach ($p->auteurs as $a)
                                    <span><a href="">{{ $a->nom}} {{ $a->prenom}}</a></span>
                                    @endforeach
                                    @endif 
                                    <span>{{ formatDate($p->created_at) }}</span>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-6">
                    @foreach ($politiques as $key => $p)
                    @if ($key > 0 && $key < 4)
                            <div class="politics-news-post">
                        
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-4">
                                <div class="politics-news-image">
                                    <a href="{{route('article',['categorie'=>$p->slug,'article'=>$p->slug])}}">
                                        <img src={{ asset('storage').'/'.$p->image}} alt="image">

                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <div class="politics-news-content">
                                    <h3>
                                        <a href="{{route('article',['categorie'=>$p->slug,'article'=>$p->slug])}}">{{ $p->titre}}</a>
                                    </h3>
                                    <p>{{ formatDate($p->created_at) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                    
                </div>
            </div>
        </div>
        @else
            <p>Aucun article trouvé</p>
        @endif