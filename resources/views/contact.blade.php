@extends('layouts.header')
@section('content')


    <!-- contact -->
    <section class="w3l-contact-info-main py-5" id="contact">
        <div class="container pt-lg-5 pt-md-4 pt-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-1">Contactez-nous</h5>
                <h3 class="title-style">Nous sommes là pour vous aider</h3>
            </div>
            <div class="row">
                <div class="col-md-6 left-cont-contact pe-md-4">
                    <div class="contact-address p-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <div class="ms-3">
                                <h5 class="contact-text">Adresse:</h5>
                                <p>123 Rue de l'Entreprise, Ville, Pays</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-address p-4 mt-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i>
                            <div class="ms-3">
                                <h5 class="contact-text">Call Us:</h5>
                                <a href="tel:+12 23456790">+12 23456790</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-address p-4 mt-4">
                        <div class="contact-icon d-flex align-items-center">
                            <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
                            <div class="ms-3">
                                <h5 class="contact-text">Mail Us:</h5>
                                <a href="mailto:info@example.com"> info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right-cont-contact ps-md-4 mt-md-0 mt-5">
                <form method="post" action="{{ route('contact.store') }}">
    @csrf
    <div class="form-group mb-3">
        <input class="form-control" type="text" name="name" placeholder="Your Name" required="">
    </div>
    <div class="form-group mb-3">
        <input class="form-control" type="email" name="email" placeholder="Your Email" required="">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Write Message" required=""></textarea>
    </div>
    <div class="form-group-2 mt-3 text-end">
        <button type="submit" class="btn btn-style">Submit Form</button>
    </div>
</form>

                </div>
            </div>
        </div>
    </section>

    <div class="map-contact pt-5">
        <iframe class="map-w3layouts"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //contact -->
    @endsection
