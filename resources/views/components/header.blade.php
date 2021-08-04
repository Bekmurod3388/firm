<header class="header">
    {{$slot}}
    <nav class="main-nav">
        <picture class="main-logo">
            <source srcset="{{asset('img/header-logo.webp')}}">
            <img width="182" height="92" src="{{asset('img/header-logo.png')}}" alt="Central Asia Distribution">
        </picture>

        <button class="header__menu-btn">Меню</button>

        <div class="nav-bar">
            <ul class="nav-list nav-list--disable">
                <li class="nav-list__item @if (request()->is('index'))
                    nav-list__item--active
                @endif">
                    <a href="{{ route('index') }}">Главная</a>
                </li>
                <li class="nav-list__item @if (request()->is('about-us'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('about-us')}}">О нас</a>
                </li>
                <li class="nav-list__item @if (request()->is('vendors'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('vendors')}}">Вендоры</a>
                </li>
                <li class="nav-list__item @if (request()->is('products'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('products')}}">Продукция</a>
                </li>
                <li class="nav-list__item @if (request()->is('news'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('news')}}">Новости</a>
                </li>
                <li class="nav-list__item @if (request()->is('contact'))
                    nav-list__item--active
                @endif">
                    <a href="{{route('contact')}}">Контакты</a>
                </li>
            </ul>

            <div class="nav-bar__right-wrapper">
                <ul class="lang-list">
                    <li>RUS</li>
                </ul>
                <a href="search" class="--svg__search"></a>
            </div>
        </div>
    </nav>
    @if (request()->is('index'))
        <div class="header__card card">
        <div class="header__card-blur card__blur">
            <h2 class="header__card-title card__title">
                <span class="card__title--small header__card-title--small">Доступные</span>
                <span class="header__card-title--big card__title--big">ИТ-решения</span></h2>
            <p class="header__card-text card__text">Мы используем максимальный спектр современных информационных
                технологий и управленческих подходов для решения задач наших партнеров. Наша работа повышает
                эффективность бизнеса и создает основу для его дальнейшего развития.</p>
        </div>
        <a href="{{route('about-us')}}" class="header__card-link link card__link --svg__link-icon-before">О компании</a>
    </div>
    @else
        <div class="header-component__bottom-side --svg__adras-before">
            <div class="header-component__left-side wow slideInLeft">
                <h1 class="header-component__title">
                    <span class="header-component__title--small">Central Asia Distribution</span>
                    <span class="header-component__title--big">Продукция</span>
                </h1>
                <p class="header-component__text">Партнерство с мировыми лидерами позволяет нам
                    предлагать лучшие решения на рынке Узбекистана</p>
            </div>
            <img class="header-component__img" src="img/header-background.jpg" alt="видео">

        </div>
    @endif
</header>
