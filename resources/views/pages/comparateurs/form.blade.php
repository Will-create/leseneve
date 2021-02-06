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
        



        </div>
      <div class="card-group">
            
            <!-- multistep form -->
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active"><span class="text-muted">Information sur le vehicule</span></li>
      <li> <span class="text-muted">Informations sur le propriétaire</span> </li>
      <li><span class="text-muted">Autres informations</span></li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title"><span class="text-muted">Information sur le vehicule </span></h2>
      <h3 class="fs-subtitle"> <span class="text-muted">Entrer les informations sur le vehicule ici</span></h3>

      
      <input type="button" name="next" class="next action-button" value="Suivant" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title"><span class="text-muted">Informations sur le propriétaire</span></h2>
      <h3 class="fs-subtitle"><span class="text-muted">Entrer ici les informations sur le propriétaire du véhicule</span></h3>
      
      <input type="button" name="previous" class="previous action-button" value="Précédent" />
      <input type="button" name="next" class="next action-button" value="Suivant" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title"><span class="text-muted">Autres informations</span></h2>
      <h3 class="fs-subtitle"><span class="text-muted">Autres informations ici</span></h3>
      
      <input type="button" name="previous" class="previous action-button" value="Précédent" />
      <input type="submit" name="submit" class="submit action-button" value="Soumettre" />
    </fieldset>
  </form>
      
    </div>
  </div>
</section>
    
@endsection