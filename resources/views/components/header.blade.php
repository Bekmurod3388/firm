<header class="{{url()->current() == route('index') ? 'header' : 'header-component' }}">
    {{$slot}}
    <nav class="main-nav">
        <div  class="main-logo__container">
            <picture class="main-logo">

                <a href="{{route('index')}}">
                    <source type="image/webp" srcset="{{asset('img/header-logo.webp')}}">
                    <img width="182" height="92" src="{{asset('img/header-logo.png')}}" alt="Central Asia Distribution">
                </a>
            </picture>
        </div>

        <button class="header__menu-btn">{{__('index.menu.menu')}}</button>

        <div class="nav-bar">
            <ul class="nav-list nav-list--disable">
                <li class="nav-list__item @if (request()->is('index'))
                    nav-list__item--active
                @endif">
                    <a href="{{ route('index') }}">
                        <span>{{__('index.menu.gen')}}</span></a>
                </li>
                <li class="nav-list__item @if (request()->is('about-us'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('about-us')}}"><span>{{__('index.menu.about')}}</span></a>
                </li>
                <li class="nav-list__item @if (request()->is('vendors'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('vendors')}}"><span>{{__('index.menu.vendor')}}</span></a>
                </li>
                <li class="nav-list__item @if (request()->is('products'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('products')}}"><span>{{__('index.menu.product')}}</span></a>
                </li>
                <li class="nav-list__item @if (request()->is('news'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('news')}}"><span>{{__('index.menu.new')}}</span></a>
                </li>
                <li class="nav-list__item @if (request()->is('contact'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('contact')}}"><span>{{__('index.menu.contact')}}</span></a>
                </li>
            </ul>

            <div class="nav-bar__right-wrapper">
                <ul class="lang-list">
                    @foreach (config('app.available_locales') as $locale)
                    <li><a href="{{ request()->url() }}?language={{ $locale }}"

                           class="@if (app()->getLocale() == $locale) border-indigo-400 active @endif ">
                            {{ strtoupper($locale) }}
                        </a>
                    </li>
                    @endforeach
                </ul>

                {{-- <a href="search" class="svg__search"></a>--}}
            </div>
        </div>
    </nav>
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
                    <span class="header-component__title--big">
                        @if(request()->is('products')){{__('index.menu.product')}}
                            @elseif(request()->is('vendors')){{__('index.menu.vendor')}}
                            @elseif(request()->is('about-vendor/*')){{__('index.menu.vendor')}}
                            @elseif(request()->is('news-item/*')){{__('index.menu.new')}}
                            @elseif(request()->is('products-item/*')){{__('index.menu.product')}}
                            @elseif(request()->is('news')){{__('index.menu.new')}}
                            @elseif(request()->is('about-us')){{__('index.menu.about')}}
                            @elseif(request()->is('contact')){{__('index.menu.contact')}}
                        @endif
                    </span>
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
</header>
