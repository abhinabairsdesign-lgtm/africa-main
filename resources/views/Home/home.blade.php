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

                    <button class="btn btn-sm btn-outline-light"
                            id="playBtn"
                            type="button"
                            onclick="togglePlay()">
                        ⏸
                    </button>

                    <button class="btn btn-sm btn-success"
                            type="button"
                            onclick="refreshNews()">
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

  <section>
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
            <button class="btn btn-sm btn-light border ms-auto"
                    onclick="loadAfricanInvestmentNews()">
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
    <button id="loadMoreBtnMore" class="btn btn-dark px-4"
        onclick="loadMoreNews()">
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
