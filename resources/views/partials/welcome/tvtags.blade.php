<section class="widget widget_tag_cloud">
    <h3 class="widget-title">Web TV</h3>
    <div class="tagcloud">
        
        @if ( isset($tvcategories) )
            @foreach ($tvcategories as $cat)
    <a href="{{route('tvcategorie',$cat->slug)}}"> {{$cat->nom}} </a>
            @endforeach
        @else
        <p>Aucun lien pour l'instant... Visitez cette page plustard </p>
        @endif
    </div>
    </section>
