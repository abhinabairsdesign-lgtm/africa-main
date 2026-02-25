@extends('layouts.app')

@section('title', 'Mining | Make with Africa')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pagesCss/mining.css') }}">
@endpush

@section('content')

    <section class="mining-header text-white">
        <div class="container mining-content">
            <div class="row">
                <div class="col-lg-7">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-mining-box">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mining & Minerals</li>
                        </ol>
                    </nav>

                    <span class="mining-label">Mineral Asset Development</span>
                    <h1 class="display-3 fw-bold mb-4">Geological <span style="color: #d4af37;">Intelligence</span>
                        & Strategy</h1>

                    <p class="lead text-secondary col-md-11 mb-5"
                        style="border-left: 3px solid rgba(212, 175, 55, 0.5); padding-left: 25px;">
                        We bridge the gap between raw mineral extraction and structured digital data, providing the
                        jurisdictional analysis required for disciplined investment in Africa's resource economy.
                    </p>

                    <div class="d-flex flex-wrap gap-5 mt-5 pt-3 border-top border-white border-opacity-10">
                        <div>
                            <span class="h4 fw-bold d-block mb-1">98.2%</span>
                            <small class="text-uppercase text-white-50 tracking-widest" style="font-size: 9px;">Geological
                                Confidence</small>
                        </div>
                        <div>
                            <span class="h4 fw-bold d-block mb-1">Verified</span>
                            <small class="text-uppercase text-white-50 tracking-widest"
                                style="font-size: 9px;">Jurisdictional Data</small>
                        </div>
                        <div>
                            <span class="h4 fw-bold d-block mb-1">Active</span>
                            <small class="text-uppercase text-white-50 tracking-widest" style="font-size: 9px;">Resource
                                Mapping</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =================== PALUSE SECTION ================== -->
    {{-- <section class="mineral-pulse-section">
            <div class="container">
                <div class="row mb-4 align-items-center">
                    <div class="col-md-6">
                        <h3 class="h5 fw-bold text-white mb-0">
                            <span
                                style="display:inline-block; width:10px; height:10px; background:#d4af37; border-radius:50%; margin-right:10px; box-shadow: 0 0 10px #d4af37;"></span>
                            Live <span style="color: #d4af37;">Mineral Tickers</span>
                        </h3>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <span class="pulse-meta">Market Data: Structured Intelligence Feed</span>
                    </div>
                </div>

                <div class="pulse-grid">
                    <div class="pulse-card-mining">
                        <span class="ticker-name">Gold (XAU/USD)</span>
                        <span class="ticker-val">$2,042.15</span>
                        <span class="ticker-status text-success">+0.42% <i class="bi bi-caret-up-fill"></i></span>
                    </div>

                    <div class="pulse-card-mining">
                        <span class="ticker-name">Lithium Carbonate</span>
                        <span class="ticker-val">$13,500</span>
                        <span class="ticker-status text-danger">-1.12% <i class="bi bi-caret-down-fill"></i></span>
                    </div>

                    <div class="pulse-card-mining">
                        <span class="ticker-name">Copper (LME)</span>
                        <span class="ticker-val">$8,412.50</span>
                        <span class="ticker-status text-success">+0.85% <i class="bi bi-caret-up-fill"></i></span>
                    </div>

                    <div class="pulse-card-mining" style="border-top-color: #ffffff;">
                        <span class="ticker-name">Risk Index: West Africa</span>
                        <span class="ticker-val">74.2</span>
                        <span class="ticker-status text-info">Stable</span>
                    </div>
                </div>
            </div>
        </section> --}}

    <section class="mineral-pulse-section">
        <div class="container">

            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <h3 class="h5 fw-bold text-white mb-0">
                        <span
                            style="display:inline-block;width:10px;height:10px;background:#d4af37;border-radius:50%;margin-right:10px;box-shadow:0 0 10px #d4af37;"></span>
                        Live <span style="color:#d4af37;">Mineral Tickers</span>
                    </h3>
                </div>
                <div class="col-md-6 text-md-end">
                    <span class="pulse-meta" id="mineralUpdated">
                        Market Data: Structured Intelligence Feed
                    </span>
                </div>
            </div>

            <div class="pulse-grid">

                <div class="pulse-card-mining">
                    <span class="ticker-name">Gold (Ghana, Mali)</span>
                    <span class="ticker-val" id="goldPrice">$--</span>
                    <span class="ticker-status text-success" id="goldChange"></span>
                </div>

                <div class="pulse-card-mining">
                    <span class="ticker-name">Sliver (Namibia, Morocco)</span>
                    <span class="ticker-val" id="copperPrice">$--</span>
                    <span class="ticker-status text-success" id="copperChange"></span>
                </div>

                <div class="pulse-card-mining" style="border-top-color: #ffffff;">
                    <span class="ticker-name">Risk Index: West Africa</span>
                    <span class="ticker-val" id="riskIndex">--</span>
                    <span class="ticker-status text-info" id="riskLabel"></span>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================PORTFOLIO SECTION ================ -->

    <section class="mineral-portfolio">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <h6 class="text-uppercase tracking-widest fw-bold mb-3" style="color: #8892b0; letter-spacing: 5px;">
                        Natural Asset Portfolio</h6>
                    <h2 class="display-5 fw-bold" style="color: #0a192f;">Critical & <span style="color: #d4af37;">Precious
                            Minerals</span></h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="mineral-card">
                        <div class="mineral-img-container">
                            <img src="https://images.unsplash.com/photo-1610375229632-c7158c35a537?auto=format&fit=crop&q=80&w=1200"
                                alt="Gold Mining">
                        </div>
                        <div class="mineral-body">
                            <span class="asset-category">Precious Metals</span>
                            <h3 class="asset-title">Gold Asset Development</h3>
                            <p class="text-muted small">Integrating geological intelligence with structured market
                                research to optimize high-yield extraction in West African gold blocks.</p>
                            <div class="asset-stats-grid">
                                <div class="stat-box">
                                    <small>Risk Level</small>
                                    <span>Low (Stable)</span>
                                </div>
                                <div class="stat-box">
                                    <small>Data Confidence</small>
                                    <span>98% Verified</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mineral-card">
                        <div class="mineral-img-container">
                            <img src="{{ asset('assets/images/mining-2.jpg') }}" alt="Lithium Mining">
                        </div>
                        <div class="mineral-body">
                            <span class="asset-category">Critical Minerals</span>
                            <h3 class="asset-title">Lithium Value Chains</h3>
                            <p class="text-muted small">Coordinating strategic energy mineral portfolios to secure
                                long-term positioning for investors in the global battery economy.</p>
                            <div class="asset-stats-grid">
                                <div class="stat-box">
                                    <small>Jurisdiction</small>
                                    <span>East Africa Hub</span>
                                </div>
                                <div class="stat-box">
                                    <small>Analysis Status</small>
                                    <span>Active Mapping</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==================RISK MAPPING SECTION =================== -->

    <section class="mining-risk-map text-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h6 class="text-uppercase tracking-widest fw-bold mb-3" style="color: #d4af37; letter-spacing: 5px;">
                        Strategic Advisory</h6>
                    <h2 class="display-5 fw-bold">Jurisdictional <span class="text-secondary">Risk Mapping</span>
                    </h2>
                    <p class="text-secondary mt-4">In emerging markets, clarity reduces risk. We deliver insight
                        that enables disciplined decision-making and long-term positioning.</p>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="risk-layer-card">
                        <span class="risk-level-tag">STABLE</span>
                        <span class="risk-index-label">Layer 01: Regulatory</span>
                        <h5 class="fw-bold mb-2">Legal & Tax Frameworks</h5>
                        <p class="small text-secondary mb-0">Analysis of jurisdictional mining codes and local
                            content policies to ensure institutional compliance.</p>
                    </div>

                    <div class="risk-layer-card" style="border-left-color: #00f2ff;">
                        <span class="risk-level-tag">ACTIVE</span>
                        <span class="risk-index-label">Layer 02: Infrastructure</span>
                        <h5 class="fw-bold mb-2">Logistics Integrity Mapping</h5>
                        <p class="small text-secondary mb-0">Assessing the infrastructure frameworks required to
                            move mineral assets to global markets.</p>
                    </div>

                    <div class="risk-layer-card" style="border-left-color: #ffffff;">
                        <span class="risk-level-tag">VERIFIED</span>
                        <span class="risk-index-label">Layer 03: Geological</span>
                        <h5 class="fw-bold mb-2">Natural Asset Verification</h5>
                        <p class="small text-secondary mb-0">Bridging digital intelligence with geological data to
                            reduce extraction uncertainty.</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="map-visualization-area h-100 d-flex flex-column justify-content-center text-center">
                        <div class="mb-4">
                            <i class="bi bi-shield-shaded display-1" style="color: #d4af37;"></i>
                        </div>
                        <h4 class="fw-bold">Multi-Layer Intelligence Feed</h4>
                        <p class="text-secondary small max-width-500 mx-auto mt-2 intell-feed">

                            http://googleusercontent.com/map_location_reference/1
                            Integrating [Organisation of African Geological
                            Surveys](http://googleusercontent.com/map_location_reference/0) data and jurisdictional
                            insights from specialized firms like [MMRisk (Pty)
                            Ltd](http://googleusercontent.com/map_location_reference/2) to provide a 360° resource
                            landscape.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==================MINING VALUE CHAIN SECTION ================== -->

    <section class="value-chain-section">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <h6 class="text-uppercase tracking-widest fw-bold mb-3" style="color: #d4af37; letter-spacing: 5px;">
                        Operational Strategy</h6>
                    <h2 class="display-5 fw-bold" style="color: #0a192f;">The Mineral <span class="text-muted">Value
                            Chain</span></h2>
                    <p class="text-muted mt-3">Coordinating every stage of resource development through structured
                        data analysis and strategic advisory.</p>
                </div>
            </div>

            <div class="chain-container">
                <div class="chain-node">
                    <div class="node-icon"><i class="bi bi-search"></i></div>
                    <span class="node-title">Exploration</span>
                    <p class="node-desc">Utilizing geological intelligence to identify high-potential assets.</p>
                </div>

                <div class="chain-node">
                    <div class="node-icon"><i class="bi bi-bar-chart-line"></i></div>
                    <span class="node-title">Risk Analysis</span>
                    <p class="node-desc">Jurisdictional risk mapping to reduce investment hazard.</p>
                </div>

                <div class="chain-node">
                    <div class="node-icon"><i class="bi bi-tools"></i></div>
                    <span class="node-title">Extraction</span>
                    <p class="node-desc">Implementing autonomous machinery and tech pilots.</p>
                </div>

                <div class="chain-node">
                    <div class="node-icon"><i class="bi bi-truck"></i></div>
                    <span class="node-title">Logistics</span>
                    <p class="node-desc">Bridging assets with secure infrastructure frameworks.</p>
                </div>

                <div class="chain-node">
                    <div class="node-icon"><i class="bi bi-globe"></i></div>
                    <span class="node-title">Global Export</span>
                    <p class="node-desc">Strategic coordination for international market positioning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================RECLAMATION section ============== -->

    <section class="reclamation-section">
        <div class="container">
            <div class="row mb-5 align-items-end">
                <div class="col-lg-7">
                    <span class="esg-badge mb-3 d-inline-block">ESG Integrity</span>
                    <h2 class="display-5 fw-bold" style="color: #0a192f;">Land <span
                            style="color: #10b981;">Reclamation</span></h2>
                    <p class="text-muted mt-3">We ensure that natural asset development is paired with rigorous land
                        restoration standards, ensuring long-term prosperity for the communities we serve.</p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <p class="small text-secondary">Commitment: 100% environmental integrity post-operation.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="reclamation-card">
                        <i class="bi bi-recycle eco-icon"></i>
                        <h4 class="fw-bold mb-3">Soil Rehabilitation</h4>
                        <p class="small text-muted">Utilizing digital intelligence to monitor soil pH and nutrient
                            density, returning mined land to high-yield agricultural potential.</p>
                        <div class="reclamation-progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                        <span class="small fw-bold">Restoration Standard: ISO 14001</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="reclamation-card">
                        <i class="bi bi-tree eco-icon"></i>
                        <h4 class="fw-bold mb-3">Biodiversity Recovery</h4>
                        <p class="small text-muted">Implementing structured reforestation programs to restore local
                            ecosystems and maintain regional ecological balance.</p>
                        <div class="reclamation-progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                        <span class="small fw-bold">Active Mapping: 100% Recovery</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="reclamation-card">
                        <i class="bi bi-people eco-icon"></i>
                        <h4 class="fw-bold mb-3">Agro-Transition</h4>
                        <p class="small text-muted">Bridging mining value chains with agricultural growth systems to
                            provide sustainable livelihoods post-extraction.</p>
                        <div class="reclamation-progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                        <span class="small fw-bold">Strategy: Long-Term Positioning</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================sustainablity and ESG ============== -->

    <section class="esg-section py-5">
        <div class="container py-5">

            <div class="row mb-5 align-items-end">
                <div class="col-lg-8 border-start border-4 border-success ps-4">
                    <h6 class="text-uppercase tracking-widest fw-bold text-success mb-2" style="letter-spacing: 3px;">ESG
                        Commitment</h6>
                    <h2 class="display-5 fw-bold mb-0">Building a <span class="text-gradient">Green Mining</span>
                        Legacy</h2>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <p class="text-secondary small italic">Leading the transition toward ethical and sustainable
                        mineral extraction in Africa.</p>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="esg-card">
                        <div class="icon-box icon-env">
                            <i class="bi bi-tree-fill fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Environmental</h4>
                        <p class="text-secondary small">Reducing ecological footprints through carbon capture
                            technology and advanced water recycling systems.</p>
                        <hr class="opacity-10">
                        <div class="d-flex justify-content-between text-success fw-bold small">
                            <span>Net Zero Goal</span>
                            <span>2035</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="esg-card">
                        <div class="icon-box icon-soc">
                            <i class="bi bi-people-fill fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Social</h4>
                        <p class="text-secondary small">Empowering local communities by funding schools, healthcare
                            centers, and clean water infrastructure.</p>
                        <hr class="opacity-10">
                        <div class="d-flex justify-content-between text-primary fw-bold small">
                            <span>Local Employment</span>
                            <span>85%</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="esg-card">
                        <div class="icon-box icon-gov">
                            <i class="bi bi-shield-check fs-3"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Governance</h4>
                        <p class="text-secondary small">Maintaining absolute transparency and ethics in our
                            operations through independent international audits.</p>
                        <hr class="opacity-10">
                        <div class="d-flex justify-content-between text-warning fw-bold small">
                            <span>Corruption Index</span>
                            <span>Zero</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="metrics-bar d-flex flex-wrap justify-content-around align-items-center">
                <div class="text-center px-3">
                    <h3 class="fw-bold mb-0">45%</h3>
                    <small class="text-uppercase text-secondary tracking-widest" style="font-size: 10px;">Renewable
                        Power</small>
                </div>
                <div class="stat-divider"></div>
                <div class="text-center px-3">
                    <h3 class="fw-bold mb-0">$2.4M</h3>
                    <small class="text-uppercase text-secondary tracking-widest" style="font-size: 10px;">Community
                        Grants</small>
                </div>
                <div class="stat-divider"></div>
                <div class="text-center px-3">
                    <h3 class="fw-bold mb-0">12k+</h3>
                    <small class="text-uppercase text-secondary tracking-widest" style="font-size: 10px;">Land
                        Reclaimed (Ha)</small>
                </div>
            </div>

        </div>
    </section>


    <!-- ====================OUR NEWS SECTION ============ -->

    <section class="news-section py-5">
        <div class="container py-5">

            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="display-6 fw-bold">Market <span class="text-primary">Intelligence</span></h2>
                    <p class="text-muted">Exclusive analysis and latest news from the global mining frontier.</p>
                </div>
                <div class="col-md-6 text-md-end d-flex align-items-center justify-content-md-end">
                    <a href="#" class="btn btn-outline-dark px-4 py-2 rounded-pill fw-bold">View All News</a>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-lg-4">
                    <div class="news-card card h-100">
                        <div class="news-img-wrapper position-relative">
                            <span class="category-badge">Market Analysis</span>
                            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&q=80&w=800"
                                alt="Mining Tech">
                        </div>
                        <div class="card-body p-4">
                            <span class="news-date">February 12, 2026</span>
                            <h5 class="fw-bold mb-3">Copper: The Backbone of AI and Global Electrification</h5>
                            <p class="text-muted small">How surging data center demand is reshaping the copper
                                supply chain in early 2026.</p>
                            <a href="#" class="read-more-link mt-2">Read Article <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="news-card card h-100">
                        <div class="news-img-wrapper position-relative">
                            <span class="category-badge">Technology</span>
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                                alt="Autonomous Fleets">
                        </div>
                        <div class="card-body p-4">
                            <span class="news-date">February 10, 2026</span>
                            <h5 class="fw-bold mb-3">The Tipping Point for Autonomous Haulage Efficiency</h5>
                            <p class="text-muted small">New engineering breakthroughs are delivering 15% cost
                                savings for deep-pit operations.</p>
                            <a href="#" class="read-more-link mt-2">Read Article <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="news-card card h-100">
                        <div class="news-img-wrapper position-relative">
                            <span class="category-badge">ESG Update</span>
                            <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&q=80&w=800"
                                alt="Sustainability">
                        </div>
                        <div class="card-body p-4">
                            <span class="news-date">February 08, 2026</span>
                            <h5 class="fw-bold mb-3">2026 ESG Index: Benchmarking the Future of Mining</h5>
                            <p class="text-muted small">Evaluating the top 60 mining firms on their carbon-neutral
                                transition milestones.</p>
                            <a href="#" class="read-more-link mt-2">Read Article <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
@push('scripts')
    {{-- <script>
        // Counter Animation
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const speed = 200;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const filterBtns = document.querySelectorAll('.filter-btn');
            const cards = document.querySelectorAll('.opp-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // 1. Remove 'active' class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // 2. Add 'active' class to the clicked button
                    btn.classList.add('active');

                    // 3. Get the filter value (e.g., "precious" or "all")
                    const filterValue = btn.getAttribute('data-filter');

                    // 4. Show/Hide Cards
                    cards.forEach(card => {
                        const category = card.getAttribute('data-category');

                        if (filterValue === 'all' || filterValue === category) {
                            card.style.display = 'block'; // Show
                            // Optional: Add a fade-in animation
                            card.style.animation = 'fadeIn 0.5s ease';
                        } else {
                            card.style.display = 'none'; // Hide
                        }
                    });
                });
            });
        });
    </script>
    <script>
        async function loadAfricaMinerals() {
            const res = await fetch('/api/africa-minerals');
            const json = await res.json();

            if (!json.success) return;

            const d = json.data;

            // document.getElementById('goldPrice').innerText =
            //     '$' + d.gold.toLocaleString();
                        document.getElementById('goldPrice').innerText =
            d.gold ? 'R ' + Number(d.gold).toLocaleString() : 'N/A';

            document.getElementById('copperPrice').innerText =
            d.silver ? 'R ' + Number(d.silver).toLocaleString() : 'N/A';

            // document.getElementById('copperPrice').innerText =   
            //     '$' + d.silver.toLocaleString();

            document.getElementById('riskIndex').innerText =    
                d.risk_index;

            document.getElementById('riskLabel').innerText =
                d.risk_label;

            document.getElementById('mineralUpdated').innerText =
                'Last Update: ' + d.updated;
        }

        document.addEventListener('DOMContentLoaded', loadAfricaMinerals);
    </script>
@endpush
