<x-layout >
    @section('header')
        <x-header/>
    @endsection
        <div class="container-min products-item-page">
            <div class="products__wrapper">
                <a class="link products-item-link svg__link-icon-before" href="{{url()->previous() }}">{{__('about.back')}}</a>
                <div class="products__item products__item--only">
                    <div class="products__item-top">
                        <img src="/storage/products/{{$product->img}}">
                        <h3 class="products__item-title">

                            <span class="products__item-title--big">{{$product->{'head_'.app()->getLocale()} }}</span></h3>
                    </div>
                    <p class="products__item-text">{{$product->{'description_'.app()->getLocale()} }}</p>
                    <div class="products__item-bottom">
                        <button class="products__get btn">{{__('about.product.donate')}}</button>
                    </div>
                </div>
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-item breadcrumbs-item--active" ><a class="link ">1</a></li>
                    <li class="breadcrumbs-item"><a class="link svg__next-icon-before"  href="product-item-2.html"><span class="breadcrumbs-number">2</span></a></li>
                </ul>
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

                <form action="{{route('admin.messages.store')}}" method="POST">
                    @csrf
                    <ul class="form__list">
                        <li class="form__item"><input type="text" class="form__input" name="name" placeholder="{{__('index.contact.name')}}"></li>
                        <li class="form__item"><input type="tel" class="form__input" name="phone" placeholder="+998 (__) ___-__-__"></li>
                        <li class="form__item"><input type="email" class="form__input" name="email" placeholder="Email"></li>
                    </ul>
                    <input type="submit" class="form__submit" value="{{__('index.contact.send')}}">
                </form>
            </div>
</x-layout>

