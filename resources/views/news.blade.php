<x-layout>
    @section('header')
        <x-header/>
    @endsection

        <section class="news">
            <div class="container-min">
                <ul class="news__list">
                    <li class="news__item news__item-1  wow">
                        <picture>
                            <source srcset="img/news/news-img-1.webp">
                            <img src="img/news/news-img-1.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">17.03.2021</p>
                                <h3 class="news__title">Скидка 50% на покупку <br> Solidworks</h3>
                                <p class="news__sub-title">Специальное предложение до 31 марта</p>
                            </div>
                            <a href="{{route('news-item')}}" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-2 wow">
                        <picture>
                            <source srcset="img/news/news-img-2.webp">
                            <img src="img/news/news-img-2.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">11.03.2021</p>
                                <h3 class="news__title">Специальные предложения <br> от Solidworks</h3>
                                <p class="news__sub-title">На восстановление доступа к технической поддержке и на
                                    дополнительные модули SOLIDWORKS</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-3  wow">
                        <picture>
                            <source srcset="img/news/news-img-3.webp">
                            <img src="img/news/news-img-3.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">28.02.2021</p>
                                <h3 class="news__title">Вебинары <br>Клуба Cisco</h3>
                                <p class="news__sub-title">Уважаемые партнеры, предлагаем вам ознакомиться с расписанием вебинаров в марте</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-4 wow">
                        <picture>
                            <source srcset="img/news/news-img-4.webp">
                            <img src="img/news/news-img-4.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">26.02.2021</p>
                                <h3 class="news__title">Сетевые решения <br> Cisco SD-WAN</h3>
                                <p class="news__sub-title">«CA Distribution» совместно с «Cisco» приглашают принять участие в виртуальном мероприятии...</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-5  wow">
                        <picture>
                            <source srcset="img/news/news-img-5.webp">
                            <img src="img/news/news-img-5.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">24.02.2021</p>
                                <h3 class="news__title">Виртуальный семинар <br>
                                    для партнеров Cisco</h3>
                                <p class="news__sub-title">Практика создания спецификаций для решений
                                    Collaboration на базе тарифных планов</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-6 wow">
                        <picture>
                            <source srcset="img/news/news-img-6.webp">
                            <img src="img/news/news-img-6.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">24.02.2021</p>
                                <h3 class="news__title">DUO Security <br>
                                    Partner Enablement</h3>
                                <p class="news__sub-title">Приглашаем вас поучаствовать в виртуальном семинаре
                                    для партнеров, во время которого поговорим о Cisco DUO</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-7  wow">
                        <picture>
                            <source srcset="img/news/news-img-7.webp">
                            <img src="img/news/news-img-7.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">24.02.2021</p>
                                <h3 class="news__title">Уважаемы партнеры, <br>
                                    важная информация!
                                </h3>
                                <p class="news__sub-title">CheckPoint - Окончание поддержки определенных версий ПО</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-8 wow">
                        <picture>
                            <source srcset="img/news/news-img-8.webp">
                            <img src="img/news/news-img-8.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">17.02.2021</p>
                                <h3 class="news__title">Новинки <br>
                                    от Axis</h3>
                                <p class="news__sub-title">Фиксированные купольные камеры, тепловизионное
                                    обнаружение и визуальная верификация</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-9  wow">
                        <picture>
                            <source srcset="img/news/news-img-9.webp">
                            <img src="img/news/news-img-9.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">02.03.2021</p>
                                <h3 class="news__title">Computing <br>
                                    security awards</h3>
                                <p class="news__sub-title">Компания Wallax стала победителем в номинации «Решение
                                    года по безопасному удаленному мониторингу»</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                    <li class="news__item news__item-10 wow">
                        <picture>
                            <source srcset="img/news/news-img-10.webp">
                            <img src="img/news/news-img-10	.jpg" alt="News 1">
                        </picture>
                        <div class="card news__wrapper">
                            <div class="card__blur">
                                <p class="news__date">28.01.2021</p>
                                <h3 class="news__title">Конференция <br>
                                    3D EXPERIENCE WORLD</h3>
                                <p class="news__sub-title">Международная конференция для пользователей SOLIDWORKS
                                    и 3DEXPERIENCE, организуемая ежегодно Dassault Systèmes.</p>
                            </div>
                            <a href="" class="news__link link --svg__link-icon-before">Читать</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

    @section('footer')
        <x-footer/>
        @endsection
</x-layout>
