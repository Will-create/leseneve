
    
  


        @if ($particuliers->count()>0)
       
            @foreach ($particuliers as $particulier)
                <div class="col-md-3">
                    <a href="{{route('particulier.show',['particulier'=>$particulier->slug])}}">
                       <div class="shadow p-4 mb-5 bg-white {{$particulier->id==$actif ? 'actif' : '' }} rounded-lg text-center" >
                           <i class="fa fa-{{$particulier->icone}} fa-2x"></i>
                           {{$particulier->titre}}
                       </div>
                    </a>
                </div>
           @endforeach
        @else
            <p>Categories indisponibles</p>
        @endif
        
    
     
        



