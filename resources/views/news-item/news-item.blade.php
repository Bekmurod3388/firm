<x-layout>
    @section('header')
    <x-header/>
    @endsection

    <section class="news-item">
        <div class="news-item__wrapper" style="background-image:url('/storage/posts/{{$post->img}}');">
            <div class=" news-item__card card__blur">
                <time class="news-item__time">{{$post->created_at}}</time>
                <h2 class="card__title news-item__card-title">
                    <span class="">{{ $post->{'header_'.app()->getLocale()} }}</span>
                    <span class="">{{ $post->{'header2_'.app()->getLocale()} }}</span>
                </h2>
                <p class="card__text news-item__card-text--top  ">{{ $post->{'description_'.app()->getLocale()} }}</p>
            </div>
        </div>
    </section>
    @section('footer')
    <x-footer/>
    @endsection
</x-layout>



