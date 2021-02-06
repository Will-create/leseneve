@extends('layouts.app',[$titrePage =>'Liste des articles'] )
@section('content')
<section class="pt-5 pb-5 bg-zoom">
    <div class="container pt-3">
      <div class="row">
      <div class="col-md-12"><span class="text-info-gradiant display-5"><i class="fa fa-umbrella" aria-hidden="true"></i> {{$particulier->titre}}</span>
          <br>
        </div>
          
        </div>
        <br>
        <div class="row">
          @include('partials.particuliers')
        </div>
        <div class="card-group">

          <div class="row">
            <div class="show-carte-corps">
              
              <div class="show-carte-resume">{{$particulier->resume}}</div>
            </div>
          
          </div>
          @if (isset($particulier))
          <div class="show-carte d-flex flex-column m-2" style="width: 100%;">
           <div class="show-carte-tete">
             <a href="{{ route('particulier.show',['particulier'=>$particulier->slug]) }}"> <img src="{{ asset('storage').'/'.$particulier->image }}" alt="" class="show-carte-image"></a>
            
           </div>
           <div class="show-carte-corps d-flex flex-column justify-content-between">
           
           <a href="{{ route('particulier.show',['particulier'=>$particulier->slug]) }}"><b><div class="show-carte-titre text-muted">{{$particulier->titre}}</div></b></a>
           <div class="show-carte-auteur text-muted"><small> </small><small style="color:#ff4d7e!important;">Dernière mise à jours le {{$particulier->updated_at->format('d/m/y')}}</small></div>
           
           <div class="show-carte-resume text-muted mb-4" ><br>{!!$particulier->description!!} </div>
           <div class="sharethis-inline-share-buttons"></div>
           </div>
           
         </div>
         
          @else
          <p>L'particulier recherché n'a pas été trouvé</p>
          @endif
        </div>
    </div>
</section>
@endsection
