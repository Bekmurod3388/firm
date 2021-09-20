<x-layout>
    @section('header')
    <x-header/>
    @endsection
    <section class="vendors">
        <div class="container-min">
            <div class="vendors__wrapper">
                <ul class="filter-list">
                    @foreach($categories as $category)
                        <li class="filter-item {{ request()->segment(3) == $category->id ? 'filter-item--active' : '' }}">
                            <button data-listToggle="solution" onclick="categoryFilter({{$category->id}})"
                                    class="filter-btn">
                                <a href="{{route('get_category_vendors',['category'=>$category->id])}}">
                                    {{$category->name}}
                                </a>
                            </button>
                        </li>
                    @endforeach
                </ul>
                <ul class="vendors__list" data-filteredlist data-list="solution">
                    @if(!empty($vendors))
                    @foreach($vendors as $vendor)
                    <li class="vendors__item">
                        <a href="{{route('about-vendor',$vendor->id)}}">
                            <picture class="img--hpEnterprise_logo">
                                <source srcset="{{asset('storage/'.$vendor->img)}}" type="image/webp">
                                <img  src="{{asset('storage/'.$vendor->img)}}" alt="samsung_logo">
                            </picture>
                        </a>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <a href="{{route('vendors')}}" class="vendors__link link svg__link-icon-before"> {{__('index.trust.vendors')}}</a>

            </div>
        </div>
    </section>
    @section('footer')
    <x-footer/>
    @endsection
</x-layout>
