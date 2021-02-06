@extends('layouts.app',[$titrePage =>'Liste des articles'] )
@section('content')
<section class="pt-5 pb-5 bg-zoom">
    <div class="container pt-1">
      <div class="row">
      <div class="col-md-12"><span class="text-info-gradiant display-5"><i class="fa fa-umbrella" aria-hidden="true"></i> {{$professionnel->titre}}</span>
          <br>
        </div>
          
        </div>
        <br>

        <div class="row">

          @include('partials.professionnels')
        </div>
        <div class="card-group">

          <div class="row">
            <div class="show-carte-corps">
              <div class="show-carte-resume">{{$professionnel->resume}}</div>
            </div>
          </div>
          @if (isset($professionnel))
          <div class="show-carte d-flex flex-column " style="width:100%;">
           <div class="show-carte-tete">
             <a href="{{ route('professionnel.show',['professionnel'=>$professionnel->slug]) }}"> <img src="{{ asset('storage').'/'.$professionnel->image }}" alt="" class="show-carte-image"></a>
           </div>
           <div class="show-carte-corps d-flex flex-column justify-content-between">
           
           <a href="{{ route('professionnel.show',['professionnel'=>$professionnel->slug]) }}"><b><div class="show-carte-titre text-muted">{{$professionnel->titre}}</div></b></a>
           <div class="show-carte-auteur text-muted"><small> </small><small style="color:#ff4d7e!important;">Dernière mise à jours le {{$professionnel->updated_at->format('d/m/y')}}</small></div>
           
           <div class="show-carte-resume text-muted"><br>{!!$professionnel->description!!} </div>
           </div>

           <div class="sharethis-inline-share-buttons p-3"></div>
         </div>
          @else
         
          <p>L'assurance pour professionnel recherchée n'a pas été trouvé revisitez cette page plutard</p>
              
          @endif
        </div>
    </div>
</section>
@endsection
