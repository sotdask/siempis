@extends('layout')
@section('content')
@section('body-class', 'services white-theme')
<div class="services">
    <section class="container services-info">
        <h1 data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" class="font-heading1 text-center">Υπηρεσίες
        </h1>
        <div class="content-wrapper">
            <div class="services-card">
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
                        <a href="/glaykoma" title="Γλαύκωμα" class="rounded-5 d-none d-md-flex">
                            <span>
                                Γλαύκωμα
                            </span>
                            <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1">
                        <img src="/images/glaykoma.svg" alt="glaykoma" class="img-fluid">
                    </div>
                    <a href="/glaykoma"  title="Γλαύκωμα" class="rounded-5 d-flex d-md-none">
                        <span>
                            Γλαύκωμα
                        </span>
                        <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="services-card">
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
                        <a href="#" title="Καταρράκτης" class="rounded-5 d-none d-md-flex">
                            <span>
                                Καταρράκτης
                            </span>
                            <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1">
                        <img src="/images/katarraktis.svg" alt="katarraktis" class="img-fluid">
                    </div>
                    <a href="#" title="Καταρράκτης" class="rounded-5 d-flex d-md-none">
                        <span>
                            Καταρράκτης
                        </span>
                        <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="services-card">
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
                                Αντιμετώπιση παθήσεων της Ίριδας (τραύμα, έλλειμα) με μεθόδους ιριδοπλαστικής.
                            </li>
                        </ol>
                        <a href="#" title="Πρόσθια Μόρια" class="rounded-5 d-none d-md-flex">
                            <span>
                                Πρόσθια Μόρια
                            </span>
                            <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1">
                        <img src="/images/moria.svg" alt="moria" class="img-fluid">
                    </div>
                    <a href="#" title="Πρόσθια Μόρια" class="rounded-5 d-flex d-md-none">
                        <span>
                            Πρόσθια Μόρια
                        </span>
                        <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="services-card">
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
                                Μέτρηση διαθλαστικού σφάλματος και συνταγογράφηση γυαλιών ή φακών επαφής. </li>
                            <li>
                                Διάγνωση και θεραπεία βλεφαρίτιδας και ξηροφθαλμίας. </li>
                            <li>
                                Διάγνωση παθήσεων του κερατοειδούς, αφαίρεση ξένων σωμάτων του κερατοειδούς.
                            </li>
                        </ol>
                        <a href="#" title="Γενικός Έλεγχος" class="rounded-5 d-none d-md-flex">
                            <span>
                                Γενικός Έλεγχος
                            </span>
                            <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 offset-lg-1 col-xl-3 offset-xl-1">
                        <img src="/images/check-up.svg" alt="check-up" class="img-fluid">
                    </div>
                    <a href="#"  title="Γενικός Έλεγχος" class="rounded-5 d-flex d-md-none">
                        <span>
                            Γενικός Έλεγχος
                        </span>
                        <img src="/images/arrow.svg" alt="arrow" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('partials.contact-content');
</div>
@endsection
