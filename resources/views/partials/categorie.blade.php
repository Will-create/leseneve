    <div class="row justify-content-center ml-4">
        <style>
            .actif{
                background-color: #ff4d7e!important;
                color: #f4f8fa!important;
                border-radius: 3px;
            }
            .actif a{
                color: #f4f8fa!important;
            }
            .navigation{
            padding-top: 1rem!important;
            padding-bottom: 1rem!important;
            }
        </style>
        @if ($categories->count()>0)
        <nav class="navbar navbar-expand-lg shadow navbar-light bg-light shadow-lg">
            <div class="container">
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navigation"  style="color: #ff4d7e!important;" href="{{route('articles.index')}}">Tous les articles</a>
                       </li>
                 @foreach ($categories as $categorie)
                    <li class="nav-item {{$categorie->id==$actif ? 'actif' : '' }}">
                 <a class="nav-link navigation" href="{{route('categorie',['categorie'=>$categorie->slug])}}">{{$categorie->nom}}</a>
                </li>
                 @endforeach
                 </ul>
             </div>
            </div>
         </nav>
        @else
            <p>Categories indisponibles</p>
        @endif
    </div>
