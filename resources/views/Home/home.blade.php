@extends('layouts.app')

@section('title', 'Home | Make with Africa')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">

                <!-- ===== LEFT (UNCHANGED) ===== -->
                <div class="col-lg-7">

                    <span class="tag">African Intelligence</span>

                    <h1 class="mt-3">
                        Africa’s Strategic Intelligence
                        Infrastructure Platform
                    </h1>

                    <p class="mt-3">
                        Real-time opportunities, verified leads
                        and cross-border market insights.
                    </p>

                    <button class="btn-cta mt-2">
                        Explore Opportunities →
                    </button>

                </div>

                <!-- ===== RIGHT : NOW SWIPER ===== -->
                <div class="col-lg-5 mt-4 mt-lg-0">

                    <div class="swiper heroImageSwiper">
                        <div class="swiper-wrapper">

                            <!-- IMAGE 1 -->
                            <div class="swiper-slide">
                                <div class="hero-img">
                                    <img src="{{ asset('assets/images/bannerImg/africa1.png') }}" class="img-fluid">
                                </div>
                            </div>

                            <!-- IMAGE 2 (just add like this) -->
                            <div class="swiper-slide">
                                <div class="hero-img">
                                    <img src="{{ asset('assets/images/bannerImg/africa2.png') }}" class="img-fluid">
                                </div>
                            </div>

                            <!-- IMAGE 3 -->
                            <div class="swiper-slide">
                                <div class="hero-img">
                                    <img src="{{ asset('assets/images/bannerImg/africa3.png') }}" class="img-fluid">
                                </div>
                            </div>

                            <!-- IMAGE 3 -->
                            <div class="swiper-slide">
                                <div class="hero-img">
                                    <img src="{{ asset('assets/images/bannerImg/africa4.png') }}" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- =================features section ============= -->

    <section class="featured">
        <div class="container">

            <div class="card-area">

                <div class="card-stat">
                    <h3 class="counter">1055</h3>
                    <small>Active Investors</small>
                </div>

                <div class="card-stat">
                    <h3 class="counter">2400</h3>
                    <small>Deals Facilitated</small>
                </div>

                <div class="card-stat">
                    <h3 class="counter">15</h3>
                    <small>Countries Covered</small>
                </div>

            </div>

        </div>
    </section>

    <!-- ===================Breaking News section =========== -->

    <section class="py-4">
        <div class="container">

            <div class="news-board shadow rounded overflow-hidden">

                <!-- HEADER -->
                <div class="news-header d-flex justify-content-between align-items-center px-3 py-2 border-bottom">

                    <div class="live-tag fw-bold">
                        ⚡ LIVE BREAKING NEWS
                    </div>

                    <div class="d-flex gap-3 align-items-center">

                        <div class="time small text-white">
                            Auto-refresh: <span id="sec">30</span>s
                        </div>

                        <button class="btn btn-sm btn-outline-light" id="playBtn" type="button" onclick="togglePlay()">
                            ⏸
                        </button>

                        <button class="btn btn-sm btn-success" type="button" onclick="refreshNews()">
                            ↻
                        </button>

                    </div>
                </div>

                <!-- LIST -->
                <div class="news-list p-3" id="newsBox">

                    <!-- Default loading state -->
                    <div class="text-center py-4 text-primary">
                        Loading latest news...
                    </div>

                </div>

                <!-- FOOTER -->
                <div class="news-footer d-flex justify-content-between px-3 py-2 border-top small text-white">

                    <div>
                        🟢 Monitoring global news sources
                    </div>

                    <div id="updateTime">
                        Last updated: --
                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- <section>
    <div class="container">
        <div class="news-board">

            <!-- HEADER -->
            <div class="news-header d-flex justify-content-between align-items-center">

                <div class="live-tag">
                    <span class="bolt">⚡</span>
                    <span class="label">LIVE BREAKING NEWS</span>
                </div>

                <div class="d-flex gap-2 align-items-center">
                    <div class="time">AUTO-REFRESH: <span id="sec">30</span>S</div>

                    <button class="btn-pause" id="playBtn" onclick="togglePlay()">⏸</button>
                    <button class="btn-refresh" onclick="refreshNews()">↻</button>
                </div>
            </div>

            <!-- LIST -->
            <div class="news-list" id="newsBox">
               
                @for ($i = 0; $i < 5; $i++)
                    <div class="article-card">
                        <div class="card-top">
                            <div class="sk" style="width:60px;height:20px"></div>
                            <div class="sk" style="width:90px;height:20px"></div>
                        </div>
                        <div class="sk mb-2" style="height:16px;width:70%"></div>
                        <div class="sk"       style="height:13px;width:50%"></div>
                    </div>
                @endfor
            </div>

            <!-- FOOTER -->
            <div class="news-footer d-flex justify-content-between">
                <div><span class="footer-dot"></span>Monitoring 12 global news sources</div>
                <div id="updateTime">Last updated: --</div>
            </div>

        </div>
    </div>
</section> --}}



    {{-- <section>
    <div class="container">
        <div class="news-board">

            <!-- HEADER -->
            <div class="news-header d-flex justify-content-between align-items-center">

                <div class="live-tag">
                    <span class="bolt">⚡</span>
                    <span class="label">LIVE BREAKING NEWS</span>
                </div>

                <div class="d-flex gap-2 align-items-center">
                    <div class="time">AUTO-REFRESH: <span id="sec">30</span>S</div>

                    <button class="btn-pause" id="playBtn" onclick="togglePlay()">⏸</button>
                    <button class="btn-refresh" onclick="refreshNews()">↻</button>
                </div>
            </div>

            <!-- LIST -->
            <div class="news-list" id="newsBox">
               
                @for ($i = 0; $i < 5; $i++)
                    <div class="article-card">
                        <div class="card-top">
                            <div class="sk" style="width:60px;height:20px"></div>
                            <div class="sk" style="width:90px;height:20px"></div>
                        </div>
                        <div class="sk mb-2" style="height:16px;width:70%"></div>
                        <div class="sk"       style="height:13px;width:50%"></div>
                    </div>
                @endfor
            </div>

            <!-- FOOTER -->
            <div class="news-footer d-flex justify-content-between">
                <div><span class="footer-dot"></span>Monitoring 12 global news sources</div>
                <div id="updateTime">Last updated: --</div>
            </div>

        </div>
    </div>
</section> --}}

    {{-- ── SECTION HTML ──────────────────────────────────────────── --}}
    {{-- <section>
    <div class="container">
        <div class="news-board">

            <!-- HEADER -->
            <div class="news-header d-flex justify-content-between align-items-center">
                <div class="live-tag">
                    <span class="bolt">⚡</span>
                    <span class="label">LIVE BREAKING NEWS</span>
                </div>

                <div class="d-flex gap-2 align-items-center">
                    <div class="time">AUTO-REFRESH: <span id="sec">30</span>S</div>
                    <button class="btn-pause"   id="playBtn" onclick="togglePlay()">⏸</button>
                    <button class="btn-refresh" onclick="refreshNews()">↻</button>
                </div>
            </div>

            <!-- LIST -->
            <div class="news-list" id="newsBox">
                @for ($i = 0; $i < 5; $i++)
                    <div class="article-card">
                        <div class="sk" style="width:72px;height:56px;border-radius:6px;flex-shrink:0"></div>
                        <div class="card-body">
                            <div class="card-top">
                                <div class="sk" style="width:55px;height:18px"></div>
                                <div class="sk" style="width:85px;height:18px"></div>
                            </div>
                            <div class="sk mb-1" style="height:15px;width:95%"></div>
                            <div class="sk mb-1" style="height:15px;width:75%"></div>
                            <div class="sk"       style="height:12px;width:55%"></div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- FOOTER -->
            <div class="news-footer d-flex justify-content-between">
                <div><span class="footer-dot"></span>Monitoring 12 global news sources</div>
                <div id="updateTime">Last updated: --</div>
            </div>

        </div>
    </div>
</section> --}}


    <!-- ================== about us section =============== -->

    <section class="about-v2">
        <div class="container">
            <div class="row align-items-center">

                <!-- ===== LEFT FEATURE CARD ===== -->
                <div class="col-lg-6">

                    <div class="main-card">

                        <span class="top-line">ABOUT SINADAI</span>

                        <h2>
                            Strategy Meets
                            Market Intelligence
                        </h2>

                        <p>
                            We combine on-ground expertise with digital
                            intelligence to unlock
                            value across Africa’s resource economy. Our
                            structured approach
                            helps investors move with clarity and
                            confidence.
                        </p>

                        <ul class="check-list">
                            <li>Verified market intelligence</li>
                            <li>Cross-border risk mapping</li>
                            <li>Deal structuring support</li>
                            <li>Local execution network</li>
                        </ul>

                        <a href="#" class="btn-outline">
                            Learn More →
                        </a>

                    </div>

                </div>

                <!-- ===== RIGHT METRICS ===== -->
                <div class="col-lg-6 mt-4 mt-lg-0">

                    <div class="metric-wrap">

                        <div class="metric">
                            <div>
                                <h3>15+</h3>
                                <span>African Markets</span>
                            </div>
                        </div>

                        <div class="metric">
                            <div>
                                <h3>50+</h3>
                                <span>Strategic Reports</span>
                            </div>
                        </div>

                        <div class="metric">
                            <div>
                                <h3>4</h3>
                                <span>Core Sectors</span>
                            </div>
                        </div>

                        <div class="metric">
                            <div>
                                <h3>100%</h3>
                                <span>Data Driven</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ===============our service =============== -->

    <section class="service-pro">
        <div class="container">

            <!-- ===== MAIN FLOAT CARD ===== -->
            <div class="wrap-card">

                <div class="text-center mb-4">
                    <span class="tag">OUR SERVICES</span>

                    <h2 class="title">
                        Comprehensive Strategic
                        Advisory
                    </h2>

                    <p class="sub">
                        Structured intelligence enabling stakeholders
                        to navigate Africa's resource landscape.
                    </p>
                </div>

                <div class="row g-3">

                    <!-- 1 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="p-card">
                            <div class="icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>

                            <h5>Market Research</h5>

                            <p>
                                Structured analysis of resource markets
                                and investment landscapes.
                            </p>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="p-card focus">
                            <div class="icon"><i class="fa-solid fa-money-bill-trend-up"></i></div>

                            <h5>Risk Mapping</h5>

                            <p>
                                Jurisdictional analysis for
                                cross-border decisions.
                            </p>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="p-card">
                            <div class="icon"><i class="fa-solid fa-laptop"></i></div>

                            <h5>Digital Intelligence</h5>

                            <p>
                                Data-driven insights &
                                digital integration.
                            </p>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="p-card">
                            <div class="icon"><i class="fa-solid fa-handshake"></i></div>

                            <h5>Strategic Coordination</h5>

                            <p>
                                Connecting stakeholders
                                across sectors.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="text-center mt-4">
                    <a class="link">View All Services →</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============industry focus section ============== -->

    <section class="sector-pro">
        <div class="container">

            <!-- ===== TITLE ===== -->
            <div class="text-center mb-5">
                <span class="mini">INDUSTRY FOCUS</span>

                <h2 class="title">
                    Sectors We Serve
                </h2>

                <p class="sub">
                    Deep domain expertise across Africa's most
                    consequential resource sectors.
                </p>
            </div>

            <!-- ===== CARDS ===== -->
            <div class="row g-4">

                <!-- 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="sector-card">

                        <div class="icon">🌾</div>

                        <h4>Agriculture</h4>

                        <p>
                            Growth systems & agri-value
                            chains
                        </p>

                    </div>
                </div>

                <!-- 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="sector-card active">

                        <div class="icon">⛏</div>

                        <h4>Mining</h4>

                        <p>
                            Mineral development & critical
                            resources
                        </p>

                    </div>
                </div>

                <!-- 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="sector-card">

                        <div class="icon">🔥</div>

                        <h4>Oil & Gas</h4>

                        <p>
                            Energy value chain
                            optimization
                        </p>

                    </div>
                </div>

                <!-- 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="sector-card">

                        <div class="icon">🏗</div>

                        <h4>Infrastructure</h4>

                        <p>
                            Logistics & development
                            frameworks
                        </p>

                    </div>
                </div>

            </div>

            <div class="text-center mt-5">
                <a class="view">
                    Explore All Sectors →
                </a>
            </div>

        </div>
    </section>

    <!-- =================== LIVE MARKETING PLUS ============ -->

    {{-- <section>
        <div class="container my-5">

            <div class="market-section">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="market-title">Live Market Pulse</div>
                    <div class="update-text">● AI UPDATING IN
                        REAL-TIME</div>
                </div>

                <div class="row g-3">

                    <!-- Copper -->
                    <div class="col-lg-3 col-md-6">
                        <div class="market-card">
                            <div class="asset-name">COPPER</div>
                            <div class="price" data-target="8452.20">$0</div>
                            <div class="change up">▲ 0.65% today</div>
                        </div>
                    </div>

                    <!-- Crude Oil -->
                    <div class="col-lg-3 col-md-6">
                        <div class="market-card">
                            <div class="asset-name">CRUDE OIL
                                (WTI)</div>
                            <div class="price" data-target="76.32">$0</div>
                            <div class="change down">▼ 0.21% today</div>
                        </div>
                    </div>

                    <!-- Silver -->
                    <div class="col-lg-3 col-md-6">
                        <div class="market-card">
                            <div class="asset-name">SILVER</div>
                            <div class="price" data-target="29.18">$0</div>
                            <div class="change up">▲ 0.44% today</div>
                        </div>
                    </div>

                    <!-- Natural Gas -->
                    <div class="col-lg-3 col-md-6">
                        <div class="market-card">
                            <div class="asset-name">NATURAL GAS</div>
                            <div class="price" data-target="2.11">$0</div>
                            <div class="change down">▼ 0.12% today</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section>
        <div class="container my-5">
            <div class="market-section">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="market-title">Live African Market Pulse</div>
                    <div class="update-text">● AI UPDATING IN REAL-TIME</div>
                </div>

                <div class="row g-3" id="marketPulse">

                    <!-- Naspers -->
                    <div class="col-lg-3 col-md-6">
                        <div class="market-card" data-symbol="NPN:JSE">
                            <div class="asset-name">NASPERS (JSE)</div>
                            <div class="price">$0</div>
                            <div class="change"></div>
                        </div>
                    </div>

                    <!-- Dangote Cement -->
                    <div class="col-lg-3 col-md-6">
                        <div class="market-card" data-symbol="DANGCEM:NGX">
                            <div class="asset-name">DANGOTE CEMENT (NGX)</div>
                            <div class="price">$0</div>
                            <div class="change"></div>
                        </div>
                    </div>

                    <!-- Safaricom -->
                    <div class="col-lg-3 col-md-6">
                        <div class="market-card" data-symbol="SCOM:NSE">
                            <div class="asset-name">SAFARICOM (NSE)</div>
                            <div class="price">$0</div>
                            <div class="change"></div>
                        </div>
                    </div>

                    <!-- CIB Bank -->
                    <div class="col-lg-3 col-md-6">
                        <div class="market-card" data-symbol="COMI:EGX">
                            <div class="asset-name">CIB BANK (EGX)</div>
                            <div class="price">$0</div>
                            <div class="change"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    <section class="commodities-section-wrapper">
        <div class="container-fluid px-0 my-5">
            <div class="market-section commodities-market-section px-3 px-md-4">

                {{-- Header --}}
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="market-title">
                        <span class="pulse-dot"></span> LIVE COMMODITIES PULSE
                    </div>
                    <div class="update-text">● AI UPDATING IN REAL-TIME</div>
                </div>

                {{-- Slider wrapper --}}
                <div class="commodity-slider-outer">
                    <div class="commodity-slider-track" id="commodityTrack">

                        <!-- Gold -->
                        <div class="commodity-slide">
                            <div class="market-card commodity-card" data-commodity="GOLD">
                                <div class="commodity-icon">🥇</div>
                                <div class="asset-name">GOLD <span class="unit-badge">/ oz</span></div>
                                <div class="price">—</div>
                                <div class="change">Loading…</div>
                                <div class="commodity-meta">H: <span class="day-high">—</span> &nbsp; L: <span
                                        class="day-low">—</span></div>
                            </div>
                        </div>

                        <!-- Silver -->
                        <div class="commodity-slide">
                            <div class="market-card commodity-card" data-commodity="SILVER">
                                <div class="commodity-icon">🥈</div>
                                <div class="asset-name">SILVER <span class="unit-badge">/ oz</span></div>
                                <div class="price">—</div>
                                <div class="change">Loading…</div>
                                <div class="commodity-meta">H: <span class="day-high">—</span> &nbsp; L: <span
                                        class="day-low">—</span></div>
                            </div>
                        </div>

                        <!-- Copper -->
                        <div class="commodity-slide">
                            <div class="market-card commodity-card" data-commodity="COPPER">
                                <div class="commodity-icon">🔶</div>
                                <div class="asset-name">COPPER <span class="unit-badge">/ lb</span></div>
                                <div class="price">—</div>
                                <div class="change">Loading…</div>
                                <div class="commodity-meta">H: <span class="day-high">—</span> &nbsp; L: <span
                                        class="day-low">—</span></div>
                            </div>
                        </div>

                        <!-- Platinum -->
                        <div class="commodity-slide">
                            <div class="market-card commodity-card" data-commodity="PLATINUM">
                                <div class="commodity-icon">⬜</div>
                                <div class="asset-name">PLATINUM <span class="unit-badge">/ oz</span></div>
                                <div class="price">—</div>
                                <div class="change">Loading…</div>
                                <div class="commodity-meta">H: <span class="day-high">—</span> &nbsp; L: <span
                                        class="day-low">—</span></div>
                            </div>
                        </div>

                        <!-- Crude Oil -->
                        <div class="commodity-slide">
                            <div class="market-card commodity-card" data-commodity="CRUDE_OIL">
                                <div class="commodity-icon">🛢️</div>
                                <div class="asset-name">CRUDE OIL <span class="unit-badge">/ bbl</span></div>
                                <div class="price">—</div>
                                <div class="change">Loading…</div>
                                <div class="commodity-meta">H: <span class="day-high">—</span> &nbsp; L: <span
                                        class="day-low">—</span></div>
                            </div>
                        </div>

                        <!-- Natural Gas -->
                        <div class="commodity-slide">
                            <div class="market-card commodity-card" data-commodity="NATURAL_GAS">
                                <div class="commodity-icon">🔥</div>
                                <div class="asset-name">NATURAL GAS <span class="unit-badge">/ MMBtu</span></div>
                                <div class="price">—</div>
                                <div class="change">Loading…</div>
                                <div class="commodity-meta">H: <span class="day-high">—</span> &nbsp; L: <span
                                        class="day-low">—</span></div>
                            </div>
                        </div>

                        <!-- Soybeans -->
                        <div class="commodity-slide">
                            <div class="market-card commodity-card" data-commodity="SOYBEANS">
                                <div class="commodity-icon">🫘</div>
                                <div class="asset-name">SOYBEANS <span class="unit-badge">/ bu</span></div>
                                <div class="price">—</div>
                                <div class="change">Loading…</div>
                                <div class="commodity-meta">H: <span class="day-high">—</span> &nbsp; L: <span
                                        class="day-low">—</span></div>
                            </div>
                        </div>

                        <!-- Corn -->
                        <div class="commodity-slide">
                            <div class="market-card commodity-card" data-commodity="CORN">
                                <div class="commodity-icon">🌽</div>
                                <div class="asset-name">CORN <span class="unit-badge">/ bu</span></div>
                                <div class="price">—</div>
                                <div class="change">Loading…</div>
                                <div class="commodity-meta">H: <span class="day-high">—</span> &nbsp; L: <span
                                        class="day-low">—</span></div>
                            </div>
                        </div>

                    </div>{{-- /.commodity-slider-track --}}

                    {{-- Fade edges --}}
                    <div class="slider-fade slider-fade-left"></div>
                    <div class="slider-fade slider-fade-right"></div>
                </div>{{-- /.commodity-slider-outer --}}

            </div>{{-- /.market-section --}}
        </div>{{-- /.container-fluid --}}
    </section>

    <!-- ===================OUR INVESTMENT SECTION ========== -->

    {{-- <section class="invest-section py-5">
        <div class="container">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

                <h4 class="fw-bold"><i class="fa-solid fa-building-circle-arrow-right"></i>
                    How to Invest in
                    West
                    Africa</h4>

                <select id="countryFilter" class="form-select w-auto">
                    <option value="senegal">Senegal</option>
                    <option value="nigeria">Nigeria</option>
                    <option value="ghana">Ghana</option>
                </select>

            </div>

            <!-- ========== SENEGAL ========== -->
            <div class="country-box" id="senegal">

                <h5 class="fw-bold mb-3">🇸🇳 Senegal Opportunities</h5>

                <div class="row g-4">

                    <!-- 6 CARDS -->
                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Agribusiness</h6>
                            <div class="step">Farming</div>
                            <div class="return">CFA37M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Iusto adipisci
                                perspiciatis laborum ea. Maiores,
                                distinctio.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Logistics</h6>
                            <div class="return">CFA18M</div>
                            <p>Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Illum laborum est sint
                                cupiditate praesentium iste?</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Real Estate</h6>
                            <div class="return">CFA42M</div>
                            <p>Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Mollitia libero at
                                voluptate hic dolorum quibusdam?</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Solar</h6>
                            <div class="return">CFA55M</div>
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Nobis culpa amet
                                laboriosam maiores atque nesciunt?</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Education</h6>
                            <div class="return">CFA23M</div>
                            <p>Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Modi provident,
                                dolorum
                                consectetur rerum reiciendis quam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Tourism</h6>
                            <div class="return">CFA31M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ========== NIGERIA ========== -->
            <div class="country-box d-none" id="nigeria">

                <h5 class="fw-bold mb-3">🇳🇬 Nigeria Opportunities</h5>

                <div class="row g-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Tech Startup</h6>
                            <div class="return">₦42M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Oil Services</h6>
                            <div class="return">₦120M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Agro Trading</h6>
                            <div class="return">₦18M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Fintech</h6>
                            <div class="return">₦75M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Real Estate</h6>
                            <div class="return">₦200M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Health</h6>
                            <div class="return">₦33M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ========== GHANA ========== -->
            <div class="country-box d-none" id="ghana">

                <h5 class="fw-bold mb-3">🇬🇭 Ghana Opportunities</h5>

                <div class="row g-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Agric Export</h6>
                            <div class="return">₵90M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Cocoa</h6>
                            <div class="return">₵44M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Gold</h6>
                            <div class="return">₵130M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Tourism</h6>
                            <div class="return">₵21M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Startup</h6>
                            <div class="return">₵66M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="invest-card p-3">
                            <h6>Transport</h6>
                            <div class="return">₵19M</div>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ut similique,
                                architecto
                                consequatur veniam laudantium
                                aliquam.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section> --}}

    <section class="invest-section py-5">
        <div class="container">

            <!-- HEADER -->
            <div class="mb-4">
                <h4 class="fw-bold mb-0">
                    <i class="fa-solid fa-building-circle-arrow-right me-2"></i>
                    Africa Business Articles
                </h4>
            </div>

            <!-- ARTICLES GRID -->
            <div id="investmentArticles">
                <div class="row g-4"></div>
            </div>

            <!-- READ MORE BUTTON -->
            <div class="text-center mt-4">
                <button id="loadMoreBtn" class="btn btn-dark px-4">
                    Read More
                </button>
            </div>

        </div>
    </section>
    <!-- ===== INVEST POPUP ===== -->
    {{-- <div class="modal fade" id="investModal">
        <div class="modal-dialog">
            <div class="modal-content p-3">

                <h5 id="modalTitle">Invest Now</h5>

                <p class="small text-muted" id="modalCountry"></p>

                <input class="form-control mb-2" placeholder="Your Name">
                <input class="form-control mb-2" placeholder="Email">
                <input class="form-control mb-2" placeholder="Investment Amount">

                <button class="btn btn-success w-100">
                    Proceed to Invest
                </button>

            </div>
        </div>
    </div> --}}

    <!-- ================== country news ================== -->

    {{-- <section class="news-section py-5">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <h2 class="h4 fw-bold mb-0 me-3"><i class="bi bi-newspaper me-2"></i>Today's
                    Pan-West Africa
                    Investment News</h2>
                <button class="btn btn-sm btn-light border ms-auto"
        onclick="loadAfricanInvestmentNews()">
    <i class="bi bi-arrow-clockwise me-1"></i>Refresh All News
</button>
            </div>

            <div class="row g-4" id="news-grid">
                <div class="col-lg-4 news-item ghana">
                    <div class="news-card">
                        <div class="card-img-wrap">
                            <img src="{{ asset('assets/images/ghana-news.png') }}" alt="Mining">
                            <span class="badge category-badge">Mining</span>
                            <span class="badge grade-badge">38-59%
                                Growth</span>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold">Ghana Lithium Project
                                Secures $157.4M Investment</h5>
                            <p class="text-muted small">Mining
                                activities in Ghana are expanding
                                rapidly with record
                                funding for digital transformation and
                                sustainable practices.</p>
                            <div class="d-flex align-items-center mt-3 pt-3 border-top">
                                <small class="text-muted">Source: Ecofin
                                    Agency</small>
                                <small class="ms-auto fw-bold">Grade:
                                    9/10</small>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section> --}}

    {{-- <section class="news-section py-5">
    <div class="container">

        <!-- Header -->
        <div class="d-flex align-items-center mb-4">
            <h2 class="h4 fw-bold mb-0 me-3">
                <i class="bi bi-newspaper me-2"></i>
                Today’s Pan-West Africa Investment News
            </h2>

            <button class="btn btn-sm btn-light border ms-auto"
                    onclick="loadAfricanInvestmentNews()">
                <i class="bi bi-arrow-clockwise me-1"></i>
                Refresh All News
            </button>
        </div>

        <div class="row g-4" id="news-grid">

            @for ($i = 0; $i < 5; $i++)
                <div class="col-lg-4">
                    <div class="news-card placeholder-card h-100">
                        <div class="card-img-wrap bg-light"
                             style="height:200px"></div>
                        <div class="p-4">
                            <div class="sk mb-2" style="height:14px;width:30%"></div>
                            <div class="sk mb-2" style="height:18px;width:100%"></div>
                            <div class="sk mb-2" style="height:18px;width:85%"></div>
                            <div class="d-flex justify-content-between pt-3 border-top">
                                <div class="sk" style="height:12px;width:40%"></div>
                                <div class="sk" style="height:12px;width:20%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
</section> --}}

    <section class="news-section py-5">
        <div class="container">

            <div class="d-flex align-items-center mb-4">
                <h2 class="h4 fw-bold mb-0 me-3">
                    <i class="bi bi-newspaper me-2"></i>
                    Today's Pan-West Africa Investment News
                </h2>
                <button class="btn btn-sm btn-light border ms-auto" onclick="loadAfricanInvestmentNews()">
                    <i class="bi bi-arrow-clockwise me-1"></i>
                    Refresh All News
                </button>
            </div>

            <div class="row g-4" id="news-grid">
                @for ($i = 0; $i < 8; $i++)
                    <div class="col-lg-4">
                        <div class="news-card h-100">
                            <div class="card-img-wrap" style="background:#e9ecef;height:200px">
                                <div class="sk" style="width:100%;height:100%;border-radius:0"></div>
                            </div>
                            <div class="p-4">
                                <div class="sk mb-2" style="height:13px;width:30%"></div>
                                <div class="sk mb-2" style="height:18px;width:100%"></div>
                                <div class="sk mb-2" style="height:18px;width:80%"></div>
                                <div class="sk mb-3" style="height:13px;width:60%"></div>
                                <div class="d-flex justify-content-between pt-3 border-top">
                                    <div class="sk" style="height:12px;width:40%"></div>
                                    <div class="sk" style="height:12px;width:20%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="text-center mt-4">
                <button id="loadMoreBtnMore" class="btn btn-dark px-4" onclick="loadMoreNews()">
                    Read More News
                </button>
            </div>

        </div>
    </section>

    <!-- ===============our success story ============== -->

    <section class="investor-voices-section">
        <div class="container">

            <!-- HEADER -->
            <div class="investor-voices-header">
                <div>
                    <h2>Today's Success Stories</h2>
                    <p>Real investors, real returns. See how our
                        community is building wealth across Africa.</p>
                </div>

                <div class="investor-voices-nav">
                    <button class="voices-prev">
                        < </button>
                            <button class="voices-next">></button>
                </div>
            </div>

            <!-- SWIPER -->
            <div class="swiper investorVoicesSwiper">
                <div class="swiper-wrapper">

                    <!-- SLIDE 1 -->
                    <div class="swiper-slide">
                        <div class="investor-voices-card">

                            <div class="voices-quote">❝❞</div>

                            <p class="voices-text">
                                The sector analysis tools helped me
                                identify undervalued agricultural land
                                in
                                Senegal.
                                My portfolio has outperformed market
                                averages by 45% this year.
                            </p>

                            <div class="voices-tags">
                                <span class="voices-green">+87%
                                    Returns</span>
                                <span>Agricultural Land</span>
                                <span>Senegal</span>
                            </div>

                            <hr>

                            <div class="voices-profile">
                                <div class="voices-left">
                                    <img src="https://i.pravatar.cc/60?img=32" />
                                    <div>
                                        <h4>Aminata Diallo</h4>
                                        <small>Agribusiness Portfolio
                                            Manager</small>
                                    </div>
                                </div>

                                <div class="voices-stars">★★★★★</div>
                            </div>

                        </div>
                    </div>

                    <!-- SLIDE 2 -->
                    <div class="swiper-slide">
                        <div class="investor-voices-card">

                            <div class="voices-quote">❝❞</div>

                            <p class="voices-text">
                                The cross-border investment intelligence
                                has been invaluable.
                                We've successfully deployed $50M across
                                4 West African countries.
                            </p>

                            <div class="voices-tags">
                                <span class="voices-green">+156%
                                    Returns</span>
                                <span>Multi-sector PE</span>
                                <span>Ghana</span>
                            </div>

                            <hr>

                            <div class="voices-profile">
                                <div class="voices-left">
                                    <img src="https://i.pravatar.cc/60?img=12" />
                                    <div>
                                        <h4>Michael Okonkwo</h4>
                                        <small>Private Equity
                                            Partner</small>
                                    </div>
                                </div>

                                <div class="voices-stars">★★★★★</div>
                            </div>

                        </div>
                    </div>

                    <!-- SLIDE 3 -->
                    <div class="swiper-slide">
                        <div class="investor-voices-card">

                            <div class="voices-quote">❝❞</div>

                            <p class="voices-text">
                                Found amazing renewable energy projects
                                in Mali through the platform.
                                Not only great returns, but also
                                contributing to sustainable development.
                            </p>

                            <div class="voices-tags">
                                <span class="voices-green">+94%
                                    Returns</span>
                                <span>Solar Energy</span>
                                <span>Mali</span>
                            </div>

                            <hr>

                            <div class="voices-profile">
                                <div class="voices-left">
                                    <img src="https://i.pravatar.cc/60?img=45" />
                                    <div>
                                        <h4>Fatou Sow</h4>
                                        <small>Impact Investor</small>
                                    </div>
                                </div>

                                <div class="voices-stars">★★★★★</div>
                            </div>

                        </div>
                    </div>

                    <!-- SLIDE 4 -->
                    <div class="swiper-slide">
                        <div class="investor-voices-card">

                            <div class="voices-quote">❝❞</div>

                            <p class="voices-text">
                                Found amazing renewable energy projects
                                in Mali through the platform.
                                Not only great returns, but also
                                contributing to sustainable development.
                            </p>

                            <div class="voices-tags">
                                <span class="voices-green">+94%
                                    Returns</span>
                                <span>Solar Energy</span>
                                <span>Mali</span>
                            </div>

                            <hr>

                            <div class="voices-profile">
                                <div class="voices-left">
                                    <img src="https://i.pravatar.cc/60?img=45" />
                                    <div>
                                        <h4>Fatou Sow</h4>
                                        <small>Impact Investor</small>
                                    </div>
                                </div>

                                <div class="voices-stars">★★★★★</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    {{-- ====================== NEWSLETTER SECTION ================================== --}}

    <section class="newsletter-section">
        <div class="container">

            <div class="newsletter-header">
                <h2>Africa Intelligence <span>Newsletter Archive</span></h2>
                <p>Strategic briefings across Energy, Mining & Agriculture.</p>
            </div>

            <div class="newsletter-grid">

                <!-- FREE ISSUE -->
                <div class="newsletter-card">
                    <div class="newsletter-meta">
                        <span class="issue-tag free">Free Issue</span>
                        <span class="issue-date">Feb 2026</span>
                    </div>

                    <h4>West Africa Energy Outlook 2026</h4>
                    <p>
                        LNG capacity growth, Nigeria upstream reforms and
                        Angola offshore investment trends shaping the year ahead.
                    </p>

                    <a href="#" class="view-btn">Read Edition →</a>
                </div>

                <!-- LOCKED ISSUE -->
                <div class="newsletter-card locked" onclick="openNewsletterModal()">
                    <div class="newsletter-meta">
                        <span class="issue-tag premium">Premium</span>
                        <span class="issue-date">Jan 2026</span>
                    </div>

                    <h4>Southern Africa Critical Minerals Report</h4>
                    <p class="blur-preview">
                        Platinum, copper and lithium supply modeling across
                        Zambia, DRC and South Africa indicates tightening export flow...
                    </p>

                    <button class="unlock-btn">Unlock Edition</button>
                </div>

                <!-- LOCKED ISSUE -->
                <div class="newsletter-card locked" onclick="openNewsletterModal()">
                    <div class="newsletter-meta">
                        <span class="issue-tag premium">Premium</span>
                        <span class="issue-date">Dec 2025</span>
                    </div>

                    <h4>East Africa Agri-Export Disruption Analysis</h4>
                    <p class="blur-preview">
                        Transport corridor volatility and climate variability
                        may reduce regional export margins by 11%...
                    </p>

                    <button class="unlock-btn" onclick="openPremiumModal()">Unlock Edition</button>
                </div>

            </div>

        </div>
    </section>

    {{-- <div class="newsletter-modal" id="newsletterModal">
        <div class="newsletter-modal-content">
            <span class="modal-close" onclick="closeNewsletterModal()">×</span>

            <h3>Unlock Premium Intelligence</h3>
            <p style="color: white">
                Subscribe to access exclusive strategic briefings,
                commodity forecasts and verified investment insights.
            </p>

           <button class="subscribe-action-btn" onclick="openPremiumModal()">
                Subscribe Now
            </button>
        </div>
    </div> --}}

    <!-- PREMIUM SUBSCRIPTION MODAL -->
    <div class="premium-modal" id="premiumModal">

        <div class="premium-modal-content">

            <span class="premium-close" onclick="closePremiumModal()">×</span>

            <div class="premium-header">
                <h2>Unlock Strategic Intelligence Access</h2>
                <p>
                    AI-generated cross-border intelligence reports.
                    Never repeated. Always data-driven.
                </p>
            </div>

            <div class="pricing-grid">

                <!-- FREE PLAN -->
                <div class="plan-card free-plan">
                    <h3>Free Access</h3>
                    <div class="subprice">$0</div>

                    <ul>
                        <li>✓ 1 Newsletter per Month</li>
                        <li>✓ Limited Market Updates</li>
                        <li>✕ No Intelligence Reports</li>
                        <li>✕ No Archive Access</li>
                    </ul>

                    <button class="plan-btn free-btn" onclick="openAccessModal('free')">
                        Continue Free
                    </button>
                </div>

                <!-- PREMIUM PLAN -->
                <div class="plan-card premium-plan">

                    <div class="recommended-badge">Recommended</div>

                    <h3>Intelligence Pro</h3>
                    <div class="subprice">$5<span>/month</span></div>

                    <ul>
                        <li>✓ 3 Premium Newsletters / Week</li>
                        <li>✓ 1 Weekly Market Intelligence Report</li>
                        <li>✓ AI-Generated Strategic Analysis</li>
                        <li>✓ No Repeated Content</li>
                        <li>✓ Cross-Border Investment Signals</li>
                        <li>✓ Full Archive Access</li>
                    </ul>

                    <div class="payment-options">
                        <button class="pay-btn card-btn" onclick="openVerifyModal('card')">
                            Pay with Card
                        </button>

                        <button class="pay-btn paypal-btn" onclick="openVerifyModal('paypal')">
                            Pay with PayPal
                        </button>
                    </div>

                </div>

            </div>

            <div class="premium-footer">
                <p>
                    AI-generated intelligence. Independent. Data-backed.
                    Cancel anytime.
                </p>
            </div>

        </div>
    </div>

    <!-- USER ACCESS MODAL -->
    <div class="access-modal" id="accessModal">

        <div class="access-modal-content">

            <span class="access-close" onclick="closeAccessModal()">×</span>

            <h2>Create Your Intelligence Access</h2>
            <p class="access-subtext">
                Gain structured, AI-driven African market intelligence.
            </p>

            <form id="accessForm">

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" id="fullName" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" placeholder="e.g. Nigeria" required>
                </div>

                <div class="form-group">
                    <label for="industry">Industry</label>
                    <input type="text" id="industry" name="industry" placeholder="e.g. Energy, Mining, Agriculture"
                        required>
                </div>

                <input type="hidden" id="selectedPlan" name="plan">

                <button type="submit" class="submit-access-btn">
                    Continue
                </button>

            </form>

        </div>
    </div>

    <!-- EMAIL VERIFICATION MODAL -->
    <!-- EMAIL VERIFICATION MODAL -->
    <div class="verify-modal" id="verifyModal">
        <div class="verify-modal-content">

            <span class="verify-close" onclick="closeVerifyModal()">×</span>

            <div class="verify-icon">
                <i class="bi bi-envelope-check-fill"></i>
            </div>

            <h3>Email Verification Required</h3>

            <p class="verify-text">
                Enter your email to receive a secure verification code.
            </p>

            <!-- EMAIL INPUT FIELD -->
            <div class="verify-form-group">
                <input type="email" id="verifyEmailInput" placeholder="Enter your email address" required>
            </div>

            <!-- SEND OTP BUTTON -->
            <button class="verify-send-btn" onclick="sendOTP()">
                Send Verification Code
            </button>

            <div class="verify-loader" id="verifyLoader" style="display:none;">
                Sending verification code...
            </div>

            <div class="verify-message" id="verifyMessage"></div>

            <!-- REGISTER LINK -->
            <div class="verify-register-link">
                New user?
                <a href="#" class="register-link" onclick="openAccessFromVerification()">
                    Register here
                </a>
            </div>

        </div>
    </div>

    <!-- OTP VERIFICATION MODAL -->
    <div class="otp-modal" id="otpModal">
        <div class="otp-modal-content">

            <span class="otp-close" onclick="closeOtpModal()">×</span>

            <div class="otp-icon">
                <i class="bi bi-shield-lock-fill"></i>
            </div>

            <h3>Enter Verification Code</h3>

            <p class="otp-text">
                Enter the 6-digit code sent to your email to continue.
            </p>

            <!-- OTP INPUT BOXES -->
            <div class="otp-input-group">
                <input type="text" maxlength="1" class="otp-input">
                <input type="text" maxlength="1" class="otp-input">
                <input type="text" maxlength="1" class="otp-input">
                <input type="text" maxlength="1" class="otp-input">
                <input type="text" maxlength="1" class="otp-input">
                <input type="text" maxlength="1" class="otp-input">
            </div>

            <button class="otp-verify-btn" onclick="submitOtp()">
                Verify & Continue
            </button>

            <div class="otp-resend">
                Didn’t receive the code?
                <a href="#" onclick="resendOtp()">Resend</a>
            </div>

            <div class="otp-message" id="otpMessage"></div>

        </div>
    </div>

    <!--============= CALL TO ACTION =============== -->

    <section class="cta-pro">
        <div class="container">

            <div class="cta-box">

                <h2>Get Daily Investment Intelligence</h2>

                <p>
                    Join 50,000+ investors who receive our curated daily
                    newsletter
                    with exclusive opportunities, market analysis, and
                    success stories
                    from across West Africa.
                </p>

                <!-- ===== INPUT ===== -->
                <div class="mail-wrap">

                    <input type="email" placeholder="Enter your email address">

                    <button>
                        Subscribe Now →
                    </button>

                </div>

                <small>No spam. Unsubscribe anytime.</small>

            </div>

        </div>
    </section>


@endsection
@push('scripts')
    {{-- <script>
        // ── Config ────────────────────────────────────────────────────────────────
        const REFRESH_MS = 60000; // 60 seconds

        // ── Helpers ───────────────────────────────────────────────────────────────
        function fmt(val, dec = 2) {
            const n = parseFloat(val);
            if (!val || isNaN(n)) return '—';
            return n.toLocaleString('en-US', {
                minimumFractionDigits: dec,
                maximumFractionDigits: dec,
            });
        }

        // ── Fetch & render ────────────────────────────────────────────────────────
        function loadMarketPulse() {

            fetch('/market-pulse', {
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
                    }
                })
                .then(res => {
                    if (!res.ok) throw new Error('HTTP ' + res.status);
                    return res.json();
                })
                .then(json => {
                    if (!json.success || !json.stocks) throw new Error('Bad response');

                    json.stocks.forEach(stock => {

                        // data-symbol="NPN:JSE" matches stock.key "NPN:JSE"
                        const card = document.querySelector(
                            `.market-card[data-symbol="${stock.key}"]`
                        );
                        if (!card) return;

                        const priceEl = card.querySelector('.price');
                        const changeEl = card.querySelector('.change');

                        // ── Error state ───────────────────────────────────────────────
                        if (stock.error || stock.price == null) {
                            priceEl.textContent = '—';
                            changeEl.textContent = 'No data';
                            changeEl.className = 'change';
                            return;
                        }

                        // ── Price ─────────────────────────────────────────────────────
                        priceEl.textContent = `${stock.currency} ${fmt(stock.price)}`;

                        // ── Change % ──────────────────────────────────────────────────
                        const pct = parseFloat(stock.change_pct);
                        if (!isNaN(pct)) {
                            const dir = pct > 0 ? 'up' : pct < 0 ? 'down' : 'flat';
                            changeEl.textContent =
                                `${pct > 0 ? '▲' : pct < 0 ? '▼' : '→'} ${Math.abs(pct).toFixed(2)}% today`;
                            changeEl.className = `change ${dir}`;

                            // top-border colour on card
                            card.classList.remove('up', 'down', 'flat');
                            card.classList.add(dir);
                        }
                    });
                })
                .catch(err => console.error('Market Pulse Error:', err));
        }

        // ── Init + auto-refresh ───────────────────────────────────────────────────
        loadMarketPulse();
        setInterval(loadMarketPulse, REFRESH_MS);
    </script> --}}

    <script>
        (function() {
            'use strict';

            /* ── Config ────────────────────────────────────────────────────────────── */
            const REFRESH_MS = 1_000;
            const API_ENDPOINT = '/api/commodities-pulse';
            const SLIDE_SPEED = 35; // px/sec — increase to go faster
            const CARD_GAP = 14; // must match CSS gap value

            /* ── Helpers ───────────────────────────────────────────────────────────── */
            function fmt(val, dec = 2) {
                const n = parseFloat(val);
                if (val == null || isNaN(n)) return '—';
                return n.toLocaleString('en-US', {
                    minimumFractionDigits: dec,
                    maximumFractionDigits: dec,
                });
            }

            function decimalPlaces(key) {
                return {
                    COPPER: 4,
                    SOYBEANS: 2,
                    CORN: 2
                } [key] ?? 2;
            }

            /* ── Infinite RTL slider ───────────────────────────────────────────────── */
            function initSlider() {
                const track = document.getElementById('commodityTrack');
                if (!track) return;

                // Clone every original slide and append for seamless loop
                const origSlides = Array.from(track.children);
                origSlides.forEach(slide => {
                    const clone = slide.cloneNode(true);
                    clone.setAttribute('aria-hidden', 'true');
                    track.appendChild(clone);
                });

                // Total width of ONE set of cards
                const oneSetWidth = origSlides.reduce(
                    (acc, slide) => acc + slide.offsetWidth + CARD_GAP, 0
                );

                const duration = oneSetWidth / SLIDE_SPEED; // seconds

                track.style.setProperty('--slide-distance', `-${oneSetWidth}px`);
                track.style.animation = `commoditySlideRTL ${duration}s linear infinite`;
            }

            /* ── Render a single card ──────────────────────────────────────────────── */
            function renderCard(card, commodity) {
                const priceEl = card.querySelector('.price');
                const changeEl = card.querySelector('.change');
                const highEl = card.querySelector('.day-high');
                const lowEl = card.querySelector('.day-low');

                priceEl.classList.remove('loading');
                changeEl.classList.remove('loading');

                if (commodity.error || commodity.price == null) {
                    priceEl.textContent = '—';
                    changeEl.textContent = 'No data';
                    changeEl.className = 'change';
                    if (highEl) highEl.textContent = '—';
                    if (lowEl) lowEl.textContent = '—';
                    return;
                }

                const dec = decimalPlaces(commodity.key);
                const currency = commodity.currency || 'USD';

                priceEl.textContent = `${currency} ${fmt(commodity.price, dec)}`;

                if (highEl) highEl.textContent = fmt(commodity.high, dec);
                if (lowEl) lowEl.textContent = fmt(commodity.low, dec);

                const pct = parseFloat(commodity.change_pct);
                if (!isNaN(pct)) {
                    const dir = pct > 0 ? 'up' : pct < 0 ? 'down' : 'flat';
                    const arrow = pct > 0 ? '▲' : pct < 0 ? '▼' : '→';
                    changeEl.textContent = `${arrow} ${Math.abs(pct).toFixed(2)}% today`;
                    changeEl.className = `change ${dir}`;
                    card.classList.remove('up', 'down', 'flat');
                    card.classList.add(dir);
                }
            }

            /* ── Fetch & update all cards (originals + clones) ─────────────────────── */
            function loadCommodityPulse() {
                fetch(API_ENDPOINT, {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
                        },
                    })
                    .then(res => {
                        if (!res.ok) throw new Error('HTTP ' + res.status);
                        return res.json();
                    })
                    .then(json => {
                        if (!json.success || !json.commodities) throw new Error('Bad response');

                        json.commodities.forEach(commodity => {
                            // querySelectorAll hits both original and cloned cards
                            document.querySelectorAll(
                                `.commodity-card[data-commodity="${commodity.key}"]`
                            ).forEach(card => renderCard(card, commodity));
                        });
                    })
                    .catch(err => {
                        console.error('Commodities Pulse Error:', err);
                        document.querySelectorAll('.commodity-card').forEach(card => {
                            const p = card.querySelector('.price');
                            const c = card.querySelector('.change');
                            if (p) {
                                p.classList.remove('loading');
                                p.textContent = '—';
                            }
                            if (c) {
                                c.classList.remove('loading');
                                c.textContent = 'No data';
                                c.className = 'change';
                            }
                        });
                    });
            }

            /* ── Boot ───────────────────────────────────────────────────────────────── */
            // Shimmer on originals while waiting for first API response
            document.querySelectorAll('.commodity-card').forEach(card => {
                card.querySelector('.price')?.classList.add('loading');
                card.querySelector('.change')?.classList.add('loading');
            });

            window.addEventListener('load', () => {
                initSlider();
                loadCommodityPulse();
                setInterval(loadCommodityPulse, REFRESH_MS);
            });

        })();
    </script>

    {{-- =================== this is for the bottom news section ============================ --}}

    <script>
        let allNews = [];
        let currentPages = 1;
        const perPages = 3;

        // ── Helpers ─────────────────────────────────────────────
        function esc(str = '') {
            return String(str)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;');
        }

        function getCatLabel(cat) {
            if (Array.isArray(cat)) return cat[0] ?? 'Investment';
            return cat || 'Investment';
        }

        function getCatClass(cat) {
            const label = getCatLabel(cat).toLowerCase();
            const map = {
                business: 'business',
                technology: 'technology',
                politics: 'politics',
                health: 'health',
                sports: 'sports',
                science: 'science',
                entertainment: 'entertainment',
                environment: 'environment',
            };
            return map[label] ?? '';
        }

        function computeGrade(a) {
            let s = 5;
            if (a.image) s++;
            if ((a.description?.length ?? 0) > 100) s++;
            if ((a.title?.length ?? 0) > 40) s++;
            if (Array.isArray(a.category) && a.category.length) s++;
            return Math.min(s, 10);
        }

        // ── Fetch ─────────────────────────────────────────────
        async function loadAfricanInvestmentNews() {
            const grid = document.getElementById('news-grid');
            grid.innerHTML = `<div class="col-12 text-center py-5">Loading news...</div>`;

            try {
                const res = await fetch('/api/news/africa-investment');
                const data = await res.json();

                if (!data.success || !data.articles?.length) {
                    grid.innerHTML = `<div class="col-12 text-center">No news available.</div>`;
                    return;
                }

                // Save all articles
                allNews = data.articles;

                currentPages = 1;

                renderNews();

            } catch (e) {
                grid.innerHTML = `<div class="col-12 text-center text-danger">
            Failed to load news.
        </div>`;
            }
        }

        // ── Render With Pagination ─────────────────────────────
        function renderNews() {
            const grid = document.getElementById('news-grid');
            const loadBtn = document.getElementById('loadMoreBtnMore');

            const end = currentPages * perPages;
            const newsToShow = allNews.slice(0, end);

            grid.innerHTML = newsToShow.map(a => {
                const catLabel = getCatLabel(a.category);
                const catCls = getCatClass(a.category);
                const g = computeGrade(a);

                const imgHtml = a.image ?
                    `<img src="${esc(a.image)}"
                    loading="lazy"
                    style="height:200px;width:100%;object-fit:cover"
                    onerror="this.parentElement.innerHTML='<div class=\\'img-placeholder\\'>📰</div>'">` :
                    `<div class="img-placeholder">📰</div>`;

                return `
        <div class="col-lg-4 mb-4">
            <div class="news-card h-100 shadow-sm"
                 onclick='openNewsDetail(${JSON.stringify(a)})'
                 style="cursor:pointer;">

                <div class="card-img-wrap position-relative">
                    ${imgHtml}
                    <span class="badge bg-primary position-absolute top-0 start-0 m-2">
                        ${esc(catLabel)}
                    </span>
                </div>

                <div class="p-3">
                    <h6 class="fw-bold">${esc(a.title)}</h6>

                    <p class="text-muted small">
                        ${esc(a.description || 'No description available.')}
                    </p>

                    <div class="d-flex justify-content-between small text-muted border-top pt-2">
                        <span>${esc(a.source)}</span>
                        <span>Grade ${g}/10</span>
                    </div>
                </div>

            </div>
        </div>`;
            }).join('');

            // Show / Hide button
            if (end >= allNews.length) {
                loadBtn.classList.add('d-none');
            } else {
                loadBtn.classList.remove('d-none');
            }
        }

        // ── Load More Button ─────────────────────────────
        function loadMoreNews() {
            currentPages++;
            renderNews();
        }

        // ── Init ─────────────────────────────────────────────
        document.addEventListener('DOMContentLoaded', loadAfricanInvestmentNews);

        function openNewsDetail(article) {

            localStorage.setItem('selectedNews', JSON.stringify(article));

            window.location.href = "/news/view";

        }
    </script>

    {{-- ======== this is for the articals ========== --}}
    <script>
        let allArticles = [];
        let currentPage = 1;
        const perPage = 6;

        async function loadInvestmentArticles() {
            try {
                const res = await fetch('/api/articles/fetch?category=business');
                const data = await res.json();

                if (!data?.success || !Array.isArray(data.articles)) return;

                // Sort newest first
                allArticles = data.articles.sort(
                    (a, b) => new Date(b.published) - new Date(a.published)
                );

                renderNewsArticles();

            } catch (e) {
                console.error('Failed loading investment articles', e);
            }
        }

        function renderNewsArticles() {
            const row = document.querySelector('#investmentArticles .row');
            if (!row) return;

            const end = currentPage * perPage;
            const articlesToShow = allArticles.slice(0, end);

            row.innerHTML = articlesToShow.map(a => `
        <div class="col-lg-4 col-md-6">
            <div class="invest-card p-3 h-100 position-relative">

                <h6>${esc(a.title)}</h6>

                <div class="step">
                    ${esc(normalizeCategory(a.category))}
                </div>

                <div class="return">
                    ${formatAge(a.published)}
                </div>

                <p>
                    ${esc((a.description || '').slice(0, 120))}
                </p>

                <small class="text-muted">
                    Source: ${esc(a.source)}
                </small>

                <a href="${esc(a.url)}"
                   target="_blank"
                   rel="noopener"
                   class="stretched-link"></a>
            </div>
        </div>
    `).join('');

            // Hide button if no more articles
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            if (end >= allArticles.length) {
                loadMoreBtn.style.display = 'none';
            } else {
                loadMoreBtn.style.display = 'inline-block';
            }
        }

        document.getElementById('loadMoreBtn').addEventListener('click', () => {
            currentPage++;
            renderNewsArticles();
        });

        // ---------------- HELPERS ----------------

        function normalizeCategory(cat) {
            if (Array.isArray(cat)) return cat[0] || 'Investment';
            return cat || 'Investment';
        }

        function formatAge(dateStr) {
            if (!dateStr) return '';

            const date = new Date(dateStr);
            if (isNaN(date.getTime())) return '';

            const diffMs = Date.now() - date.getTime();
            const diffMinutes = Math.floor(diffMs / 60000);

            if (diffMinutes < 1) return 'Just now';
            if (diffMinutes < 60) return `${diffMinutes}m ago`;

            const diffHours = Math.floor(diffMinutes / 60);
            if (diffHours < 24) return `${diffHours}h ago`;

            const diffDays = Math.floor(diffHours / 24);
            return `${diffDays}d ago`;
        }

        function esc(value) {
            return String(value ?? '')
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#39;');
        }

        document.addEventListener('DOMContentLoaded', loadInvestmentArticles);
    </script>

    <script>
        function openNewsletterModal() {
            document.getElementById('premiumModal').style.display = 'flex';
        }

        function closeNewsletterModal() {
            document.getElementById('premiumModal').style.display = 'none';
        }
    </script>

    {{-- <script>
        function openPremiumModal() {
            document.getElementById('premiumModal').style.display = 'flex';
        }

        function closePremiumModal() {
            document.getElementById('premiumModal').style.display = 'none';
        }

        /* Close when clicking outside modal */
        window.onclick = function(event) {
            const modal = document.getElementById('premiumModal');
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    </script> --}}

    {{-- <script>
        let selectedPayment = null;

        /* OPEN VERIFICATION MODAL FIRST */
        function openVerificationModal(planType) {
            selectedPayment = planType;
            document.getElementById('verifyModal').style.display = 'flex';
        }

        /* CLOSE VERIFICATION MODAL */
        function closeVerifyModal() {
            document.getElementById('verifyModal').style.display = 'none';
        }

        /* OPEN ACCESS MODAL FROM REGISTER LINK */
        function openAccessFromVerification() {

            // Close verification modal
            closeVerifyModal();

            // Set selected plan inside access modal
            document.getElementById('selectedPlan').value = selectedPayment;

            // Open access modal
            document.getElementById('accessModal').style.display = 'flex';
        }

        /* CLOSE ACCESS MODAL */
        function closeAccessModal() {
            document.getElementById('accessModal').style.display = 'none';
        }

        /* FORM SUBMIT */
        document.getElementById('accessForm').addEventListener('submit', function(e) {
            e.preventDefault();

            if (selectedPayment === 'free') {
                window.location.href = "/free-access";
            }

            if (selectedPayment === 'card') {
                window.location.href = "/stripe-checkout";
            }

            if (selectedPayment === 'paypal') {
                window.location.href = "/paypal-checkout";
            }
        });
    </script>
    <script>
        let selectedPlan = null;

        function openAccessModal(plan) {
            selectedPlan = plan;
            document.getElementById('accessModal').style.display = 'flex';
        }

        function closeAccessModal() {
            document.getElementById('accessModal').style.display = 'none';
        }

        document.getElementById('accessForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = {
                name: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                country: document.getElementById('country').value,
                industry: document.getElementById('industry').value,
                plan: selectedPlan
            };

            const res = await fetch('/intelligence-access', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(formData)
            });

            const data = await res.json();

            if (data.success) {
                window.location.href = data.redirect;
            }
        });
    </script> --}}

    {{-- <script>
    let selectedPayment = null;

    function selectPlan(plan) {
    selectedPlan = plan; // 'card', 'free', etc.
}

    /* ========================================
       OPEN VERIFICATION MODAL
    ======================================== */
    function openVerificationModal(planType) {
        selectedPayment = planType;
        document.getElementById('verifyModal').style.display = 'flex';
    }

    /* ========================================
       CLOSE VERIFICATION MODAL
    ======================================== */
    function closeVerifyModal() {
        document.getElementById('verifyModal').style.display = 'none';
    }

    /* ========================================
       OPEN ACCESS MODAL
       Called from: register link OR after OTP verified
    ======================================== */
    // function openAccessModal() {
    //     // ✅ Sync selectedPlan hidden input with selectedPayment
    //     document.getElementById('selectedPlan').value = selectedPayment;
    //     document.getElementById('accessModal').style.display = 'flex';
    // }

    function openAccessModal(plan = null) {
    // Use passed plan OR fall back to already stored selectedPlan
    if (plan) selectedPlan = plan;

    document.getElementById('accessModal').style.display = 'flex';
}

    /* ========================================
       CLOSE ACCESS MODAL
    ======================================== */
    function closeAccessModal() {
        document.getElementById('accessModal').style.display = 'none';
    }

    /* ========================================
       OPEN ACCESS MODAL FROM REGISTER LINK
    ======================================== */
    function openAccessFromVerification() {
        closeVerifyModal();
        openAccessModal();
    }

    /* ========================================
       FORM SUBMIT — single listener
    ======================================== */
    document.getElementById('accessForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = {
            name:     document.getElementById('fullName').value,
            email:    document.getElementById('email').value,
            country:  document.getElementById('country').value,
            industry: document.getElementById('industry').value,
            plan:     selectedPayment  // ✅ Use one single source of truth
        };

        console.log("Submitting:", formData); // debug

        try {
            const res = await fetch('/intelligence-access', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(formData)
            });

            const data = await res.json();

            console.log("Response:", data); // debug

            if (data.success) {
                window.location.href = data.redirect;
            } else {
                // ✅ Show validation errors
                if (data.errors) {
                    const errorMessages = Object.values(data.errors).flat().join('\n');
                    alert("Please fix the following:\n\n" + errorMessages);
                } else {
                    alert(data.message || "Something went wrong.");
                }
            }

        } catch (error) {
            console.error("Submit error:", error);
            alert("Server error. Please try again.");
        }
    });
</script>    --}}

    <script>
        let selectedPayment = null;

        /* ========================================
           PREMIUM MODAL
        ======================================== */
        function openPremiumModal() {
            document.getElementById('premiumModal').style.display = 'flex';
        }

        function closePremiumModal() {
            document.getElementById('premiumModal').style.display = 'none';
        }

        /* ========================================
           FREE PLAN — skip verify, go straight to access form
        ======================================== */
        function openAccessModal(plan) {
            selectedPayment = plan; // ✅ Set plan here too
            document.getElementById('selectedPlan').value = selectedPayment;
            document.getElementById('accessModal').style.display = 'flex';
            closePremiumModal();
        }

        /* ========================================
           CARD / PAYPAL — open verify modal first
        ======================================== */
        function openVerifyModal(plan) {
            selectedPayment = plan; // ✅ 'card' or 'paypal'
            closePremiumModal();
            document.getElementById('verifyModal').style.display = 'flex';
        }

        // alias — some buttons call openVerificationModal
        function openVerificationModal(plan) {
            openVerifyModal(plan);
        }

        /* ========================================
           VERIFY MODAL
        ======================================== */
        function closeVerifyModal() {
            document.getElementById('verifyModal').style.display = 'none';
        }

        /* ========================================
           OPEN ACCESS MODAL FROM REGISTER LINK
        ======================================== */
        function openAccessFromVerification() {
            closeVerifyModal();
            document.getElementById('selectedPlan').value = selectedPayment;
            document.getElementById('accessModal').style.display = 'flex';
        }

        /* ========================================
           CLOSE ACCESS MODAL
        ======================================== */
        function closeAccessModal() {
            document.getElementById('accessModal').style.display = 'none';
        }

        /* ========================================
           OTP MODAL
        ======================================== */
        function openOtpModal() {
            document.querySelectorAll(".otp-input").forEach(i => i.value = "");
            document.getElementById("otpMessage").innerText = "";
            document.getElementById("otpModal").style.display = "flex";
            document.querySelector(".otp-input").focus();
        }

        function closeOtpModal() {
            document.getElementById("otpModal").style.display = "none";
        }

        /* ========================================
           AFTER OTP VERIFIED — open access modal
        ======================================== */
        function openAccessModalAfterOtp(email) {
            closeOtpModal();
            // ✅ Pre-fill email and sync plan
            document.getElementById("email").value = email;
            document.getElementById('selectedPlan').value = selectedPayment;
            document.getElementById('accessModal').style.display = 'flex';
        }

        /* ========================================
           ACCESS FORM SUBMIT
        ======================================== */
        document.getElementById('accessForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = {
                name: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                country: document.getElementById('country').value,
                industry: document.getElementById('industry').value,
                plan: selectedPayment // ✅ Always from selectedPayment
            };

            console.log("Submitting:", formData); // debug

            try {
                const res = await fetch('/intelligence-access', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(formData)
                });

                const data = await res.json();
                console.log("Response:", data); // debug

                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    if (data.errors) {
                        const msgs = Object.values(data.errors).flat().join('\n');
                        alert("Please fix the following:\n\n" + msgs);
                    } else {
                        alert(data.message || "Something went wrong.");
                    }
                }

            } catch (error) {
                console.error("Submit error:", error);
                alert("Server error. Please try again.");
            }
        });
    </script>

    <script>
        // function openVerifyModal(email) {
        //     document.getElementById('verifyModal').style.display = 'flex';
        //     document.getElementById('verifyEmailInput').innerText = email;
        // }

        // function closeVerifyModal() {
        //     document.getElementById('verifyModal').style.display = 'none';
        // }

        function openVerifyModal(email = '') {
            document.getElementById('verifyModal').style.display = 'flex';
            document.getElementById('verifyEmailInput').value = email; // ✅ .value not .innerText
            document.getElementById('verifyMessage').innerText = '';
        }

        function closeVerifyModal() {
            document.getElementById('verifyModal').style.display = 'none';
        }

        function openOtpModal() {
            document.querySelectorAll(".otp-input").forEach(i => i.value = "");
            document.getElementById("otpMessage").innerText = "";
            document.getElementById("otpModal").style.display = "flex";
            document.querySelector(".otp-input").focus();
        }

        function closeOtpModal() {
            document.getElementById("otpModal").style.display = "none";
        }

        // async function resendVerification() {

        //     const email = document.querySelector('input[name="email"]').value;

        //     document.getElementById('verifyLoader').style.display = 'block';

        //     const res = await fetch('/subscribe', {
        //         method: 'POST',
        //         headers: {
        //             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        //         },
        //         body: new FormData(document.getElementById('accessForm'))
        //     });

        //     document.getElementById('verifyLoader').style.display = 'none';

        //     alert("Verification email resent.");
        // }
    </script>

    {{-- <script>
        async function sendOTP() {
    const email = document.getElementById('verifyEmailInput').value;
    const loader = document.getElementById('verifyLoader');
    const message = document.getElementById('verifyMessage');

    if (!email) {
        message.innerText = "Please enter your email.";
        return;
    }

    loader.style.display = 'block';
    message.innerText = "";

    try {
        const res = await fetch('/send-otp', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ email })
        });

        const data = await res.json();
        loader.style.display = 'none';

        if (data.success) {
            // OTP sent — close verify modal and open OTP modal
            closeVerifyModal();
            openOtpModal();

        } else if (data.already_subscribed) {
            // ✅ Already subscribed — show alert
            message.innerText = "";
            alert("⚠️ You are already subscribed. Please log in to access your account.");

        } else {
            message.innerText = data.message;
        }

    } catch (error) {
        loader.style.display = 'none';
        message.innerText = "Server error. Try again.";
    }
}
        
    </script> --}}

    <script>
        async function sendOTP() {
            const email = document.getElementById('verifyEmailInput').value;
            const loader = document.getElementById('verifyLoader');
            const message = document.getElementById('verifyMessage');

            if (!email) {
                message.style.color = "red";
                message.innerText = "Please enter your email.";
                return;
            }

            loader.style.display = 'block';
            message.innerText = "";

            try {
                const res = await fetch('/send-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        email
                    })
                });

                const data = await res.json();
                loader.style.display = 'none';

                if (data.success) {
                    // ✅ OTP sent — close verify modal and open OTP modal
                    closeVerifyModal();
                    openOtpModal();
                } else {
                    message.style.color = "red";
                    message.innerText = data.message;
                }

            } catch (error) {
                loader.style.display = 'none';
                message.style.color = "red";
                message.innerText = "Server error. Try again.";
            }
        }
    </script>

    {{-- <script>
        // Auto move to next input
        document.querySelectorAll(".otp-input").forEach((input, index, inputs) => {
            input.addEventListener("input", () => {
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });
        });

        // Open modal
        function openOtpModal() {
            document.getElementById("otpModal").style.display = "flex";
        }

        // Close modal
        function closeOtpModal() {
            document.getElementById("otpModal").style.display = "none";
        }

        // Submit OTP
        async function submitOtp() {

            const otp = Array.from(document.querySelectorAll(".otp-input"))
                .map(input => input.value)
                .join('');

            const email = document.getElementById("verifyEmailInput").value;

            const res = await fetch('/verify-otp', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    email,
                    otp
                })
            });

            const data = await res.json();

            if (data.success) {

                if (selectedPayment === 'card') {
                    window.location.href = "/stripe-checkout";
                }

                if (selectedPayment === 'paypal') {
                    window.location.href = "/paypal-checkout";
                }

            } else {
                document.getElementById("otpMessage").innerText = data.message;
            }
        }
    </script> --}}
    {{-- <script>
        async function submitOtp() {

    const inputs     = document.querySelectorAll(".otp-input");
    const otp        = Array.from(inputs).map(i => i.value).join('');
    const email      = document.getElementById("verifyEmailInput").value;
    const otpMessage = document.getElementById("otpMessage");

    // Validate all 6 digits filled
    if (otp.length < 6) {
        otpMessage.style.color = "red";
        otpMessage.innerText   = "Please enter the complete 6-digit code.";
        return;
    }

    otpMessage.style.color = "#888";
    otpMessage.innerText   = "Verifying...";

    try {
        const res = await fetch('/verify-otp', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ email, otp })
        });

        const data = await res.json();

        if (data.success) {

            /* ==========================================
               ALREADY SUBSCRIBED — alert + redirect home
            ========================================== */
            if (data.already_subscribed) {
                otpMessage.style.color = "orange";
                otpMessage.innerText   = "Checking subscription...";

                // Close OTP modal
                closeOtpModal();

                // Show alert then redirect to home
                alert("⚠️ You are already subscribed. Redirecting you to the home page.");
                window.location.href = "/";
                return;
            }

            /* ==========================================
               NEW USER — proceed to Stripe checkout
            ========================================== */
            otpMessage.style.color = "green";
            otpMessage.innerText   = "✓ Verified! Redirecting to payment...";

            setTimeout(() => {
                window.location.href = "/stripe-checkout";
            }, 800);

        } else {
            // Wrong OTP or expired
            otpMessage.style.color = "red";
            otpMessage.innerText   = data.message || "Invalid verification code.";

            // Clear inputs so user can re-enter
            inputs.forEach(i => i.value = "");
            inputs[0].focus();
        }

    } catch (error) {
        otpMessage.style.color = "red";
        otpMessage.innerText   = "Server error. Please try again.";
    }
}
    </script> --}}

    <script>
        async function submitOtp() {

            const inputs = document.querySelectorAll(".otp-input");
            const otp = Array.from(inputs).map(i => i.value).join('');
            const email = document.getElementById("verifyEmailInput").value;
            const otpMessage = document.getElementById("otpMessage");

            if (otp.length < 6) {
                otpMessage.style.color = "red";
                otpMessage.innerText = "Please enter the complete 6-digit code.";
                return;
            }

            otpMessage.style.color = "#888";
            otpMessage.innerText = "Verifying...";

            try {
                const res = await fetch('/verify-otp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        email,
                        otp
                    })
                });

                const data = await res.json();

                if (data.success) {

                    /* ==========================================
                       CASE 1 — ALREADY SUBSCRIBED (PAID)
                       alert + redirect home
                    ========================================== */
                    if (data.already_subscribed) {
                        closeOtpModal();
                        alert("⚠️ You are already subscribed. Redirecting you to the home page.");
                        window.location.href = "/";
                        return;
                    }

                    /* ==========================================
                       CASE 2 — LEAD EXISTS BUT NOT PAID
                       Close OTP modal, open access modal with email pre-filled
                    ========================================== */
                    if (data.lead_exists) {
                        otpMessage.style.color = "green";
                        otpMessage.innerText = "✓ Verified!";

                        closeOtpModal();

                        // ✅ Pre-fill email in access modal
                        document.getElementById("email").value = email;

                        // ✅ Open access modal for user to complete details
                        openAccessModal(selectedPlan);
                        return;
                    }

                    /* ==========================================
                       CASE 3 — BRAND NEW USER
                       Close OTP modal, open access modal with email pre-filled
                    ========================================== */
                    otpMessage.style.color = "green";
                    otpMessage.innerText = "✓ Verified!";

                    closeOtpModal();

                    // ✅ Pre-fill email in access modal
                    document.getElementById("email").value = email;

                    // ✅ Open access modal for user to fill details
                    openAccessModal(selectedPlan);

                } else {
                    // Wrong OTP or expired
                    otpMessage.style.color = "red";
                    otpMessage.innerText = data.message || "Invalid verification code.";

                    inputs.forEach(i => i.value = "");
                    inputs[0].focus();
                }

            } catch (error) {
                otpMessage.style.color = "red";
                otpMessage.innerText = "Server error. Please try again.";
            }
        }

        /* ========================================
           ACCESS MODAL CONTROLS
        ======================================== */
        function openAccessModal() {
            document.getElementById("accessModal").style.display = "flex";
        }

        function closeAccessModal() {
            document.getElementById("accessModal").style.display = "none";
        }
        // if (data.success && !data.already_subscribed) {
        //     openAccessModalAfterOtp(email); // ✅ Handles everything in one call
        //     return;
        // }
    </script>
@endpush
