<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="row w-100">
                <div class="col-12 col-lg-6 html-content position-relative">
                    <div class="absoluteImageWrapper">
                        <img src="/images/modal-background.svg" alt="icon" class="img-fluid">
                    </div>
                    <div class="ImageWrapper d-flex d-lg-none justify-content-end">
                        <button type="button" data-bs-dismiss="modal" aria-label="Close">
                            <img src="/images/modal-x.svg" alt="icon" class="img-fluid">
                        </button>
                    </div>
                    <h1>
                        Κλείστε Ραντεβού
                    </h1>
                    <p>
                        Torquatos nostros quos dolores suscipiantur maiorum dolorum effugiendorum gratia
                        nostros quos dolores.
                    </p>
                </div>
                <div class="col-12 col-lg-6 position-relative">
                    <div class="absoluteImageWrapper2 d-none d-lg-flex">
                        <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <img src="/images/modal-x.svg" alt="icon" class="img-fluid">
                    </button>
                    </div>
                    <div id="confirmationMessageModal" class="text-center" style="display: none;">
                        <h4 class="font-heading3">Ευχαριστούμε!</h4>
                        <p>Η φόρμα σας υποβλήθηκε επιτυχώς.</p>
                        <p>Θα επικοινωνήσουμε σύντομα μαζί σας.</p>
                    </div>
                    <div class="form-wrapper" id="formWrapperModal">
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
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation');
            const formWrapper2 = document.querySelector('#formWrapperModal');
            const confirmationMessage2 = document.getElementById('confirmationMessageModal');

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        event.preventDefault();
                        formWrapper2.style.display = 'none';
                        confirmationMessage2.style.display = 'block';
                    }

                    form.classList.add('was-validated');
                }, false);
            });
        })();
    });
</script>