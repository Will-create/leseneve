@extends('layouts.app',[$titrePage =>'Liste des articles'] )
@section('content')
<section class="pt-5 pb-5 bg-zoom">
    <div class="container pt-3">
      <div class="row">
        <div class="col-md-12"><span class="text-info-gradiant display-5"><i class="fa fa-umbrella" aria-hidden="true"></i> Amassur Blog</span>
          <br><br>
        </div>
          <div class="row">
            @include('partials.categorie')
          </div>
        </div>
        <br><br>
        <div class="card-group">
        @if ($articles->count()> 0 )
        @foreach ($articles as $article)
                <div class="carte d-flex flex-column m-2" style="width: 16rem;">
                  <div class="carte-tete">
                    <a href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}"> <img src="{{ asset('storage').'/'.$article->image }}" alt="" class="carte-image"></a>
                  </div>
                  <div class="carte-corps d-flex flex-column justify-content-between">
                  <a href="{{ route('articles.show',['article'=>$article->slug,'categorie'=>$article->categorie->slug]) }}"><b><div class="carte-titre text-muted">{{$article->titre}}</div></b></a>
                  <div class="carte-date text-muted" >Par {{$article->auteur}} <span class="text-muted float-right"> Le {{$article->updated_at->format('d/m/y')}}</span></div> <hr>
                  <div class="carte-resume text-muted">{!!$article->resume!!} </div>
                  <div class="carte-button d-flex m-1"><a href="{{ route('articles.show',['article'=>$article->slug, 'categorie'=>$article->categorie->slug]) }}" class="carteButton float-right">Lire plus <i class="fa fa-plus" aria-hidden="true"></i></a></div>
                  </div>
                </div>
        @endforeach
        @else
        <p>Aucun article trouvé! Réessayer ultérieurement</p>
        @endif
              
        
        </div>
        <div class="d-flex justify-content-center p-3">
          {{$articles->links('pagination::bootstrap-4')}}
        </div>
     
    </div>
</section>
@endsection
