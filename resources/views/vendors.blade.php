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

    <section class="vendors">
        <div class="container-min">
            <div class="vendors__wrapper">
                <ul class="filter-list">
                    @foreach($categories as $category)
                        <li class="filter-item {{ request()->segment(3) == $category->id ? 'filter-item--active' : '' }}">
                            <button data-listToggle="solution" onclick="categoryFilter({{$category->id}})"
                                    class="filter-btn">
                                <a href="{{route('get_category_vendors',['category'=>$category->id])}}">
                                    {{$category->name}}
                                </a>
                            </button>
                        </li>
                    @endforeach
                </ul>
                <ul class="vendors__list" data-filteredlist data-list="solution">
                    @if(!empty($vendors))
                    @foreach($vendors as $vendor)
                    <li class="vendors__item">
                        <a href="{{route('about-vendor',$vendor->id)}}">
                            <picture class="img--hpEnterprise_logo">
                                <source srcset="{{asset('storage/'.$vendor->img)}}" type="image/webp">
                                <img  src="{{asset('storage/'.$vendor->img)}}" alt="samsung_logo">
                            </picture>
                        </a>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <a href="{{route('vendors')}}" class="vendors__link link svg__link-icon-before"> {{__('index.trust.vendors')}}</a>

            </div>
        </div>
    </section>
    @section('footer')
    <x-footer/>
    @endsection
</x-layout>
