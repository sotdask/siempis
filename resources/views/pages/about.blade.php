@extends('layout')
@section('content')
@section('body-class', 'about blue-theme')
<div class="about">
    <section class=" container-fluid aboutInfo html-content">
        <div class="container gx-0 d-flex justify-content-center">
            <div class="row w-100">
                <div class="col-12 col-xl-6 col-lg-5 gx-0">
                    <div data-aos="fade-right" data-aos-once="true" data-aos-duration="1000"
                        class="title-wrapper d-none flex-column d-lg-flex">
                        <h2 class="font-heading3">Δρ. Σιέμπης Θωμάς</h2>
                        <span>Χειρουργός Οφθαλμίατρος</span>
                    </div>
                    <p data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">
                        Ο Δρ .Θωμάς Σιέμπης MD, FRCOphth, FEBO είναι εξειδικευμένος Χειρουργός Γλαυκώματος, Καταρράκτη
                        και Πρόσθιων Μορίων με ιδιαίτερο ενδιαφέρον στην Ελάχιστα Επεμβατική Χειρουργική Γλαυκώματος.
                        Ειδικεύθηκε στην Οφθαλμολογία εξ’ολοκλήρου στο Ηνωμένο Βασίλειο και εν συνεχεία πραγματοποίησε
                        τη χειρουργική του μετεκπαίδευση σε δύο από τα πιο γνωστά οφθαλμολογικά κέντρα της Βόρειου
                        Αμερικής (Prism Eye Institute και Donald K. Johnson Eye Institute του Πανεπιστημίου του Τορόντο)
                        δίπλα στον παγκοσμίου φήμης καθηγητή Dr. Ike Ahmed. Αρχή του είναι η εξατομικευμένη και ολιστική
                        φροντίδα κάθε ασθενούς με επαγγελματισμό, ειλικρίνεια και ακρίβεια στη διάγνωση και θεραπεία,
                        Δέχεται ασθενείς κατόπιν ραντεβού σε έναν άρτια εξοπλισμένο χώρο στο κέντρο της Θεσσαλονίκης και
                        στην Κλινική Άγιος Λουκάς."
                    </p>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1 gx-0">
                    <div class="title-wrapper d-flex flex-column d-lg-none text-center">
                        <h2 class="font-heading3">Δρ. Σιέμπης Θωμάς</h2>
                        <span>Χειρουργός Οφθαλμίατρος</span>
                    </div>
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
                <div class="col-12 gx-0">
                    <table>
                        <tr>
                            <th><span>2023</span></th>
                            <th>
                                <p>
                                    Certe, inquam, pertinax non existimant oportere exquisitis rationibus conquisitis de
                                    homine
                                    sensibus reliqui nihil est.
                                </p>
                            </th>
                        </tr>
                        <tr>
                            <th><span>2022</span></th>
                            <th>
                                <p>
                                    Certe, inquam, pertinax non existimant oportere exquisitis rationibus conquisitis de
                                    homine
                                    sensibus reliqui nihil est.
                                </p>
                            </th>
                        </tr>
                        <tr>
                            <th><span>2020-2021</span></th>
                            <th>
                                <p>
                                    Certe, inquam, pertinax non existimant oportere exquisitis rationibus conquisitis de
                                    homine
                                    sensibus reliqui nihil est.
                                </p>
                            </th>
                        </tr>
                        <tr>
                            <th><span>2019</span></th>
                            <th>
                                <p>
                                    Certe, inquam, pertinax non existimant oportere exquisitis rationibus conquisitis de
                                    homine
                                    sensibus reliqui nihil est.
                                </p>
                            </th>
                        </tr>
                        <tr>
                            <th><span>2018</span></th>
                            <th>
                                <p>
                                    Certe, inquam, pertinax non existimant oportere exquisitis rationibus conquisitis de
                                    homine
                                    sensibus reliqui nihil est.
                                </p>
                            </th>
                        </tr>
                        <tr>
                            <th><span>2016-2017</span></th>
                            <th>
                                <p>
                                    Certe, inquam, pertinax non existimant oportere exquisitis rationibus conquisitis de
                                    homine
                                    sensibus reliqui nihil est.
                                </p>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="container more-info">
        <div class="content-wrapper">
            <div class="mobileContentWrapper d-block d-lg-none">
                <div class="dropdown w-100">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Επιλέξτε μια Κατηγορία
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#posts">Δημοσιεύσεις</a></li>
                        <li><a class="dropdown-item" href="#presentations"> Παρουσιάσεις σε συνέδρια</a></li>
                        <li><a class="dropdown-item" href="#videos">Χειρουργικά βίντεο</a></li>
                    </ul>
                </div>
            </div>
            <ul class="main-ul d-none d-lg-flex align-items-start">
                <li class="col-12 col-lg-4 mt-3 mt-lg-0 active" data-slide="0">
                    <a href="#posts">Δημοσιεύσεις</a>
                </li>
                <li class="col-12 col-lg-4 mt-3 mt-lg-0">
                    <a href="#presentations">Παρουσιάσεις σε συνέδρια</a>

                </li>
                <li class="col-12 col-lg-4 mt-3 mt-lg-0">
                    <a href="#videos">Χειρουργικά βίντεο</a>
                </li>
            </ul>
            <div class="info-wrapper html-content">
                <div class="firstContent" id="posts">
                    <h3 class="font-heading5">
                        Δημοσιεύσεις
                    </h3>
                    <div class="wrapper">
                        <p>
                            Ο ιατρός έχει ενεργή ακαδημαϊκή παρουσία έχοντας δημοσιεύσει πληθώρα άρθρων σε διεθνή
                            περιοδικά και παρουσιάσει προφορικές και αναρτημένες ανακοινώσεις σε διεθνή συνέδρια.
                        </p>
                        <p>
                            Παράλληλα είναι επίτιμος Λέκτορας κλινικής ιατρικής στο Πανεπιστήμιο της Γλασκώβης. Έχει
                            επίσης συμμετάσχει στη διδασκαλία του μαθήματος της Οφθαλμολογίας σε φοιτητές ιατρικής του
                            Πανεπιστημίου του Bristol και του Πανεπιστήμιου του Τορόντο.
                            Τέλος εκπαιδεύει ειδικευόμενους οφθαλμολογίας στη μικροχειρουργική καταρράκτη και
                            γλαυκώματος.
                        </p>

                        <p>
                            Τέλος εκπαιδεύει ειδικευόμενους οφθαλμολογίας στη μικροχειρουργική καταρράκτη και
                            γλαυκώματος.
                        </p>
                    </div>
                    <span>Δημοσιεύσεις σε περιοδικά με κριτές (peer reviewed journals)</span>
                    <div class="wrapper">
                        <p>
                            “Long-Term Outcomes of Ahmed Glaucoma Valve Surgery in a Scottish Cohort of Patients With
                            Refractory Glaucoma”. Cureus. 2023 Mar 7;15(3):e35877. doi: 10.7759/cureus.35877.
                            PMID: 37033581; PMCID: PMC10079806
                        </p>
                        <a href="#" title="Ένα Άκυρο Link">https://pubmed.ncbi.nlm.nih.gov/37033581/</a>
                    </div>
                    <div class="wrapper">

                        <p>
                            “Current Perspectives in Angle Closure Management and the Evolving Role of Laser Peripheral
                            Iridotomy”, Ophthalmology Rounds, Department of Ophthalmology and Vision Sciences, Faculty
                            of Medicine, University of Toronto. Volume 15, Issue 3
                        </p>
                        <a href="#"
                            title="Ένα Άκυρο Link">https://www.ophthalmologyrounds.ca/_files/ugd/b076e2_522ec70d69034adfa67a7315bc9458
                            19.pdf</a>
                    </div>
                    <div class="wrapper">

                        <p>
                            “Evaluation of Clinical and Histological Outcomes of Adipose-Derived Mesenchymal Stem Cells
                            in a Rabbit Corneal Alkali Burn Model. Stem Cells Int. 2021 Mar 7;2021:6610023.
                            doi: 10.1155/2021/6610023. PMID: 33763139; PMCID: PMC7964115.
                        </p>
                        <a href="#" title="Ένα Άκυρο Link">https://pubmed.ncbi.nlm.nih.gov/33763139/</a>
                    </div>
                    <div class="wrapper">

                        <p>
                            “The incidence and management of persistent cystoid macular oedema following
                            uncomplicated cataract surgery-a Scottish Ophthalmological Surveillance Unit study.” Eye
                            (Lond). 2021 Feb;35(2):584-591. doi: 10.1038/s41433-020-0908-y. Epub 2020 May 6.
                            PMID: 32376978; PMCID: PMC7202460.
                        </p>
                        <a href="#" title="Ένα Άκυρο Link">https://pubmed.ncbi.nlm.nih.gov/32376978/</a>
                    </div>
                    <div class="wrapper">

                        <p>
                            “Twenty-four-month real-world visual outcomes of intravitreal aflibercept as monotherapy for
                            the treatment of neovascular age-related macular degeneration”. Oman J Ophthalmol. 2019
                            May-Aug;12(2):99-103. doi: 10.4103/ojo.OJO_24_2018. PMID: 31198295; PMCID:
                            PMC6561052.
                        </p>
                        <a href="#" title="Ένα Άκυρο Link">https://pubmed.ncbi.nlm.nih.gov/31198295/</a>
                    </div>
                    <div class="wrapper">

                        <p>
                            “Reduced vision in a diabetic patient due to incidental leukaemic retinopathy”. Clin Exp
                            Optom. 2019 Jan;102(1):91-93. doi: 10.1111/cxo.12808. Epub 2018 Jul 10. PMID:
                            29989226.
                        </p>
                        <a href="#">https://pubmed.ncbi.nlm.nih.gov/29989226/</a>
                    </div>
                    <div class="wrapper" title="Ένα Άκυρο Link">

                        <p>
                            “Discontinuation of the herbal preparation Hypericum perforatum, also known as St John&#39;s
                            wort, associated with improved intraocular pressure control in a patient on topical beta-
                            blockers for primary open-angle glaucoma”. Oman J Ophthalmol. 2018 May-Aug;11(2):188-
                            189. doi: 10.4103/ojo.OJO_165_2017. PMID: 29930462; PMCID: PMC5991063.
                        </p>
                        <a href="#" title="Ένα Άκυρο Link">https://pubmed.ncbi.nlm.nih.gov/29930462/</a>
                    </div>
                    <div class="wrapper">

                        <p>
                            “Discontinuation of the herbal preparation Hypericum perforatum, also known as St John&#39;s
                            wort, associated with improved intraocular pressure control in a patient on topical beta-
                            blockers for primary open-angle glaucoma”. Oman J Ophthalmol. 2018 May-Aug;11(2):188-
                            189. doi: 10.4103/ojo.OJO_165_2017. PMID: 29930462; PMCID: PMC5991063.
                        </p>
                        <a href="#" title="Ένα Άκυρο Link">https://pubmed.ncbi.nlm.nih.gov/29930462/</a>
                    </div>
                </div>
                <div class="secondContent html-content" id="presentations">
                    <h3 class="font-heading5">
                        Παρουσιάσεις σε συνέδρια
                    </h3>
                    <div class="wrapper">
                        <p>
                            Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                            summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego
                            assentior,
                            soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime
                            placeat.
                        </p>
                        <p>
                            Tum dicere exorsus est et harum quidem rerum necessitatibus saepe evenietut
                            earum motus et argumentandum et rationibus confirmare, tantum satis esse
                            ut enim ad naturam aut perferendis doloribus asperiores repellat hanc ego assentior
                            tum etiam erga nos causae confidere, sed et fortibus. Certe, inquam, pertinax non
                            intellegamus
                        </p>
                    </div>
                </div>
                <div class="thirdContent html-content" id="videos">
                    <h3 class="font-heading5">
                        Χειρουργικά βίντεο </h3>
                    <div class="wrapper">
                        <div class="ratio ratio-1x1">
                            <iframe src="https://www.youtube.com/watch?v=_zHPsmXCjB0" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                        <div class="ratio ratio-1x1">
                            <iframe src="https://www.youtube.com/watch?v=_zHPsmXCjB0" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                        <div class="ratio ratio-1x1">
                            <iframe src="https://www.youtube.com/watch?v=_zHPsmXCjB0" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                        <div class="ratio ratio-1x1">
                            <iframe src="https://www.youtube.com/watch?v=_zHPsmXCjB0" title="YouTube video"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.contact-content')
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

            const items = document.querySelectorAll(".content-wrapper ul li");

            items.forEach(item => {
                item.addEventListener("click", function() {
                    items.forEach(li => li.classList.remove("active"));
                    this.classList.add("active");
                });
            });
            const menu = document.querySelector(".content-wrapper ul");
            const menuOffset = menu.offsetTop;

            window.addEventListener("scroll", function() {
                if (window.scrollY >= menuOffset) {
                    menu.classList.add("fixed-menu");
                } else {
                    menu.classList.remove("fixed-menu");
                }
            });
        });
    </script>
@endpush
@endsection
