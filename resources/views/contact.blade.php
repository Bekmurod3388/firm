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
                    <span class="header-component__title--big">{{__('index.menu.contact')}}</span>
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

		<section class="contacts">
			<div class="container-min">
				<ul class="contacts__info-list">
					<li class="contacts__info-item">
                        @php
                            $contact = \App\Models\Contact::first();
                        @endphp
						<p class="contacts__info-title">{{__('index.contact.address')}}</p>
						<p class="contacts__info-text">{{$contact->{'address_'.app()->getLocale()} }}</p>
					</li>
					<li class="contacts__info-item">
						<p class="contacts__info-title">{{__('index.contact.phone')}}</p>
						<p class="contacts__info-text">{{$contact->phone}}</p>
					</li>
					<li class="contacts__info-item">
						<p class="contacts__info-title">Email</p>
						<p class="contacts__info-text">{{$contact->email}}</p>
					</li>
				</ul>

			</div>

			<div class="contacts__map-container">
				<iframe class="contacts__map"
						src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab34f4512b25c381e0326cb81ce92bbad191c37c30ead416e800c5c34c9c637ac&amp;source=constructor"
						width="1200" height="600" frameborder="0">
				</iframe>
			</div>

			<div class="container-min">
				<p class="contacts__author">© {{now()->year}} <br> Central Asia Distribution</p>
			</div>

		</section>
</x-layout>
