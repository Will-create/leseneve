@extends('layouts.app')
@section('content')
<section class="news-details-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                @include('partials._notification')
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img style="width: 100%;height:90vh" src={{ asset('storage') . '/' . $article->image }} alt="image">
                    </div>
                    <div class="article-content">
                        <div class="row">
                            <div class="col-md-3">
                                <span>
                                    <p> Publié le {{ formatDate($article->created_at) }}</p>
                                </span>
                            </div>
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                                <p>  {{ $article->compteur }} lu(s)</p>
                            </div>
                            <div class="col-md-3">
                                <span ><a  href="#comment"> Commenter ({{count($commentaires)}})</a></span>
                            </div>
                        </div>
                        <hr>
                        <h3>
                            @if (count($article->categories) > 0)
                            @foreach ($article->categories as $key => $c)
                            <a class="pl-1 pr-1 m-1" style="background-color: #ff661f;color:white" href="{{route('categorie',$c->slug)}}" class="flag" >{{ $c->nom }}</a>
                            @endforeach
                            @endif 
                         : <a href="#">{{ $article->titre }}</a>
                        </h3>
                        <p>
                            {!! $article->contenu !!}
                        </p>
                    </div>
                    <div class="article-footer">
                        <div class="article-share">
                            <ul class="social">
                            <li><span>Partager:</span></li><br>
                                <div class="sharethis-inline-share-buttons"></div>
                            </ul>
                        </div>
                    </div>
                    <div class="post-navigation">
                        <div class="navigation-links">
                            <div class="nav-previous">
                                <a href="#">
                                    <i class='bx bx-chevron-left'></i>
                                Article précedent
                                </a>
                            </div>
                            <div class="nav-next">
                                <a href="#">
                             Article suivant
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h3 class="comments-title">{{count($commentaires)}} Commentaire(s):</h3>
                        <ol class="comment-list">
                            @foreach ($commentaires as $commentaire)
                            <li class="comment">
                                <div class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                        {{-- <img src="{{asset('storage').'/'.$commentaire->avatar}}" class="avatar" alt="image"> --}}
                                            <b class="fn">{{$commentaire->auteur}}</b>
                                        </div>
                                        <div class="comment-metadata">
                                            <a href="index.html">
                                            <span>{{formatDate($commentaire->created_at)}}</span>
                                            </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        <p>{{$commentaire->contenu}}</p>
                                    </div>
                                    <div class="reply">
                                    <a onclick="reply({{$commentaire->id}})" id="reponse{{$commentaire->id}}" href="#" class="comment-reply-link">Répontre ({{count($commentaire->reponses)}})</a><br>
                                    <div id="" class="comment-respond toggleur" id="formulaire{{$commentaire->id}}" >
                                        <h3 class="comment-reply-title">Annuler</h3>
                                    <form method="POST" action="{{route('repondre')}}" class="comment-form">
                                        @csrf
                                            <p class="comment-notes">
                                                <span id="email-notes">Votre adresse email ne sera pas publique.</span>
                                                Les champs obligatoires sont marqués.
                                            </p>
                                            <p class="comment-form-author">
                                                <label>Nom et Prénom</label>
                                            <input class="input-formulaire" type="text" value="{{old('auteur') ?? '' }}" id="auteur" placeholder="Votre nom*" name="auteur"
                                                    required="required">
                                                    @error('auteur')
                                                    <span class="helper-text red-text">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </p>
                                            <p class="comment-form-email">
                                                
                                                <label>Email</label>
                                            <input class="input-formulaire" type="email" id="email" value="{{ old('email') ?? ''}}" placeholder="Votre adressse email" name="email"
                                                    required="required">
                                                    @error('email')
                                                    <span class="helper-text red-text">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </p>
                                            
                                            <p class="comment-form-comment">
                                                <label>Commentaire</label>
                                                <textarea class="input-formulaire" name="contenu" id="comment" cols="45" placeholder="Votre réponse..."
                                            rows="5" maxlength="65525" required="required">{{old('contenu') ?? ''}}</textarea>
                                            @error('contenu')
                                            <span class="helper-text red-text">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </p>
                                            {{-- <p class="comment-form-cookies-consent">
                                                <input class="input-formulaire" type="checkbox" value="yes" name="wp-comment-cookies-consent"
                                                    id="wp-comment-cookies-consent">
                                                <label for="wp-comment-cookies-consent">Save my name, email, and website in this
                                                    browser for the next time I comment.</label>
                                            </p> --}}
                                            <p class="form-submit">
                                                <input type="submit" name="submit" id="submit" class="submit"
                                                    value="Répondre">
                                            </p>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                <ol class="children">
                                    @foreach ($commentaire->reponses as $reponse)
                                    <li class="comment">
                                        <div class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    {{-- <img src="{{asset('storage').'/'.$reponse->avatar}}" class="avatar"
                                                        alt="image"> --}}
                                                <b class="fn">{{$reponse->auteur}}</b>
                                                </div>
                                                <div class="comment-metadata">
                                                <a href="#">
                                                        <span> {{formatDate($reponse->created_at)}}</span>
                                                    </a>
                                                </div>
                                            </footer>
                                            <div class="comment-content">
                                            <p>{{$reponse->contenu}}</p>
                                            </div><img src=<img src="{{asset('storage').'/'.$reponse->avatar}}" class="avatar"
                                                        al<img src="{{asset('storage').'/'.$reponse->avatar}}" class="avatar"
                                                        alt="image">t="image">"{{asset('storage').'/'.$reponse->avatar}}" class="avatar"
                                                        alt="image">
                                            
                                        </div>
                                    </li>
                                    @endforeach
                                </ol>
                               
                            </li>
                            @endforeach
                        </ol>
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Laisser un commentaire</h3>
                        <form method="POST" action="{{route('commenter')}}" class="comment-form">
                            @csrf
                                <p class="comment-notes">
                                    <span id="email-notes">Votre email ne sera pas publique.</span>
                                    Les champs obligatoire sont marqués.
                                </p>
                                <p class="comment-form-author">
                                    <label>Nom et prénom</label>
                                <input class="input-formulaire" type="text" id="author" value="{{old('auteur') ?? ''}}" placeholder="Votre nom et prenom*" name="auteur"
                                        required="required">
                                        @error('auteur')
                        <span class="helper-text red-text">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                                </p>
                                <p class="comment-form-email">
                                    <label>Email</label>
                                <input class="input-formulaire" type="email" id="email" value="{{old('email') ?? ''}}" placeholder="Votre email*" name="email"
                                        required="required">
                                        @error('email')
                        <span class="helper-text red-text">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                                <input type="hidden" name="article_id" value="{{$article->id}}">
                                </p>
                                {{-- <p class="comment-form-url">
                                    <label>Website</label>
                                    <input class="input-formulaire" type="url" id="url" placeholder="Website" name="url">
                                </p> --}}
                                <p class="comment-form-comment">
                                    <label>Commentaire</label>
                                    <textarea class="input-formulaire" name="contenu" id="comment" cols="45" placeholder="Votre commentaire..."
                                rows="5" maxlength="65525" required="required">{{old('contenu') ?? ''}}</textarea>
                                @error('contenu')
                        <span class="helper-text red-text">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                                </p>
                                <p class="comment-form-cookies-consent">
                                    <input class="input-formulaire" type="checkbox" value="yes" name="wp-comment-cookies-consent"
                                        id="wp-comment-cookies-consent">
                                    <label for="wp-comment-cookies-consent">Sauvegarder mon email sur ce navigateur pour toutes les fois que je visite ce site internet</label>
                                </p>
                                <p class="form-submit">
                                    <input  type="submit" name="submit" id="submit" class="submit"
                                        value="Post a comment">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="widget-area">
                    @include('partials.welcome.buzz')
                    @include('partials.welcome.socials1')
                    @include('partials.welcome.newsletter')
                    @include('partials.welcome.tags')
                    @include('partials.welcome.tvtags')
                    @include('partials.welcome.telegram')
                </aside>
            </div>
        </div>
    </div>
</section>
<script>
    function reply(id){
        var replyBtn = document.getElementById('reponse'+id);
        var formulaire = document.getElementById('formulaire'+id);

        replyBtn.classList.toggle('afficher');
        formulaire.classList.toggle('toggleur');
        
    }
</script>

@endsection

