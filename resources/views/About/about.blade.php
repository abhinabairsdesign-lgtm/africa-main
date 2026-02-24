@extends('layouts.app')

@section('title', 'About | Make with Africa')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pagesCss/about.css') }}">
@endpush

@section('content')

<!--================ sandai breadcrum  ===============-->
        <section class="company-header text-white">
            <div class="container company-content">
                <div class="row">
                    <div class="col-lg-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-company-box">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About SINADAI</li>
                            </ol>
                        </nav>

                        <span class="brand-label">Established 2024</span>
                        <h1 class="display-3 fw-bold mb-4">Leading the Future of <span class="text-white-50">Industrial
                                Excellence</span></h1>

                        <p class="lead text-secondary col-md-11 mb-5"
                            style="border-left: 3px solid rgba(255,255,255,0.2); padding-left: 25px;">
                            SINADAI Services is a diversified global firm dedicated to redefining resource management
                            through sustainable innovation, ethical governance, and advanced technological integration.
                        </p>

                        <div class="d-flex flex-wrap gap-5 mt-5 pt-2 border-top border-white border-opacity-10">
                            <div>
                                <span class="h4 fw-bold d-block mb-1">Global</span>
                                <small class="text-uppercase text-white-50 tracking-widest"
                                    style="font-size: 10px;">Operational Reach</small>
                            </div>
                            <div>
                                <span class="h4 fw-bold d-block mb-1">Sustainable</span>
                                <small class="text-uppercase text-white-50 tracking-widest" style="font-size: 10px;">ESG
                                    Commitment</small>
                            </div>
                            <div>
                                <span class="h4 fw-bold d-block mb-1">Innovative</span>
                                <small class="text-uppercase text-white-50 tracking-widest"
                                    style="font-size: 10px;">Tech Integration</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ======================MISSION STATEMENT SECTION ================ -->

        <section class="mission-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-10">
                        <div class="mission-text-block">
                            <span class="mission-heading">Our Mission</span>
                            <h2 class="mission-quote">
                                To deliver <span style="color: #0a192f;">premium industrial solutions</span> through a
                                unique blend of sustainable technology, geological intelligence, and <span
                                    style="border-bottom: 3px solid #ffc107;">unwavering ethical standards</span>.
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="vision-card">
                            <i class="bi bi-eye-fill vision-icon"></i>
                            <h3 class="fw-bold mb-3">Our Vision</h3>
                            <p class="text-muted">
                                To be the global benchmark for diversified resource management, where innovation meets
                                environmental stewardship to ensure long-term prosperity for the communities we serve.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="vision-card">
                            <i class="bi bi-graph-up-arrow vision-icon"></i>
                            <h3 class="fw-bold mb-3">Core Strategy</h3>
                            <p class="text-muted">
                                Leveraging AI-driven analytics and autonomous systems to maximize production efficiency
                                while maintaining 100% land reclamation integrity across all active blocks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- =====================CORE VALUES SECTION ============= -->
        <section class="values-section">
            <div class="container">
                <div class="row mb-5 text-center">
                    <div class="col-lg-8 mx-auto">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-3"
                            style="color: #8892b0; letter-spacing: 5px;">The SINADAI Standard</h6>
                        <h2 class="display-5 fw-bold" style="color: #0a192f;">Our Core Values</h2>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="value-card-premium">
                            <div class="value-icon-box">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h3 class="value-title">Absolute Integrity</h3>
                            <p class="value-desc">
                                We maintain 100% transparency in all global operations and corporate governance,
                                ensuring that our partners and stakeholders can rely on our ethical framework without
                                compromise.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="value-card-premium">
                            <div class="value-icon-box">
                                <i class="bi bi-cpu-fill"></i>
                            </div>
                            <h3 class="value-title">Technical Innovation</h3>
                            <p class="value-desc">
                                By utilizing advanced AI, robotics, and geological intelligence, we redefine industrial
                                efficiency while actively working to minimize human risk across all operational blocks.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="value-card-premium">
                            <div class="value-icon-box">
                                <i class="bi bi-flower1"></i>
                            </div>
                            <h3 class="value-title">Global Stewardship</h3>
                            <p class="value-desc">
                                Our commitment to sustainability is immutable. We ensure that every project adheres to
                                rigorous land reclamation standards, returning utilized land to a state of high
                                agricultural productivity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================GLOBAL MAP SECTION ================== -->
        <section class="map-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-3"
                            style="color: #ffc107; letter-spacing: 5px;">Global Logistics</h6>
                        <h2 class="display-5 fw-bold text-white">Operational <span
                                class="text-white-50">Footprint</span></h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <p class="text-secondary small border-start border-warning ps-4 mb-0">
                            SINADAI Services manages a vast network of active mining and agricultural blocks, supported
                            by a world-class logistics chain serving primary international markets.
                        </p>
                    </div>
                </div>

                <div class="map-container-premium">
                    <div class="map-background"></div>

                    <div class="map-content-overlay">
                        <div class="location-marker" style="top: 30%; left: 20%;" title="North American Hub"></div>
                        <div class="location-marker" style="top: 45%; left: 48%;" title="European Logistics Center">
                        </div>
                        <div class="location-marker" style="top: 60%; left: 75%;" title="Asia-Pacific Operations"></div>
                        <div class="location-marker" style="top: 70%; left: 55%;" title="African Mining Block"></div>

                        <div class="stat-floating-card">
                            <div class="mb-3">
                                <span class="d-block h2 fw-bold text-white mb-0">24</span>
                                <small class="text-uppercase tracking-widest text-warning"
                                    style="font-size: 10px;">Export Destinations</small>
                            </div>
                            <p class="text-secondary small mb-0">
                                Strategic distribution channels ensuring high-efficiency delivery across four
                                continents.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================TIME LINE SECTION ================ -->
        <section class="history-section">
            <div class="container">
                <div class="row mb-5 text-center">
                    <div class="col-lg-12">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-2"
                            style="color: #8892b0; letter-spacing: 5px;">Our Journey</h6>
                        <h2 class="display-5 fw-bold" style="color: #0a192f;">Evolution of Excellence</h2>
                    </div>
                </div>

                <div class="timeline-path">
                    <div class="timeline-item left">
                        <div class="timeline-card">
                            <span class="timeline-date">2024</span>
                            <h5 class="fw-bold">Company Foundation</h5>
                            <p class="small opacity-75">SINADAI Services established with a focus on specialized
                                industrial consultation and resource management.</p>
                        </div>
                    </div>

                    <div class="timeline-item right">
                        <div class="timeline-card">
                            <span class="timeline-date">2025</span>
                            <h5 class="fw-bold">Technological Integration</h5>
                            <p class="small opacity-75">Launch of proprietary AI analytics and autonomous machinery
                                pilots across primary mining blocks.</p>
                        </div>
                    </div>

                    <div class="timeline-item left">
                        <div class="timeline-card">
                            <span class="timeline-date">2026</span>
                            <h5 class="fw-bold">Global Market Reach</h5>
                            <p class="small opacity-75">Expansion of export channels to 24 international markets and
                                full integration of sustainable agro-tech divisions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============OUR CERTIFICATION SECTION ========== -->
        <section class="compliance-section">
            <div class="container">
                <div class="row mb-5 text-center">
                    <div class="col-lg-8 mx-auto">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-3"
                            style="color: #8892b0; letter-spacing: 5px;">Global Standards</h6>
                        <h2 class="display-5 fw-bold" style="color: #0a192f;">Accreditation & <span
                                class="text-muted">Compliance</span></h2>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="certification-card">
                            <div class="cert-icon-box">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h5 class="cert-title">ISO 45001</h5>
                            <p class="cert-desc">International standard for Occupational Health and Safety management
                                systems.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="certification-card">
                            <div class="cert-icon-box">
                                <i class="bi bi-tree"></i>
                            </div>
                            <h5 class="cert-title">ISO 14001</h5>
                            <p class="cert-desc">Commitment to effective environmental management and land reclamation
                                integrity.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="certification-card">
                            <div class="cert-icon-box">
                                <i class="bi bi-award"></i>
                            </div>
                            <h5 class="cert-title">ISO 9001</h5>
                            <p class="cert-desc">Global benchmark for quality management and operational excellence.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="certification-card">
                            <div class="cert-icon-box">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h5 class="cert-title">Ethical Trade</h5>
                            <p class="cert-desc">Ensuring fair labor practices and sustainable supply chains across 24
                                markets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection