@extends('layouts.app')

@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2> {{$cat->nom}} </h2>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li>{{$cat->nom}}</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="default-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @include('partials.webtv.baniere',['videos' => $videos])
                    </div>
                    {{-- @include('partials.webtv.paginator',['paginator' => $videos]) --}}
                </div>
                <div class="col-lg-4">
                    <aside class="widget-area">
                        @include('partials.welcome.latest2')
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
@endsection
