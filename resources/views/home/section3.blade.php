<section class="box-video">
    <div class="video">
        <div class="video-view">
            <div class="video-text">
                <div class="video-title">
                    <span>วีดีทัศน์แนะนำ</span>
                </div>
                <img src="/img/section3/video/Object.png" alt="" class="max-video">
            </div>
            <img src="/img/section3/video/Mac.png" alt="" class="max-video">
            <div class="video-show">
                @if (!empty($video) && $video->slide_link !== '#')
                    @if ($video->slide_type == 'L')
                        @php
                            $videoUrl = $video->slide_link;
                            $videoId = null;

                            if (strpos($videoUrl, 'youtube.com/watch') !== false) {
                                $query = parse_url($videoUrl, PHP_URL_QUERY);
                                parse_str($query, $params);
                                $videoId = $params['v'];
                            } elseif (strpos($videoUrl, 'youtu.be/') !== false) {
                                $videoId = basename(parse_url($videoUrl, PHP_URL_PATH));
                            }
                        @endphp

                        {{-- <iframe width="1200" height="680"
                        src="https://www.youtube.com/embed/{{ $videoId }}?si=2nJqA0yQzUPwTWvj&amp;start=206"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                        <iframe src="https://www.youtube.com/embed/{{ $videoId }}?autoplay=0&mute=0"
                            title="YouTube video player" frameborder="0" allowfullscreen>
                        </iframe>
                    @else
                        {{-- <video controls width="1200" height="680">
                        <source src="{{ asset('storage/' . $video->slide_path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> --}}
                        <video controls>
                            <source src="{{ asset('storage/' . $video->slide_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                @else
                    <div class="">ไม่พบข้อมูล</div>
                @endif
                <a href="" class="all-video"> <img src="/img/section3/video/Seeall-Button.png" alt=""
                        class="max-video itemb"></a>
            </div>

        </div>
        <div class="slide-in-video">
            <img src="/img/section3/video/Image.png" alt="">
        </div>
    </div>
    <div class="banner-section3">
        <div class="box-i">
            <a href="/articles/menu/72">
                <img src="/img/section3/video/Banner-1.png" class="banner-section3-img itemb">
            </a>
        </div>
        <div class="box-i">
            <a href="/articles/menu/72">
                <img src="/img/section3/video/Banner-2.png" class="banner-section3-img itemb">
            </a>
        </div>
        <div class="box-i">
            <a href="/articles/menu/72">
                <img src="/img/section3/video/Banner-3.png" class="banner-section3-img itemb">
            </a>
        </div>
        <div class="box-i">
            <a href="/articles/menu/72">
                <img src="/img/section3/video/Banner-4.png" class="banner-section3-img itemb">
            </a>
        </div>
        <div class="box-i">
            <a href="/articles/menu/72">
                <img src="/img/section3/video/Banner-5.png" class="banner-section3-img itemb">
            </a>
        </div>
        <div class="box-i">
            <a href="/articles/menu/72">
                <img src="/img/section3/video/Banner-6.png" class="banner-section3-img itemb">
            </a>
        </div>
    </div>
</section>
<section class="eservice-box">
    <div class="eservice-banner-left">
        <div class="eservice-top">
            <img src="/img/section3/eservice/Text.png" class="banner-eservice-section3-img-top">
        </div>
        <div class="eservice-bottom">

            <div class="box-i">
                <a href="/articles/menu/72">
                    <img src="/img/section3/eservice/Banner-1.png" class="banner-eservice-section3-img-link itemb">
                </a>
            </div>
            <div class="box-i">
                <a href="/articles/menu/72">
                    <img src="/img/section3/eservice/Banner-2.png" class="banner-eservice-section3-img-link itemb">
                </a>
            </div>
            <div class="box-i">
                <a href="/articles/menu/72">
                    <img src="/img/section3/eservice/Banner-3.png" class="banner-eservice-section3-img-link itemb">
                </a>
            </div>
            <div class="box-i">
                <a href="/articles/menu/72">
                    <img src="/img/section3/eservice/Banner-4.png" class="banner-eservice-section3-img-link itemb">
                </a>
            </div>
        </div>
    </div>
    <div class="eservice-banner-right">
        <div class="eservice-top">
            <img src="/img/section3/eservice/Frame.png" class="banner-eservice-section3-img-Frame">
            <img src="/img/section3/eservice/Logo.png" class="banner-eservice-section3-img-logo">
            <div class="text-eservice">
                <span class="txt-eservice-1">องค์การบริหารส่วนตำบลทับพริก</span>
                <span class="txt-eservice-2">ONE STOP SERVICE (OSS)</span>
                <span class="txt-eservice-3">บริการยื่นคำร้องออนไลน์ ได้ 24 ชั่วโมง</span>
                <span class="txt-eservice-4">เพื่อทุกท่านได้รับบริการที่สะดวก</span>
                <span class="txt-eservice-5">รวดเร็วลดค่าใช้จ่ายการเดินทาง</span>
            </div>
            <img src="/img/section3/eservice/Banner.png" class="banner-eservice-section3-img-eservice itemb">
        </div>
        <div class="eservice-bottom">
            <div class="box-i">
                <a href="/articles/menu/72">
                    <img src="/img/section3/eservice/Login-Banner.png" class="banner-eservice-section3-img itemb">
                </a>
            </div>
            <div class="box-i">
                <a href="/articles/menu/72">
                    <img src="/img/section3/eservice/Register-Banner.png" class="banner-eservice-section3-img itemb">
                </a>
            </div>
        </div>
    </div>
</section>
