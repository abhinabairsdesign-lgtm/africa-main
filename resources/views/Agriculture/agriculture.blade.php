@extends('layouts.app')

@section('title', 'Agriculture | Make with Africa')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pagesCss/agriculture.css') }}">
@endpush

@section('content')

 <!-- Agriculture Breadcrumb -->
        <section class="agri-breadcrumb-header text-white">
            <div class="container agri-breadcrumb-content">
                <div class="row">
                    <div class="col-lg-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-agri-box">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agriculture</li>
                            </ol>
                        </nav>

                        <span class="agri-subtitle-badge">Smart Agro-Management</span>
                        <h1 class="display-3 fw-bold">Precision <span style="color: #ffc107;">Agribusiness</span></h1>

                        <p class="text-secondary lead mt-3 col-md-10">
                            Integrating industrial automation and geological soil intelligence to maximize sustainable
                            yields and secure global food supply chains.
                        </p>

                        <div class="mt-4 d-flex gap-4 border-top border-white border-opacity-10 pt-4">
                            <div>
                                <small class="text-white-50 d-block text-uppercase small">Total Farmland</small>
                                <span class="h5 fw-bold">12,500+ Ha</span>
                            </div>
                            <div>
                                <small class="text-white-50 d-block text-uppercase small">Export Markets</small>
                                <span class="h5 fw-bold">24 Nations</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--==============OUR AGRICULTURE DASHBOARD SECTION ================-->
        {{-- <section class="agri-dashboard text-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h2 class="display-5 fw-bold">Live <span style="color: #8bc34a;">Field Telemetry</span></h2>
                        <p class="text-secondary">Real-time monitoring of soil health and climate conditions across our
                            primary plantations.</p>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-lg-end">
                        <div class="d-flex align-items-center bg-dark px-3 py-2 border border-secondary">
                            <span class="status-indicator"></span>
                            <small class="text-uppercase tracking-widest fw-bold" style="font-size: 10px;">Network:
                                Operational</small>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="db-panel">
                            <span class="db-title">Climate Conditions</span>
                            <div class="mb-4">
                                <div class="db-value">28.4<span class="db-unit">°C</span></div>
                                <small class="text-secondary">Ambient Temperature</small>
                            </div>
                            <div class="sensor-grid">
                                <div class="sensor-item">
                                    <div class="fw-bold text-white">62%</div>
                                    <small class="text-secondary" style="font-size: 9px;">Humidity</small>
                                </div>
                                <div class="sensor-item">
                                    <div class="fw-bold text-white">4.2<span style="font-size: 8px;">mm</span></div>
                                    <small class="text-secondary" style="font-size: 9px;">Precipitation</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="db-panel">
                            <span class="db-title">Soil Composition (NPK)</span>
                            <div class="mb-4">
                                <div class="db-value">6.8<span class="db-unit">pH</span></div>
                                <small class="text-secondary">Soil Acidity Levels</small>
                            </div>
                            <div class="sensor-grid">
                                <div class="sensor-item border-start border-info">
                                    <div class="fw-bold text-info">High</div>
                                    <small class="text-secondary" style="font-size: 9px;">Nitrogen (N)</small>
                                </div>
                                <div class="sensor-item border-start border-warning">
                                    <div class="fw-bold text-warning">Optimum</div>
                                    <small class="text-secondary" style="font-size: 9px;">Potassium (K)</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="db-panel">
                            <span class="db-title">AI Yield Forecast</span>
                            <div class="mb-4">
                                <div class="db-value text-success">+12.5<span class="db-unit">%</span></div>
                                <small class="text-secondary">Projected vs Previous Cycle</small>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-between small mb-1">
                                    <span>Harvest Readiness</span>
                                    <span>78%</span>
                                </div>
                                <div class="progress bg-dark" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 78%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="agri-dashboard text-white">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold">
                    Live <span style="color: #8bc34a;">Field Telemetry</span>
                </h2>
                <p class="text-secondary">
                    Real-time monitoring of soil health and climate conditions across our primary plantations.
                </p>
            </div>

            <div class="col-lg-6 d-flex align-items-center justify-content-lg-end">
                <select id="countrySelect" class="form-select w-auto bg-dark text-white border-secondary">
                    <option value="ng">Nigeria</option>
                    <option value="gh">Ghana</option>
                    <option value="ke">Kenya</option>
                    <option value="za">South Africa</option>
                    <option value="eg">Egypt</option>
                    <option value="sn">Senegal</option>
                </select>
            </div>
        </div>

        <div class="row g-4">

            <!-- Climate -->
            <div class="col-lg-4">
                <div class="db-panel">
                    <span class="db-title">Climate Conditions</span>

                    <div class="mb-4">
                        <div class="db-value" id="tempValue">
                            --<span class="db-unit">°C</span>
                        </div>
                        <small class="text-secondary">Ambient Temperature</small>
                    </div>

                    <div class="sensor-grid">
                        <div class="sensor-item">
                            <div class="fw-bold text-white" id="humidityValue">--%</div>
                            <small class="text-secondary" style="font-size: 9px;">Humidity</small>
                        </div>
                        <div class="sensor-item">
                            <div class="fw-bold text-white" id="precipValue">
                                --<span style="font-size: 8px;">mm</span>
                            </div>
                            <small class="text-secondary" style="font-size: 9px;">Precipitation</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Soil -->
            <div class="col-lg-4">
                <div class="db-panel">
                    <span class="db-title">Soil Composition (Simulated)</span>

                    <div class="mb-4">
                        <div class="db-value" id="phValue">
                            --<span class="db-unit">pH</span>
                        </div>
                        <small class="text-secondary">Soil Acidity Levels</small>
                    </div>

                    <div class="sensor-grid">
                        <div class="sensor-item border-start border-info">
                            <div class="fw-bold text-info" id="nitrogenValue">--</div>
                            <small class="text-secondary" style="font-size: 9px;">Nitrogen (N)</small>
                        </div>
                        <div class="sensor-item border-start border-warning">
                            <div class="fw-bold text-warning" id="potassiumValue">--</div>
                            <small class="text-secondary" style="font-size: 9px;">Potassium (K)</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Yield -->
            <div class="col-lg-4">
                <div class="db-panel">
                    <span class="db-title">AI Yield Forecast</span>

                    <div class="mb-4">
                        <div class="db-value text-success" id="yieldValue">
                            --<span class="db-unit">%</span>
                        </div>
                        <small class="text-secondary">Projected vs Previous Cycle</small>
                    </div>

                    <div class="mt-4">
                        <div class="d-flex justify-content-between small mb-1">
                            <span>Harvest Readiness</span>
                            <span id="harvestPercent">--%</span>
                        </div>
                        <div class="progress bg-dark" style="height: 4px;">
                            <div class="progress-bar bg-success"
                                 id="harvestBar"
                                 style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

        <!--============aGRI PILLARS SECTION =============-->

        <section class="agri-pillars text-white">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-lg-7">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-3"
                            style="color: #8bc34a; letter-spacing: 5px;">Innovation Core</h6>
                        <h2 class="display-5 fw-bold">Agro-Tech <span style="color: #8bc34a;">Pillars</span></h2>
                        <div class="mx-auto mt-3" style="width: 50px; height: 3px; background: #8bc34a;"></div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="agri-pillar-card">
                            <span class="pillar-tag">Intelligence</span>
                            <div class="pillar-icon-agri">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <h4 class="fw-bold mb-3">AI Discovery</h4>
                            <p class="text-secondary small">Deep-learning algorithms analyze soil data to predict crop
                                yields with unmatched precision.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="agri-pillar-card">
                            <span class="pillar-tag">Automation</span>
                            <div class="pillar-icon-agri">
                                <i class="bi bi-robot"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Autonomous</h4>
                            <p class="text-secondary small">Remote-controlled harvesters and self-driving tractors
                                operating 24/7 across plantations.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="agri-pillar-card">
                            <span class="pillar-tag">Connectivity</span>
                            <div class="pillar-icon-agri">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <h4 class="fw-bold mb-3">IoT Sensors</h4>
                            <p class="text-secondary small">Real-time mesh networks monitoring soil moisture and plant
                                health at the root level.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="agri-pillar-card">
                            <span class="pillar-tag">Sustainability</span>
                            <div class="pillar-icon-agri">
                                <i class="bi bi-droplet-half"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Precision Irrigation</h4>
                            <p class="text-secondary small">AI-controlled water management systems that reduce waste by
                                40% while increasing growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============CORP PORTFOLIO ==============-->

        <section class="crop-portfolio-section">
            <div class="container">
                <div class="row mb-5 align-items-end">
                    <div class="col-lg-6">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-2"
                            style="color: #8bc34a; letter-spacing: 4px;">Global Exports</h6>
                        <h2 class="display-5 fw-bold" style="color: #0b1a10;">Primary <span style="color: #8bc34a;">Crop
                                Assets</span></h2>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <p class="text-muted small border-start border-3 border-success ps-3 d-inline-block text-start">
                            High-yield, sustainable production focused on international quality standards and long-term
                            food security.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="crop-card">
                            <div class="crop-img-box">
                                <img src="https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?auto=format&fit=crop&q=80&w=800"
                                    alt="Grains">
                                <span class="crop-badge">Active Harvest</span>
                            </div>
                            <div class="crop-info">
                                <span class="crop-category">Cereals & Grains</span>
                                <h4 class="crop-title">Winter Wheat v.4</h4>
                                <p class="text-muted small">Optimized for high-protein content and drought resistance
                                    through precision soil management.</p>
                                <div class="crop-stats">
                                    <div class="stat-item">
                                        <span>Yield/Ha</span>
                                        <strong>7.2 Tons</strong>
                                    </div>
                                    <div class="stat-item text-end">
                                        <span>Export Grade</span>
                                        <strong>Grade A+</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="crop-card">
                            <div class="crop-img-box">
                                <img src="https://images.unsplash.com/photo-1544965850-6f8a66788f9b?auto=format&fit=crop&q=80&w=800"
                                    alt="Cocoa">
                                <span class="crop-badge">Export Only</span>
                            </div>
                            <div class="crop-info">
                                <span class="crop-category">Soft Commodities</span>
                                <h4 class="crop-title">Premium Cocoa</h4>
                                <p class="text-muted small">Sourced from sustainable agro-forestry blocks with full
                                    blockchain traceability for European markets.</p>
                                <div class="crop-stats">
                                    <div class="stat-item">
                                        <span>Annual Prod.</span>
                                        <strong>1,200 MT</strong>
                                    </div>
                                    <div class="stat-item text-end">
                                        <span>Certification</span>
                                        <strong>FairTrade</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="crop-card">
                            <div class="crop-img-box">
                                <img src="{{ asset('assets/images/soyabin.png') }}"
                                    alt="Soybeans">
                                <span class="crop-badge">Industrial Use</span>
                            </div>
                            <div class="crop-info">
                                <span class="crop-category">Oilseeds</span>
                                <h4 class="crop-title">Industrial Soy</h4>
                                <p class="text-muted small">High-oil content soybeans primarily utilized for bio-fuel
                                    energy production and industrial processing.</p>
                                <div class="crop-stats">
                                    <div class="stat-item">
                                        <span>Oil Content</span>
                                        <strong>22%</strong>
                                    </div>
                                    <div class="stat-item text-end">
                                        <span>Sustainability</span>
                                        <strong>Zero-Defor</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--===============reclaim-section================-->

        <section class="reclaim-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h6 class="text-success text-uppercase tracking-widest fw-bold mb-3"
                            style="letter-spacing: 5px;">Environmental Stewardship</h6>
                        <h2 class="display-5 fw-bold" style="color: #0b1a10;">From Pit to <span
                                class="text-success">Plantation</span></h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-muted small mt-lg-4">
                            Our ecological restoration program ensures that every hectare of land utilized for mineral
                            extraction is returned to a state of high-yield agricultural productivity.
                        </p>
                    </div>
                </div>

                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="reclaim-visual-box">
                            <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=1200"
                                class="img-fluid" alt="Reclaimed Land">
                            <div class="p-3 bg-dark text-white text-center mt-3">
                                <small class="text-uppercase tracking-widest fw-bold"
                                    style="font-size: 10px;">Transformation Status: 100% Reclaimed (Block A-4)</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex flex-column gap-3">
                            <div class="reclaim-card">
                                <span class="process-step">Phase 01: Stabilization</span>
                                <h4 class="reclaim-title">Soil Engineering & Grading</h4>
                                <p class="text-muted small mb-0">Re-contouring the landscape to its natural topography
                                    and stabilizing slopes to prevent erosion.</p>
                            </div>
                            <div class="reclaim-card">
                                <span class="process-step">Phase 02: Enrichment</span>
                                <h4 class="reclaim-title">Bio-Fertilization</h4>
                                <p class="text-muted small mb-0">Applying organic nutrients and proprietary microbial
                                    agents to restore soil microbiome and pH levels.</p>
                            </div>
                            <div class="reclaim-card">
                                <span class="process-step">Phase 03: Cultivation</span>
                                <h4 class="reclaim-title">Sustainable Re-Seeding</h4>
                                <p class="text-muted small mb-0">Planting cover crops followed by primary agricultural
                                    assets like grains or cocoa to finalize the restoration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =================Supply Chain SECTION================ -->
        <section class="supply-chain-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h6 class="text-uppercase tracking-widest fw-bold mb-3"
                            style="color: #8bc34a; letter-spacing: 5px;">Seed to Shelf</h6>
                        <h2 class="display-5 fw-bold">Integrated <span style="color: #8bc34a;">Supply Chain</span></h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <p class="text-secondary small mb-0 border-start border-success ps-4">
                            Our end-to-end logistics infrastructure ensures that every crop maintains its peak
                            nutritional value from the moment of harvest until it reaches the global consumer.
                        </p>
                    </div>
                </div>

                <div class="row g-4 sc-flow-container">
                    <div class="col-lg-3 col-md-6">
                        <div class="sc-card">
                            <span class="sc-step-num">01</span>
                            <span class="sc-label">Harvesting</span>
                            <div class="sc-icon-box"><i class="bi bi-truck-flatbed"></i></div>
                            <h5 class="fw-bold mb-3">Precision Collection</h5>
                            <p class="text-secondary small">Autonomous harvesters collect crops at the peak of maturity,
                                reducing post-harvest losses by 15%.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="sc-card">
                            <span class="sc-step-num">02</span>
                            <span class="sc-label">Processing</span>
                            <div class="sc-icon-box"><i class="bi bi-gear-wide-connected"></i></div>
                            <h5 class="fw-bold mb-3">Smart Sorting</h5>
                            <p class="text-secondary small">AI-powered optical sorters categorize produce by size,
                                color, and quality grade for specific market tiers.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="sc-card">
                            <span class="sc-step-num">03</span>
                            <span class="sc-label">Storage</span>
                            <div class="sc-icon-box"><i class="bi bi-snow"></i></div>
                            <h5 class="fw-bold mb-3">Cold-Chain Hubs</h5>
                            <p class="text-secondary small">IoT-monitored climate-controlled facilities preserve
                                freshness and extend shelf life for long-distance export.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="sc-card">
                            <span class="sc-step-num">04</span>
                            <span class="sc-label">Logistics</span>
                            <div class="sc-icon-box"><i class="bi bi-globe-americas"></i></div>
                            <h5 class="fw-bold mb-3">Global Export</h5>
                            <p class="text-secondary small">Strategic partnerships with major ports and freight carriers
                                ensure rapid delivery to our 24 international markets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =================R & D PARTNERS =================== -->

        <section class="agri-rd-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h6 class="text-success text-uppercase tracking-widest fw-bold mb-3"
                            style="letter-spacing: 5px;">Future Growth</h6>
                        <h2 class="display-5 fw-bold" style="color: #0b1a10;">Research & <span
                                style="color: #8bc34a;">Development</span></h2>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <p class="text-muted small border-start border-3 border-success ps-4">
                            Our agricultural research division focuses on enhancing crop resilience and nutritional
                            density through proprietary bio-genetics and soil science.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="rd-innovation-card">
                            <i class="bi bi-droplet-fill rd-icon-lab"></i>
                            <h4 class="fw-bold mb-3">Drought Resilience</h4>
                            <p class="text-muted small">Developing seed variants that require 30% less water while
                                maintaining peak metabolic health in arid climates.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="rd-innovation-card">
                            <i class="bi bi-bug-fill rd-icon-lab"></i>
                            <h4 class="fw-bold mb-3">Bio-Pesticides</h4>
                            <p class="text-muted small">Researching organic, microbial-based solutions to eliminate
                                pests without the use of harmful synthetic chemicals.</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="rd-innovation-card">
                            <i class="bi bi-diagram-3-fill rd-icon-lab"></i>
                            <h4 class="fw-bold mb-3">Nutrient Mapping</h4>
                            <p class="text-muted small">Utilizing AI to map subterranean nutrient flows, allowing for
                                micro-dosing of organic fertilizers.</p>
                        </div>
                    </div>
                </div>

                <div class="partner-slider-wrap text-center">
                    <small class="text-uppercase tracking-widest text-muted mb-5 d-block">Institutional Partners &
                        Global Offtakers</small>
                    <div class="d-flex flex-wrap justify-content-around align-items-center gap-4">
                        <span class="partner-logo-grayscale h4 mb-0">AGRO-GLOBAL</span>
                        <span class="partner-logo-grayscale h4 mb-0">BIO-TECH LABS</span>
                        <span class="partner-logo-grayscale h4 mb-0">NATURA-FOODS</span>
                        <span class="partner-logo-grayscale h4 mb-0">GOVT-AGRI</span>
                        <span class="partner-logo-grayscale h4 mb-0">UN-FOODSEC</span>
                    </div>
                </div>
            </div>
        </section>
@endsection
@push('scripts')

<script>
async function loadFieldTelemetry() {

    const country = document.getElementById('countrySelect').value;

    try {
        const res = await fetch(`/api/field-telemetry?country=${country}`);
        const data = await res.json();

        if (!data.success) return;

        // Climate
        document.getElementById('tempValue').innerHTML =
            data.temperature + '<span class="db-unit">°C</span>';

        document.getElementById('humidityValue').innerText =
            data.humidity + '%';

        document.getElementById('precipValue').innerHTML =
            data.precip + '<span style="font-size:8px;">mm</span>';

        // Simulated Soil Data
        const ph = (6 + (data.humidity / 100)).toFixed(1);
        document.getElementById('phValue').innerHTML =
            ph + '<span class="db-unit">pH</span>';

        document.getElementById('nitrogenValue').innerText =
            data.humidity > 60 ? 'High' : 'Moderate';

        document.getElementById('potassiumValue').innerText =
            data.temperature > 25 ? 'Optimum' : 'Low';

        // AI Yield Forecast
        const yieldForecast = Math.min(20, (data.temperature / 2)).toFixed(1);
        document.getElementById('yieldValue').innerHTML =
            '+' + yieldForecast + '<span class="db-unit">%</span>';

        const harvest = Math.min(100, data.humidity + 20);
        document.getElementById('harvestPercent').innerText =
            harvest + '%';

        document.getElementById('harvestBar').style.width =
            harvest + '%';

    } catch (error) {
        console.error('Telemetry error:', error);
    }
}

// Reload when country changes
document.getElementById('countrySelect')
    .addEventListener('change', loadFieldTelemetry);

document.addEventListener('DOMContentLoaded', loadFieldTelemetry);
</script>
    
@endpush