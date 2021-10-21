<x-layout>

    @section('header')
        <x-header>
            <video autoplay muted loop id="myVideo" class="header__video" poster="{{asset('img/main-preview.jpg')}}">
                <source src="{{asset('img/videos/video_banner.mp4')}}" type="video/mp4">
                <source src="{{asset('img/videos/video_banner.webm')}}" type="video/webm">
                <source src="{{asset('img/videos/video_banner.ogv')}}" type="video/ogg">
            </video>
        </x-header>
    @endsection


		<section class="about-us">
			<div class="container-min">
				<ul class="advantages__list">
					<li class="advantages__item advantages__item--small">
						<span class="svg-container--develop wow fadeIn">
							<svg class="svg__develop" width="118" height="118">
								<use xlink:href="img/sprite.svg#develop_1"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="25+">00+</span>
							<span class="advantages__text">{{__('index.services.experience')}}</span>
						</p>
					</li>
					<li class="advantages__item advantages__item--small">
						<span class="svg-container--briefcase wow fadeIn">
							<svg class="svg__briefcase" width="132" height="99">
								<use xlink:href="img/sprite.svg#briefcase"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="50+">00+</span>
							<span class="advantages__text">{{__('index.services.brand')}}</span>
						</p>
					</li>
					<li class="advantages__item advantages__item--big">
						<span class="svg-container--handshake wow fadeIn">
							<svg class="svg__handshake" width="127" height="118">
								<use xlink:href="img/sprite.svg#handshake"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="100+">0+</span>
							<span class="advantages__text">{{__('index.services.partner')}}</span>
						</p>
					</li>
					<li class="advantages__item advantages__item--big">
						<span class="svg-container--employee wow fadeIn">
							<svg class="svg__employee" width="126" height="118">
								<use xlink:href="img/sprite.svg#employee"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="80+">0+</span>
                                <span class="advantages__text">{{__('index.services.worker')}}</span>
						</p>
					</li>
				</ul>
			</div>
			<div class="about-us__wrapper ">
				<div class=" about-us__card card__blur wow fadeIn svg__adras-after wow slideInRight">
					<h2 class="card__title about-us__card-title">
						<span class="card__title--small  about-us__card--small">{{__('index.about.header')}}</span>
						<span class="card__title--big">{{__('index.about.header2')}}</span>
					</h2>
					<p class="card__text about-us__card-text--top ">{{__('index.about.desc1')}}</p>
					<p class="card__text about-us__card-text--bottom wow slideInRight " data-wow-delay="0.8s" >
                    {{__('index.about.desc2')}}
                </p>
            </div>
        </div>
    </section>

        <section class="products products-page">
            <div class="container-min">
                <div class="products__wrapper">
                    <ul class="filter-list">
                        @foreach($categories as $category)
                            <li class="filter-item @if($loop->index == 0){{'filter-item--active'}}@endif">
                                <button class="filter-btn" data-listToggle="solution"
                                        onclick="categoryFilter({{$category->id}})">
                                    {{$category->name}}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <ul id="products-part" class="products__list" data-filteredlist data-list="solution">
                        @php($loc = request()->get('language') ?? app()->getLocale())
                    </ul>
                </div>
            </div>
        </section>

    <section class="vendors">
        <div class="section-title__wrapper svg__adras-before wow slideInLeft">
            <h2 class="section-title__header">
                <span class="section-title--small">{{__('index.trust.header')}}</span>
                <span class="section-title--big">{{__('index.trust.header2')}}</span>
            </h2>
            <p class="section-title__text">{{__('index.trust.desc')}}
            </p>
        </div>

        <div class="container-min">
            <div class="vendors__wrapper ">
                <div class="swiper vendors__swiper">
                    <ul class="vendors__list swiper-wrapper vendors__swiper-wrapper">
                        @if(!empty($vendors))
                        @foreach($vendors as $vendor)
                        <li class="vendors__item swiper-slide">
                            <a href="{{route('about-vendor',$vendor->id)}}">
                                <picture class="img--samsung_logo">
                                    <source srcset="{{asset('storage/'.$vendor->img)}}" type="image/webp">
                                    <img src="{{asset('storage/'.$vendor->img)}}" alt="samsung_logo">
                                </picture>
                            </a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                    <div class="swiper-pagination swiper-pagination--vendors"></div>
                </div>
                <a href={{route('vendors')}} class="vendors__link link svg__link-icon-before">{{__('index.trust.vendors')}}</a>

				</div>
			</div>
		</section>
		<section class="news">
			<div class="section-title__wrapper svg__adras-before wow slideInLeft">
				<h2 class="section-title__header">
					<span class="section-title--small">{{__('index.news.header')}}</span>
					<span class="section-title--big">{{__('index.news.header2')}}</span>
				</h2>
				<p class="section-title__text">{{__('index.news.desc')}}</p>
			</div>

			<div class="container-min">
				<ul class="news__list">
                @foreach($posts as $post)
					<li class="news__item news__item-1 wow">
						<picture>
							<source srcset="/storage/posts/{{$post->img}}" type="image/webp">
							<img src="/storage/posts/{{$post->img}}" alt="News 1">
						</picture>

						<div class="card news__wrapper">
							<div class="card__blur">
								<p class="news__date">{{$post->crated_at}}</p>
								<h3 class="news__title">{{ $post->{'header_'.app()->getLocale()} }}</h3>
								<p class="news__sub-title">{{ $post->{'header2_'.app()->getLocale()} }}</p>
							</div>
							<a href="{{route('news-item',[$post->id])}}" class="news__link link svg__link-icon-before">{{__('index.news.read')}}</a>
						</div>
					</li>
                    @endforeach

				</ul>
			</div>
		</section>

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-layout>
<script>
    function categoryFilter(id) {
        $.get("{{route('products-by-category')}}" + `/${id}`, function (data) {
            let ul = '';
            for (let product of data)
                ul += `
                            <li class="products__item">
                                <div class="products__item-top">
                                    <img src="/storage/products/${product.img}" class="products__svg" width="82" height="82">
                                    <h3 class="products__item-title">
                                        <span class="products__item-title--big">${product.head_{{$loc}}}</span>
                                    </h3>
                                </div>
                                <p class="products__item-text">${fromBegin(product.description_{{$loc}})}</p>
                                <div class="products__item-bottom">
                                    <a class="products__more btn"
                                       href="{{route('products-item')}}/${product.id}">{{__('index.products.more_info')}}</a>
                                    <button class="products__get btn">{{__('index.products.get')}}</button>
                                </div>
                            </li>
                        `

            $('#products-part').html(ul);
        });
    }

    function fromBegin(srt) {
        return srt.substr(0, 150);
    }

    @if(count($categories))
    $(function () {
        categoryFilter({{$categories[0]->id}})
    })
    @endif
</script>
