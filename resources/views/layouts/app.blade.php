<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="/img/logo.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'องค์การบริหารส่วนตำบลทับพริก')</title>
    <!-- Fonts -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/top.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/bg.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/mobile/xs.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/mobile/sm.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/mobile/md.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/mobile/lg.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/mobile/xl.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/mobile/xxl.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/template/mobile/xxxl.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>


<body>
    <div id="app">

        <section class="top-section">
            <div class="font-box">
                <span class="font-small">ก-</span>
                <span class="font-default">ก</span>
                <span class="font-big">ก+</span>
            </div>
            <div class="header-box-flag">
                <div class="flag-img">
                    <img src="/img/flag/TH.webp" alt="ไทย" width="30" onclick="changeLang('th')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/SG.png" alt="สิงคโปร์" title="English" width="30"
                        onclick="changeLang('en')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/MY.png" alt="มาเลเซีย" title="มาเลย์" width="30" onclick="changeLang('ms')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/ID.png" alt="อินโดนีเซีย" title="อินโดนีเซีย" width="30"
                        onclick="changeLang('id')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/PH.png" alt="ฟิลิปปินส์" title="ฟิลิปปินส์" width="30"
                        onclick="changeLang('tl')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/VN.png" alt="เวียดนาม" title="เวียดนาม" width="30"
                        onclick="changeLang('vi')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/LA.png" alt="ลาว" title="ลาว" width="30" onclick="changeLang('lo')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/MM.png" alt="เมียนมา" title="พม่า" width="30" onclick="changeLang('my')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/KH.png" alt="กัมพูชา" title="เขมร"width="30" onclick="changeLang('km')">
                </div>
                <div class="flag-img">
                    <img src="/img/flag/BN.png" alt="บรูไน" title="บรูไน"width="30" onclick="changeLang('ms')">
                </div>

            </div>
            <div id="google_translate_element" style="display:none;"></div>
        </section>

        <section class="header-section">
            <div class="header-container">
                <div class="header-text-left">
                    <a href="/home"><img src="/img/logo.png" alt="โลโก้" class="header-logo"></a>
                    <div class="heard-title-box">
                        <div class="header-title-th">องค์การบริหารส่วนตำบลทับพริก</div>
                        <div class="header-title-en">Thap Phrik Sub Administartive Organization</div>
                    </div>
                </div>
                <div class="header-text-right">
                    <div class="header-box-login">
                        <div class="header-login-title"><a class="no-underline">เข้าสู่ระบบ</a></div>
                        <div class="header-register-title"><a class="no-underline">สมัครสมาชิก</a></div>
                    </div>
                    <div class="search-box">

                        <input type="text" id="googleSearchInput" placeholder="ค้นหา" class="search-input">
                        <div class="search-icon" onclick="googleSearch()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('home.top')

        <main>
            @yield('content')
        </main>

    </div>

</body>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: 'th',
                includedLanguages: 'en,th,zh-CN,ja,ms,id,tl,vi,lo,my,km'
            },
            'google_translate_element'
        );
    }

    function changeLang(lang) {
        var select = document.querySelector("select.goog-te-combo");
        if (select) {
            select.value = lang;
            select.dispatchEvent(new Event('change'));
        }
    }
</script>

<script>
    function googleSearch() {
        const query = document.getElementById("googleSearchInput").value.trim();
        if (query) {
            // ใช้ Google Custom Search Engine ที่คุณสร้างไว้
            const searchUrl = `https://cse.google.com/cse?cx=07dbb266289c14fbb&q=${encodeURIComponent(query)}`;
            window.open(searchUrl, '_blank'); // เปิดในแท็บใหม่
        }
    }
</script>


<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

{{-- ขนาดฟอนต์ --}}
<script>
    const body = document.querySelector('body');
    const btnSmall = document.querySelector('.font-small');
    const btnDefault = document.querySelector('.font-default');
    const btnBig = document.querySelector('.font-big');

    let currentSize = 16;

    btnSmall.addEventListener('click', () => {
        currentSize = 14;
        body.style.fontSize = currentSize + 'px';
    });

    btnDefault.addEventListener('click', () => {
        currentSize = 16;
        body.style.fontSize = currentSize + 'px';
    });

    btnBig.addEventListener('click', () => {
        currentSize = 18;
        body.style.fontSize = currentSize + 'px';
    });
</script>

</html>
