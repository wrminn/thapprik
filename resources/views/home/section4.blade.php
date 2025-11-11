<section class="notice-board">
    <div class="Topic-label">
        <img src="/img/section4/Headtext-Frame.png" alt="" class="notice-board-img">
        <span>ป้ายประกาศ</span>
    </div>
    <div class="box-slide-menu">

        <div id="carouselExampleSlidesBoard" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="2500">
            <!-- สไลด์ -->
            <div class="carousel-inner">
                @forelse($SlideMenu70 as $slide)
                    <a href="/slideDetail/menu/70/id/{{ $slide->slide_id }}">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $slide->slide_path) }}" class="d-block w-100 slide-70"
                                alt="...">
                        </div>
                    </a>
                @empty
                    <div class="">ไม่พบข้อมูล</div>
                @endforelse
            </div>
        </div>
    </div>
</section>

<section class="activity-box">
    <div class="Topic-label">
        <img src="/img/section4/Headtext-Frame.png" alt="" class="notice-board-img">
        <span>กิจกรรม</span>
    </div>
    <div class="activity-directory">
        @forelse($activity as $list)
            <div class="card-activity">
                <a href="/directoryDetail/menu/51/id/{{ $list->texteditor_id }}" class="no-underline">
                    <div class="card-activity-body">
                        <div class="view-count-activity">
                            👁️ เข้าชม {{ $list->texteditor_view ?? 0 }} ครั้ง
                        </div>
                        <div class="activity-img">

                            @if ($list->texteditor_topic_picture)
                                <img src="{{ asset('storage/' . $list->texteditor_topic_picture) }}" alt="topic picture"
                                    class="activity-image">
                            @else
                                <img src="{{ asset('img/representation.png') }}" alt="default logo"
                                    class="activity-image">
                            @endif

                        </div>
                        @php
                            $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                            $months = [
                                1 => 'มกราคม',
                                2 => 'กุมภาพันธ์',
                                3 => 'มีนาคม',
                                4 => 'เมษายน',
                                5 => 'พฤษภาคม',
                                6 => 'มิถุนายน',
                                7 => 'กรกฎาคม',
                                8 => 'สิงหาคม',
                                9 => 'กันยายน',
                                10 => 'ตุลาคม',
                                11 => 'พฤศจิกายน',
                                12 => 'ธันวาคม',
                            ];
                            $day = $date->day;
                            $month = $months[$date->month];
                            $year = $date->year + 543;
                        @endphp

                        {{-- <div class="activity-title">{{ $list->texteditor_title }}</div> --}}
                        <div class="activity-title">{!! \Illuminate\Support\Str::limit(trim(strip_tags($list->texteditor_title)), 20) !!}</div>
                        <div class="activity-detail">
                            {!! \Illuminate\Support\Str::limit(trim(strip_tags($list->texteditor_detail)), 40) !!}

                        </div>
                        <div class="activity-date">{{ $day }} {{ $month }} {{ $year }}</div>
                    </div>
                </a>

            </div>
        @empty
            <div class="">ไม่พบข้อมูล</div>
        @endforelse

    </div>
    @if (!empty($activity))
        <div class="box-all-activity">
            <a href="/directory/menu/51" class="no-underline button-activity-all">
                <img src="/img/section4/Seeall.png" alt="" class="all-activity itemb">
            </a>
        </div>
    @endif
    <div class="activity-banner">
        {{-- <div class="gold-card">
            <div class="gold-header">ราคาทองวันนี้</div>

            <div class="gold-body">
                <div class="gold-row">
                    <div class="gold-label">
                        <div class="small">รับซื้อ</div>
                        <div class="unit">(บาท)</div>
                    </div>
                    <div class="gold-value">{{ rtrim(rtrim($gold['price']['gold_bar']['buy'], '0'), '.') }}.-</div>
                </div>

                <div class="divider"></div>

                <div class="gold-row">
                    <div class="gold-label">
                        <div class="small">ขายออก</div>
                        <div class="unit">(บาท)</div>
                    </div>
                    <div class="gold-value">{{ rtrim(rtrim($gold['price']['gold_bar']['sell'], '0'), '.') }}.-</div>
                </div>
            </div>
        </div> --}}
        <div class="Gold-Banner">
            <div class="gold-value-buy">
                <div class="gold-value">{{ rtrim(rtrim($gold['price']['gold_bar']['buy'], '0'), '.') }}.-</div>
            </div>
            <div class="gold-value-sell">
                <div class="gold-value">{{ rtrim(rtrim($gold['price']['gold_bar']['sell'], '0'), '.') }}.-</div>
            </div>
            <img src="/img/section4/activity/Gold-Banner.png" alt="" class="banner-Gold-Banner">
        </div>
        <div class="back-office">
            <a href=""><img src="/img/section4/activity/Banner-1.png" alt=""
                    class="banner-back-office itemb"></a>
        </div>
        <div class="Fuel-Banner">
            <div class="Oil-value-buy">
                <div class="Oil-value">{{ $Oil['stations']['ptt']['diesel_b7']['price'] }}.-</div>
            </div>
            <div class="Oil-value-sell">
                <div class="Oil-value">{{ $Oil['stations']['ptt']['gasohol_95']['price'] }}.-</div>
            </div>
            <img src="/img/section4/activity/Fuel-Banner.png" alt="" class="banner-Fuel-Banner">
        </div>
    </div>
</section>

<section class="Press-release">
    <div class="Topic-label">
        <img src="/img/section4/Headtext-Frame.png" alt="" class="notice-board-img">
        <span>ข่าวประชาสัมพันธ์</span>
    </div>
    <div class="box-press-release">
        @forelse($listMenu52 as $list)
            <div class="card-Press-release">
                <a href="/directoryDetail/menu/52/id/{{ $list->texteditor_id }}" class="no-underline">
                    <div class="card-Press-release-body">

                        <div class="Press-release-img">
                            @if ($list->texteditor_topic_picture)
                                <img src="{{ asset('storage/' . $list->texteditor_topic_picture) }}"
                                    alt="topic picture" width="150" height="150" style="border-radius: 30px">
                            @else
                                <img src="{{ asset('img/representation.png') }}" alt="default logo" width="150"
                                    height="150" style="border-radius: 30px">
                            @endif

                        </div>
                        @php
                            $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                            $months = [
                                1 => 'มกราคม',
                                2 => 'กุมภาพันธ์',
                                3 => 'มีนาคม',
                                4 => 'เมษายน',
                                5 => 'พฤษภาคม',
                                6 => 'มิถุนายน',
                                7 => 'กรกฎาคม',
                                8 => 'สิงหาคม',
                                9 => 'กันยายน',
                                10 => 'ตุลาคม',
                                11 => 'พฤศจิกายน',
                                12 => 'ธันวาคม',
                            ];
                            $day = $date->day;
                            $month = $months[$date->month];
                            $year = $date->year + 543;
                        @endphp
                        <div class="Press-release-id">
                            <div class="Press-release-cate">
                                <div class="topic-box">ข่าวประชาสัมพันธ์</div>
                                <div class="Press-release-date">{{ $day }} {{ $month }}
                                    {{ $year }}
                                </div>
                            </div>

                            <div class="Press-release-title"><b>{{ $list->texteditor_title }}</b></div>
                            <div class="Press-release-detail">
                                {!! \Illuminate\Support\Str::limit(trim(strip_tags($list->texteditor_detail)), 100) !!}
                            </div>

                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="">ไม่พบข้อมูล</div>
        @endforelse
        @if (!empty($activity))
            <div class="box-all-Press-release">
                <a href="/directory/menu/51" class="no-underline button-Press-release-all">
                    <img src="/img/section4/Seeall.png" alt="" class="all-Press-release itemb">
                </a>
            </div>
        @endif
    </div>

    {{-- <div class="banner-Press-release">
        <div class="banner-carousel" id="bannerCarousel-Press-release">
            <button class="banner-arrow left" id="prevBtn">
                <img src="/img/section4/PressRelease/icon-button-1.png">
            </button>
            <div class="banner-track" id="bannerTrack-Press-release">
                <div class="banner-item-bannerTrack-Press-release">
                    <a href="https://ndwc.disaster.go.th/ndwc">
                        <img src="/img/section4/PressRelease/Banner-1.png" class="banner-Press-release-img">
                    </a>
                </div>
                <div class="banner-item-bannerTrack-Press-release">
                    <a href="https://ndwc.disaster.go.th/ndwc">
                        <img src="/img/section4/PressRelease/Banner-2.png" class="banner-Press-release-img">
                    </a>
                </div>
                <div class="banner-item-bannerTrack-Press-release">
                    <a href="https://ndwc.disaster.go.th/ndwc">
                        <img src="/img/section4/PressRelease/Banner-3.png" class="banner-Press-release-img">
                    </a>
                </div>
            </div>
            <button class="banner-arrow right" id="nextBtn"><img src="/img/section4/PressRelease/icon-button-2.png"></button>
        </div>
    </div> --}}

    <div class="banner-Press-release">
        <div class="banner-carousel" id="bannerCarousel-Press-release">
            <div class="banner-arrow left" id="prevBtn">
                <img src="/img/section4/PressRelease/icon-button-1.png" alt="Previous">
            </div>
            <div class="banner-wrapper" id="bannerWrapper-Press-release">
                <div class="banner-track" id="bannerTrack-Press-release">
                    <div class="banner-item original" data-index="1">
                        <a href="https://ndwc.disaster.go.th/ndwc"><img src="/img/section4/PressRelease/Banner-1.png"
                                class="banner-Press-release-img"></a>
                    </div>
                    <div class="banner-item original" data-index="2">
                        <a href="https://ndwc.disaster.go.th/ndwc"><img src="/img/section4/PressRelease/Banner-2.png"
                                class="banner-Press-release-img"></a>
                    </div>
                    <div class="banner-item original" data-index="3">
                        <a href="https://ndwc.disaster.go.th/ndwc"><img src="/img/section4/PressRelease/Banner-3.png"
                                class="banner-Press-release-img"></a>
                    </div>

                </div>
            </div>
            <div class="banner-arrow right" id="nextBtn">
                <img src="/img/section4/PressRelease/icon-button-2.png" alt="Next">
            </div>
        </div>

    </div>
    <div class="box-all-activity" style="margin-bottom: 50px;">
        <a href="/directory/menu/51" class="no-underline button-activity-all">
            <img src="/img/section4/Seeall.png" alt="" class="all-activity itemb">
        </a>
    </div>
</section>

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const track = document.getElementById("bannerTrack-Press-release");
        const items = Array.from(document.querySelectorAll(".banner-item-bannerTrack-Press-release"));
        const total = items.length;
        const visible = 6;
        const intervalTime = 3000;
        let index = 0;
        let autoSlide;

        // ทำซ้ำแบนเนอร์อีกชุด (เพื่อให้เลื่อนไม่ขาดช่วง)
        track.innerHTML += track.innerHTML;
        const allItems = document.querySelectorAll(".banner-item-bannerTrack-Press-release");

        function moveCarousel() {
            index++;
            updateTransform();

            // ถ้าเลื่อนไปถึงครึ่งหลังของ track ให้รีเซ็ตตำแหน่งแบบเนียน ๆ
            if (index >= total) {
                setTimeout(() => {
                    track.style.transition = "none";
                    index = 0;
                    updateTransform();
                    // รอแป๊บก่อนเปิด transition กลับมา
                    setTimeout(() => {
                        track.style.transition = "transform 0.5s linear";
                    }, 50);
                }, 500);
            }
        }

        function movePrev() {
            index--;
            if (index < 0) {
                track.style.transition = "none";
                index = total - 1;
                updateTransform();
                setTimeout(() => {
                    track.style.transition = "transform 0.5s linear";
                }, 50);
            } else {
                updateTransform();
            }
        }

        function updateTransform() {
            const offset = -(index * (100 / visible));
            track.style.transform = `translateX(${offset}%)`;
        }

        function startAutoSlide() {
            autoSlide = setInterval(moveCarousel, intervalTime);
        }

        function stopAutoSlide() {
            clearInterval(autoSlide);
        }

        // ปุ่มซ้ายขวา
        document.getElementById("nextBtn").addEventListener("click", () => {
            moveCarousel();
            stopAutoSlide();
            startAutoSlide();
        });

        document.getElementById("prevBtn").addEventListener("click", () => {
            movePrev();
            stopAutoSlide();
            startAutoSlide();
        });

        // หยุดเมื่อ hover
        const carousel = document.getElementById("bannerTrack-Press-release");
        carousel.addEventListener("mouseenter", stopAutoSlide);
        carousel.addEventListener("mouseleave", startAutoSlide);

        // เริ่มทำงาน
        startAutoSlide();
    });
</script> --}}

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const track = document.getElementById("bannerTrack-Press-release");
        const slides = Array.from(track.children);
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        let index = 0;
        const totalSlides = slides.length;
        const visibleCount = 3;

        // Clone slides for loop
        slides.forEach(slide => {
            const clone = slide.cloneNode(true);
            track.appendChild(clone);
        });

        function updateCarousel() {
            const moveX = index * (100 / visibleCount);
            track.style.transform = `translateX(-${moveX}%)`;
        }

        nextBtn.addEventListener("click", () => {
            index++;
            if (index > totalSlides) {
                track.style.transition = "none";
                index = 1;
                track.style.transform = `translateX(0)`;
                requestAnimationFrame(() => {
                    requestAnimationFrame(() => {
                        track.style.transition = "transform 0.5s ease-in-out";
                        updateCarousel();
                    });
                });
            } else {
                updateCarousel();
            }
        });

        prevBtn.addEventListener("click", () => {
            index--;
            if (index < 0) {
                track.style.transition = "none";
                index = totalSlides - 1;
                const moveX = index * (100 / visibleCount);
                track.style.transform = `translateX(-${moveX}%)`;
                requestAnimationFrame(() => {
                    requestAnimationFrame(() => {
                        track.style.transition = "transform 0.5s ease-in-out";
                        updateCarousel();
                    });
                });
            } else {
                updateCarousel();
            }
        });

        // Auto slide every 3 seconds
        setInterval(() => nextBtn.click(), 3000);
    });
</script>
