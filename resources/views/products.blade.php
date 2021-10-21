<x-layout>
    @section('header')
        <x-header/>
    @endsection

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

    @section('footer')
        <x-footer/>
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
    @endsection

</x-layout>
