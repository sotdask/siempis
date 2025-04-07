@extends('layout')
@section('content')
@section('body-class', 'services blue-theme')
<div class="glaykoma">
    <div class="container introduction">
        <h1 data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" class="font-heading1">Γλαύκωμα</h1>
        <img src="/images/single-page-glaykoma.png" alt="img" class="img-fluid">
    </div>
    <section class="container glaykoma-info">
        <div class="content-wrapper d-block">
            <div class="mobileContentWrapper d-block d-lg-none">
                <div class="dropdown w-100">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Επιλέξτε μια Υπηρεσία
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#about-glaucoma">Σχετικά με το γλαύκωμα</a></li>
                        <li><a class="dropdown-item" href="#medication"> Φαρμακευτική Θεραπεία</a></li>
                        <li><a class="dropdown-item" href="#laser-treatment">Θεραπεία με χρήση Laser</a></li>
                        <li><a class="dropdown-item" href="#minimally-invasive">Ελάχιστα επεμβατική χειρουργική
                                Γλαυκώματος</a></li>
                        <li><a class="dropdown-item" href="#trabeculectomy">Τραμπεκουλεκτομή και Συσκευές
                                Παροχέτευσης</a></li>
                    </ul>
                </div>
            </div>
            <ul class="main-ul d-none d-lg-flex align-items-start">
                <li class="col-12 col-md-8 col-lg-2 mt-3 mt-lg-0 active" data-slide="0">
                    <a href="#about-glaucoma">Σχετικά με το γλαύκωμα</a>
                </li>
                <li class="col-12 col-md-8 col-lg-2 mt-3 mt-lg-0">
                    <a href="#medication"> Φαρμακευτική Θεραπεία</a>

                </li>
                <li class="col-12 col-md-8 col-lg-2 mt-3 mt-lg-0">
                    <a href="#laser-treatment">Θεραπεία με χρήση Laser</a>
                </li>
                <li class="col-12 col-md-8 col-lg-3 mt-3 mt-lg-0">
                    <a href="#minimally-invasive">Ελάχιστα επεμβατική χειρουργική Γλαυκώματος</a>

                </li>
                <li class="col-12 col-md-8 col-lg-3 mt-3 mt-lg-0">
                    <a href="#trabeculectomy">Τραμπεκουλεκτομή και Συσκευές Παροχέτευσης</a>

                </li>
            </ul>
            <div data-bs-spy="scroll" data-bs-target=".main-ul" data-bs-offset="50" class="info-wrapper">
                <div class="firstContent" id="about-glaucoma">
                    <h3 class="font-heading5">
                        Σχετικά με το γλαύκωμα
                    </h3>
                    <div class="accordion" id="infoAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Τι είναι το γλαύκωμα;
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body html-content">
                                    <p>Το Γλαύκωμα είναι μια χρόνια πάθηση η οποία μπορεί να οδηγήσει στην
                                        τύφλωση
                                        λόγω της σταδιακής και μη αναστρέψιμης εκφύλισης του οπτικού νεύρου.
                                        Στις
                                        περισσότερες περιπτώσεις αυτό συμβαίνει λόγω της αυξημένης πίεσης στο
                                        μάτι
                                        (ενδοφθάλμιας πίεσης).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Ποια είναι τα συμπτώματα;
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body html-content">
                                    <p>Το Γλαύκωμα είναι μια χρόνια πάθηση η οποία μπορεί να οδηγήσει στην
                                        τύφλωση
                                        λόγω της σταδιακής και μη αναστρέψιμης εκφύλισης του οπτικού νεύρου.
                                        Στις
                                        περισσότερες περιπτώσεις αυτό συμβαίνει λόγω της αυξημένης πίεσης στο
                                        μάτι
                                        (ενδοφθάλμιας πίεσης).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Παράγοντες κινδύνου
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                <div class="accordion-body html-content">
                                    <p>Το Γλαύκωμα είναι μια χρόνια πάθηση η οποία μπορεί να οδηγήσει στην
                                        τύφλωση
                                        λόγω της σταδιακής και μη αναστρέψιμης εκφύλισης του οπτικού νεύρου.
                                        Στις
                                        περισσότερες περιπτώσεις αυτό συμβαίνει λόγω της αυξημένης πίεσης στο
                                        μάτι
                                        (ενδοφθάλμιας πίεσης).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    Υπάρχει πρόληψη;
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body html-content">
                                    <p>Το Γλαύκωμα είναι μια χρόνια πάθηση η οποία μπορεί να οδηγήσει στην
                                        τύφλωση
                                        λόγω της σταδιακής και μη αναστρέψιμης εκφύλισης του οπτικού νεύρου.
                                        Στις
                                        περισσότερες περιπτώσεις αυτό συμβαίνει λόγω της αυξημένης πίεσης στο
                                        μάτι
                                        (ενδοφθάλμιας πίεσης).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFive">
                                    Τύποι Γλαυκώματος
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                <div class="accordion-body html-content">
                                    <p>Το Γλαύκωμα είναι μια χρόνια πάθηση η οποία μπορεί να οδηγήσει στην
                                        τύφλωση
                                        λόγω της σταδιακής και μη αναστρέψιμης εκφύλισης του οπτικού νεύρου.
                                        Στις
                                        περισσότερες περιπτώσεις αυτό συμβαίνει λόγω της αυξημένης πίεσης στο
                                        μάτι
                                        (ενδοφθάλμιας πίεσης).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseSix">
                                    Πως γίνεται η διάγνωση και τι περιλαμβάνει η επίσκεψη;
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                <div class="accordion-body html-content">
                                    <p>Το Γλαύκωμα είναι μια χρόνια πάθηση η οποία μπορεί να οδηγήσει στην
                                        τύφλωση
                                        λόγω της σταδιακής και μη αναστρέψιμης εκφύλισης του οπτικού νεύρου.
                                        Στις
                                        περισσότερες περιπτώσεις αυτό συμβαίνει λόγω της αυξημένης πίεσης στο
                                        μάτι
                                        (ενδοφθάλμιας πίεσης).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseSeven">
                                    Πόσο συχνά πρέπει να γίνεται η παρακολούθηση;
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                                <div class="accordion-body html-content">
                                    <p>Το Γλαύκωμα είναι μια χρόνια πάθηση η οποία μπορεί να οδηγήσει στην
                                        τύφλωση
                                        λόγω της σταδιακής και μη αναστρέψιμης εκφύλισης του οπτικού νεύρου.
                                        Στις
                                        περισσότερες περιπτώσεις αυτό συμβαίνει λόγω της αυξημένης πίεσης στο
                                        μάτι
                                        (ενδοφθάλμιας πίεσης).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseEight">
                                    Πως μπορεί να σας βοηθήσει ο ιατρός;
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse">
                                <div class="accordion-body html-content">
                                    <p>Το Γλαύκωμα είναι μια χρόνια πάθηση η οποία μπορεί να οδηγήσει στην
                                        τύφλωση
                                        λόγω της σταδιακής και μη αναστρέψιμης εκφύλισης του οπτικού νεύρου.
                                        Στις
                                        περισσότερες περιπτώσεις αυτό συμβαίνει λόγω της αυξημένης πίεσης στο
                                        μάτι
                                        (ενδοφθάλμιας πίεσης).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="secondContent html-content" id="medication">
                    <h3 class="font-heading5">
                        Φαρμακευτική Θεραπεία
                    </h3>
                    <ol>
                        <li>
                            <p>Torquem detraxit hosti et quidem se texit </p>
                            <p>
                                Ne interiret at vero eos et ultimum bonorum, quod summum bonum esse appetendum, alterum
                                aspernandum sentiamus alii autem, quibus ego assentior, cum soluta nobis est cur verear,
                                ne interiret at magnum periculum adiit in quo enim maxime placeat. Tum dicere exorsus
                                est et harum quidem rerum necessitatibus saepe eveniet,
                            </p>
                        </li>
                        <li>
                            <p>Torquem detraxit hosti et quidem se texit </p>
                            <p>
                                Ne interiret at vero eos et ultimum bonorum, quod summum bonum esse appetendum, alterum
                                aspernandum sentiamus alii autem, quibus ego assentior, cum soluta nobis est cur verear,
                                ne interiret at magnum periculum adiit in quo enim maxime placeat. Tum dicere exorsus
                                est et harum quidem rerum necessitatibus saepe eveniet,
                            </p>
                        </li>
                        <li>
                            <p>Torquem detraxit hosti et quidem se texit </p>
                            <p>
                                Ne interiret at vero eos et ultimum bonorum, quod summum bonum esse appetendum, alterum
                                aspernandum sentiamus alii autem, quibus ego assentior, cum soluta nobis est cur verear,
                                ne interiret at magnum periculum adiit in quo enim maxime placeat. Tum dicere exorsus
                                est et harum quidem rerum necessitatibus saepe eveniet,
                            </p>
                        </li>
                    </ol>
                </div>
                <div class="thirdContent html-content" id="laser-treatment">
                    <h3 class="font-heading5">
                        Θεραπεία με χρήση Laser </h3>
                    <p>
                        Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                        summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego assentior,
                        soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime placeat.
                    </p>
                    <p>
                        Tum dicere exorsus est et harum quidem rerum necessitatibus saepe evenietut
                        earum motus et argumentandum et rationibus confirmare, tantum satis esse
                        ut enim ad naturam aut perferendis doloribus asperiores repellat hanc ego assentior
                        tum etiam erga nos causae confidere, sed et fortibus. Certe, inquam, pertinax non intellegamus
                    </p>
                </div>
                <div class="fourthContent html-content" id="minimally-invasive">
                    <h3 class="font-heading5">
                        Ελάχιστα επεμβατική χειρουργική Γλαυκώματος </h3>
                    <p>
                        Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                        summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego assentior,
                        cum soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime
                        placeat. Tum dicere exorsus est et harum quidem rerum necessitatibus saepe eveniet, ut earum
                        motus et argumentandum et rationibus confirmare, tantum satis esse, ut enim ad naturam aut
                        perferendis doloribus asperiores repellat hanc ego assentior, cum memoriter, tum etiam erga nos
                        causae confidere, sed et fortibus. Certe, inquam, pertinax non intellegamus, tu tam inportuno
                        tamque crudeli; sin, ut summo bono, dolorem eum iure reprehenderit, qui haec ratio late patet in
                        oculis quidem faciunt, ut ipsi auctori huius disciplinae placet: constituam, quid aut quid aut
                        fugit, sed quia dolor sit, amet, consectetur.
                    </p>
                </div>
                <div class="fifthContent html-content" id="trabeculectomy">
                    <h3 class="font-heading5">
                        Τραμπεκουλεκτομή και Συσκευές Παροχέτευσης </h3>
                    <p>
                        Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                        summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego assentior,
                        cum soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime
                        placeat. Tum dicere exorsus est et harum quidem rerum necessitatibus saepe eveniet, ut earum
                        motus et argumentandum et rationibus confirmare, tantum satis esse, ut enim ad naturam aut
                        perferendis doloribus asperiores repellat hanc ego assentior, cum memoriter, tum etiam erga nos
                        causae confidere, sed et fortibus. Certe, inquam, pertinax non intellegamus, tu tam inportuno
                        tamque crudeli; sin, ut summo bono, dolorem eum iure reprehenderit, qui haec ratio late patet in
                        oculis quidem faciunt, ut ipsi auctori huius disciplinae placet: constituam, quid aut quid aut
                        fugit, sed quia dolor sit, amet, consectetur.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="faq container">
        <h2 data-aos="fade-down" data-aos-once="true" data-aos-duration="1000">
            Συχνές Ερωτήσεις
        </h2>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <div class="wrapper d-flex" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <button class="accordion-button" type="button">
                            Et quidem exercitus quid ex eo delectu rerum, quem ad respondendum? </button>
                        <img src="/images/faq-arrow.svg" alt="">
                    </div>
                </h3>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                        summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego assentior,
                        cum soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime
                        placeat. Tum dicere exorsus est et harum quidem rerum necessitatibus saepe eveniet.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <div class="wrapper d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <button class="accordion-button" type="button">
                            Et quidem exercitus quid ex eo delectu rerum, quem ad respondendum? </button>
                        <img src="/images/faq-arrow.svg" alt="">
                    </div>
                </h3>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                        summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego assentior,
                        cum soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime
                        placeat. Tum dicere exorsus est et harum quidem rerum necessitatibus saepe eveniet.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <div class="wrapper d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                        aria-expanded="true" aria-controls="collapseThree">
                        <button class="accordion-button" type="button">
                            Et quidem exercitus quid ex eo delectu rerum, quem ad respondendum? </button>
                        <img src="/images/faq-arrow.svg" alt="">
                    </div>
                </h3>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                        summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego assentior,
                        cum soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime
                        placeat. Tum dicere exorsus est et harum quidem rerum necessitatibus saepe eveniet.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <div class="wrapper d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                        aria-expanded="true" aria-controls="collapseFour">
                        <button class="accordion-button" type="button">
                            Et quidem exercitus quid ex eo delectu rerum, quem ad respondendum? </button>
                        <img src="/images/faq-arrow.svg" alt="">
                    </div>
                </h3>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                        summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego assentior,
                        cum soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime
                        placeat. Tum dicere exorsus est et harum quidem rerum necessitatibus saepe eveniet.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <div class="wrapper d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                        aria-expanded="true" aria-controls="collapseFive">
                        <button class="accordion-button" type="button">
                            Et quidem exercitus quid ex eo delectu rerum, quem ad respondendum? </button>
                        <img src="/images/faq-arrow.svg" alt="">
                    </div>
                </h3>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Torquem detraxit hosti et quidem se texit, ne interiret at vero eos et ultimum bonorum, quod
                        summum bonum esse appetendum, alterum aspernandum sentiamus alii autem, quibus ego assentior,
                        cum soluta nobis est cur verear, ne interiret at magnum periculum adiit in quo enim maxime
                        placeat. Tum dicere exorsus est et harum quidem rerum necessitatibus saepe eveniet.
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
            document.querySelectorAll(".services li").forEach((item) => {
                item.addEventListener("click", function() {
                    const index = parseInt(this.getAttribute("data-slide"));
                    swiper.slideTo(index);
                });
            });
            const items = document.querySelectorAll(".content-wrapper ul li");

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
