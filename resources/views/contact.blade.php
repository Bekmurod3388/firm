<x-layout>
@section('header')
    <x-header/>
    @endsection
		<section class="contacts">
			<div class="container-min">
				<ul class="contacts__info-list">
					<li class="contacts__info-item">
						<p class="contacts__info-title">Адрес</p>
						<p class="contacts__info-text">Ташкент, Фаргона йули, 15</p>
					</li>
					<li class="contacts__info-item">
						<p class="contacts__info-title">Телефон</p>
						<p class="contacts__info-text">+998 (78) 148 53 00</p>
					</li>
					<li class="contacts__info-item">
						<p class="contacts__info-title">Email</p>
						<p class="contacts__info-text">info@ca-dc.uz</p>
					</li>
				</ul>

			</div>

			<div class="contacts__map-container">
				<iframe class="contacts__map"
						src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab34f4512b25c381e0326cb81ce92bbad191c37c30ead416e800c5c34c9c637ac&amp;source=constructor"
						width="1200" height="600" frameborder="0">
				</iframe>
			</div>

			<div class="container-min">
				<p class="contacts__author">© 2021 <br> Central Asia Distribution</p>
			</div>

		</section>
</x-layout>
