<section class="widget widget_tag_cloud">
    <h3 class="widget-title">Actualités</h3>
    <div class="tagcloud">
        @if ( isset($categories) )
            @foreach ($categories as $cat)
            <a href="{{route('categorie',$cat->slug)}} "> {{$cat->nom}} </a>
            @endforeach
        @else
        <p>Aucun tag trouvé</p>
        @endif
    </div>
</section>
