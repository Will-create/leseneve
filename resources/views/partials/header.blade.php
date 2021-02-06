@if ($actif == 0)
@include('partials.welcome.top-header')
@else
@include('partials.welcome.top-header2')
@endif
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                <a href="{{route('welcome')}}">
                    <img src="{{ asset('assets/logo2.png') }}" alt=" image">

                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{route('welcome')}}">
                    <img src="{{ asset('assets/logo4.png') }}" alt=" image">
                    <img src="{{ asset('assets/logo2.png') }}" alt=" image">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="{{route('welcome')}}" class="nav-link {{ $actif == 0 ? 'active' : ''}}">
                                Accueil
                            </a>
                        </li>
                        @if (isset($categories))
                            @foreach ($categories as $cat)
                                <li class="nav-item">
                                    <a href=" {{route('categorie', $cat->slug)}} " class="nav-link  {{ $cat->id == $actif ? 'active' : ''}} ">
                                        {{ $cat->nom }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Sénevé TV
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                {{-- @if (isset($tvcategories))
                                    @foreach ($tvcategories as $cat)
                                        <li class="nav-item">
                                            <a href="{{route('tvcategorie', $cat->slug)}}" class="nav-link {{ $cat->id == $tvactif ? 'active' : ''}}">
                                                {{ $cat->nom }}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif --}}
                            </ul>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <form class="search-box">
                                <input type="text" class="form-control" placeholder="Search for..">
                                <button type="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <form class="search-box">
                                <input type="text" class="form-control" placeholder="Rechercher...">
                                <button type="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
