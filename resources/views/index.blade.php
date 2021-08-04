<x-layout>
    @section('header')
        <x-header>
            <video autoplay muted loop id="myVideo" class="header__video" poster="{{asset('img/main-preview.jpg')}}">
                <source src="{{asset('img/videos/video_banner.mp4')}}" type="video/mp4">
                <source src="{{asset('img/videos/video_banner.webm')}}" type="video/webm">
                <source src="{{asset('img/videos/video_banner.ogv')}}" type="video/ogg">
            </video>
        </x-header>
    @endsection
		<section class="about-us">
			<div class="container-min">
				<ul class="advantages__list">
					<li class="advantages__item advantages__item--small">
						<span class="svg-container--develop wow fadeIn">
							<svg class="svg__develop" width="118" height="118">
								<use xlink:href="img/sprite.svg#develop_1"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="25+">00+</span>
							<span class="advantages__text">лет опыта</span>
						</p>
					</li>
					<li class="advantages__item advantages__item--small">
						<span class="svg-container--briefcase wow fadeIn">
							<svg class="svg__briefcase" width="132" height="99">
								<use xlink:href="img/sprite.svg#briefcase"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="50+">00+</span>
							<span class="advantages__text">брендов</span>
						</p>
					</li>
					<li class="advantages__item advantages__item--small">
						<span class="svg-container--worldwide wow fadeIn">
							<svg class="svg__worldwide" width="118" height="118">
								<use xlink:href="img/sprite.svg#worldwide"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="11">00</span>
							<span class="advantages__text">стран</span>
						</p>
					</li>
					<li class="advantages__item advantages__item--big">
						<span class="svg-container--handshake wow fadeIn">
							<svg class="svg__handshake" width="127" height="118">
								<use xlink:href="img/sprite.svg#handshake"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="1000+">0+</span>
							<span class="advantages__text">партнеров</span>
						</p>
					</li>
					<li class="advantages__item advantages__item--big">
						<span class="svg-container--employee wow fadeIn">
							<svg class="svg__employee" width="126" height="118">
								<use xlink:href="img/sprite.svg#employee"></use>
							</svg>
						</span>
						<p class="advantages__text-wrapper">
							<span class="advantages__numbers" data-calc="300+">0+</span>
							<span class="advantages__text">сотрудников</span>
						</p>
					</li>
				</ul>
			</div>
			<div class="about-us__wrapper ">
				<div class=" about-us__card card__blur wow fadeIn --svg__adras-after wow slideInRight">
					<h2 class="card__title about-us__card-title">
						<span class="card__title--small  about-us__card--small">несколько слов о</span>
						<span class="card__title--big">компании</span>
					</h2>
					<p class="card__text about-us__card-text--top ">Мы сплоченная команда профессионалов, которая
						развивает ИТ рынок и
						делает доступными ИТ-решения для Узбекистана. Мы гарантируем полную поддержку каждому
						Партнеру. </p>
					<p class="card__text about-us__card-text--bottom wow slideInRight " data-wow-delay="0.8s" >
						Наша команда объединяет специалистов с высшим профильным образованием и международной
						сертификацией, которые имеют огромный опыт работы в области ИТ и Телеком индустрии.
					</p>
				</div>
			</div>
		</section>
		<section class="vendors">
			<div class="section-title__wrapper --svg__adras-before wow slideInLeft">
				<h2 class="section-title__header">
					<span class="section-title--small">кто нам доверяет</span>
					<span class="section-title--big">вендоры</span>
				</h2>
				<p class="section-title__text">Партнерство с мировыми лидерами позволяет нам
					предлагать лучшие IT-решения на рынке
				</p>
			</div>


			<div class="container-min">
				<div class="vendors__wrapper">
					<ul class="vendors__list">
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--samsung_logo">
									<source srcset="img/logos/samsung_logo.webp">
									<img  src="img/logos/samsung_logo.png" alt="samsung_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--panasonic_logo">
									<source srcset="img/logos/panasonic_logo.webp">
									<img  src="img/logos/panasonic_logo.png" alt="panasonic_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--lenovo_logo">
									<source srcset="img/logos/lenovo_logo.webp">
									<img  src="img/logos/lenovo_logo.png" alt="lenovo_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--acer_logo">
									<source srcset="img/logos/acer_logo.webp">
									<img  src="img/logos/acer_logo.png" alt="acer_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--cisco_logo">
									<source srcset="img/logos/cisco_logo.webp">
									<img  src="img/logos/cisco_logo.png" alt="cisco_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--realme_logo">
									<source srcset="img/logos/realme_logo.webp">
									<img  src="img/logos/realme_logo.png" alt="realme_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--axis_logo">
									<source srcset="img/logos/axis_logo.webp">
									<img  src="img/logos/axis_logo.png" alt="axis_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--NEC_logo">
									<source srcset="img/logos/NEC_logo.webp">
									<img  src="img/logos/NEC_logo.png" alt="NEC_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--APC_logo">
									<source srcset="img/logos/APC_logo.webp">
									<img  src="img/logos/APC_logo.png" alt="APC_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--dell_logo">
									<source srcset="img/logos/dell_logo.webp">
									<img  src="img/logos/dell_logo.png" alt="dell_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--canon_logo">
									<source srcset="img/logos/canon_logo.webp">
									<img  src="img/logos/canon_logo.png" alt="canon_logo">
								</picture>
							</a>
						</li>
						<li class="vendors__item">
							<a href="about-vendor/about-vendor--canon.blade.php">
								<picture class="img--HP_logo">
									<source srcset="img/logos/HP_logo.webp">
									<img  src="img/logos/HP_logo.png" alt="HP_logo">
								</picture>
							</a>
						</li>
					</ul>
					<a href="vendors.blade.php" class="vendors__link link --svg__link-icon-before"> Все вендоры</a>

				</div>
			</div>
		</section>
		<section class="news">
			<div class="section-title__wrapper --svg__adras-before wow slideInLeft">
				<h2 class="section-title__header">
					<span class="section-title--small">Будьте в курсе</span>
					<span class="section-title--big">Новости</span>
				</h2>
				<p class="section-title__text">В этом разделе вы найдете полезные статьи, новости,
					а также акции компании</p>
			</div>

			<div class="container-min">
				<ul class="news__list">

					<li class="news__item news__item-1 wow">
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
							<a href="" class="news__link link --svg__link-icon-before">Читать</a>
						</div>
					</li>

					<li class="news__item news__item-2 wow ">
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
				</ul>
			</div>
		</section>

    @section('footer')
        <x-footer></x-footer>
    @endsection
</x-layout>
