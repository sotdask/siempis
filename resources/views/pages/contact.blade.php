@extends('layout')
@section('content')
@section('body-class', 'contact white-theme')
<div class="contact">
    <section class="container form-container html-content">
        <h1 data-aos="fade-down" data-aos-once="true" data-aos-duration="1000" class="font-heading1">Επικοινωνία</h1>
        <p>
            Torquatos nostros quos dolores suscipiantur maiorum dolorum effugiendorum gratia nostros quos dolores.
        </p>
        <div id="confirmationMessage" class="text-center" style="display: none;">
            <h4 class="font-heading3">Ευχαριστούμε!</h4>
            <p>Η φόρμα σας υποβλήθηκε επιτυχώς.</p>
            <p>Θα επικοινωνήσουμε σύντομα μαζί σας.</p>
        </div>
        <div class="container form-wrapper">
            <form class="contact-form needs-validation" novalidate>
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="first_name" placeholder="ΌΝΟΜΑ"
                        value="{{ old('first_name') }}" required>
                    <label for="first_name">Όνομα</label>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        This can't be empty!
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="last_name" placeholder="ΕΠΙΘΕΤΟ"
                        value="{{ old('last_name') }}" required>
                    <label for="last_name">Επίθετο</label>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        This can't be empty!
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="phone" placeholder="ΤΗΛΕΦΩΝΟ"
                        value="{{ old('phone') }}" required>
                    <label for="phone">Τηλέφωνο</label>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        This can't be empty!
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="EMAIL"
                        value="{{ old('email') }}" required>
                    <label for="email">Email</label>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        This can't be empty!
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <textarea type="text" class="form-control" id="textarea" placeholder="Message"></textarea>
                    <label for="textarea">Μήνυμα</label>
                </div>
                <div class="form-check mb-3 d-flex justify-content-center">
                    <div class="checkbox-wrapper">
                        <input class="form-check-input" type="checkbox" name="termsofUse" id="termsofUse"
                            value="cbtest-19" required>
                        <svg viewBox="0 0 35.6 35.6">
                            <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                            <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                            <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                        </svg>
                        </input>
                    </div>
                    <label class="form-check-label" for="termsofUse">
                        Συμφωνώ με τους <a href="#" title="Όροι Χρήσης">Όρους Χρήσης</a>
                    </label>
                </div>
                <div class="submit-content">
                    <button type="submit" class="main-button rounded-5 mt-3">
                        Υποβολή
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section class="location container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h2 class="font-heading2">
                        Ιατρείο <br> Δρ. Θωμά Σιέμπη
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
            <div class="map-wrapper">
                <img src="images/map.png" alt="map" class="img-fluid">
            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            (() => {
                'use strict'
                const forms = document.querySelectorAll('.needs-validation');
                const formWrapper = document.querySelector('.form-wrapper');
                const confirmationMessage = document.getElementById('confirmationMessage');

                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        } else {
                            event.preventDefault();
                            formWrapper.style.display = 'none';
                            confirmationMessage.style.display = 'block';
                        }

                        form.classList.add('was-validated');
                    }, false);
                });
            })();
        });
    </script>
@endpush
@endsection
