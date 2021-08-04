<x-layout>
    @section('header')
        <x-header/>
    @endsection
        <section class="vendors">
            <div class="container-min">
                <div class="vendors__wrapper">
                    <ul class="filter-list">
                        <li class="filter-item filter-item--active">
                            <button data-listToggle="solution" class="filter-btn">Solution division</button>
                        </li>
                        <li class="filter-item">
                            <button  data-listToggle="volume" class="filter-btn">Volume division</button>
                        </li>
                        <li class="filter-item">
                            <button  data-listToggle="mobile" class="filter-btn">Mobile division</button>
                        </li>
                    </ul>
                    <ul class="vendors__list" data-filteredlist data-list="solution">
                        <li class="vendors__item">
                            <a href="about-vendor--hpEnterprise.html">
                                <picture class="img--hpEnterprise_logo">
                                    <source srcset="img/logos/hpEnterprise_logo.webp">
                                    <img  src="img/logos/hpEnterprise_logo.png" alt="samsung_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--cisco')}}">
                                <picture class="img--cisco_logo">
                                    <source srcset="img/logos/cisco_logo.webp">
                                    <img  src="img/logos/cisco_logo.png" alt="cisco_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="#">
                                <picture class="img--dell_logo">
                                    <source srcset="img/logos/dell_logo.webp">
                                    <img  src="img/logos/dell_logo.png" alt="dell_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="#">
                                <picture class="img--huawei_logo">
                                    <source srcset="img/logos/huawei_logo.webp">
                                    <img  src="img/logos/huawei_logo.png"
                                          alt="huawei_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--samsung')}}">
                                <picture class="img--samsung_logo">
                                    <source srcset="img/logos/samsung_logo.webp">
                                    <img  src="img/logos/samsung_logo.png"
                                          alt="samsung_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--apc.html">
                                <picture class="img--APC_logo">
                                    <source srcset="img/logos/APC_logo.webp">
                                    <img  src="img/logos/APC_logo.png" alt="APC_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--icewarp.html">
                                <picture class="img--icewarp_logo">
                                    <source srcset="img/logos/icewarp_logo.webp">
                                    <img  src="img/logos/icewarp_logo.png"
                                          alt="icewarp_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--nec')}}">
                                <picture class="img--NEC_logo">
                                    <source srcset="img/logos/NEC_logo.webp">
                                    <img  src="img/logos/NEC_logo.png" alt="NEC_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--check_point.html">
                                <picture class="img--check_point_logo">
                                    <source srcset="img/logos/check_point_logo.webp">
                                    <img  src="img/logos/check_point_logo.png"
                                          alt="check point clogo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--poly.html">
                                <picture class="img--poly_logo">
                                    <source srcset="img/logos/poly_logo.webp">
                                    <img  src="img/logos/poly_logo.png" alt="poly_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--citrix.html">
                                <picture class="img--citrix_logo">
                                    <source srcset="img/logos/citrix_logo.webp">
                                    <img  src="img/logos/citrix_logo.png" alt="citrix_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--extreme.html">
                                <picture class="img--extreme_logo">
                                    <source srcset="img/logos/extreme_logo.webp">
                                    <img  src="img/logos/extreme_logo.png"
                                          alt="extreme_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--rad.html">
                                <picture class="img--RAD_logo">
                                    <source srcset="img/logos/RAD_logo.webp">
                                    <img  src="img/logos/RAD_logo.png" alt="RAD_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--rittal.html">
                                <picture class="img--rittal_logo">
                                    <source srcset="img/logos/rittal_logo.webp">
                                    <img  src="img/logos/rittal_logo.png"
                                          alt="rittal_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor/about-vendor--panasonic.blade.php">
                                <picture class="img--panasonic_logo">
                                    <source srcset="img/logos/panasonic_logo.webp">
                                    <img  src="img/logos/panasonic_logo.png"
                                          alt="panasonic_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--macroscop.html">
                                <picture class="img--macroscop_logo">
                                    <source srcset="img/logos/macroscop_logo.webp">
                                    <img  src="img/logos/macroscop_logo.png"
                                          alt="macroscop_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--axis')}}">
                                <picture class="img--axis_logo">
                                    <source srcset="img/logos/axis_logo.webp">
                                    <img  src="img/logos/axis_logo.png" alt="axis_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--sony.html">
                                <picture class="img--sony_logo">
                                    <source srcset="img/logos/sony_logo.webp">
                                    <img  src="img/logos/sony_logo.png" alt="sony_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--vertiv.html">
                                <picture class="img--vertiv_logo">
                                    <source srcset="img/logos/vertiv_logo.webp">
                                    <img  src="img/logos/vertiv_logo.png" alt="vertiv_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--emerson.html">
                                <picture class="img--emerson_logo">
                                    <source srcset="img/logos/emerson_logo.webp">
                                    <img  src="img/logos/emerson_logo.png" alt="emerson_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--zpas.html">
                                <picture class="img--zpas_logo">
                                    <source srcset="img/logos/zpas_logo.webp">
                                    <img  src="img/logos/zpas_logo.png" alt="zpas_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--trippLite.html">
                                <picture class="img--trippLite_logo">
                                    <source srcset="img/logos/trippLite_logo.webp">
                                    <img  src="img/logos/trippLite_logo.png" alt="trippLite_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--datapath.html">
                                <picture class="img--datapath_logo">
                                    <source srcset="img/logos/datapath_logo.webp">
                                    <img  src="img/logos/datapath_logo.png" alt="datapath_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--optoma.html">
                                <picture class="img--optoma_logo">
                                    <source srcset="img/logos/optoma_logo.webp">
                                    <img  src="img/logos/optoma_logo.png" alt="optoma_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--eyevis.html">
                                <picture class="img--eyevis_logo">
                                    <source srcset="img/logos/eyevis_logo.webp">
                                    <img  src="img/logos/eyevis_logo.png" alt="eyevis_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--kramer.html">
                                <picture class="img--kramer_logo">
                                    <source srcset="img/logos/kramer_logo.webp">
                                    <img  src="img/logos/kramer_logo.png" alt="eyevis_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--solidworks.html">
                                <picture class="img--solidworks_logo">
                                    <source srcset="img/logos/solidworks_logo.webp">
                                    <img  src="img/logos/solidworks_logo.png" alt="solidworks_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--wallix.html">
                                <picture class="img--wallix_logo">
                                    <source srcset="img/logos/wallix_logo.webp">
                                    <img  src="img/logos/wallix_logo.png" alt="wallix_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--microsoft.html">
                                <picture class="img--microsoft_logo">
                                    <source srcset="img/logos/microsoft_logo.webp">
                                    <img  src="img/logos/microsoft_logo.png" alt="microsoft_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--audiocodes.html">
                                <picture class="img--audiocodes_logo">
                                    <source srcset="img/logos/audiocodes_logo.webp">
                                    <img  src="img/logos/audiocodes_logo.png" alt="audiocodes_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--dahua.html">
                                <picture class="img--dahua_logo">
                                    <source srcset="img/logos/dahua_logo.webp">
                                    <img  src="img/logos/dahua_logo.png" alt="dahua_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--videotec.html">
                                <picture class="img--videotec_logo">
                                    <source srcset="img/logos/videotec_logo.webp">
                                    <img  src="img/logos/videotec_logo.png" alt="videotec_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--engenius.html">
                                <picture class="img--engenius_logo">
                                    <source srcset="img/logos/engenius_logo.webp">
                                    <img  src="img/logos/engenius_logo.png" alt="engenius_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--planet.html">
                                <picture class="img--planet_logo">
                                    <source srcset="img/logos/planet_logo.webp">
                                    <img  src="img/logos/planet_logo.png" alt="planet_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--dlink.html">
                                <picture class="img--dlink_logo">
                                    <source srcset="img/logos/dlink_logo.webp">
                                    <img  src="img/logos/dlink_logo.png" alt="dlink_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--i3technologies.html">
                                <picture class="img--i3technologies_logo">
                                    <source srcset="img/logos/i3technologies_logo.webp">
                                    <img  src="img/logos/i3technologies_logo.png" alt="i3technologies_logo">
                                </picture>
                            </a>
                        </li>
                    </ul>
                    <ul class="vendors__list list--hidden" data-filteredlist data-list="volume" >
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--samsung')}}">
                                <picture class="img--samsung_logo">
                                    <source srcset="img/logos/samsung_logo.webp">
                                    <img  src="img/logos/samsung_logo.png" alt="samsung_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--panasonic')}}">
                                <picture class="img--panasonic_logo">
                                    <source srcset="img/logos/panasonic_logo.webp">
                                    <img  src="img/logos/panasonic_logo.png"
                                          alt="panasonic_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--lenovo')}}">
                                <picture class="img--lenovo_logo">
                                    <source srcset="img/logos/lenovo_logo.webp">
                                    <img  src="img/logos/lenovo_logo.png" alt="lenovo_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--acer')}}">
                                <picture class="img--acer_logo">
                                    <source srcset="img/logos/acer_logo.webp">
                                    <img  src="img/logos/acer_logo.png" alt="acer_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--hp.html">
                                <picture class="img--HP_logo">
                                    <source srcset="img/logos/HP_logo.webp">
                                    <img  src="img/logos/HP_logo.png" alt="HP_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="{{route('about-vendor.about-vendor--canon')}}">
                                <picture class="img--canon_logo">
                                    <source srcset="img/logos/canon_logo.webp">
                                    <img  src="img/logos/canon_logo.png" alt="canon_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--poly.html">
                                <picture class="img--poly_logo">
                                    <source srcset="img/logos/poly_logo.webp">
                                    <img  src="img/logos/poly_logo.png" alt="poly_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--jbl.html">
                                <picture class="img--jbl_logo">
                                    <source srcset="img/logos/jbl_logo.webp">
                                    <img  src="img/logos/jbl_logo.png"
                                          alt="jbl_logo"></picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--sennheiser.html">
                                <picture class="img--sennheiser_logo">
                                    <source srcset="img/logos/sennheiser_logo.webp">
                                    <img  src="img/logos/sennheiser_logo.png" alt="sennheiser_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--nikon.html">
                                <picture class="img--nikon_logo">
                                    <source srcset="img/logos/nikon_logo.webp">
                                    <img  src="img/logos/nikon_logo.png" alt="nikon_logo"></picture>
                            </a>
                        </li>
                    </ul>
                    <ul class="vendors__list list--hidden" data-filteredlist data-list="mobile" >
                        <li class="vendors__item">
                            <a href="about-vendor/about-vendor--realme.blade.php">
                                <picture class="img--realme_logo">
                                    <source srcset="img/logos/realme_logo.webp">
                                    <img src="img/logos/realme_logo.png" alt="realme_logo">
                                </picture>
                            </a>
                        </li>
                        <li class="vendors__item">
                            <a href="about-vendor--oppo.html">
                                <picture class="img--oppo_logo">
                                    <source srcset="img/logos/oppo_logo.webp">
                                    <img src="img/logos/oppo_logo.png" alt="oppo_logo">
                                </picture>
                            </a>
                        </li>
                    </ul>
                    <a href="#ven" class="vendors__link link --svg__link-icon-before"> Все вендоры</a>

                </div>
            </div>
        </section>
    @section('footer')
        <x-footer/>
        @endsection
</x-layout>
