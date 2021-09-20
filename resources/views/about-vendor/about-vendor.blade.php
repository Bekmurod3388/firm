<x-layout>
    @section('header')
        <x-header/>
    @endsection
        <section class="vendor-info about-vendor-page--acer">
            <div class="vendor-info__wrapper">
                <div class=" vendor-info__card card__blur">
                    <img class="card__title vendor-info__card-title" src="{{asset('storage/'.$vendor->img)}}"
                         alt="acer">
                    <p class="card__text vendor-info__card-text ">{{$vendor->text}}</p>
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
                    @if(!empty($vendor_files))
                    @foreach($vendor_files as $vendor_file)
                    <li class="links__item">
                        <a href="{{asset('storage/'.$vendor_file->path)}}" class="link link__a svg__download-icon-before">{{$vendor_file->file_name}}</a>
                    </li>
                    @endforeach
                    @endif
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
                    <iframe class="video__img" width="560" height="300" src="https://www.youtube.com/embed/Ptk_1Dc2iPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <time class="video__time">02.19.2021</time>
                        <h3 class="video__title">
                            Портативный сканер <br>
                            canon image formula r10</h3>
                        <p class="video__text">Прост в настройке и удобен в использовании
                            в любом месте.</p>
                    </li>
                    <li class="video__item">
                    <iframe class="video__img" width="560" height="300" src="https://www.youtube.com/embed/Ptk_1Dc2iPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
