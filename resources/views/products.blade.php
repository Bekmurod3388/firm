<x-layout>
    @section('header')
        <x-header/>
    @endsection

    <section class="products products-page">
        <div class="container-min">
            <div class="products__wrapper">
                <ul class="filter-list">
                    @foreach($categories as $category)
                        <li class="filter-item ">
                            <button data-listToggle="solution" onclick="categoryFilter({{$category->id}})"
                                    class="filter-btn">{{$category->name}}</button>
                        </li>
                    @endforeach
                </ul>
                <ul class="products__list" data-filteredlist data-list="solution">
                    @foreach($category->products as $product)
                        <li class="products__item">
                            <div class="products__item-top">
                                <img src="/storage/products/{{$product->img}}">
                                <h3 class="products__item-title">
                                    <span
                                        class="products__item-title--big">{{$product->{'head_'.app()->getLocale()} }}</span>
                                </h3>
                            </div>
                            <p class="products__item-text">{{substr($product->{'description_'.app()->getLocale()} ,0,150)}}</p>
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

                <form action="https://example.com">
                    <ul class="form__list">
                        <li class="form__item"><input type="text" class="form__input"
                                                      placeholder="{{__('index.contact.name')}}"></li>
                        <li class="form__item"><input type="tel" class="form__input" placeholder="+998 (__) ___-__-__">
                        </li>
                        <li class="form__item"><input type="email" class="form__input" placeholder="Email"></li>
                    </ul>
                    <input type="submit" class="form__submit" value="{{__('index.contact.send')}}">
                </form>
            </div>
            <script>
                var products = toArray({{json_encode($p_array)}})
                var filterList = document.querySelector(".filter-list"),
                    filterItems = document.querySelectorAll(".filter-item"),
                    lists = document.querySelectorAll("[data-filteredlist]");
                filterList && filterList.addEventListener("click", (function (e) {

                    /* if (e.target.dataset.listtoggle) {
                         for (var t = e.target, r = 0; r < filterItems.length; r++) filterItems[r].classList.remove("filter-item--active");
                         t.parentElement.classList.add("filter-item--active");
                         for (var n = e.target.dataset.listtoggle, a = document.querySelector('[data-list="'.concat(n, '"]')), o = 0; o < lists.length; o++) lists[o].classList.add("list--hidden");
                         a.classList.remove("list--hidden")
                     }*/
                }));

                function categoryFilter(id) {
                    console.log(products ,id)
                }
            </script>
</x-layout>
