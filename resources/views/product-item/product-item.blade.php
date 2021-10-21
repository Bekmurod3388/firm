<x-layout >
    @section('header')
        <x-header/>
    @endsection

        <div class="container-min products-item-page">
            <div class="products__wrapper">
                <a class="link products-item-link svg__link-icon-before" href="{{url()->previous() }}">{{__('about.back')}}</a>
                <div class="products__item products__item--only">
                    <div class="products__item-top products__item-top--one">
                        <h1 class="products__item-title">
                            <span class="products__item-title--big">{{$product->{'head_'.app()->getLocale()} }}</span>
                        </h1>
                    <!--<img src="/storage/products/{{$product->img}}" class="products__svg" width="200" height="200">-->
                        <img src="/storage/products/{{$product->img2}}" class="products__svg" width="1200" height="500">
                    </div>
                    <p class="products__item--sub-title">
                        {{$product->{'head2_'.app()->getLocale()} }}
                    </p>
                    <p class="products__item-text">{{$product->{'description_'.app()->getLocale()} }}</p>
                    <div class="products__item-bottom">
                        <button class="products__get btn">{{__('about.product.donate')}}</button>
                    </div>

                    <ul class="breadcrumbs-list">
                        @if($product->id!==1)

                        <li class="breadcrumbs-item breadcrumbs-item-prev ">
                            <a href="{{route('products-item',[$product->id-1])}}" class="link svg__prev-icon-before"></a>
                        </li>
                        @endif
                        <li class="breadcrumbs-item breadcrumbs-item--active" ><a class="link ">{{$product->id}}</a></li>
                        @if($product->id!==$last_id->id)
                        <li class="breadcrumbs-item"><a class="link svg__next-icon-before"  href="{{route('products-item',[$product->id+1])}}"><span class="breadcrumbs-number">{{$product->id+1}}</span></a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <section class="vendors">
            <div class="section-title__wrapper svg__adras-before wow slideInLeft">
                <h2 class="section-title__header">
                    <span class="section-title--big">{{__('index.trust.header2')}}</span>
                </h2>
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
    @section('footer')
        <x-footer/>
    @endsection

</x-layout>

