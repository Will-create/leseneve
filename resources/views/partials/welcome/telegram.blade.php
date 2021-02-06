        {{-- @if ($latests->count()>0)
        <section class="widget widget_latest_news_thumb">
            <h3 class="widget-title">Latest news</h3>
            @foreach ($latest as $key => $l)
            @if ($key < 5 )
            <article class="item">
                <a href="#" class="thumb">
                    <img src={{ asset('storage').'/'.$s->image}} alt="image">
                </a>
                <div class="info">
                    <h4 class="title usmall">
                        <a href="#">{{ $l->titre}}</a>
                    </h4>
                    <p>{{ $l->created_at->format('d/m/y') }}</p>
                </div>
            </article>
            @endif
        @endforeach
        </section>
        @else
            <p>Aucun article trouvé</p>
        @endif --}}
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