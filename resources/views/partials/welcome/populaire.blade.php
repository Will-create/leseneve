@if (count($international) > 0)
@foreach ($international as $key => $i)
        @if ($key > 1 && $key < 5)
            <div class="most-popular-post">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-sm-4">
                        <div class="post-image">
                            <a href="{{route('article',['categorie'=>$i->slug,'article'=>$i->slug])}}">
                                <img src={{ asset('storage') . '/' . $i->image }} alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <div class="post-content">
                            @if (count($i->categories) > 0)
                            @foreach ($i->categories as $key => $c)
                                <span>{{ $c->nom }}</span>
                            @endforeach
                            @endif
                            <h3>
                            <a href="{{route('article',['categorie'=>$i->slug,'article'=>$i->slug])}}">{{ $p->titre }}</a>
                            </h3>
                        <p>{{ formatDate($c->created_at) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
@endforeach
@else
<p>Aucun article trouvé</p>
@endif
