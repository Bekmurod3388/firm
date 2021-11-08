<x-layout>
    <x-header></x-header>
		<section class="contacts">
			<div class="container-min">
				<ul class="contacts__info-list">
					<li class="contacts__info-item">
                        @php
                            $contact = \App\Models\Contact::first();
                        @endphp
						<p class="contacts__info-title">{{__('index.contact.address')}}</p>
						<p class="contacts__info-text">{{$contact->{'address_'.app()->getLocale()} }}</p>
					</li>
					<li class="contacts__info-item">
						<p class="contacts__info-title">{{__('index.contact.phone')}}</p>
						<p class="contacts__info-text">{{$contact->phone}}</p>
					</li>
					<li class="contacts__info-item">
						<p class="contacts__info-title">Email</p>
						<p class="contacts__info-text">{{$contact->email}}</p>
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
				<p class="contacts__author">© {{now()->year}} <br> Central Asia Distribution</p>
			</div>

		</section>
</x-layout>
