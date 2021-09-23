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

