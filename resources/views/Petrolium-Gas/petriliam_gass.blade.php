@extends('layouts.app')

@section('title', 'Petrolium & Ga | Make with Africa')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pagesCss/petrolium_gas.css') }}">
@endpush

@section('content')

 <!-- Breadcrumb Section -->
        <section class="petro-breadcrumb-header text-white">
            <div class="container petro-breadcrumb-content">
                <div class="row">
                    <div class="col-lg-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-petro-box">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Petroleum & Gas</li>
                            </ol>
                        </nav>

                        <span class="sector-label">Energy Value Chain</span>
                        <h1 class="display-3 fw-bold mb-4">Strategic <span style="color: #ffbf00;">Energy
                                Advisory</span></h1>

                        <p class="lead text-secondary col-md-11 mb-5"
                            style="border-left: 2px solid #ffbf00; padding-left: 30px;">
                            Integrating natural gas and petroleum assets with structured digital intelligence to enable
                            disciplined decision-making across Africa's energy landscape.
                        </p>

                        <div class="d-flex flex-wrap gap-5 mt-4 pt-4 border-top border-white border-opacity-10">
                            <div>
                                <span class="h5 fw-bold d-block mb-1">Upstream</span>
                                <small class="text-uppercase text-white-50 tracking-widest"
                                    style="font-size: 9px;">Exploration & Mapping</small>
                            </div>
                            <div>
                                <span class="h5 fw-bold d-block mb-1">Downstream</span>
                                <small class="text-uppercase text-white-50 tracking-widest"
                                    style="font-size: 9px;">Logistics & Export</small>
                            </div>
                            <div>
                                <span class="h5 fw-bold d-block mb-1">Risk Map</span>
                                <small class="text-uppercase text-white-50 tracking-widest"
                                    style="font-size: 9px;">Jurisdictional Analysis</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ====================live stream section =============== -->

        <section class="petro-pulse-section text-white">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-6">
                        <h2 class="h4 fw-bold mb-0">
                            <span class="status-dot"></span> Real-Time <span style="color: #ffbf00;">Market Pulse</span>
                        </h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <small class="text-secondary text-uppercase tracking-widest" style="font-size: 10px;">
                            Last Update: Feb 13, 2026 | 18:25 GMT
                        </small>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="pulse-card-premium">
                            <span class="ticker-label">Brent Crude Oil</span>
                            <span class="ticker-price">$84.32</span>
                            <span class="ticker-change text-success">+1.24% <i class="bi bi-graph-up"></i></span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="pulse-card-premium">
                            <span class="ticker-label">Natural Gas (HH)</span>
                            <span class="ticker-price">$2.84</span>
                            <span class="ticker-change text-danger">-0.15% <i class="bi bi-graph-down"></i></span>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="pulse-card-premium" style="border-left-color: #00f2ff;">
                            <span class="ticker-label">Jurisdictional Risk Mapping</span>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <small class="d-block text-secondary">West Africa Hub</small>
                                    <span class="fw-bold">Stable (B+)</span>
                                </div>
                                <div class="col-6">
                                    <small class="d-block text-secondary">East Africa Gas</small>
                                    <span class="fw-bold text-info">Growth (A-)</span>
                                </div>
                            </div>
                            <div class="risk-indicator">
                                <small class="text-secondary small">Structured data analysis reduces investment
                                    hazard.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================RISK MAPPING SECTION ============= -->

        <section class="risk-mapping-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-7">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-3"
                            style="color: #ffbf00; letter-spacing: 5px;">Advisory Intelligence</h6>
                        <h2 class="display-5 fw-bold" style="color: #0a192f;">Jurisdictional <span
                                class="text-muted">Risk Mapping</span></h2>
                        <p class="text-secondary mt-3">We deliver insight that enables disciplined decision-making by
                            identifying and mitigating investment hazards in emerging energy markets.</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="hazard-card">
                            <span class="risk-level-indicator level-low">Stable</span>
                            <span class="analysis-label">Regulatory Frameworks</span>
                            <p class="small text-muted mb-0">Analysis of local oil and gas laws, tax codes, and regional
                                governance to ensure long-term compliance.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="hazard-card">
                            <span class="risk-level-indicator level-med">Active Monitoring</span>
                            <span class="analysis-label">Logistics Integrity</span>
                            <p class="small text-muted mb-0">Mapping infrastructure and logistics frameworks to identify
                                bottlenecks in the energy value chain.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="hazard-card">
                            <span class="risk-level-indicator level-low">Verified Data</span>
                            <span class="analysis-label">Natural Asset Mapping</span>
                            <p class="small text-muted mb-0">Integrating digital intelligence with geological data to
                                verify the potential of upstream energy blocks.</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12">
                        <div class="risk-grid-container text-center py-5">
                            <h5 class="fw-bold mb-4">Integrated Multi-Layer Risk Visualization</h5>

                            <p class="text-muted small mt-4 max-width-600 mx-auto">
                                Our work bridges natural asset development with structured data analysis to provide a
                                360° view of the resource landscape.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =================ASSETS SECTION ================== -->
        <section class="asset-portfolio-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-3"
                            style="color: #ffbf00; letter-spacing: 5px;">Managed Assets</h6>
                        <h2 class="display-5 fw-bold text-white">Energy <span style="color: #ffbf00;">Value
                                Chains</span></h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <p class="text-secondary small mb-0 border-start border-warning ps-4">
                            Our energy portfolio bridges high-potential natural assets with the digital intelligence
                            required for disciplined market engagement.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="asset-card-wrapper">
                            <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&q=80&w=1600"
                                class="asset-image" alt="Upstream Asset">
                            <div class="asset-data-overlay">
                                <span class="asset-status-tag">Upstream / Exploration</span>
                                <h3 class="text-white fw-bold mb-3">Offshore Gas Block A-12</h3>
                                <p class="text-secondary col-md-8 small">Utilizing jurisdictional analysis and
                                    geological risk mapping to secure long-term positioning in emerging coastal
                                    reservoirs.</p>
                                <div class="asset-specs">
                                    <div class="spec-item">
                                        <small>Data Verification</small>
                                        <span>98.4% Confidence</span>
                                    </div>
                                    <div class="spec-item">
                                        <small>Jurisdiction</small>
                                        <span>West Africa Hub</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="asset-card-wrapper">
                            <img src="{{ asset('assets/images/Refined_Hub.png') }}" class="asset-image" alt="Midstream Logistics">
                            <div class="asset-data-overlay">
                                <span class="asset-status-tag">Midstream / Logistics</span>
                                <h4 class="text-white fw-bold">Refined Distribution Hub</h4>
                                <div class="asset-specs">
                                    <div class="spec-item">
                                        <small>Network Reach</small>
                                        <span>12 Export Ports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="asset-card-wrapper">
                            <img src="https://images.unsplash.com/photo-1516937941344-00b4e0337589?auto=format&fit=crop&q=80&w=1000"
                                class="asset-image" alt="Infrastructure">
                            <div class="asset-data-overlay">
                                <span class="asset-status-tag">Infrastructure / Digital Intelligence</span>
                                <h4 class="text-white fw-bold">Integrated Terminal Systems</h4>
                                <div class="asset-specs">
                                    <div class="spec-item">
                                        <small>Flow Analysis</small>
                                        <span>Real-Time Monitoring</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================LOGISTICS SECTION =============== -->

        <section class="logistics-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-3"
                            style="color: #0a192f; letter-spacing: 5px;">Integrated Frameworks</h6>
                        <h2 class="display-5 fw-bold" style="color: #0a192f;">Logistics & <span
                                style="color: #ffbf00;">Infrastructure</span></h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-muted small mt-lg-4">
                            SINADAI bridges natural asset development with the infrastructure and logistics frameworks
                            required to secure long-term positioning in the global resource economy.
                        </p>
                    </div>
                </div>

                <div class="row g-4 logistics-flow-wrap">
                    <div class="col-lg-4">
                        <div class="logistics-step-card">
                            <span class="logistics-phase">Phase 01: Midstream</span>
                            <div class="logistics-icon"><i class="bi bi-fuel-pump-diesel"></i></div>
                            <h4 class="fw-bold mb-3">Terminal Operations</h4>
                            <p class="text-muted small">Managing storage and processing terminals through digital
                                intelligence to ensure maximum throughput efficiency.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="logistics-step-card">
                            <span class="logistics-phase">Phase 02: Logistics</span>
                            <div class="logistics-icon"><i class="fa-solid fa-cart-flatbed"></i></div>
                            <h4 class="fw-bold mb-3">Pipeline Integrity</h4>
                            <p class="text-muted small">Utilizing AI-driven structured data analysis to monitor pipeline
                                health and mitigate operational hazards.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="logistics-step-card">
                            <span class="logistics-phase">Phase 03: Export</span>
                            <div class="logistics-icon"><i class="bi bi-globe"></i></div>
                            <h4 class="fw-bold mb-3">Global Distribution</h4>
                            <p class="text-muted small">Coordinating complex supply chains to move energy assets from
                                African reservoirs to international offtakers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection