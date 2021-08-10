<x-layout >
    @section('header')
    <x-header/>
    @endsection
    <div class="container-min products-item-page">
        <div class="products__wrapper">
            <a class="link products-item-link svg__link-icon-before" href="../products.blade.php">Назад</a>
            <div class="products__item products__item--only">
                <div class="products__item-top">
                    <img class="products__svg--network_hardware products__svg " src="img/svg/network_hardware.svg" alt="network_hardware" width="82" height="82">
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
                    <p class="form__title">Запрос на консультацию</p>
                    <button class="modal__close">x</button>
                </div>

                <form action="https://example.com">
                    <ul class="form__list">
                        <li class="form__item"><input type="text" class="form__input" placeholder="Ф.И.О"></li>
                        <li class="form__item"><input type="tel" class="form__input" placeholder="+998 (__) ___-__-__" required></li>
                        <li class="form__item"><input type="email" class="form__input" placeholder="Email"></li>
                    </ul>
                    <input type="submit" class="form__submit" value="Отправить">
                </form>
            </div>
</x-layout>

