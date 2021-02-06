@extends('layouts.app')

@section('content')

    @include('partials.welcome.baniere',['banieres' => $banieres])

    <section class="default-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{-- @include('partials.welcome.populaire',['populaires' => $populaires])
                    --}}
                    <div class="most-popular-news">
                        <div class="section-title">
                            <h2>Populaire</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                @include('partials.welcome.populaire1',['populaires' => $populaires])

                            </div>
                            <div class="col-lg-6">
                                @include('partials.welcome.populaire',['populaires' => $populaires])
                            </div>
                        </div>
                    </div>
                    @include('partials.welcome.topvideo',['topvideos' => $topvideos])

                    @include('partials.welcome.politique',['politiques' => $politiques])
                    @include('partials.welcome.business',['economie' => $business])

                    {{-- <div class="business-news">
                        <div class="section-title">
                            <h2>Business</h2>
                        </div>
                        <div class="business-news-slides owl-carousel owl-theme">
                            <div class="single-business-news">
                                <div class="business-news-image">
                                    <a href="#">
                                        <img src={{ asset('assets/img/business-news/business-news-1.jpg') }} alt="image">
                                    </a>
                                </div>
                                <div class="business-news-content">
                                    <span>Business</span>
                                    <h3>
                                        <a href="#">We have to make a business plan while maintaining mental heatlh during
                                            this epidemic</a>
                                    </h3>
                                    <p><a href="#">Patricia</a> / 28 September, 2020</p>
                                </div>
                            </div>
                            <div class="single-business-news">
                                <div class="business-news-image">
                                    <a href="#">
                                        <img src={{ asset('assets/img/business-news/business-news-2.jpg') }} alt="image">
                                    </a>
                                </div>
                                <div class="business-news-content">
                                    <span>News</span>
                                    <h3>
                                        <a href="#">Many people are established today by doing ecommerce business during the
                                            time of Corona</a>
                                    </h3>
                                    <p><a href="#">Sanford</a> / 28 September, 2020</p>
                                </div>
                            </div>
                            <div class="single-business-news">
                                <div class="business-news-image">
                                    <a href="#">
                                        <img src={{ asset('assets/img/business-news/business-news-1.jpg') }} alt="image">
                                    </a>
                                </div>
                                <div class="business-news-content">
                                    <span>Business</span>
                                    <h3>
                                        <a href="#">We have to make a business plan while maintaining mental heatlh during
                                            this epidemic</a>
                                    </h3>
                                    <p><a href="#">Patricia</a> / 28 September, 2020</p>
                                </div>
                            </div>
                            <div class="single-business-news">
                                <div class="business-news-image">
                                    <a href="#">
                                        <img src={{ asset('assets/img/business-news/business-news-2.jpg') }} alt="image">
                                    </a>
                                </div>
                                <div class="business-news-content">
                                    <span>News</span>
                                    <h3>
                                        <a href="#">Many people are established today by doing ecommerce business during the
                                            time of Corona</a>
                                    </h3>
                                    <p><a href="#">Sanford</a> / 28 September, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-6">
                            @include('partials.welcome.sports',['sports' => $sports])

                        </div>
                        <div class="col-lg-6">
                            @include('partials.welcome.tech',['techs' => $techs])

                        </div>
                    </div>
                    <div class="culture-news">
                        @include('partials.welcome.culture',['cultures' => $cultures])
                    </div>
                    <div class="health-news">
                        @include('partials.welcome.health',['health' => $health])

                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="widget-area">
                        <section class="widget widget_latest_news_thumb">
                            <h3 class="widget-title">Latest news</h3>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a href="#">Negotiations on a peace agreement between the two
                                            countries</a></h4>
                                    <span>28 September, 2020</span>
                                </div>
                            </article>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a href="#">Love songs helped me through heartbreak</a></h4>
                                    <span>28 September, 2020</span>
                                </div>
                            </article>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a href="#">This movement aims to establish women rights</a>
                                    </h4>
                                    <span>28 September, 2020</span>
                                </div>
                            </article>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg4" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a href="#">Giving special powers to police officers to prevent
                                            crime</a></h4>
                                    <span>28 September, 2020</span>
                                </div>
                            </article>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg5" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a href="#">Copy paste the style of your element Newspaper</a>
                                    </h4>
                                    <span>28 September, 2020</span>
                                </div>
                            </article>
                        </section>
                        @include('partials.welcome.buzz')
                        @include('partials.welcome.socials1')
                        @include('partials.welcome.newsletter')
                        @include('partials.welcome.tags')
                        @include('partials.welcome.tvtags')

                        <section class="widget widget_instagram">
                            <h3 class="widget-title">Instagram</h3>
                            <ul>
                                <li>
                                    <div class="box">
                                        <img src={{ asset('assets/img/latest-news/latest-news-1.jpg') }} alt="image">
                                        <i class="bx bxl-instagram"></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src={{ asset('assets/img/latest-news/latest-news-2.jpg') }} alt="image">
                                        <i class="bx bxl-instagram"></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src={{ asset('assets/img/latest-news/latest-news-3.jpg') }} alt="image">
                                        <i class="bx bxl-instagram"></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src={{ asset('assets/img/latest-news/latest-news-4.jpg') }} alt="image">
                                        <i class="bx bxl-instagram"></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src={{ asset('assets/img/latest-news/latest-news-5.jpg') }} alt="image">
                                        <i class="bx bxl-instagram"></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <img src={{ asset('assets/img/latest-news/latest-news-6.jpg') }} alt="image">
                                        <i class="bx bxl-instagram"></i>
                                        <a href="#" target="_blank" class="link-btn"></a>
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
