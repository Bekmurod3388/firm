<x-layout>
    @section('header')
        <x-header/>
    @endsection

        <section class="news">
            <div class="container-min">
                <ul class="news__list">
                    @foreach($posts as $post)
                    <li class="news__item news__item-1  wow">
                        <picture>
                            <source srcset="/storage/posts/{{$post->img}}">
                            <img src="/storage/posts/{{$post->img}}" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">{{$post->created_at}}</p>
                                <h3 class="news__title">{{ $post->{'header_'.app()->getLocale()} }}</h3>
                                <p class="news__sub-title">{{ $post->{'header2_'.app()->getLocale()} }}</p>
                            </div>
                            <a href="{{route('news-item',$post->id)}}" class="news__link link svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </section>

    @section('footer')
        <x-footer/>
        @endsection
</x-layout>
