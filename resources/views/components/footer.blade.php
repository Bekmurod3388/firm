<footer class="footer">
    <div class="section-title__wrapper --svg__adras-before wow slideInLeft">
        <h2 class="section-title__header">
            <span class="section-title--small">Свяжитесь с нами</span>
            <span class="section-title--big">Контакты</span>
        </h2>
        <p class="section-title__text">Мы будем рады ответить на любые Ваши вопросы и обсудить
            возможности сотрудничества. Для того, чтобы начать работать
            с нами, заполните форму ниже, и наш Менеджер свяжется с Вами.</p>
    </div>

    <div class="footer__wrapper ">
        <div class="container-min">
            <div class="card__blur form">
                <p class="form__title">Оставить заявку</p>
                <form action="{{route('messages.store')}}" method="POST",  accept-charset="UTF-8">
                    @csrf
                    <ul class="form__list">
                        <li class="form__item"><input type="text" class="form__input" name="name" placeholder="Ф.И.О"></li>
                        <li class="form__item"><input type="tel" class="form__input" name="phone" placeholder="+998 (__) ___-__-__"></li>
                        <li class="form__item"><input type="email" class="form__input" name="email" placeholder="Email"></li>
                    </ul>
                    <input type="submit" class="form__submit" value="Отправить">
                </form>
            </div>

            <div class="footer__info">
                <ul class="footer__info-list">
                    <li class="footer__info-item">
                        <p  class="footer__info-title">Адрес</p>
                        <p  class="footer__info-text">Ташкент, Фаргона йули, 15</p>
                    </li>
                    <li class="footer__info-item">
                        <p class="footer__info-title">Телефон</p>
                        <p class="footer__info-text">+998 (78) 148 53 00</p>
                    </li>
                    <li class="footer__info-item">
                        <p class="footer__info-title">Email</p>
                        <p class="footer__info-text">info@ca-dc.uz</p>
                    </li>
                </ul>

                <p>© 2021 <br> Central Asia Distribution</p>
            </div>
        </div>
    </div>
</footer>
