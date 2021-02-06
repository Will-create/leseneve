        <div class="section-title">
            <h2>Culture</h2>
        </div>
        @if (count($cultures) > 0)
        <div class="politics-news">
            <div class="row">
                <div class="col-lg-6">
                    @foreach ($cultures as $key => $cult)
                        @if ($key == 0)
                            
                        <div class="single-politics-news">
                            <div class="politics-news-image">
                                <a href="{{route('article',['categorie'=>$cult->slug,'article'=>$cult->slug])}}">
                                    <img src={{ asset('storage').'/'.$cult->image}} alt="image">

                                </a>
                            </div>
                            <div class="politics-news-content">
                                @if ( count($cult->categories) > 0)
                                        
                                    @foreach ($cult->categories as $key => $c)
                                    
                                    <span class="tag">{{ $c->nom}}</span>    
                                    @endforeach
                                    @endif
                                <h3>
                                    <a href="{{route('article',['categorie'=>$cult->slug,'article'=>$cult->slug])}}">{{ $cult->titre}}</a>

                                </h3>
                                @if ($cult->auteurs->count() > 0)
                                     @foreach ($cult->auteurs as $a)
                                    <span><a href="">{{ $a->nom}} {{ $a->prenom}}</a></span>
                                    @endforeach
                                    @endif 
                                    <span>{{ formatDate($cult->created_at) }}</span>
                            </div>
                        </div>
                        @endif
               @endforeach
                </div>
                <div class="col-lg-6">
                    <div class="politics-news-post">
                        @foreach ($politiques as $key => $cult)
                        @if ($key > 0 && $key < 4)
                        
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-4">
                                <div class="politics-news-image">
                                    <a href="{{route('article',['categorie'=>$cult->slug,'article'=>$cult->slug])}}">
                                        <img src={{ asset('storage').'/'.$cult->image}} alt="image">

                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <div class="politics-news-content">
                                    <h3>
                                        <a href="{{route('article',['categorie'=>$cult->slug,'article'=>$cult->slug])}}">{{ $cult->titre}}</a>
                                    </h3>
                                    <p>{{ formatDate($cult->created_at) }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
        @else
            <p>Aucun article trouvé</p>
        @endif