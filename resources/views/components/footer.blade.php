<footer class="footer">
    <div class="section-title__wrapper svg__adras-before wow slideInLeft">
        <h2 class="section-title__header">
            <span class="section-title--small">{{__('index.contact.header')}}</span>
            <span class="section-title--big">{{__('index.contact.header2')}}</span>
        </h2>
        <p class="section-title__text">{{__('index.contact.desc')}}</p>
    </div>

    <div class="footer__wrapper ">
        <div class="container-min">
            <div class="card__blur form">
                <p class="form__title">{{__('index.contact.form')}}</p>
                <form action="{{route('admin.messages.store')}}" method="POST",  accept-charset="UTF-8">
                    @csrf
                    <ul class="form__list">
                        <li class="form__item"><input type="text" class="form__input" name="name" placeholder="{{__('index.contact.name')}}"></li>
                        <li class="form__item"><input type="tel" class="form__input" name="phone" placeholder="+998 (__) ___-__-__"></li>
                        <li class="form__item"><input type="email" class="form__input" name="email" placeholder="Email"></li>
                    </ul>
                    <input type="submit" class="form__submit" value="{{__('index.contact.send')}}">
                </form>
            </div>
            @php
            $contact = \App\Models\Contact::first();
            @endphp
            <div class="footer__info">
                <ul class="footer__info-list">
                    <li class="footer__info-item">
                        <p  class="footer__info-title">{{__('index.contact.address')}}</p>
                        <p  class="footer__info-text">{{$contact->{'address_'.app()->getLocale()} }}</p>
                    </li>
                    <li class="footer__info-item">
                        <p class="footer__info-title">{{__('index.contact.phone')}}</p>
                        <p class="footer__info-text">{{$contact->phone}}</p>
                    </li>
                    <li class="footer__info-item">
                        <p class="footer__info-title">Email</p>
                        <p class="footer__info-text">{{$contact->email}}</p>
                    </li>
                </ul>

                <p>© {{now()->year }} <br> Central Asia Distribution</p>
            </div>
        </div>
    </div>
</footer>
