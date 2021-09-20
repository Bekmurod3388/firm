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

</header>
