<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Make with Africa')</title>

    <!-- link to favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- link to font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- ===== CDN COUNTER ===== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/counterup2/2.0.2/index.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- link custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    @stack('styles')
</head>

<body>

    @include('layouts.header')

    <main>
        @yield('content')
        @include('layouts.footer')
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ===== CDN ===== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.counter').counterUp({
                delay: 10,
                time: 1500
            });
        });
    </script>

    <script>
        const heroImgSwiper = new Swiper(".heroImageSwiper", {

            loop: true,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            speed: 1000,

            effect: "cube",

        });
    </script>

    <script>
        const investorSwiper = new Swiper(".investorVoicesSwiper", {

            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,

            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            speed: 4000, // SLOW SMOOTH
            freeMode: true,

            navigation: {
                nextEl: ".voices-next",
                prevEl: ".voices-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },

        });
    </script>

    {{-- <script>
        document.getElementById("countryFilter")
            .addEventListener("change", function() {

                let value = this.value

                document.querySelectorAll(".country-box")
                    .forEach(box => box.classList.add("d-none"))

                document.getElementById(value)
                    .classList.remove("d-none")

            })
    </script> --}}

    <script>
        // ===== CARD CLICK POPUP =====
        document.querySelectorAll('.invest-card')
            .forEach(card => {

                card.addEventListener('click', function() {

                    let title = this.querySelector('h6').innerText

                    document.getElementById("modalTitle").innerText = title

                    document.getElementById("modalCountry").innerText =
                        document.getElementById("countryFilter").value

                    new bootstrap.Modal(
                        document.getElementById("investModal")
                    ).show()

                })

            })
    </script>

    {{-- <script>
        /* ===== DATABASE ===== */

        const NEWS = [

            {
                cat: "AGRICULTURE",
                title: "Record Cocoa Harvest in Mali Boosts Global Supply",
                desc: "Major development in Mali's agricultural sector expected to impact regional markets.",
                source: "Business Day Africa"
            },

            {
                cat: "INVESTMENT",
                title: "Venture Capital Floods into Ghana Tech Sector",
                desc: "Key financial development in Ghana with implications for investors.",
                source: "Reuters Africa"
            },

            {
                cat: "INVESTMENT",
                title: "Major Infrastructure Investment in Nigeria",
                desc: "New rail and port investments approved by government.",
                source: "Ghana Web"
            },

            {
                cat: "AGRICULTURE",
                title: "AgriTech Startup Raises $9.6M Funding",
                desc: "Investment to expand digital farming across West Africa.",
                source: "BBC Africa"
            }

        ]


        let timer = 30
        let playing = true



        /* ===== RENDER NEWS ===== */

        function render() {

            let box = document.getElementById("newsBox")
            box.innerHTML = ""

            NEWS.sort(() => Math.random() - 0.5)
                .forEach(i => {

                    box.innerHTML += `

<div class="news-item">

<div class="d-flex justify-content-between">

<div class="d-flex gap-2 align-items-center">

<div class="time">
${Math.floor(Math.random() * 120)}m ago
</div>

<div class="${i.cat == 'AGRICULTURE'
                            ? 'badge-agri' : 'badge-invest'
                        }">
${i.cat}
</div>

</div>

<small><i class="fa-solid fa-calendar-days"></i> ${i.source}</small>

</div>


<div class="mt-2 fw-bold">
${i.title}
</div>

<div class="small text-light opacity-75">
${i.desc}
</div>

</div>

`

                })

            document.getElementById("updateTime")
                .innerText = "Last updated: " + new Date().toLocaleTimeString()

        }



        /* ===== LOADING 3s THEN NEWS ===== */

        function refreshNews() {

            let box = document.getElementById("newsBox")

            // SHOW LOADING
            box.innerHTML = `
<div class="loading">
<i class="fa-solid fa-spinner"></i> Loading new breaking news...
</div>
`

            // AFTER 3s LOAD NEWS
            setTimeout(() => {
                timer = 30
                render()
            }, 3000)

        }



        /* ===== TIMER ===== */

        setInterval(() => {

            if (!playing) return

            timer--

            document.getElementById("sec").innerText = timer

            if (timer == 0) {
                refreshNews()
            }

        }, 1000)



        /* ===== PLAY / PAUSE ===== */

        function togglePlay() {

            playing = !playing

            document.getElementById("playBtn")
                .innerText = playing ? "⏸" : "▶"

        }



        /* INIT */
        render()
    </script> --}}

    {{-- ── JAVASCRIPT ─────────────────────────────────────────────── --}}
    <script>
        const REFRESH_INTERVAL = 60;

        let countdown = REFRESH_INTERVAL;
        let timer = null;
        let playing = true;

        /* =========================================
           FETCH NEWS
        ========================================= */
        async function fetchNews() {

            const newsBox = document.getElementById('newsBox');
            if (!newsBox) return;

            newsBox.innerHTML = `
        <div class="text-center py-4 text-primary">
            Loading latest news...
        </div>
    `;

            try {
                const response = await fetch('/api/news/fetch');

                if (!response.ok) {
                    throw new Error('Server error: ' + response.status);
                }

                const data = await response.json();

                if (data.success && Array.isArray(data.articles) && data.articles.length > 0) {
                    renderArticles(data.articles);
                } else {
                    renderEmpty();
                }

                const updateTime = document.getElementById('updateTime');
                if (updateTime) {
                    updateTime.textContent =
                        'Last updated: ' + new Date().toLocaleTimeString();
                }

            } catch (error) {
                renderError(error.message);
            }
        }

        /* =========================================
           RENDER ARTICLES
        ========================================= */
        function renderArticles(articles) {

            const newsBox = document.getElementById('newsBox');

            newsBox.innerHTML = articles.map(article => {

                const title = esc(article.title);
                const url = esc(article.url);
                const source = esc(article.source);
                const description = esc(article.description);
                const image = article.image;
                const timeAgo = formatAge(article.published);
                const category = getCategory(article.category);

                return `
            <div class="news-item d-flex gap-3 mb-4 pb-3 border-bottom">

                <div class="news-thumb">
                    ${image
                        ? `<img src="${esc(image)}"
                                       style="width:120px;height:85px;object-fit:cover;border-radius:6px;"
                                       onerror="this.remove()">`
                        : `<div style="width:120px;height:85px;background:#eee;
                                               display:flex;align-items:center;justify-content:center;
                                               border-radius:6px;">📰</div>`}
                </div>

                <div class="flex-grow-1">

                    <div class="d-flex justify-content-between small text-primary mb-1">
                        <span>${timeAgo}</span>
                        <span class="badge bg-primary">${category}</span>
                    </div>

                    <h6 class="fw-bold mb-1">
    <a href="${url}"
       target="_blank"
       rel="noopener"
       class="text-decoration-none text-white">
        ${title}
    </a>
</h6>

${description
    ? `<p class="small text-light mb-1">${description}</p>`
    : ''}

<small class="text-info">
    ${source}
</small>

                </div>

            </div>
        `;
            }).join('');
        }

        /* =========================================
           HELPERS
        ========================================= */
        function formatAge(dateStr) {
            if (!dateStr) return '';

            const date = new Date(dateStr);
            if (isNaN(date.getTime())) return '';

            const diffMinutes = Math.floor((Date.now() - date.getTime()) / 60000);

            if (diffMinutes < 1) return 'Just now';
            if (diffMinutes < 60) return `${diffMinutes}m ago`;

            const diffHours = Math.floor(diffMinutes / 60);
            if (diffHours < 24) return `${diffHours}h ago`;

            const diffDays = Math.floor(diffHours / 24);
            return `${diffDays}d ago`;
        }

        function getCategory(cat) {
            if (Array.isArray(cat) && cat.length) {
                return cat[0].toUpperCase();
            }
            if (typeof cat === 'string') {
                return cat.toUpperCase();
            }
            return 'NEWS';
        }

        function esc(str) {
            return String(str ?? '')
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;")
                .replace(/'/g, "&#39;");
        }

        /* =========================================
           EMPTY + ERROR STATES
        ========================================= */
        function renderEmpty() {
            document.getElementById('newsBox').innerHTML = `
        <div class="text-center py-4 text-muted">
            No news articles available.
        </div>
    `;
        }

        function renderError(msg) {
            document.getElementById('newsBox').innerHTML = `
        <div class="text-center py-4 text-danger">
            Could not load news. ${esc(msg)}
        </div>
    `;
        }

        /* =========================================
           TIMER CONTROLS
        ========================================= */
        function startTimer() {
            clearInterval(timer);
            countdown = REFRESH_INTERVAL;

            timer = setInterval(() => {
                countdown--;

                const sec = document.getElementById('sec');
                if (sec) sec.textContent = countdown;

                if (countdown <= 0) {
                    fetchNews();
                    countdown = REFRESH_INTERVAL;
                }
            }, 1000);
        }

        function togglePlay() {
            playing = !playing;

            const btn = document.getElementById('playBtn');
            if (btn) btn.textContent = playing ? '⏸' : '▶';

            if (playing) {
                startTimer();
            } else {
                clearInterval(timer);
            }
        }

        function refreshNews() {
            fetchNews();
            if (playing) startTimer();
        }

        /* =========================================
           INIT
        ========================================= */
        document.addEventListener('DOMContentLoaded', () => {
            fetchNews();
            startTimer();
        });
    </script>

    <!-- LIVES MARKETING LOGIC -->
    <script>
        // ===== COUNTING ANIMATION =====
        const counters = document.querySelectorAll('.price');

        counters.forEach(counter => {

            const updateCount = () => {

                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText.replace('$', '');

                const speed = 200;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = '$' + (count + inc).toFixed(2);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = '$' + target;
                }

            };

            updateCount();

        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.filter-tab');
            const items = document.querySelectorAll('.news-item');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Update Active Tab UI
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');

                    const target = tab.getAttribute('data-target');

                    // Filter News Items
                    items.forEach(item => {
                        if (target === 'all' || item.classList.contains(target)) {
                            item.classList.remove('hidden');
                            // Add a small delay for animation effect
                            setTimeout(() => item.style.opacity = '1', 10);
                        } else {
                            item.style.opacity = '0';
                            setTimeout(() => item.classList.add('hidden'), 400);
                        }
                    });
                });
            });
        });
    </script>

    {{-- <script>
function changeLanguage(lang) {
    window.location.href = "/lang/" + lang;
}
</script> --}}


    <script>
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
    </script>



    {{-- =================== this is for the bottom news section ============================ --}}
    <script>
        // ── Helpers ───────────────────────────────────────────────────────────────
        function esc(str = '') {
            return String(str)
                .replace(/&/g, '&amp;').replace(/</g, '&lt;')
                .replace(/>/g, '&gt;').replace(/"/g, '&quot;');
        }

        function formatAge(dateStr) {
            if (!dateStr) return '';
            const diff = Math.floor((Date.now() - new Date(dateStr)) / 60000);
            if (diff < 1) return 'Just now';
            if (diff < 60) return `${diff}m ago`;
            if (diff < 1440) return `${Math.floor(diff / 60)}h ago`;
            return `${Math.floor(diff / 1440)}d ago`;
        }

        // ── newsdata.io returns category as string[] e.g. ["business","finance"] ──
        function getCatLabel(cat) {
            // ❌ OLD: esc(a.category || 'Investment')  ← prints "[object Array]"
            // ✅ FIX: grab first element of the array
            if (Array.isArray(cat)) return cat[0] ?? 'Investment';
            return cat || 'Investment';
        }

        function getCatClass(cat) {
            const label = getCatLabel(cat).toLowerCase();
            const map = {
                business: 'business',
                top: 'top',
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

        // Auto-grade from article richness
        function computeGrade(a) {
            let s = 5;
            if (a.image) s++;
            if ((a.description?.length ?? 0) > 100) s++;
            if ((a.title?.length ?? 0) > 40) s++;
            if (Array.isArray(a.category) && a.category.length) s++;
            return Math.min(s, 10);
        }

        // ── Skeleton ──────────────────────────────────────────────────────────────
        function showSkeleton() {
            document.getElementById('news-grid').innerHTML = Array(6).fill(`
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
        </div>`).join('');
        }

        // ── Main fetch ────────────────────────────────────────────────────────────
        async function loadAfricanInvestmentNews() {
            const grid = document.getElementById('news-grid');
            showSkeleton();

            try {
                // ❌ OLD: '/api/news/africa-investment'  ← 404, wrong prefix
                // ✅ FIX: '/news/africa-investment'
                const res = await fetch('/api/news/africa-investment', {
                    headers: {
                        'Accept': 'application/json',
                        // ✅ CSRF header required by Laravel for all fetch() calls
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
                    }
                });

                if (!res.ok) throw new Error(`HTTP ${res.status}`);

                const data = await res.json();

                if (!data.success || !data.articles?.length) {
                    grid.innerHTML = `
                <div class="col-12 state-card">
                    <div class="icon">📭</div>
                    <p>No African investment news available right now.</p>
                </div>`;
                    return;
                }

                grid.innerHTML = data.articles.map(a => {
                    const catLabel = getCatLabel(a.category);
                    const catCls = getCatClass(a.category);
                    const g = computeGrade(a);

                    const imgHtml = a.image ?
                        `<img src="${esc(a.image)}"
                        alt=""
                        loading="lazy"
                        onerror="this.parentElement.innerHTML='<div class=\\'img-placeholder\\'>📰</div>'">` :
                        `<div class="img-placeholder">📰</div>`;

                    return `
                <div class="col-lg-4 news-item ${esc(a.country || '')}">
                    <div class="news-card h-100"
                         onclick="window.open('${esc(a.url)}','_blank')">

                        <div class="card-img-wrap">
                            ${imgHtml}
                            <span class="badge category-badge ${catCls}">
                                ${esc(catLabel)}
                            </span>
                            <span class="badge grade-badge">
                                ${g * 10}% Growth
                            </span>
                        </div>

                        <div class="p-4">
                            <h5 class="fw-bold">${esc(a.title)}</h5>

                            ${a.description
                                ? `<p class="text-muted small">${esc(a.description)}</p>`
                                : '<p class="text-muted small">No description available.</p>'}

                            <div class="d-flex align-items-center mt-3 pt-3 border-top">
                                <small class="text-muted">
                                    Source: ${esc(a.source || 'Market')}
                                </small>
                                <small class="ms-auto fw-bold">
                                    Grade: ${g}/10
                                </small>
                            </div>
                        </div>

                    </div>
                </div>`;
                }).join('');

            } catch (e) {
                console.error('News load error:', e);
                grid.innerHTML = `
            <div class="col-12 state-card">
                <div class="icon">⚠️</div>
                <p>Failed to load investment news — ${e.message}</p>
            </div>`;
            }
        }

        document.addEventListener('DOMContentLoaded', loadAfricanInvestmentNews);
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

    @stack('scripts')

</body>

</html>
