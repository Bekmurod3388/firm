<x-layout>
    @section('header')
    <x-header/>
    @endsection

    <div class="container-content">
        <section class="news-item">
            <div class="news-item__wrapper">
                <h2 class="news-item__title">{{ $post->{'header_'.app()->getLocale()} }}</h2>
                <div class="news-item__photo-wrapper">
                    <img  class="news-item__photo" src="{{asset("/storage/posts/".$post->img)}}" alt="Главная картина новости">
                </div>

                <div class=" news-item__card">
                    <h2 class="news-item__title-second">{{ $post->{'header2_'.app()->getLocale()} }}</h2>
                    <p class="card__text news-item__card-text--top  ">{{ $post->{'description_'.app()->getLocale()} }}</p>
                </div>
            </div>
        </section>
    </div>

    @section('footer')
    <x-footer/>
    @endsection
</x-layout>



