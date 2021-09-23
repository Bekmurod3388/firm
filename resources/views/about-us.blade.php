<x-layout>
    @section('header')
        <x-header/>
    @endsection

        <section class="our-goal">
            <div class="our-goal__wrapper">
                <div class=" our-goal__card card__blur wow slideInRight">
                    <h2 class="card__title our-goal__card-title">{{__('about.header')}}</h2>
                    <p class="card__text our-goal__card-text  ">{{__('about.desc')}}</p>
                    <h2 class="card__title our-goal__card-title">{{__('about.header2')}}</h2>
                    <p class="card__text our-goal__card-text">{{__('about.desc2')}}</p>
                </div>
            </div>
        </section>
        <section class="our-values">
            <div class="section-title__wrapper svg__adras-before wow slideInLeft">
                <h2 class="section-title__header">
                    <span class="section-title--small">{{__('about.value.header')}}</span>
                    <span class="section-title--big">{{__('about.value.header2')}}</span>
                </h2>
            </div>

            <div class="container-min">
                <ul class="our-values__list">
                    <li class="our-values__item wow fadeIn">
                        <svg class="our-values__svg lead__svg--team " width="200" height="200">
                            <use xlink:href="img/sprite.svg#team"></use>
                        </svg>
                        <h3 class="our-values__item-title">{{__('about.value.val_head1')}}</h3>
                        <p class="our-values__item-text">{{__('about.value.val_desc1')}}</p>
                    </li>
                    <li class="our-values__item wow fadeIn">
                        <svg class="our-values__svg lead__svg--human_relations" width="200" height="200">
                            <use xlink:href="img/sprite.svg#human_relations"></use>
                        </svg>
                        <h3 class="our-values__item-title">{{__('about.value.val_head2')}}</h3>
                        <p class="our-values__item-text">{{__('about.value.val_desc2')}}</p>
                    </li>
                    <li class="our-values__item wow fadeIn">
                        <svg class="our-values__svg lead__svg--competence" width="200" height="200">
                            <use xlink:href="img/sprite.svg#competence"></use>
                        </svg>
                        <h3 class="our-values__item-title">{{__('about.value.val_head3')}}</h3>
                        <p class="our-values__item-text">{{__('about.value.val_desc3')}}</p>
                    </li>
                    <li class="our-values__item wow fadeIn">
                        <svg class="our-values__svg lead__svg--efficiency" width="200" height="200">
                            <use xlink:href="img/sprite.svg#efficiency"></use>
                        </svg>
                        <h3 class="our-values__item-title">{{__('about.value.val_head4')}}</h3>
                        <p class="our-values__item-text">{{__('about.value.val_desc4')}}</p>
                    </li>
                    <li class="our-values__item wow fadeIn">
                        <svg class="our-values__svg lead__svg--safety" width="200" height="200">
                            <use xlink:href="img/sprite.svg#safety"></use>
                        </svg>
                        <h3 class="our-values__item-title">{{__('about.value.val_head5')}}</h3>
                        <p class="our-values__item-text">{{__('about.value.val_desc5')}}</p>
                    </li>
                    <li class="our-values__item wow fadeIn">
                        <svg class="our-values__svg lead__svg--responsibility" width="200" height="200">
                            <use xlink:href="img/sprite.svg#responsibility"></use>
                        </svg>
                        <h3 class="our-values__item-title">{{__('about.value.val_head6')}}</h3>
                        <p class="our-values__item-text">{{__('about.value.val_desc6')}}</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="activities">
            <div class="section-title__wrapper svg__adras-before wow slideInLeft">
                <h2 class="section-title__header">
                    <span class="section-title--small">{{__('about.direction.head')}}</span>
                    <span class="section-title--big">{{__('about.direction.head2')}}</span>
                </h2>
            </div>

            <div class="container-min">
                <ul class="activities__list">

                    <li class="activities__item activities__item-1 wow slideInLeft ">
                        <img src="img/activities_1.jpg" alt="News 1">
                        <div class="card activities__wrapper card__blur">
                            <h3 class="activities__title">{{__('about.direction.head3')}}</h3>
                            <p class="activities__sub-title">{{__('about.direction.desc')}}</p>
                        </div>
                    </li>

                    <li class="activities__item activities__item-2 wow slideInRight">
                        <img src="img/activities_2.jpg" alt="News 1">
                        <div class="card activities__wrapper card__blur">
                            <h3 class="activities__title">{{__('about.direction.vol')}}</h3>
                            <p class="activities__sub-title">{{__('about.direction.vol_desc')}}
                            </p>
                        </div>
                    </li>
                    <li class="activities__item activities__item-3 wow slideInLeft">
                        <img src="img/activities_3.jpg" alt="News 1">
                        <div class="card activities__wrapper card__blur">
                            <h3 class="activities__title">{{__('about.direction.mobil')}}</h3>
                            <p class="activities__sub-title">{{__('about.direction.mobil_desc')}}</p>
                        </div>
                    </li>
                </ul>
            </div>

        </section>

        <section class="lead">
            <div class="section-title__wrapper svg__adras-after wow slideInRight">
                <h2 class="section-title__header">
                    <span class="section-title--small">{{__('about.benefit.header')}}</span>
                    <span class="section-title--big">{{__('about.benefit.header2')}}</span>
                </h2>
            </div>
            <div class="container-min">
                <ul class="lead__list">
                    <li class="lead__item wow fadeIn">
                        <svg class="lead__svg lead__svg--team wow fadeIn" width="200" height="200">
                            <use xlink:href="img/sprite.svg#finance"></use>
                        </svg>
                        <h3 class="lead__item-title">{{__('about.benefit.vol1')}}</h3>
                        <p class="lead__item-text">{{__('about.benefit.vol_desc1')}}</p>
                    </li>
                    <li class="lead__item wow fadeIn">
                        <svg class="lead__svg lead__svg--human_relations" width="200" height="200">
                            <use xlink:href="img/sprite.svg#logistic"></use>
                        </svg>
                        <h3 class="lead__item-title">{{__('about.benefit.vol2')}}</h3>
                        <p class="lead__item-text">{{__('about.benefit.vol_desc2')}}</p>
                    </li>
                    <li class="lead__item wow fadeIn">
                        <svg class="lead__svg lead__svg--competence" width="200" height="200">
                            <use xlink:href="img/sprite.svg#marketing"></use>
                        </svg>
                        <h3 class="lead__item-title">{{__('about.benefit.vol3')}}</h3>
                        <p class="lead__item-text">{{__('about.benefit.vol_desc3')}}</p>
                    </li>
                    <li class="lead__item wow fadeIn">
                        <svg class="lead__svg lead__svg--efficiency" width="200" height="200">
                            <use xlink:href="img/sprite.svg#sales"></use>
                        </svg>
                        <h3 class="lead__item-title">{{__('about.benefit.vol4')}}</h3>
                        <p class="lead__item-text">{{__('about.benefit.vol_desc4')}}</p>
                    </li>
                    <li class="lead__item wow fadeIn">
                        <svg class="lead__svg lead__svg--safety" width="200" height="200">
                            <use xlink:href="img/sprite.svg#engineers"></use>
                        </svg>
                        <h3 class="lead__item-title">{{__('about.benefit.vol5')}}</h3>
                        <p class="lead__item-text">{{__('about.benefit.vol_desc5')}}</p>
                    </li>
                </ul>
            </div>
        </section>

    @section('footer')
        <x-footer/>
        @endsection
</x-layout>
