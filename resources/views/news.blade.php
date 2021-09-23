<x-layout>
    @section('header')
        <x-header/>
    @endsection
        @if (request()->is('index'))
            <div class="header__card card">
                <div class="header__card-blur card__blur">
                    <h2 class="header__card-title card__title">
                        <span class="card__title--small header__card-title--small">{{__('index.carousel.header')}}</span>
                        <span class="header__card-title--big card__title--big">{{__('index.carousel.header2')}}</span></h2>
                    <p class="header__card-text card__text">{{__('index.carousel.desc')}}</p>
                </div>
                <a href="{{route('about-us')}}" class="header__card-link link card__link svg__link-icon-before">{{__('index.carousel.about_button')}}</a>
            </div>
        @else
            <div class="header-component__bottom-side svg__adras-before">
                <div class="header-component__left-side wow slideInLeft">
                    <h1 class="header-component__title">
                        <span class="header-component__title--small">Central Asia Distribution</span>
                        <span class="header-component__title--big">{{__('index.menu.new')}}</span>
                    </h1>
                    <p class="header-component__text">{{__('index.carousel.desc2')}}</p>
                </div>
                <video autoplay="" muted="" loop="" id="myVideo" class="header-component__img"
                       poster="{{asset('img/header-background.jpg')}}">
                    <source src="{{asset('/img/videos/video-header.mp4')}}" type="video/mp4">
                    <source src="{{asset('/img/videos/video-header.webm')}}" type="video/webm">
                    <source src="{{asset('/img/videos/video-header.ogv')}}" type="video/ogg">
                </video>
            </div>
        @endif

        <section class="news">
            <div class="container-min">
                <ul class="news__list">
                    @foreach($posts as $post)
                    <li class="news__item news__item-1  wow">
                        <picture>
                            <source srcset="/storage/posts/{{$post->img}}" type="image/webp">
                            <img src="/storage/posts/{{$post->img}}" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">{{$post->created_at->format('Y-m-d')}}</p>
                                <h3 class="news__title">{{ $post->{'header_'.app()->getLocale()} }}</h3>
                                <p class="news__sub-title">{{ $post->{'header2_'.app()->getLocale()} }}</p>
                            </div>
                            <a href="{{route('news-item',$post->id)}}" class="news__link link svg__link-icon-before">{{__('index.news.read')}}</a>
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
