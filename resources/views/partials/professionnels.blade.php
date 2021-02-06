
    
  


        @if ($professionnels->count()>0)
       
            @foreach ($professionnels as $professionnel)
                <div class="col-md-3">
                    <a href="{{route('professionnel.show',['professionnel'=>$professionnel->slug])}}">
                       <div class="shadow p-3 mb-4 bg-white {{$professionnel->id==$actif ? 'actif' : '' }} rounded-lg text-center" >
                           <i class="fa fa-{{$professionnel->icone}} fa-2x"></i>
                           {{$professionnel->titre}}
                       </div>
                    </a>
                </div>
           @endforeach
        @else
            <p>Assurances pour professionnels indisponibles.  Veuillez-vous révisiter cette page plutard</p>
        @endif
        
    
     
        



