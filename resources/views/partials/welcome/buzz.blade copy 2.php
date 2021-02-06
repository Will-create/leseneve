        @if ( isset($buzz) )
        
        <section class="widget widget_featured_reports">
            <h3 class="widget-title">Featured reports</h3>
            <div class="single-featured-reports">
                <div class="featured-reports-image">
                    <a href="#">
                        <img src={{ asset('storage').'/'.$buzz->image}} alt="image">

                    </a>
                    <div class="featured-reports-content">
                        <h3>
                            <a href="#">{{ $buzz->titre}}</a>

                        </h3>
                        <p>
                            @if ($p->auteurs->count() > 0)
                                     @foreach ($buzz->auteurs as $a)
                                    <span><a href="">{{ $a->nom}} {{ $a->prenom}}</a></span>
                                        @endforeach
                                        @endif 
                            
                            / {{ $buzz->created_at->format('d/m/y') }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        @else
            <p>Aucun article trouvé</p>
        @endif