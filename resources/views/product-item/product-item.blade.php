<x-layout>
    @section('header')
        <x-header/>
    @endsection

        <div class="container-min">
            <div class="products__wrapper">
                <a class="link products-item-link --svg__link-icon-before" href="../products.blade.php">Назад</a>
                <div class="products__item products__item--only">
                    <div class="products__item-top">
                        <svg class="products__svg--network_hardware products__svg " width="200" height="200">
                            <use xlink:href="img/sprite.svg#network_hardware"></use>
                        </svg>
                        <h3 class="products__item-title">
                            <span class="products__item-title--small">Сетевое</span>
                            <span class="products__item-title--big">Оборудование</span></h3>
                    </div>
                    <p class="products__item-text">Технологии за последние десятилетия претерпели стремительное
                        развитие. Повышение эффективности труда и сокращение расходов – лишь часть преимуществ успешного
                        внедрения современной сетевой инфраструктуры в бизнес. </p>
                    <div class="products__item-bottom">
                        <button class="products__get btn">Запросить</button>
                    </div>
                </div>
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-item breadcrumbs-item--active" ><a class="link ">1</a></li>
                    <li class="breadcrumbs-item"><a class="link --svg__next-icon-before"  href="product-item-2.html"><span class="breadcrumbs-number">2</span></a></li>
                </ul>
            </div>
        </div>

    @section('footer')
        <x-footer/>
    @endsection
</x-layout>

