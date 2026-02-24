@extends('layouts.app')

@section('title', 'Contact | Make with Africa')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pagesCss/contact.css') }}">
@endpush

@section('content')

 <!--=================== contact breadcrum section ================ -->

        <section class="conversation-section d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <span class="mini-title">GET IN TOUCH</span>

                        <h1 class="main-title">Start a Conversation</h1>

                        <p class="description">
                            Whether you're exploring a new market, assessing risk, or seeking strategic
                            partnership — we're ready to listen and advise.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <!--=============== CONTACT SECTION AREA ===============-->
        <section class="contact-section">
            <div class="container">
                <div class="row g-5">

                    <!-- ===== LEFT FORM ===== -->
                    <div class="col-lg-8">

                        <h2 class="section-title mb-4">Send an Inquiry</h2>

                        <form>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Full Name *</label>
                                    <input type="text" class="form-control" placeholder="Your name">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Email Address *</label>
                                    <input type="email" class="form-control" placeholder="email@example.com">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Organization</label>
                                    <input type="text" class="form-control" placeholder="Company or institution">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Subject *</label>

                                    <select class="form-select">
                                        <option>Select a subject</option>
                                        <option>Market Research</option>
                                        <option>Risk Mapping</option>
                                        <option>Digital Intelligence</option>
                                        <option>Strategic Coordination</option>
                                        <option>Partnership Inquiry</option>
                                        <option>General Inquiry</option>
                                    </select>

                                </div>
                            </div>


                            <div class="mb-3">
                                <label>Message *</label>
                                <textarea class="form-control" rows="4"
                                    placeholder="Tell us about your needs or interests..."></textarea>
                            </div>


                            <button class="btn submit-btn">
                                <i class="bi bi-send"></i> Submit Inquiry
                            </button>

                        </form>
                    </div>


                    <!-- ===== RIGHT INFO ===== -->
                    <div class="col-lg-4">

                        <h2 class="section-title mb-4">Contact Information</h2>

                        <div class="info-item">
                            <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                            <div>
                                <h6>Email</h6>
                                <p>info@sinadai.com</p>
                            </div>
                        </div>


                        <div class="info-item">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div>
                                <h6>Phone</h6>
                                <p> +1 610-757-0020</p>
                            </div>
                        </div>


                        <div class="info-item">
                            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div>
                                <h6>Location</h6>
                                <p>Dakar , Abidjan, Ohio, Pennsylvania. </p>
                            </div>
                        </div>



                        <div class="commit-card mt-4">
                            <h5>Response Commitment</h5>
                            <p>
                                We respond to all inquiries within 48 business hours.
                                For urgent matters, please indicate in your message subject.
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

@endsection