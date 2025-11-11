<script src="{{ asset('js/home/section5.js') }}"></script>

<section class="public-service">
    <div class="public-service-box">
        <div class="public-service-title">
            <div class="public-service-th">บริการประชาชน</div>
            <div class="public-service-en">SERVICE THE PUBLIC</div>
        </div>
        <div class="public-service-banner">
            <a href="">
                <img src="/img/section5/public-service/Banner-1.png" alt="" class="public-service-banner itemb">
            </a>
            <a href="">
                <img src="/img/section5/public-service/Banner-2.png" alt="" class="public-service-banner itemb">
            </a>
            <a href="">
                <img src="/img/section5/public-service/Banner-3.png" alt="" class="public-service-banner itemb">
            </a>
            <a href="">
                <img src="/img/section5/public-service/Banner-4.png" alt="" class="public-service-banner itemb">
            </a>
            <a href="">
                <img src="/img/section5/public-service/Banner-5.png" alt="" class="public-service-banner itemb">
            </a>
            <a href="">
                <img src="/img/section5/public-service/Banner-6.png" alt="" class="public-service-banner itemb">
            </a>
        </div>
    </div>
</section>
<section class="Announcement">
    <div class="Topic-label">
        <img src="/img/section4/Headtext-Frame.png" alt="" class="notice-board-img">
        <span>ประกาศความเคลื่อนไหว</span>
    </div>
    <div class="announce-box">
        <div class="announce-body">
            <div class="tab-buttons">
                <button class="active" onclick="openTab('egp')">ประกาศ E-GP</button>
                <button onclick="openTab('buy')">ประกาศจัดซื้อจัดจ้าง</button>
                <button onclick="openTab('result')">ผลประกาศจัดซื้อจัดจ้าง</button>
                <button onclick="openTab('report')">รายงานผลจัดซื้อจัดจ้าง</button>
                <button onclick="openTab('median')">ประกาศราคากลาง</button>
            </div>

            <div id="egp" class="tab-content active">

                <div class="content-announce">

                    @forelse($egp as $list)
                        <a href="" class="no-underline">
                            <div class="item">

                                <div class="box-one-announce">
                                    @php
                                        $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                        $months = [
                                            1 => 'ม.ค',
                                            2 => 'ก.พ',
                                            3 => 'มี.ค',
                                            4 => 'เม.ย',
                                            5 => 'พ.ค',
                                            6 => 'มิ.ย',
                                            7 => 'ก.ค',
                                            8 => 'ส.ค',
                                            9 => 'ก.ย',
                                            10 => 'ต.ค',
                                            11 => 'พ.ย',
                                            12 => 'ธ.ค',
                                        ];
                                        $day = $date->day;
                                        $month = $months[$date->month];
                                        $year = $date->year + 543;
                                    @endphp
                                    <div class="item-icon">
                                        <img src="/img/section5/announce/Icon.png" alt="" class="item-icon-img">
                                    </div>
                                    <div class="item-text">
                                        <div class="item-date">{{ $day }} {{ $month }}
                                            {{ $year }}</div>
                                        <div class="topic-announce">
                                            {{ \Illuminate\Support\Str::limit($list->texteditor_title, 70) }}
                                        </div>
                                        <div class="tag-announce">ประกาศ E-GP</div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    @empty
                        <div class="">ไม่พบข้อมูล</div>
                    @endforelse
                </div>

                <div class="box-all-activity" style="padding: 50px;">
                    <a href="" class="no-underline button-activity-all">
                        <img src="/img/section5/announce/Seeall-Button.png" alt="" class="all-activity itemb">
                    </a>
                </div>
            </div>

            <div id="buy" class="tab-content">

                <div class="content-announce">

                    @forelse($listMenu48 as $list)
                        <a href="/directoryDetail/menu/48/id/{{ $list->texteditor_id }}" class="no-underline">
                            <div class="item">
                                <div class="box-one-announce">

                                    @php
                                        $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                        $months = [
                                            1 => 'ม.ค',
                                            2 => 'ก.พ',
                                            3 => 'มี.ค',
                                            4 => 'เม.ย',
                                            5 => 'พ.ค',
                                            6 => 'มิ.ย',
                                            7 => 'ก.ค',
                                            8 => 'ส.ค',
                                            9 => 'ก.ย',
                                            10 => 'ต.ค',
                                            11 => 'พ.ย',
                                            12 => 'ธ.ค',
                                        ];
                                        $day = $date->day;
                                        $month = $months[$date->month];
                                        $year = $date->year + 543;
                                    @endphp
                                    <div class="item-icon">
                                        <img src="/img/section5/announce/Icon.png" alt="" class="item-icon-img">
                                    </div>
                                    <div class="item-text">
                                        <div class="item-date">{{ $day }} {{ $month }}
                                            {{ $year }}</div>
                                        <div class="topic-announce">
                                            {{ \Illuminate\Support\Str::limit($list->texteditor_title, 70) }}
                                        </div>
                                        <div class="tag-announce">ประกาศจัดซื้อจัดจ้าง</div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    @empty
                        <div class="">ไม่พบข้อมูล</div>
                    @endforelse
                </div>
                <div class="box-all-activity" style="padding: 50px;">
                    <a href="" class="no-underline button-activity-all">
                        <img src="/img/section5/announce/Seeall-Button.png" alt="" class="all-activity itemb">
                    </a>
                </div>
            </div>

            <div id="result" class="tab-content">

                <div class="content-announce">

                    @forelse($listMenu49 as $list)
                        <a href="/directoryDetail/menu/49/id/{{ $list->texteditor_id }}" class="no-underline">
                            <div class="item">
                                <div class="box-one-announce">
                                    @php
                                        $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                        $months = [
                                            1 => 'ม.ค',
                                            2 => 'ก.พ',
                                            3 => 'มี.ค',
                                            4 => 'เม.ย',
                                            5 => 'พ.ค',
                                            6 => 'มิ.ย',
                                            7 => 'ก.ค',
                                            8 => 'ส.ค',
                                            9 => 'ก.ย',
                                            10 => 'ต.ค',
                                            11 => 'พ.ย',
                                            12 => 'ธ.ค',
                                        ];
                                        $day = $date->day;
                                        $month = $months[$date->month];
                                        $year = $date->year + 543;
                                    @endphp
                                    <div class="item-icon">
                                        <img src="/img/section5/announce/Icon.png" alt=""
                                            class="item-icon-img">
                                    </div>
                                    <div class="item-text">
                                        <div class="item-date">{{ $day }}
                                            {{ $month }}{{ $year }}</div>
                                        <div class="topic-announce">
                                            {{ \Illuminate\Support\Str::limit($list->texteditor_title, 70) }}</div>
                                        <div class="tag-announce">ผลประกาศจัดซื้อจัดจ้าง</div>
                                    </div>

                                </div>

                            </div>
                        </a>
                    @empty
                        <div class="">ไม่พบข้อมูล</div>
                    @endforelse
                </div>
                <div class="box-all-activity" style="padding: 50px;">
                    <a href="" class="no-underline button-activity-all">
                        <img src="/img/section5/announce/Seeall-Button.png" alt=""
                            class="all-activity itemb">
                    </a>
                </div>
            </div>

            <div id="report" class="tab-content">

                <div class="content-announce">

                    @forelse($listMenu50 as $list)
                        <a href="/directoryDetail/menu/50/id/{{ $list->texteditor_id }}" class="no-underline">
                            <div class="item">
                                <div class="box-one-announce">
                                    @php
                                        $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                        $months = [
                                            1 => 'ม.ค',
                                            2 => 'ก.พ',
                                            3 => 'มี.ค',
                                            4 => 'เม.ย',
                                            5 => 'พ.ค',
                                            6 => 'มิ.ย',
                                            7 => 'ก.ค',
                                            8 => 'ส.ค',
                                            9 => 'ก.ย',
                                            10 => 'ต.ค',
                                            11 => 'พ.ย',
                                            12 => 'ธ.ค',
                                        ];
                                        $day = $date->day;
                                        $month = $months[$date->month];
                                        $year = $date->year + 543;
                                    @endphp
                                    <div class="item-icon">
                                        <img src="/img/section5/announce/Icon.png" alt=""
                                            class="item-icon-img">
                                    </div>
                                    <div class="item-text">
                                        <div class="item-date">{{ $day }}
                                            {{ $month }}{{ $year }}</div>
                                        <div class="topic-announce">
                                            {{ \Illuminate\Support\Str::limit($list->texteditor_title, 70) }}</div>
                                        <div class="tag-announce">รายงานผลจัดซื้อจัดจ้าง</div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    @empty
                        <div class="">ไม่พบข้อมูล</div>
                    @endforelse
                </div>
                <div class="box-all-activity" style="padding: 50px;">
                    <a href="" class="no-underline button-activity-all">
                        <img src="/img/section5/announce/Seeall-Button.png" alt=""
                            class="all-activity itemb">
                    </a>
                </div>
            </div>

            <div id="median" class="tab-content">

                <div class="content-announce">

                    @forelse($listMenu50 as $list)
                        <a href="/directoryDetail/menu/50/id/{{ $list->texteditor_id }}" class="no-underline">
                            <div class="item">
                                <div class="box-one-announce">
                                    @php
                                        $date = \Carbon\Carbon::parse($list->texteditor_date_show);
                                        $months = [
                                            1 => 'ม.ค',
                                            2 => 'ก.พ',
                                            3 => 'มี.ค',
                                            4 => 'เม.ย',
                                            5 => 'พ.ค',
                                            6 => 'มิ.ย',
                                            7 => 'ก.ค',
                                            8 => 'ส.ค',
                                            9 => 'ก.ย',
                                            10 => 'ต.ค',
                                            11 => 'พ.ย',
                                            12 => 'ธ.ค',
                                        ];
                                        $day = $date->day;
                                        $month = $months[$date->month];
                                        $year = $date->year + 543;
                                    @endphp
                                    <div class="item-icon">
                                        <img src="/img/section5/announce/Icon.png" alt=""
                                            class="item-icon-img">
                                    </div>
                                    <div class="item-text">
                                        <div class="item-date">{{ $day }}
                                            {{ $month }}{{ $year }}</div>
                                        <div class="topic-announce">
                                            {{ \Illuminate\Support\Str::limit($list->texteditor_title, 70) }}</div>
                                        <div class="tag-announce">รายงานผลจัดซื้อจัดจ้าง</div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    @empty
                        <div class="">ไม่พบข้อมูล</div>
                    @endforelse
                </div>
                <div class="box-all-activity" style="padding: 50px;">
                    <a href="" class="no-underline button-activity-all">
                        <img src="/img/section5/announce/Seeall-Button.png" alt=""
                            class="all-activity itemb">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="box-vote">
    <div class="lav-t-480-1"><span style="color: #ffe875;">แบบสำรวจ</span>ความคิดเห็น</div>

    <form id="voteForm">
        @csrf
        <div class="vote">
            <div class="lav-480">
                <div class="lav-t-480-2">อยากให้องค์การบริการส่วนตำบลทับพริกแก้ปัญหาด้านใดมากที่สุด?</div>
            </div>
            <div class="box-text-vote">
                <div class="text-vote">
                    @foreach ($Vote as $list)
                        <label><input type="radio" name="vote" value="{{ $list->id }}">
                            {{ $list->topic }}</label>
                    @endforeach
                </div>
                <div class="bb-vote">
                    <button type="submit" class="s-vote">โหวต</button>
                </div>
            </div>

        </div>
    </form>
    <img src="/img/background/BG-vote.png" alt="" style="width: 100%;">
</section>

<script>
    function openTab(tabId) {
        // ซ่อน tab ทั้งหมด
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.remove('active');
        });

        document.querySelectorAll('.tab-buttons button').forEach(btn => {
            btn.classList.remove('active');
        });

        // แสดง tab ที่เลือก
        document.getElementById(tabId).classList.add('active');
        event.target.classList.add('active');
    }
</script>
