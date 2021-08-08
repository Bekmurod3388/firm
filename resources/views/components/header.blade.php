<header class="header">
    {{$slot}}
    <nav class="main-nav">
        <picture class="main-logo">
            <source srcset="{{asset('img/header-logo.webp')}}">
            <img width="182" height="92" src="{{asset('img/header-logo.png')}}" alt="Central Asia Distribution">
        </picture>

        <button class="header__menu-btn">{{__('index.menu.menu')}}</button>

        <div class="nav-bar">
            <ul class="nav-list nav-list--disable">
                <li class="nav-list__item @if (request()->is('index'))
                    nav-list__item--active
                @endif">
                    <a href="{{ route('index') }}">{{__('index.menu.gen')}}</a>
                </li>
                <li class="nav-list__item @if (request()->is('about-us'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('about-us')}}">{{__('index.menu.about')}}</a>
                </li>
                <li class="nav-list__item @if (request()->is('vendors'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('vendors')}}">{{__('index.menu.vendor')}}</a>
                </li>
                <li class="nav-list__item @if (request()->is('products'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('products')}}">{{__('index.menu.product')}}</a>
                </li>
                <li class="nav-list__item @if (request()->is('news'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('news')}}">{{__('index.menu.new')}}</a>
                </li>
                <li class="nav-list__item @if (request()->is('contact'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('contact')}}">{{__('index.menu.contact')}}</a>
                </li>
            </ul>

            <div class="nav-bar__right-wrapper">
                <ul class="lang-list">
                @foreach (config('app.available_locales') as $locale)
                        <li><a href="{{ request()->url() }}?language={{ $locale }}"
                       class="@if (app()->getLocale() == $locale) border-indigo-400 @endif inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out">
                        [{{ strtoupper($locale) }}]
                            </a>
                        </li>
                @endforeach
                </ul>

                <a href="search" class="--svg__search"></a>
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
        <a href="{{route('about-us')}}" class="header__card-link link card__link --svg__link-icon-before">{{__('index.carousel.about_button')}}</a>
    </div>
    @else
        <div class="header-component__bottom-side --svg__adras-before">
            <div class="header-component__left-side wow slideInLeft">
                <h1 class="header-component__title">
                    <span class="header-component__title--small">Central Asia Distribution</span>
                    <span class="header-component__title--big">{{__('index.carousel.production')}}</span>
                </h1>
                <p class="header-component__text">{{__('index.carousel.desc2')}}</p>
            </div>
            <img class="header-component__img" src="img/header-background.jpg" alt="видео">

        </div>
    @endif
</header>
