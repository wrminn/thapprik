<section class="section1">
    <div class="box-top">
        <nav class="nav-strip">
            <div class="nav-pill has-submenu">
                ข้อมูลพื้นฐาน
                <div class="submenu">
                    <a href="/articles/menu/1">ประวัติความเป็นมา</a>
                    {{-- <a href="/articles/menu/2">วิสัยทัศน์</a> --}}
                    <a href="/articles/menu/3">ข้อมูลสภาพทั่วไป</a>
                    <a href="/articles/menu/4">บริการขั้นพื้นฐาน</a>
                    <div class="submenu-item has-submenu">
                        ข้อมูลหมู่บ้าน/ชุมชน
                        <div class="submenu sub-submenu">
                            <a href="/personnel/menu/5">ผู้นำชุมชน</a>
                            <a href="/articles/menu/6">รายละเอียดชุมชน</a>
                        </div>
                    </div>
                    <a href="/directory/menu/7">ผลิตภัณฑ์ชุมชน</a>
                    <a href="/directory/menu/8">สถานที่สำคัญ</a>
                </div>
            </div>
            <div class="nav-pill has-submenu">
                อำนาจหน้าที่
                <div class="submenu">
                    <a href="/articles/menu/29">เทศบาลตำบล</a>
                    <a href="/articles/menu/30">สำนักปลัด</a>
                    <a href="/articles/menu/32">กองคลัง</a>
                    <a href="/articles/menu/33">กองช่าง</a>
                    <a href="/articles/menu/35">กองการศึกษา</a>
                    <a href="/articles/menu/34">กองสาธารณสุขและสิ่งแวดล้อม</a>
                    <a href="/articles/menu/37">หน่วยตรวจสอบภายใน</a>
                    {{-- <a href="/articles/menu/31">กองยุทธศาสตร์</a>
                        <a href="/articles/menu/36">กองสวัสดิการสังคม</a>
                         --}}
                </div>
            </div>
            <div class="nav-pill has-submenu">
                บุคลากร
                <div class="submenu">
                    <a href="/articles/menu/9">แผนผังโครงสร้างองค์กร</a>
                    <a href="/personnel/menu/10">คณะผู้บริหาร</a>
                    <a href="/personnel/menu/11">สมาชิกสภา</a>
                    <a href="/personnel/menu/12">ผู้บริหารส่วนราชการ</a>
                    <a href="/personnel/menu/13">สำนักปลัด</a>
                    <a href="/personnel/menu/15">กองคลัง</a>
                    <a href="/personnel/menu/16">กองช่าง</a>
                    <a href="/personnel/menu/18">กองการศึกษา</a>
                    <a href="/personnel/menu/17">กองสาธารณสุขและสิ่งแวดล้อม</a>
                    <a href="/personnel/menu/20">หน่วยตรวจสอบภายใน</a>

                    {{-- <a href="/personnel/menu/14">กองยุทธศาสตร์</a>
                         <a href="/personnel/menu/19">กองสวัสดิการสังคม</a> --}}
                </div>
            </div>

            <div class="nav-pill has-submenu">
                แผนพัฒนาท้องถิ่น
                <div class="submenu">
                    @forelse($recentMenu as $Menu)
                        <a href="/directory/menu/38/cate/{{ $Menu->categories_id }}">{{ $Menu->categories_name }}</a>
                    @empty
                    @endforelse
                </div>
            </div>

            <div class="nav-pill has-submenu">
                ผลการดำเนินงาน
                <div class="submenu">
                    <a href="/categories/menu/21">ผลงานองค์กร</a>
                    <a href="/categories/menu/22">รายงานทางการเงิน</a>
                    <a href="/categories/menu/23">รายงานผลการดำเนินงาน</a>
                    <a href="/categories/menu/24">รายงานการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</a>
                    <a href="/categories/menu/25">ข้อมูลเชิงสถิติ</a>
                    <a href="/categories/menu/26">การบริหารและพัฒนาทรัพยากรบุคล</a>
                    <a href="/categories/menu/27">มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริต</a>
                    <a href="/categories/menu/28">ประมวลจริยธรรมและการขับเคลื่อนจริยธรรม</a>
                </div>
            </div>

            <div class="nav-pill has-submenu">
                กฎหมายและระเบียบ
                <div class="submenu">
                    <a href="/directory/menu/39">ข้อบัญญัติ ประกาศและคำสั่ง</a>
                    <a href="/directory/menu/40">กฎหมายอื่นๆที่เกี่ยวข้อง</a>
                    {{-- <a href="/directory/menu/76">แผนพัฒนาเศรษฐกิจและสังคมแห่งชาติ</a>
                        <a href="#">พระราชบัญญัติและพระราชกฤษฎีกา</a>
                        <a href="#">กฎหมาย ระเบียบ และประกาศกระทรวง</a> --}}
                </div>
            </div>

            <div class="nav-pill has-submenu">
                เมนูสำหรับประชาชน
                <div class="submenu">
                    <a href="/complaint/menu/41">รับเเจ้งเรื่องราวร้องเรียนร้องทุกข์ </a>
                    <a href="/corruption/menu/42">รับเเจ้งเรื่องราวร้องเรียนการทุจริตและประพฤติมิชอบ</a>
                    <a href="/satisfaction/menu/43">แบบสอบถามความพึงพอใจ</a>
                    <a href="/directory/menu/44">รายงานผลสำรวจความพึงพอใจ </a>
                    <a href="/categories/menu/45">คู่มือการทำงานของหน่วยงาน</a>
                    <a href="/directory/menu/46">ดาวน์โหลดแบบฟอร์ม</a>
                    <a href="#">ยื่นคำร้องออนไลน์ E-service</a>
                </div>
            </div>
        </nav>
        <div class="slide-top">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade position-relative"
                data-bs-ride="carousel" data-bs-interval="2500">

                {{-- Slides --}}
                <div class="carousel-inner">
                    @forelse($SlideTop as $key => $slide)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $slide->slide_path) }}" class="d-block w-100 slide-top-img"
                                alt="slide {{ $key + 1 }}">
                        </div>
                    @empty
                        <div class="carousel-item active">
                            <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" class="d-block w-100"
                                alt="...">
                        </div>
                    @endforelse
                </div>

                <div class="position-absolute bottom-0 start-0 end-0 d-flex justify-content-center align-items-center gap-3 mb-3"
                    style="z-index: 10;">

                    {{-- <button class="carousel-control-prev position-static" type="button"
                    data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                        <path
                            d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                    </svg>
                    <span class="visually-hidden">Previous</span>
                </button> --}}

                    <div class="carousel-indicators position-static m-0">
                        @forelse($SlideTop as $key => $slide)
                            <button type="button" data-bs-target="#carouselExampleSlidesOnly"
                                data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"
                                aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $key + 1 }}">
                            </button>
                        @empty
                            <button type="button" class="active" data-bs-target="#carouselExampleSlidesOnly"
                                data-bs-slide-to="0"></button>
                        @endforelse
                    </div>

                    {{-- <button class="carousel-control-next position-static" type="button"
                    data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                        <path
                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                    </svg>
                    <span class="visually-hidden">Next</span>
                </button> --}}
                </div>
            </div>
        </div>
    </div>


    <div class="vision-box">
        <div class="vision-title">วิสัยทัศน์</div>
        {{-- <div class="vision"><img src="/img/vission/3.png" alt=""></div> --}}
        <div class="intercity-port">
            <div class="scroll-text">"ทับพริกเข้มแข็ง แหล่งเรียนรู้เชิงนิเวศน์ เขตการค้าชายแดน"</div>
        </div>
        <div class="search-box-1">
            <div class="search-box-img">
                {{-- <img src="/img/vission/2.png" alt=""> --}}
            </div>
        </div>
    </div>
</section>
