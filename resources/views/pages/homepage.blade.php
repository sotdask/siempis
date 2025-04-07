@extends('layout')
@section('content')
    <div class="homepage">
        <section class="container introduction">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                    <div class="wrapper">
                        <h1 class="font-heading2">Εξειδικευμένη χειρουργική Γλαυκώματος, Καταρράκτη και Προσθίων μορίων</h1>
                        <ul>
                            <li>
                                Δρ. Θωμάς Σιέμπης, MD, FRCOphth, FEBO
                            </li>
                            <li>
                                Glaucoma and Advanced Anterior Surgery Fellowship, University of Toronto
                            </li>
                            <li>
                                Επίτιμος Λέκτορας Πανεπιστημίου της Γλασκώβης
                            </li>
                        </ul>
                        <div class="linkWrapper">
                            <a href="/contact" title="Επικοινωνία" class="main-button rounded-5" title="Επικοινωνία">
                                Κλείστε Ραντεβού
                            </a>
                            <a href="tel:2310309049" title="Τηλέφωνο" class="contact-link">
                                Ή επικοινώνησε μαζί μας
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 offset-md-1 offset-xl-0">
                    <img data-aos="fade-right" data-aos-once="true" data-aos-duration="1000" src="/images/doctor.png"
                        alt="doctor" class="img-fluid">
                </div>
            </div>
        </section>
        <section class="information-block container html-content">
            <div class="wrapper">
                <p>
                    Ο Δρ .Θωμάς Σιέμπης MD, FRCOphth, FEBO είναι εξειδικευμένος Χειρουργός Γλαυκώματος, Καταρράκτη και
                    Πρόσθιων Μορίων με ιδιαίτερο ενδιαφέρον στην Ελάχιστα Επεμβατική Χειρουργική Γλαυκώματος. Ειδικεύθηκε
                    στην Οφθαλμολογία εξ’ολοκλήρου στο Ηνωμένο Βασίλειο και εν συνεχεία πραγματοποίησε τη χειρουργική του
                    μετεκπαίδευση σε δύο από τα πιο γνωστά οφθαλμολογικά κέντρα της Βόρειου Αμερικής (Prism Eye Institute
                    και Donald K. Johnson Eye Institute του Πανεπιστημίου του Τορόντο) δίπλα στον παγκοσμίου φήμης καθηγητή
                    Dr. Ike Ahmed. Αρχή του είναι η εξατομικευμένη και ολιστική φροντίδα κάθε ασθενούς με επαγγελματισμό,
                    ειλικρίνεια και ακρίβεια στη διάγνωση και θεραπεία, Δέχεται ασθενείς κατόπιν ραντεβού σε έναν άρτια
                    εξοπλισμένο χώρο στο κέντρο της Θεσσαλονίκης και στην Κλινική Άγιος Λουκάς."
                </p>
            </div>
        </section>
        <section class="profession container">
            <h2 data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" class="font-heading3">Εξειδίκευση</h2>
            <div class="cardWrapper">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="profession-card">
                            <div class="card-image">
                                <a href="/glaykoma" title="Γλαύκωμα">
                                    <img src="/images/glaykoma.png" alt="glaykoma" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="/glaykoma" title="Γλαύκωμα" class="rounded-5">
                                    <span>
                                        Γλαύκωμα
                                    </span>
                                    <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="profession-card">
                            <div class="card-image">
                                <a href="#" title="Καταρράκτης">
                                    <img src="/images/katarraktis.png" alt="katarraktis" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#" title="Καταρράκτης" class="rounded-5">
                                    <span>
                                        Καταρράκτης
                                    </span>
                                    <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="profession-card">
                            <div class="card-image">
                                <a href="#" title="Πρόσθια Μόρια">
                                    <img src="/images/moria.png" alt="moria" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="#" title="Πρόσθια Μόρια" class="rounded-5">
                                    <span>
                                        Πρόσθια Μόρια
                                    </span>
                                    <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about container position-relative d-flex justify-content-center">
            {{-- <div class="absoluteImageWrapper">
                <img src="/images/background-icon.svg" alt="background-logo" class="img-fluid">
            </div> --}}
            <div class="row w-100">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="swiper doctorProfileSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/images/doctor-swiper.png" alt="doc" class="img-fluid">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/doctor.png" alt="doc" class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-lg-5 offset-xl-1">
                    <h2 class="font-heading3">Δρ. Σιέμπης Θωμάς</h2>
                    <span>Χειρουργός Οφθαλμίατρος</span>
                    <ul>
                        <li>
                            Μετεκπαίδευση στο Γλαύκωμα και Εξειδικευμένα Πρόσθια Μόρια (GAASS Fellowship) στα κέντρα Prism
                            Eye Institute και Donald J., Credit Valley Hospital και Johnson Eye Institute του Πανεπιστημίου
                            του Τορόντο.
                        </li>
                        <li>
                            Εκπαιδευθείς εξολοκλήρου στο Ηνωμένο Βασίλειο με Εθνικό νούμερο ειδίκευσης (NTN) και απόκτηση
                            τίτλου ειδικότητας (CCT).
                        </li>
                        <li>
                            Επιστημονικός υπεύθυνος Ιατρείου Γλαυκώματος και Πρόσθιων Μορίων, Κλινική Άγιος Λουκάς,
                            Θεσσαλονίκη.
                        </li>
                        <li>
                            τ. Διευθυντής Οφθαλμολογικού τμήματος, King’s College Hospital NHS Foundation Trust, London.
                        </li>
                        <li>
                            Eπίτιμος Λέκτορας Κλινικής Ιατρικής του Πανεπιστημίου της Γλασκώβης.
                        </li>
                        <li>
                            Fellow of Royal College of Ophthalmologists και European Board of Ophthalmology.
                        </li>
                    </ul>
                    <a href="/about" class="main-button rounded-5" title="Επικοινωνία">
                        Περισσότερα
                    </a>
                </div>
            </div>
        </section>
        <section class="container services">
            <h2 data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" class="font-heading3 text-center">
                Υπηρεσίες</h2>
            <div class="mobileContentWrapper d-block d-sm-none">
                <ul class="flex-column align-items-center">
                    <li class="col-12 p-3">
                        <a href="#" title="Γλαύκωμα">
                            Εξειδικευμένος έλεγχος και θεραπεία γλαυκώματος
                        </a>
                    </li>
                    <li class="col-12 p-3 mt-3">
                        <a href="#" title="Καταρράκτης">
                            Διάγνωση και χειρουργική θεραπεία καταρράκτη
                        </a>
                    </li>
                    <li class="col-12 p-3 mt-3">
                        <a href="#" title="Πρόσθια Μόρια">
                            Ειδικές παθήσεις πρόσθιων μορίων
                        </a>
                    </li>
                    <li class="col-12 p-3 mt-3">
                        <a href="#" title="Γενικός Έλεγχος">
                            Γενικός οφθαλμολογικός έλεγχος
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contentMdWrapper d-none d-sm-block">
                <ul class="flex-column flex-lg-row align-items-lg-start align-items-center">
                    <li class="col-12 col-md-8 col-lg-3 mt-3 mt-lg-0 active" data-slide="0">
                        Εξειδικευμένος έλεγχος και θεραπεία γλαυκώματος
                    </li>
                    <li class="col-12 col-md-8 col-lg-3 mt-3 mt-lg-0" data-slide="1">
                        Διάγνωση και χειρουργική θεραπεία καταρράκτη
                    </li>
                    <li class="col-12 col-md-8 col-lg-3 mt-3 mt-lg-0" data-slide="2">
                        Ειδικές παθήσεις πρόσθιων μορίων
                    </li>
                    <li class="col-12 col-md-8 col-lg-3 mt-3 mt-lg-0" data-slide="3">
                        Γενικός οφθαλμολογικός έλεγχος
                    </li>
                </ul>
                <div class="content-wrapper mt-4">
                    <div class="swiper servicesSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-7 col-lg-7 col-xl-8">
                                        <h3 class="font-heading4">
                                            Εξειδικευμένος <br><span>έλεγχος γλαυκώματος</span>
                                        </h3>
                                        <ol>
                                            <li>
                                                Διαγνωστικός έλεγχος για την ανίχνευση Γλαυκωματικής νόσου.
                                            </li>
                                            <li>
                                                Τακτική παρακολούθηση και θεραπεία όλων των τύπων γλαυκώματος.
                                            </li>
                                            <li>
                                                Laser Τραμπεκουλοπλαστική (SLT) και Ιριδοτομή (YAG).
                                            </li>
                                            <li>
                                                Ελάχιστα επεμβατική χειρουργική Γλαυκώματος (Microinvasive Glaucoma Surgery)
                                            </li>
                                            <li>
                                                Αντιγλαυκωματικές επεμβάσεις: Τραμπεκουλεκτομής και με χρήση συσκευών
                                                παροχέτευσης.
                                            </li>
                                        </ol>
                                        <a href="/glaykoma" title="Γλαύκωμα">
                                            <img src="/images/arrow.svg" alt="arrow">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1">
                                        <img src="/images/glaykoma.svg" alt="glaykoma" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-7 col-lg-7 col-xl-8">
                                        <h3 class="font-heading4">
                                            Διάγνωση και χειρουργική<span> θεραπεία καταρράκτη</span>
                                        </h3>
                                        <ol>
                                            <li>
                                                Μονοεστιακοί ενδοφακοί. </li>
                                            <li>
                                                Τορικοί Ενδοφακοί για τη διόρθωση αστιγματισμού. </li>
                                            <li>
                                                Laser Τραμπεκουλοπλαστική (SLT) και Ιριδοτομή (YAG).
                                            </li>
                                            <li>
                                                Premium Ενδοφακοί (Αυξημένου Βάθους Εστίασης -EDOF και Πολυεστιακοί) για την
                                                αντιμετώπιση της πρεσβυωπίας. </li>
                                            <li>
                                                Laser Οπίσθια Καψουλοτομη (YAG) για θόλωση οπίσθιου περιφακίου. </li>
                                        </ol>
                                        <a href="#" title="Καταρράκτης">
                                            <img src="/images/arrow.svg" alt="arrow">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1">
                                        <img src="/images/katarraktis.svg" alt="katarraktis" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-7 col-lg-7 col-xl-8">
                                        <h3 class="font-heading4">
                                            Ειδικές παθήσεις <br><span>πρόσθιων μορίων</span>
                                        </h3>
                                        <ol>
                                            <li>
                                                Χειρουργική αντιμετώπιση επιπλεγμένων περιστατικών καταρράκτη. </li>
                                            <li>
                                                Αντιμετώπιση Παρεκτοπίσεων ενδοφακων. </li>
                                            <li>
                                                Αντικατάσταση Ενδοφακών. </li>
                                            <li>
                                                Τοποθέτηση Ενδοφακών σε περιπτώσεις Αφακίας. </li>
                                            <li>
                                                Αντιμετώπιση παθήσεων της Ίριδας (τραύμα, έλλειμα) με μεθόδους
                                                ιριδοπλαστικής.
                                            </li>
                                        </ol>
                                        <a href="#" title="Πρόσθια Μόρια">
                                            <img src="/images/arrow.svg" alt="arrow">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1">
                                        <img src="/images/moria.svg" alt="moria" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-7 col-lg-7 col-xl-8">
                                        <h3 class="font-heading4">
                                            Γενικός <br><span>οφθαλμολογικός έλεγχος</span>
                                        </h3>
                                        <ol>
                                            <li>
                                                Επείγοντα οφθαλμολογικά περιστατικά </li>
                                            <li>
                                                Οφθαλμολογικό Check up. </li>
                                            <li>
                                                Μέτρηση διαθλαστικού σφάλματος και συνταγογράφηση γυαλιών ή φακών επαφής.
                                            </li>
                                            <li>
                                                Διάγνωση και θεραπεία βλεφαρίτιδας και ξηροφθαλμίας. </li>
                                            <li>
                                                Διάγνωση παθήσεων του κερατοειδούς, αφαίρεση ξένων σωμάτων του κερατοειδούς.
                                            </li>
                                        </ol>
                                        <a href="#" title="Γενικός οφθαλμολογικός Έλεγχος">
                                            <img src="/images/arrow.svg" alt="arrow">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1">
                                        <img src="/images/check-up.svg" alt="check-up" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <a href="/services" class="main-button rounded-5" title="Επικοινωνία">
                    Όλες οι υπηρεσίες
                </a>
            </div>
        </section>
        <section class="container video">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/watch?v=_zHPsmXCjB0" title="YouTube video" allowfullscreen></iframe>
            </div>
        </section>
        @include('partials.contact-content');
    </div>
    @push('scripts')
        <script>
            window.addEventListener('DOMContentLoaded', function() {
                var swiper1 = new Swiper(".doctorProfileSwiper", {
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
                var swiper2 = new Swiper(".servicesSwiper", {
                    modules: [
                        SwiperModules.Pagination,
                    ],
                    allowTouchMove: false,
                    on: {
                        slideChange: function() {
                            updateActiveNav(swiper2.activeIndex);
                        },
                    },
                });
                document.querySelectorAll(".services li").forEach((item) => {
                    item.addEventListener("click", function() {
                        const index = parseInt(this.getAttribute("data-slide"));
                        swiper2.slideTo(index);
                    });
                });
                const items = document.querySelectorAll(".contentMdWrapper ul li");

                items.forEach(item => {
                    item.addEventListener("click", function() {
                        items.forEach(li => li.classList.remove("active"));
                        this.classList.add("active");
                    });
                });
            });
        </script>
    @endpush
@endsection
