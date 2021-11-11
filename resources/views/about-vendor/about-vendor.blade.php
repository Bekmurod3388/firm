<x-layout>
    @section('header')
        <x-header/>
    @endsection

        <div class="container-content">
            <section class="vendor-info about-vendor-page--acer">
                <div class="vendor-info__wrapper">
                    <div class=" vendor-info__card card__blur">
                        <a href="link of vendor">
                        <img class="vendor-info__photo" src="{{asset("storage/".$vendor->img)}}"
                             alt="acer">
                        </a>
                        <p class="card__text vendor-info__card-text ">{{$vendor->{'text_'.app()->getLocale()} }}</p>
                    </div>
                </div>
            </section>
        </div>
        <section class="links">
            <div class="container-content">


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
                    <span class="section-title--small">{{__('vendor.see')}}</span>
                    <span class="section-title--big">{{__('vendor.video')}}</span>
                </h2>
                <p class="section-title__text">{{__('vendor.advertising')}}</p>
            </div>
            <div class="container-content">
                <ul class="video__list">

                @if(!empty($vendor_films))
                        @foreach($vendor_films as $vendor_film)
                        <li class="video__item">
                            <iframe width="560" height="315" src="{{$vendor_film->path}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          <time class="video__time">{{$vendor_film->created_at->format('Y-m-d')}}</time>
                            <h3 class="video__title">
                            {{$vendor_film->{'header_'.app()->getLocale()} }} </h3>
                            <p class="video__text">{{$vendor_film->{'text_'.app()->getLocale()} }}</p>
                        </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </section>

    @section('footer')
        <x-footer/>
        @endsection
</x-layout>
