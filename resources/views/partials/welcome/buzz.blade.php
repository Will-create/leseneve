        @if ( isset($buzz) )
        
        <section class="widget widget_featured_reports">
            <h3 class="widget-title">Buzz</h3>
            <div class="single-featured-reports">
                <div class="featured-reports-image">
                    <a href="{{route('article',['categorie'=>$buzz->slug,'article'=>$buzz->slug])}}">
                        <img src={{ asset('storage').'/'.$buzz->image}} alt="image">

                    </a>
                    <div class="featured-reports-content">
                        <h3>
                            <a href="{{route('article',['categorie'=>$buzz->slug,'article'=>$buzz->slug])}}">{{ $buzz->titre}}</a>

                        </h3>
                        <p>
                            @if ($buzz->auteurs->count() > 0)
                                     @foreach ($buzz->auteurs as $a)
                                    <span><a href="">{{ $a->nom}} {{ $a->prenom}}</a></span>
                                        @endforeach
                                        @endif 
                            
                            / {{ formatDate($buzz->created_at) }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        @else
            <p>Aucun article trouvé</p>
        @endif