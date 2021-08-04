<x-layout>
    @section('header')
        <x-header/>
    @endsection

        <section class="products">
            <div class="container-min">
                <div class="products__wrapper">
                    <ul class="filter-list">
                        <li class="filter-item filter-item--active">
                            <button data-listToggle="solution" class="filter-btn">Solution division</button>
                        </li>
                        <li class="filter-item">
                            <button  data-listToggle="volume" class="filter-btn">Volume division</button>
                        </li>
                        <li class="filter-item">
                            <button  data-listToggle="mobile" class="filter-btn">Mobile division</button>
                        </li>
                    </ul>
                    <ul class="products__list" data-filteredlist data-list="solution">
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--network_hardware products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#network_hardware"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">Сетевое</span>
                                    <span class="products__item-title--big">Оборудование</span></h3>
                            </div>
                            <p class="products__item-text">Решения по коммутации и маршрутизации от ведущих мировых
                                производителей, включая беспроводные технологии и программное обеспечение</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="{{route('products-item')}}">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--server_hardware products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#server_hardware"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">Серверное</span>
                                    <span class="products__item-title--big">Оборудование</span>
                                </h3>
                            </div>
                            <p class="products__item-text">Гибкие, масштабируемые и эффективные решения для построения
                                серверной инфраструктуры, которая обеспечит необходимую Вашей компании скорость реакции
                                на требования бизнеса.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="{{route('products-item')}}">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--database products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#database"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">Системы</span>
                                    <span class="products__item-title--big">хранения данных</span></h3>
                            </div>
                            <p class="products__item-text">Комплекс аппаратных и программных средств, который
                                предназначен для хранения и оперативной обработки информации любого объема.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="#">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--wireless products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#wireless"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">Беспроводное</span>
                                    <span class="products__item-title--big">Оборудование</span></h3>
                            </div>
                            <p class="products__item-text">Комплексные решения для обеспечения современной защиты
                                предприятий от известных и неизвестных угроз.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="#">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--video_call products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#video_call"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">видео-</span>
                                    <span class="products__item-title--big">конференц-связь</span></h3>
                            </div>
                            <p class="products__item-text">Решения для одновременной передачи видео и звука на
                                расстоянии с помощью аппаратно-программных средств коммуникации.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="#">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--camera products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#camera"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">системы</span>
                                    <span class="products__item-title--big">видеонаблюдения</span></h3>
                            </div>
                            <p class="products__item-text">Обеспечение безопасности предприятий и организаций, включая
                                решения по видеоаналитике и управлению системами видеонаблюдения.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="#">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--view products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#view"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--big">Визуализация</span>
                                </h3>
                            </div>
                            <p class="products__item-text">Решения средств отображения информации для заказчиков и
                                розничных потребителей (Digital Signage).</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="#">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--virtualization products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#virtualization"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--big">Виртуализация</span>
                                </h3>
                            </div>
                            <p class="products__item-text">Решения для эффективного сокращения расходов на поддержку
                                ИТ-инфраструктуры.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="#">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--battery products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#battery"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">Системы</span>
                                    <span class="products__item-title--big">Электроснабжения</span></h3>
                            </div>
                            <p class="products__item-text">Активное и пассивное оборудование для ЦОДов, включая решения
                                по источникам бесперебойного питания, дизель генераторов и прецизионному
                                кондиционированию.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="#">Подробно</a>
                                <button class="products__get btn">Запросить</button>
                            </div>
                        </li>
                    </ul>
                    <ul class="products__list list--hidden" data-filteredlist  data-list="volume">
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--photo products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#photo"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">Фото и видео</span>
                                    <span class="products__item-title--big">техника</span></h3>
                            </div>
                            <p class="products__item-text">Безусловно, глубокий уровень погружения позволяет выполнить
                                важные задания по разработке направлений.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="">Подробно</a>
                                <button class="products__get btn" href="">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--headphones products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#headphones"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--big">Аксессуары</span></h3>
                            </div>
                            <p class="products__item-text">Безусловно, глубокий уровень погружения позволяет выполнить
                                важные задания по разработке направлений.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="">Подробно</a>
                                <button class="products__get btn" href="">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--appliances products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#appliances"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">бытовая техника</span>
                                    <span class="products__item-title--big">аккумуляторы</span>
                                </h3>
                            </div>
                            <p class="products__item-text">Безусловно, глубокий уровень погружения позволяет выполнить
                                важные задания по разработке направлений.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="">Подробно</a>
                                <button class="products__get btn" href="">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--desktop-computer products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#desktop-computer"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">Компьютерная</span>
                                    <span class="products__item-title--big">техника</span></h3>
                            </div>
                            <p class="products__item-text">Безусловно, глубокий уровень погружения позволяет выполнить
                                важные задания по разработке направлений.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="">Подробно</a>
                                <button class="products__get btn" href="">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--screen-ratio products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#screen-ratio"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">видео-</span>
                                    <span class="products__item-title--big">панели</span></h3>
                            </div>
                            <p class="products__item-text">Безусловно, глубокий уровень погружения позволяет выполнить
                                важные задания по разработке направлений.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="">Подробно</a>
                                <button class="products__get btn" href="">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--speaker products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#speaker"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--small">Аудиотехника</span>
                                    <span class="products__item-title--big">и наушники</span></h3>
                            </div>
                            <p class="products__item-text">Безусловно, глубокий уровень погружения позволяет выполнить
                                важные задания по разработке направлений.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="">Подробно</a>
                                <button class="products__get btn" href="">Запросить</button>
                            </div>
                        </li>
                    </ul>
                    <ul class="products__list list--hidden" data-filteredlist data-list="mobile">
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--phone products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#phone"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--big">Телефоны</span></h3>
                            </div>
                            <p class="products__item-text">Безусловно, глубокий уровень погружения позволяет выполнить
                                важные задания по разработке направлений.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="">Подробно</a>
                                <button class="products__get btn" href="">Запросить</button>
                            </div>
                        </li>
                        <li class="products__item">

                            <div class="products__item-top">
                                <svg class="products__svg--earbuds products__svg " width="200" height="200">
                                    <use xlink:href="img/sprite.svg#earbuds"></use>
                                </svg>
                                <h3 class="products__item-title">
                                    <span class="products__item-title--big">Аксессуары</span></h3>
                            </div>
                            <p class="products__item-text">Безусловно, глубокий уровень погружения позволяет выполнить
                                важные задания по разработке направлений.</p>
                            <div class="products__item-bottom">
                                <a class="products__more btn" href="">Подробно</a>
                                <button class="products__get btn" href="">Запросить</button>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </section>

    @section('footer')
        <x-footer/>
        @endsection
</x-layout>
