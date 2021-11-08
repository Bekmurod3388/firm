<x-layout>
    <x-header></x-header>
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
        </div>
    </div>
    <x-footer></x-footer>
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


</x-layout>
