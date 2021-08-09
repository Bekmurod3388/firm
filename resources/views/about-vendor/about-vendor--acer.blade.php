<x-layout>
    @section('header')
        <x-header/>
    @endsection
        <section class="vendor-info">
            <div class="vendor-info__wrapper">
                <div class=" vendor-info__card card__blur">
                    <img class="card__title vendor-info__card-title" src="img/about-vendors/acer_logo.png"
                         alt="acer">
                    <p class="card__text vendor-info__card-text ">Acer - один из самых популярных брендов в сегменте
                        компьютерной техники. Компания была основана на Тайване в 1976 году.<br> <br>

                        Acer выпускает настольные и портативные компьютеры, серверное оборудование, устройства хранения
                        данных, мониторы и периферийные устройства, ЖК-телевизоры и решения для электронного бизнеса,
                        предназначенные для использования на предприятиях, в правительственных и образовательных
                        учреждениях, а также для дома и развлечений. В список производимой продукции входят также
                        проекционное оборудование, бытовая электроника и различная периферия и комплектующие.</p>
                </div>
            </div>
        </section>
        <section class="links">
            <div class="container-min">
                <ul class="links__nav-list">
                    <li class="links__nav-item links__nav-item--active ">
                        <a href="" class="links__nav-link">Ноутбуки</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Планшеты</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Смартфоны</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Мониторы</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Настольные компьютеры</a>
                    </li>
                    <li class="links__nav-item">
                        <a href="" class="links__nav-link">Проекторы</a>
                    </li>
                </ul>

                <ul class="links__list">
                    <li class="links__item">
                        <a href="" class="link link__a svg__download-icon-before">Презентация</a>
                    </li>
                    <li class="links__item">
                        <a href="" class="link link__a svg__download-icon-before">Техническая документация</a>
                    </li>
                    <li class="links__item">
                        <a href="" class="link link__a svg__download-icon-before">Каталог товаров</a>
                    </li>
                    <li class="links__item">
                        <a href="" class="link link__a svg__download-icon-before">Прайс-лист</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="video">
            <div class="section-title__wrapper svg__adras-before">
                <h2 class="section-title__header">
                    <span class="section-title--small">Смотрите</span>
                    <span class="section-title--big">Видео</span>
                </h2>
                <p class="section-title__text">Презентации, реклама и события</p>
            </div>
            <div class="container-min">
                <ul class="video__list">
                    <li class="video__item">
                        <img class="video__img" src="./img/video-img.jpg" alt="видео">
                        <time class="video__time">02.19.2021</time>
                        <h3 class="video__title">
                            Портативный сканер <br>
                            canon image formula r10</h3>
                        <p class="video__text">Прост в настройке и удобен в использовании
                            в любом месте.</p>
                    </li>
                    <li class="video__item">
                        <img class="video__img" src="./img/video-img_2.jpg" alt="видео">
                        <time class="video__time">09.04.2020</time>
                        <h3 class="video__title">
                            Меняя будущее. Презентация <br>
                            canon eos r5 и Eos r6</h3>
                        <p class="video__text">Когда фотографы и видеооператоры видят
                            творческий вызов, они воспринимают его
                            как приглашение: это шанс проявить
                            творческий подход и увидеть мир по-новому.</p>
                    </li>
                </ul>
            </div>
        </section>
    @section('footer')
        <x-footer/>
        @endsection
</x-layout>
