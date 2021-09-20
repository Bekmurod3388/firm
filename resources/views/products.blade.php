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
                        <span class="header-component__title--big">{{__('index.carousel.production')}}</span>
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

    <section class="products products-page">
        <div class="container-min">
            <div class="products__wrapper">
                <ul class="filter-list">
                    @foreach($categories as $category)
                        <li class="filter-item {{ request()->segment(3) == $category->id ? 'filter-item--active' : '' }}">
                            <button data-listToggle="solution" onclick="categoryFilter({{$category->id}})"
                                    class="filter-btn">
                                <a href="{{route('get_category_products',['category'=>$category->id])}}">
                                {{$category->name}}
                                </a>
                            </button>
                        </li>
                    @endforeach
                </ul>
                <ul class="products__list" data-filteredlist data-list="solution">
                    @foreach($products as $product)
                        <li class="products__item">
                            <div class="products__item-top">
                                <img src="/storage/products/{{$product->img}}"  class="products__svg" width="82" height="82">
                                <h3 class="products__item-title">
                                    <span
                                        class="products__item-title--big">{{$product->{'head_'.app()->getLocale()} }}</span>
                                </h3>
                            </div>
                            <p class="products__item-text">{{ \Illuminate\Support\Str::limit($product->{'description_'.app()->getLocale()}, 150)}}</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn"
                                   href="{{route('products-item',[$product->id])}}">{{__('about.product.more')}}</a>
                                <button class="products__get btn">{{__('about.product.donate')}}</button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

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
