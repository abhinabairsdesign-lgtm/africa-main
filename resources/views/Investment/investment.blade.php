@extends('layouts.app')

@section('title', 'Investment | Make with Africa')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pagesCss/investment.css') }}">
@endpush

@section('content')

<!-- ==============investment breadcrum section ============== -->
        <section class="investment-header text-white">
            <div class="container investment-content">
                <div class="row">
                    <div class="col-lg-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-investment-box">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Investment Intelligence</li>
                            </ol>
                        </nav>

                        <span class="invest-label">Strategic Advisory</span>
                        <h1 class="display-3 fw-bold mb-4">Disciplined <span
                                style="color: #ffbf00;">Decision-Making</span></h1>

                        <p class="lead text-secondary col-md-11 mb-5"
                            style="border-left: 2px solid rgba(255, 191, 0, 0.6); padding-left: 30px;">
                            In emerging markets, clarity reduces risk. We provide structured market research and
                            jurisdictional analysis to support institutions engaging in Africa’s resource economy.
                        </p>

                        <div class="d-flex flex-wrap gap-5 mt-5 pt-4 border-top border-white border-opacity-10">
                            <div>
                                <span class="h4 fw-bold d-block mb-1">24</span>
                                <small class="text-uppercase text-white-50 tracking-widest"
                                    style="font-size: 9px;">Export Markets Analyzed</small>
                            </div>
                            <div>
                                <span class="h4 fw-bold d-block mb-1">98%</span>
                                <small class="text-uppercase text-white-50 tracking-widest" style="font-size: 9px;">Data
                                    Verification Rate</small>
                            </div>
                            <div>
                                <span class="h4 fw-bold d-block mb-1">A- / B+</span>
                                <small class="text-uppercase text-white-50 tracking-widest" style="font-size: 9px;">Avg.
                                    Jurisdictional Stability</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- =========esg section ========== -->

        <section class="esg-container">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="text-warning text-uppercase tracking-widest fw-bold mb-3"
                            style="letter-spacing: 4px;">Responsible Mining</h6>
                        <h2 class="display-5 fw-bold text-white">Our <span class="text-warning">ESG</span> Standards
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="text-secondary border-start border-warning ps-4">
                            Integrating ethical governance and environmental stewardship into every extraction project.
                            We focus on long-term sustainability over short-term yields.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="esg-card-premium">
                            <div class="esg-icon-circle">
                                <i class="bi bi-moisture fs-3"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Environmental</h4>
                            <p class="text-secondary small mb-4">Implementing 100% water recycling and reforestation
                                programs to restore local biodiversity post-extraction.</p>
                            <div class="mt-auto">
                                <div class="stat-label">Carbon Offset</div>
                                <div class="h4 fw-bold text-white">45,000 Tons</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="esg-card-premium">
                            <div class="esg-icon-circle">
                                <i class="bi bi-people-fill fs-3"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Social Impact</h4>
                            <p class="text-secondary small mb-4">Investing in local infrastructure, education, and
                                healthcare to empower the communities we serve.</p>
                            <div class="mt-auto">
                                <div class="stat-label">Community Fund</div>
                                <div class="h4 fw-bold text-white">$2.5M USD</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="esg-card-premium">
                            <div class="esg-icon-circle">
                                <i class="bi bi-shield-lock-fill fs-3"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Ethical Governance</h4>
                            <p class="text-secondary small mb-4">Maintaining absolute transparency through quarterly
                                independent audits and zero-corruption policies.</p>
                            <div class="mt-auto">
                                <div class="stat-label">Compliance Rate</div>
                                <div class="h4 fw-bold text-white">100.0%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================COMMODITY TICKER ================== -->

        <section class="ticker-wrap mt-5">
            <div class="ticker-scroll">
                <div class="ticker-item">
                    <span class="ticker-symbol">GOLD (XAU/USD)</span>
                    <span class="ticker-price">$2,042.50</span>
                    <span class="ticker-change up">▲ +0.45%</span>
                </div>

                <div class="ticker-item">
                    <span class="ticker-symbol">LITHIUM (Li)</span>
                    <span class="ticker-price">$13,500</span>
                    <span class="ticker-change down">▼ -1.20%</span>
                </div>

                <div class="ticker-item">
                    <span class="ticker-symbol">COPPER (HG)</span>
                    <span class="ticker-price">$3.8420</span>
                    <span class="ticker-change up">▲ +2.15%</span>
                </div>

                <div class="ticker-item">
                    <span class="ticker-symbol">BRENT OIL</span>
                    <span class="ticker-price">$82.45</span>
                    <span class="ticker-change up">▲ +0.12%</span>
                </div>

                <div class="ticker-item">
                    <span class="ticker-symbol">GOLD (XAU/USD)</span>
                    <span class="ticker-price">$2,042.50</span>
                    <span class="ticker-change up">▲ +0.45%</span>
                </div>
                <div class="ticker-item">
                    <span class="ticker-symbol">LITHIUM (Li)</span>
                    <span class="ticker-price">$13,500</span>
                    <span class="ticker-change down">▼ -1.20%</span>
                </div>
                <div class="ticker-item">
                    <span class="ticker-symbol">COPPER (HG)</span>
                    <span class="ticker-price">$3.8420</span>
                    <span class="ticker-change up">▲ +2.15%</span>
                </div>
                <div class="ticker-item">
                    <span class="ticker-symbol">BRENT OIL</span>
                    <span class="ticker-price">$82.45</span>
                    <span class="ticker-change up">▲ +0.12%</span>
                </div>
            </div>
        </section>

        <!-- =================NEWS / INSIGHT SECTION ============== -->

        <section class="news-section">
            <div class="container">
                <div class="row mb-5 justify-content-between align-items-end">
                    <div class="col-md-6">
                        <h6 class="text-orange text-uppercase tracking-widest fw-bold mb-2" style="color:#ff9800;">
                            Market Intelligence</h6>
                        <h2 class="display-5 fw-bold" style="color:#0a192f;">Latest Insights</h2>
                    </div>
                    <div class="col-md-auto">
                        <a href="#" class="btn btn-outline-dark rounded-0 px-4 fw-bold">View Archive</a>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="insight-card card border-0">
                            <div class="insight-img-box">
                                <img src="{{ asset('assets/images/Global-Lithium.png') }}" alt="News Image">
                                <span class="category-tag">Market Outlook 2026</span>
                            </div>
                            <div class="insight-body">
                                <span class="insight-date">February 13, 2026</span>
                                <h3 class="insight-title display-6">Global Lithium Supply Chains: Navigating the 2026
                                    Shift</h3>
                                <p class="text-secondary">As demand for EV batteries reaches an all-time high, we
                                    analyze the emerging mining blocks in Africa and their impact on global pricing...
                                </p>
                                <a href="#" class="read-more-btn">Read Full Report <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="d-flex flex-column gap-4">
                            <div class="insight-card card border-0">
                                <div class="insight-body">
                                    <span class="insight-date">February 10, 2026</span>
                                    <h5 class="insight-title">Deep-Sea Mining: The New Frontier in Robotics</h5>
                                    <a href="#" class="read-more-btn">Read More</a>
                                </div>
                            </div>
                            <div class="insight-card card border-0">
                                <div class="insight-body">
                                    <span class="insight-date">February 05, 2026</span>
                                    <h5 class="insight-title">Sustainability: Reducing Water Waste in Gold Extraction
                                    </h5>
                                    <a href="#" class="read-more-btn">Read More</a>
                                </div>
                            </div>
                            <div class="insight-card card border-0">
                                <div class="insight-body">
                                    <span class="insight-date">January 28, 2026</span>
                                    <h5 class="insight-title">Quarterly Dividend Announcement for Q1 2026</h5>
                                    <a href="#" class="read-more-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection