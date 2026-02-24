@extends('layouts.app')

@section('title', 'Technology | Make with Africa')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pagesCss/technology.css') }}">
@endpush

@section('content')

<section class="tech-header text-white">
            <div class="container tech-content">
                <div class="row">
                    <div class="col-lg-8">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-tech">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">AI Technology</li>
                            </ol>
                        </nav>

                        <span class="tech-label">Industry 4.0 Integration</span>
                        <h1 class="display-3 fw-bold">Advanced <span style="color: #00f2ff;">AI Analytics</span></h1>

                        <p class="text-secondary lead col-md-10 mb-4">
                            Optimizing resource extraction through predictive machine learning, autonomous robotics, and
                            real-time geological digital twins.
                        </p>

                        <div class="d-flex align-items-center pt-4 border-top border-white border-opacity-10">
                            <div class="d-flex align-items-center me-4">
                                <div class="bg-success rounded-circle me-2" style="width: 8px; height: 8px;"></div>
                                <small class="text-uppercase tracking-widest fw-bold opacity-75"
                                    style="font-size: 10px;">Network Active</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-cpu text-info me-2"></i>
                                <small class="text-uppercase tracking-widest fw-bold opacity-75"
                                    style="font-size: 10px;">AI Processing v2.0</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- =======================pillars technology =================== -->

        <section class="tech-pillars-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h6 class="text-info text-uppercase tracking-widest fw-bold mb-3" style="letter-spacing: 5px;">
                            Innovation Core</h6>
                        <h2 class="display-5 fw-bold text-white">Technological <span
                                style="color: #00f2ff;">Pillars</span></h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <p class="text-secondary mb-0 border-start border-info ps-4">
                            Our proprietary tech-stack integrates AI, IoT, and Robotics to transform traditional
                            resource extraction into a precise, data-driven science.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="pillar-card">
                            <span class="pillar-number">01</span>
                            <div class="pillar-icon-box">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <h4 class="text-white fw-bold mb-3">AI Discovery</h4>
                            <p class="text-secondary small">Deep-learning algorithms analyze seismic data to predict
                                mineral deposits with 94% accuracy.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="pillar-card">
                            <span class="pillar-number">02</span>
                            <div class="pillar-icon-box">
                                <i class="bi bi-robot"></i>
                            </div>
                            <h4 class="text-white fw-bold mb-3">Autonomous</h4>
                            <p class="text-secondary small">Remote-controlled machinery and self-driving haulage fleets
                                operating 24/7 in high-risk zones.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="pillar-card">
                            <span class="pillar-number">03</span>
                            <div class="pillar-icon-box">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h4 class="text-white fw-bold mb-3">Digital Twin</h4>
                            <p class="text-secondary small">Real-time 3D virtual replicas of mining sites for monitoring
                                structural integrity and airflow.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="pillar-card">
                            <span class="pillar-number">04</span>
                            <div class="pillar-icon-box">
                                <i class="bi bi-gpu-card"></i>
                            </div>
                            <h4 class="text-white fw-bold mb-3">Blockchain</h4>
                            <p class="text-secondary small">End-to-end supply chain transparency ensuring all minerals
                                are ethically sourced and verified.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ==================DASHBOARD SECTION =================== -->

        <section class="dashboard-section">
            <div class="container">
                <div class="row mb-5 text-center">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="display-6 fw-bold text-white">Live <span style="color: #00f2ff;">Command
                                Center</span></h2>
                        <p class="text-secondary">Proprietary monitoring interface for all active autonomous mining
                            blocks.</p>
                    </div>
                </div>

                <div class="dashboard-frame">
                    <div class="db-header">
                        <div class="d-flex align-items-center">
                            <span class="db-status-dot"></span>
                            <small class="text-white-50 text-uppercase fw-bold"
                                style="letter-spacing: 2px; font-size: 10px;">System Status: Operational</small>
                        </div>
                        <div class="text-white-50 small">
                            <i class="bi bi-broadcast me-2"></i> Latency: 14ms
                        </div>
                    </div>

                    <div class="p-4">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <div class="db-card text-center">
                                    <span class="db-label">Drilling Efficiency</span>
                                    <div class="db-value mt-2">98.4%</div>
                                    <div class="db-progress">
                                        <div class="db-progress-fill" style="width: 98%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="db-card text-center">
                                    <span class="db-label">AI Prediction</span>
                                    <div class="db-value mt-2">v2.0.4</div>
                                    <small class="text-success" style="font-size: 10px;">Engine Optimizing...</small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="db-card text-center">
                                    <span class="db-label">Active Units</span>
                                    <div class="db-value mt-2">42 / 45</div>
                                    <div class="db-progress">
                                        <div class="db-progress-fill"
                                            style="width: 90%; background:#ff9800; box-shadow:0 0 10px #ff9800;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="db-card text-center">
                                    <span class="db-label">Safety Score</span>
                                    <div class="db-value mt-2">100.0</div>
                                    <small class="text-info" style="font-size: 10px;">Zero Incidents Recorded</small>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="db-card" style="height: 300px; position: relative;">
                                    <div class="db-label mb-3">Geological Data Feed (Live)</div>
                                    <div class="w-100 h-75 border border-white border-opacity-10 rounded d-flex align-items-center justify-content-center"
                                        style="background: repeating-linear-gradient(0deg, transparent, transparent 19px, rgba(255,255,255,0.03) 20px), repeating-linear-gradient(90deg, transparent, transparent 19px, rgba(255,255,255,0.03) 20px);">
                                        <div class="text-center text-white-50">
                                            <i class="bi bi-graph-up-arrow fs-1 mb-3 text-info"></i>
                                            <p class="small text-uppercase tracking-widest">Awaiting Visual Uplink...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ===================R&D SECTION ================= -->

        <section class="rd-section text-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h6 class="text-info text-uppercase tracking-widest fw-bold mb-3" style="letter-spacing: 5px;">
                            Innovation Lab</h6>
                        <h2 class="display-5 fw-bold">Research & <span style="color: #00f2ff;">Development</span></h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-secondary small mt-lg-4">
                            Our R&D division bridges the gap between theoretical science and industrial application. We
                            are currently holding 14 global patents in autonomous extraction and seismic AI processing.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="rd-card">
                            <span class="rd-patent-badge">Patent #882-AF</span>
                            <div class="rd-icon"><i class="fa-solid fa-microscope"></i></div>
                            <h4 class="fw-bold mb-3">Molecular Analysis</h4>
                            <p class="text-secondary small">Advancing chemical leaching techniques to extract minerals
                                with 30% less environmental toxicity.</p>
                            <div class="rd-stat-box">
                                <small class="text-uppercase text-info tracking-widest" style="font-size: 10px;">Current
                                    Phase</small>
                                <div class="fw-bold">Field Testing 2.0</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="rd-card">
                            <span class="rd-patent-badge">Patent #415-XG</span>
                            <div class="rd-icon"><i class="bi bi-cpu-fill"></i></div>
                            <h4 class="fw-bold mb-3">Seismic AI v4</h4>
                            <p class="text-secondary small">Proprietary machine learning models that interpret satellite
                                gravity data to find deeper reserves.</p>
                            <div class="rd-stat-box">
                                <small class="text-uppercase text-info tracking-widest" style="font-size: 10px;">Success
                                    Rate</small>
                                <div class="fw-bold">92% Precision</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="rd-card">
                            <span class="rd-patent-badge">Collaboration</span>
                            <div class="rd-icon"><i class="bi bi-mortarboard-fill"></i></div>
                            <h4 class="fw-bold mb-3">Academic Grants</h4>
                            <p class="text-secondary small">Partnering with top global universities to sponsor PhD
                                research in sustainable robotics and green mining.</p>
                            <div class="rd-stat-box">
                                <small class="text-uppercase text-info tracking-widest" style="font-size: 10px;">Annual
                                    Budget</small>
                                <div class="fw-bold">$1.2M Allocated</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-4 opacity-50">
                    <div class="col-12 text-center">
                        <small class="text-uppercase tracking-widest mb-4 d-block">Research Partners & Accredited
                            Institutions</small>
                        <div class="d-flex flex-wrap justify-content-center gap-5 grayscale">
                            <span class="h4 fw-bold">TECH-UNI</span>
                            <span class="h4 fw-bold">GEO-LABS</span>
                            <span class="h4 fw-bold">GLOBAL-RES</span>
                            <span class="h4 fw-bold">SCI-FOUND</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============SAFETY SECTION =============== -->
        <section class="safety-section text-white">
            <div class="container">
                <div class="row mb-5 align-items-end">
                    <div class="col-lg-7">
                        <span class="impact-label">Zero-Harm Initiative</span>
                        <h2 class="display-5 fw-bold mt-2">Safety Through <span
                                style="color: #00f2ff;">Automation</span></h2>
                        <p class="text-secondary mt-3">By removing personnel from high-risk excavation zones and
                            utilizing AI-driven hazard detection, we have achieved industry-leading safety benchmarks.
                        </p>
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <span class="safety-badge"><i class="bi bi-shield-check me-2"></i>ISO 45001 Certified</span>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="safety-card">
                            <div class="safety-icon-wrapper">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <div class="safety-stat">90%</div>
                            <h5 class="fw-bold mb-3">Risk Reduction</h5>
                            <p class="text-secondary small">Autonomous haulage fleets have eliminated human presence in
                                heavy traffic mining corridors.</p>
                            <hr class="opacity-10">
                            <small class="text-info text-uppercase tracking-widest" style="font-size: 10px;">Data
                                Source: 2025 Safety Audit</small>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="safety-card">
                            <div class="safety-icon-wrapper">
                                <i class="bi bi-eye"></i>
                            </div>
                            <div class="safety-stat">24/7</div>
                            <h5 class="fw-bold mb-3">AI Surveillance</h5>
                            <p class="text-secondary small">Computer vision systems monitor structural integrity and gas
                                levels in real-time without human entry.</p>
                            <hr class="opacity-10">
                            <small class="text-info text-uppercase tracking-widest" style="font-size: 10px;">Response
                                Time: < 1.2s</small>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="safety-card">
                            <div class="safety-icon-wrapper">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="safety-stat">Zero</div>
                            <h5 class="fw-bold mb-3">Remote Operations</h5>
                            <p class="text-secondary small">Drilling and blasting are now managed from remote command
                                centers 500km away from the site.</p>
                            <hr class="opacity-10">
                            <small class="text-info text-uppercase tracking-widest" style="font-size: 10px;">Unmanned
                                Zones: 14 Active</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection