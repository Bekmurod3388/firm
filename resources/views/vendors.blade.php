<x-layout>
    <x-header></x-header>
    <section class="vendors">
        <div class="container-min">
            <div class="vendors__wrapper">
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
                <ul id="vendors-part" class="vendors__list" data-filteredlist data-list="solution">

                </ul>
                <a href="{{route('vendors')}}"
                   class="vendors__link link svg__link-icon-before"> {{__('index.trust.vendors')}}</a>
            </div>
        </div>
    </section>
    <x-footer></x-footer>
    <script>
        function categoryFilter(id) {
            $.get("{{route('vendor-by-category')}}" + `/${id}`, function (data) {
                let ul = '';
                for (let vendor of data)
                    ul += `
                        <li class="vendors__item">
                            <a href="{{route('about-vendor')}}/${vendor.id}">
                                <picture class="img--hpEnterprise_logo">
                                    <source srcset="{{asset('storage')}}/${vendor.img}" type="image/webp">
                                    <img  src="{{asset('storage')}}/${vendor.img}" alt="samsung_logo">
                                </picture>
                            </a>
                        </li>
                    `

                $('#vendors-part').html(ul);
            });
        }

        @if(count($categories))
        $(function () {
            categoryFilter({{$categories[0]->id}})
        })
        @endif
    </script>
</x-layout>
