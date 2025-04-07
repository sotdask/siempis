@extends('layout')
@section('content')
@section('body-class', 'office white-theme')
<div class="office">
    <section class="container office-info">
        <div class="row">
            <div class="col-12 col-lg-6 html-content">
                <div class="wrapper">
                    <h1 data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" class="font-heading2">
                        Ιατρείο <br> Δρ. Θωμά Σιέμπη
                    </h1>
                    <p data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                        Probabo, inquit, modo ista sis aequitate, quam ostendis sed ipsius honestatis decore laudandis,
                        id
                        totum evertitur eo est cur verear, ne ad eam non quo minus id, de commodis suis cogitarent? at
                        id
                        totum evertitur eo est et dolorum fuga et benivole collegisti, nec in.
                    </p>
                </div>
                <div class="linkWrapper">
                    <a href="/contact" class="main-button rounded-5" title="Επικοινωνία">
                        Κλείστε Ραντεβού
                    </a>
                    <a href="tel:2310380118" title="Τηλέφωνο" class="contact-link">
                        Ή επικοινώνησε μαζί μας
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <h1 class="font-heading2">
                    Ιατρείο <br> Δρ. Θωμά Σιέμπη
                </h1>
                <div class="swiper officeSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/office.png" alt="office" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/doctor-swiper.png" alt="doc" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="container video">
        <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/watch?v=_zHPsmXCjB0" title="YouTube video" allowfullscreen></iframe>
        </div>
    </section>
    <section class="location container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h2 class="font-heading2">
                        Πληροφορίες <br> Ιατρείου
                    </h2>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <div class="wrapper">
                        <img src="/images/pin-2.svg" alt="pin">
                        <a href="#" title="Τοποθεσία">
                            Κλινική Άγιος Λουκάς, Πανόραμα 55236
                        </a>
                    </div>
                    <div class="wrapper">
                        <img src="/images/tel-2.svg" alt="pin">
                        <a href="tel:2310380118" title="Τηλέφωνο">
                            +30 2310 380 118
                        </a>
                    </div>
                    <div class="wrapper">
                        <img src="/images/email.svg" alt="email">
                        <a href="mailto:drsiempisthomas@gmail.com" title="Email">
                            drsiempisthomas@gmail.com
                        </a>
                    </div>
                    <div class="wrapper">
                        <img src="/images/calendar.svg" alt="calendar">
                        <span>
                            Δευτέρα - Παρασκευή, 9 ΠΜ - 6 ΜΜ
                        </span>
                    </div>
                </div>
            </div>
            <div class="map-wrapper d-flex justify-content-center">
                <img src="images/map.png" alt="map" class="img-fluid">
            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var swiper1 = new Swiper(".officeSwiper", {
                modules: [
                    SwiperModules.Pagination,
                    SwiperModules.EffectFade,
                ],
                spaceBetween: 30,
                effect: "fade",
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        });
    </script>
@endpush
@endsection
