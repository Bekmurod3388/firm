<x-layout >
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
                        <span class="header-component__title--big">{{__('index.menu.product')}}</span>
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
                        <li class="breadcrumbs-item breadcrumbs-item-prev ">
                            <a href="{{route('products-item',[$product->id-1])}}" class="link svg__prev-icon-before">Назад</a>
                        </li>
                        <li class="breadcrumbs-item breadcrumbs-item--active" ><a class="link ">{{$product->id}}</a></li>
                        @if($product->id!==$last_id->id)
                        <li class="breadcrumbs-item"><a class="link svg__next-icon-before"  href="{{route('products-item',[$product->id+1])}}"><span class="breadcrumbs-number">{{$product->id+1}}</span></a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>

    @section('footer')
        <x-footer/>
    @endsection
    <div>
        <div class="modal-back modal__disable">
            <div class="card__blur form modal ">
                <div class="modal__title">
                    <p class="form__title">{{__('about.product.consult')}}</p>
                    <button class="modal__close">x</button>
                </div>

                <form id="contactForm">
                    <ul class="form__list">
                        <li class="form__item"><input type="text" class="form__input" name="name"  id="name" required placeholder="{{__('index.contact.name')}}"></li>
                        <li class="form__item"><input type="tel" class="form__input" name="phone" id="phone" required placeholder="+998 (__) ___-__-__"></li>
                        <li class="form__item"><input type="email" class="form__input" name="email" id="email" required placeholder="Email"></li>
                    </ul>
                    <input type="submit" class="form__submit" value="{{__('index.contact.send')}}">
                </form>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
            <script type="text/javascript">

                $('#contactForm').on('submit',function(e){
                    e.preventDefault();

                    let name = $('#name').val();
                    let phone = $('#phone').val();
                    let email = $('#email').val();

                    $.ajax({
                        url: "{{route('messages.store')}}",
                        type:"POST",
                        data:{
                            "_token": "{{ csrf_token() }}",
                            name:name,
                            phone:phone,
                            email:email,
                        },
                        success:function(response){
                            Swal.fire({
                                icon: 'success',

                                title: '{{__("about.success")}}',

                            })
                        },
                    });
                });
            </script>
</x-layout>

