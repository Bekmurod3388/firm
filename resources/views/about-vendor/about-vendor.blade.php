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
                        <span class="header-component__title--big">{{__('index.menu.vendor')}}</span>
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

        <section class="vendor-info about-vendor-page--acer">
            <div class="vendor-info__wrapper" style="background-image: url({{asset('storage/'.$vendor->back)}})">
                <div class=" vendor-info__card card__blur">
                    <img class="card__title vendor-info__card-title" src="{{asset('storage/'.$vendor->img)}}"
                         alt="acer">
                    <p class="card__text vendor-info__card-text ">{{$vendor->text}}</p>
                </div>
            </div>
        </section>
        <section class="links">
            <div class="container-min">
                <ul class="links__nav-list">
                    <li class="links__nav-item links__nav-item--active ">
                        <a href="" class="links__nav-link">Ноутбуки</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Планшеты</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Смартфоны</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Мониторы</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Настольные компьютеры</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Проекторы</a>
                    </li>
                </ul>

                <ul class="links__list">
                    @if(!empty($vendor_files))
                    @foreach($vendor_files as $vendor_file)
                    <li class="links__item">
                        <a href="{{asset('storage/'.$vendor_file->path)}}" class="link link__a svg__download-icon-before">{{$vendor_file->file_name}}</a>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </section>
        <section class="video">
            <div class="section-title__wrapper svg__adras-before">
                <h2 class="section-title__header">
                    <span class="section-title--small">Смотрите</span>
                    <span class="section-title--big">Видео</span>
                </h2>
                <p class="section-title__text">Презентации, реклама и события</p>
            </div>
            <div class="container-min">
                <ul class="video__list">

                @if(!empty($vendor_films))
                        @foreach($vendor_films as $vendor_film)
                        <li class="video__item">
                            <iframe width="560" height="315" src="{{$vendor_film->path}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <time class="video__time">{{$vendor_film->created_at}}</time>
                            <h3 class="video__title">
                            {{$vendor_film->header}} </h3>
                            <p class="video__text">{{$vendor_film->text}}</p>
                        </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </section>
    @section('footer')
        <x-footer/>
        @endsection
</x-layout>
