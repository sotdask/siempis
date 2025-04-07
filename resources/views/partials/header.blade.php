<header>
    <section class="container-fluid top-side">
        <div class="container">
            <ul>
                <li>
                    <div class="wrapper">
                        <a href="tel:2310309049" title="Τηλέφωνο">
                            <img src="/images/tel.svg" alt="tel">
                            <span>+30 2310309049</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a href="#"title="Γλώσσα">
                        EN
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="container nav-bar">
        <div class="leftSide">
            <a href="/" title="Κεντρική Σελίδα">
                <img src="/images/logo.svg" alt="logo" class="main-logo">
                <img src="/images/phone.svg" alt="phone" class="img-fluid phoneImg">
                <img src="/images/scrolled-logo.svg" alt="logo" class="img-fluid scrolled-logo">
            </a>
        </div>
        <div class="centerSide">
            <a href="/" title="Κεντρική Σελίδα">
                <img src="/images/mobile-logo.svg" alt="logo" class="img-fluid mobile-logo mb-3">
            </a>
            <ul class="mainUl">
                <li class="mainLi">
                    <div class="dropdown w-100">
                        <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Εξειδικεύσεις
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/glaykoma" title="Γλαύκωμα">Γλαύκωμα</a></li>
                            <li><a class="dropdown-item" href="#" title="Καταρράκτης">Καταρράκτης</a></li>
                            <li><a class="dropdown-item" href="#" title="Πρόσθια Μόρια">Πρόσθια Μόρια</a></li>
                            <li><a class="dropdown-item" href="#"title="Γενικός Οφθαλμολογικός Έλεγχος">Γενικός
                                    Έλεγχος</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mainLi">
                    <a href="/services"title="Υπηρεσίες" class="hover-underline-animation">Υπηρεσίες</a>

                </li>
                <li class="mainLi">
                    <a href="/about" title="Ο Ιατρός" class="hover-underline-animation">Ο Ιατρός</a>

                </li>
                <li class="mainLi">
                    <a href="/blog" title="Blog" class="hover-underline-animation">Blog</a>

                </li>
                <li class="mainLi">
                    <a href="/contact" title="Επικοινωνία" class="hover-underline-animation">Επικοινωνία</a>
                </li>
                <li class="mainLi">
                    <a href="#" title="Γλώσσα" class="hover-underline-animation">EN</a>
                </li>
            </ul>

        </div>
        <div class="rightSide">
            <div class="wrapper">
                <a href="tel:2310309049" title="Τηλέφωνο">
                    <img src="/images/phone.svg" alt="phone" class="img-fluid phoneImg">
                </a>
                <button type="button" class="main-button rounded-5 d-none d-xl-flex" data-bs-toggle="modal"
                    data-bs-target="#bookingModal">
                    Κλείστε Ραντεβού
                </button>
            </div>
            <div class="burger-menu d-flex d-xl-none">
                <button class="open-menu" onclick="toggleMenu()">
                    <div class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <ul id="menu">
                    <div class="absoluteImageWrapper position-absolute">
                        <img src="/images/background-icon.svg" alt="">
                    </div>
                    <li>
                        <div class="w-100">
                            <a class="w-100" data-bs-toggle="collapse" href="#specialtiesCollapse" role="button"
                                aria-expanded="false" aria-controls="specialtiesCollapse">
                                Εξειδικεύσεις
                            </a>
                            <div class="collapse" id="specialtiesCollapse">
                                <ul class="list-group mt-2">
                                    <li class="list-group-item"><a href="/glaykoma" title="Γλαύκωμα">Γλαύκωμα</a></li>
                                    <li class="list-group-item"><a href="#" title="Καταρράκτης">Καταρράκτης</a>
                                    </li>
                                    <li class="list-group-item"><a href="#" title="Πρόσθια Μόρια">Πρόσθια
                                            Μόρια</a></li>
                                    <li class="list-group-item"><a href="#"
                                            title="Γενικός Οφθαλμολογικός Έλεγχος">Γενικός Έλεγχος</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="/services" title="Υπηρεσίες">Υπηρεσίες</a></li>
                    <li><a href="/about" title="Ο Ιατρός">Ο Ιατρός</a></li>
                    <li><a href="/blog" title="Blog">Blog</a></li>
                    <li><a href="/contact" title="Επικοινωνία">Επικοινωνία</a></li>
                    <li>
                        <div class="wrapper">
                            <a href="tel:2310309049"  title="Τηλέφωνο">
                                <img src="/images/phone.svg" alt="phone">
                            </a>
                            <a href="/contact" class="main-button rounded-5" title="Επικοινωνία">
                                Κλείστε Ραντεβού
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="langWrapper d-flex">
                            <a href="#" title="English">
                                en
                            </a>
                            <span>|</span>
                            <a href="#" title="Ελληνικά" class="active">
                                ελ
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > $('.top-side').height()) {

                    $('header').addClass('scrolled');
                } else {
                    $('header').removeClass('scrolled');
                }
            });
        });

        function toggleMenu() {
            document.querySelector('.burger-menu').classList.toggle('menu-open');
            document.body.classList.toggle('no-scroll');
        }
    </script>
</header>
