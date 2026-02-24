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

    @stack('scripts')

</body>

</html>
