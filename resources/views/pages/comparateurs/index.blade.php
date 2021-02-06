@extends('layouts.app')
@section('content')
<section class="pt-5 pb-5 bg-zoom">
    <div class="container pt-3">
    <div class="row">
      <div class="col-md-12"><span class="text-info-gradiant display-5"><i class="fa fa-umbrella" aria-hidden="true"></i> Assurances pour Professionnels</span>
          <br><br>
        </div>
       </div>
        <br><br>

        <div class="row">
        @include('partials.comparateurs.particuliers')
        @include('partials.comparateurs.professionnels')
          



        </div>
      <div class="card-group">
            
            
      
    </div>
  </div>
</section>
    
@endsection