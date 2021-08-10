<x-layout>
    @section('header')
        <x-header/>
    @endsection

        <section class="products products-page">
            <div class="container-min">
                <div class="products__wrapper">
                    <ul class="filter-list">
                        @foreach($categories as $category)
                        <li class="filter-item filter-item--active">
                            <button data-listToggle="solution" class="filter-btn">{{$category->name}}</button>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="products__list" data-filteredlist data-list="solution">
                        @foreach($products as $product)
                        <li class="products__item">
							<div class="products__item-top">
								<img src="/storage/products/{{$product->img}}" class="products__svg" width="82" height="82">
								<h3 class="products__item-title">
									<span class="products__item-title--big">{{$product->{'head_'.app()->getLocale()} }}</span></h3>
							</div>
							<p class="products__item-text">{{substr($product->{'description_'.app()->getLocale()} ,0,150)}}</p>
							<div class="products__item-bottom">
								<a class="products__more btn" href="{{route('products-item',[$product->id])}}">{{__('about.product.more')}}</a>
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
				<li class="form__item"><input type="text" class="form__input" placeholder="{{__('index.contact.name')}}"></li>
				<li class="form__item"><input type="tel" class="form__input" placeholder="+998 (__) ___-__-__" required></li>
				<li class="form__item"><input type="email" class="form__input" placeholder="Email"></li>
			</ul>
			<input type="submit" class="form__submit" value="{{__('index.contact.send')}}">
		</form>
	</div>
</x-layout>
