@extends('layouts.app', ['$titrePage'=>$article->titre] )
@section('content')
<section class="pt-5 pb-5 bg-zoom">
    <div class="container justify-content-center">

      <div class="col-md-12">
        <div class="row">
          


                
            
          
     
        </div>
        <div class="row">
          <div class="col-md-8">
            @if (isset($article))
            <div class="row justify-content-between entete">
              
             <small>Catégorie: {{$article->categorie->nom}}</small>
             <small><i class="fa fa-eye 1x" aria-hidden="true"></i> : {{$article->compteur}}</small>
             <small>Par {{$article->auteur}} </small>
             <small style="color:#ff4d7e!important;">Posté le {{$article->updated_at->format('d/m/y')}}</small>
             
            </div>
            <div class="show-carte d-flex flex-column m-2" style="width:100%;">
             <div class="show-carte-tete">
               <a href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}"> <img src="{{ asset('storage').'/'.$article->image }}" alt="" class="show-carte-image"></a>
              
             </div>
             <div class="show-carte-corps  d-flex flex-column justify-content-between">
              <a href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}"><b><div class="show-carte-titre text-muted"> <i class="fa fa-tag 3x"></i> {{$article->titre}}</div></b></a><br>
             
             <div class="show-carte-resume text-muted mb-4" ><br>{!!$article->contenu!!} </div>

             <div class="sharethis-inline-share-buttons"></div>
             
             </div>
           </div>
            @else
            <p>L'article recherché n'a pas été trouvé</p>
                
            @endif
          </div>
          <div class="col-md-4 mt-2">
            @if ($articles->count()>0)
            @foreach ($articles as $article)
         <div class="h-carte mb-3" style="max-width: 100%; height:210px">
             <div class="row no-gutters">
               <div class="col-md-6">
                 <div style="height:100%">
                  <a style="height:100%!important; overflow:hidden;" href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}"><img style="min-width:100%; object-fit:cover; object-position: 50% 50%; " src="{{ asset('storage').'/'.$article->image }}" alt="amassur" class="img-fluid" /></a>
                 </div>
                 
               </div>
               <div class="col-md-6">
                 <div class="card-body text-muted">
                     <a class="text-lowercase" href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}"> <b>{{ $article->titre }}</b></a>
                     
                   <p class="card-text text-muted">{!! substr($article->resume,0,50) !!}...</p>
                   <p class="card-text text-muted"><small class="text-muted">Publié le {{ $article->updated_at->format('d/m/Y') }}</small></p>
                 </div>
               </div>
             </div>
           </div>
         @endforeach
         
         @else
             <p>Articles non trouvré, Réessayer plutard</p>
         @endif


           <div class="row justify-content-center p-3"><a href="{{ route('articles.index') }}" class="btn h-15 btn-outline-primary">Voir plus <i class="fa fa-plus" aria-hidden="true"></i></a></div>
          </div>
        </div>
      
      </div>
    





  
     

      
        



       </div>
  
</section>
@endsection

