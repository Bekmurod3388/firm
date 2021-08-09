

        <x-layout>
            @section('header')
                <x-header/>
            @endsection
                <section class="vendor-info">
                    <div class="vendor-info__wrapper">
                        <div class=" vendor-info__card card__blur">
                            <img class="card__title vendor-info__card-title" src="img/about-vendors/axis_logo.png" alt="axis">
                            <p class="card__text vendor-info__card-text ">AxisCommunicationsAB — шведская компания, основанная в 1984 году, занимается производством и продажей сетевых камер и систем наблюдения.
                                <br> <br>
                                Axis стала первой компанией, разработавшей сетевые видео технологии в профессиональных системах удаленного и охранного видеонаблюдения и создавшей первую в мире камеру в 1996 году. Среди изготовлений компании AXIS - сетевые камеры нового поколения, а также видеодекодеры и видеосерверы, обеспечивающие переход к современным сетевым видеотехнологиям с самыми минимальными затратами.
                                <br> <br>
                                На сегодняшний день AXIS является лидером на мировом рынке систем охранного IP-видеонаблюдения и специализируется в сфере перехода с аналоговых систем охранного видеонаблюдения на цифровые системы axis. </p>
                        </div>
                    </div>
                </section>
                <section class="links">
                    <div class="container-min">
                        <ul class="links__nav-list">
                            <li class="links__nav-item links__nav-item--active ">
                                <a href="" class="links__nav-link">Сетевые камеры</a>
                            </li>
                            <li class="links__nav-item">
                                <a href="" class="links__nav-link">Видеокодеры</a>
                            </li>
                            <li class="links__nav-item">
                                <a href="" class="links__nav-link">Аксессуары</a>
                            </li>
                            <li class="links__nav-item">
                                <a href="" class="links__nav-link">Программное обеспечение для управления видео</a>
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
