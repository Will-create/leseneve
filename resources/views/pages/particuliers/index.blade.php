@extends('layouts.app',[$titrePage =>'Liste des articles'] )
@section('content')
<section class="pt-5 pb-5 bg-zoom">
    <div class="container pt-3">
    <div class="row">
      <div class="col-md-12"><span class="text-info-gradiant display-5"><i class="fa fa-umbrella" aria-hidden="true"></i> Assurances pour Particuliers</span>
          <br><br>
        </div>
       </div>
        <br><br>

        <div class="row">
          @include('partials.particuliers')
        </div>
      <div class="card-group">
            
            <div class="row pt-5">
             @if ($particuliers->count()>0)
             
             @else
                 <p>Assurances particuliers introuvables! Réessayer plutard</p>
             @endif

             </div>
      
    </div>
  </div>
</section>
@endsection

