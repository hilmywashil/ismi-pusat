@extends('layouts.app')

@section('title', 'ISMI')

@section('content')

    <section class="wrapper-mosque">
        <div class="hero">
            <div class="heading" data-aos="fade-up">
                <h2 id="ketik"></h2>
                <h1>Selamat datang di<br>Website Resmi ISMI !</h1>
            </div>
            <div class="buttons" data-aos="fade-up">
                <a href="{{ route('about-us') }}" class="btn">Tentang Kami</a>
                <a href="{{ route('contact') }}" class="btn-border">Kontak Kami</a>
            </div>
            <div class="social" data-aos="fade-up">
                <a href="https://www.facebook.com/people/ismipusatofficial/100076381354393/" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/ismipusatofficial/" target="blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCiidhkFzSkyjjDYVxLqivJQ" target="blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <img src="{{ asset('images/mosque.png') }}" class="mosque">
        </div>
    </section>
    <section class="wrapper-white-1">
        <div class="jadwal">
            <div class="section-head" data-aos="fade-up">
                <span class="label">Jadwal</span>
                <h1>Jadwal Shalat</h1>
                <p>{{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }} <br> Wilayah <b>Jakarta</b> dan
                    Sekitarnya</p>
            </div>
            <div class="jadwal-container" data-aos="fade-up">

                <div class="jadwal-card">
                    <img src="images/bg-jadwal.png" class="bg">
                    <div class="content">
                        <p class="title">Subuh</p>
                        <p class="arab">الفجر</p>
                        <div class="time">{{ $jadwal['Fajr'] }} WIB</div>
                    </div>
                </div>

                <div class="jadwal-card">
                    <img src="images/bg-jadwal.png" class="bg">
                    <div class="content">
                        <p class="title">Dzuhur</p>
                        <p class="arab">الظهر</p>
                        <div class="time">{{ $jadwal['Dhuhr'] }} WIB</div>
                    </div>
                </div>
                <div class="jadwal-card">
                    <img src="images/bg-jadwal.png" class="bg">
                    <div class="content">
                        <p class="title">Ashar</p>
                        <p class="arab">العصر</p>
                        <div class="time">{{ $jadwal['Asr'] }} WIB</div>
                    </div>
                </div>

                <div class="jadwal-card">
                    <img src="images/bg-jadwal.png" class="bg">
                    <div class="content">
                        <p class="title">Maghrib</p>
                        <p class="arab">المغرب</p>
                        <div class="time">{{ $jadwal['Maghrib'] }} WIB</div>
                    </div>
                </div>

                <div class="jadwal-card">
                    <img src="images/bg-jadwal.png" class="bg">
                    <div class="content">
                        <p class="title">Isya</p>
                        <p class="arab">العشاء</p>
                        <div class="time">{{ $jadwal['Isha'] }} WIB</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper-white-2">
        <div class="about-home" data-aos="fade-up">
            <div class="left">
                <img src="{{ asset('images/h-ilham-habibie.png') }}" alt="H. Ilham Habibie">
            </div>
            <div class="right">
                <div class="title">
                    <span class="label">Tentang</span>
                    <h1>Bersama ISMI, <br>Menguatkan Saudagar Muslim</h1>
                </div>
                <div class="content">
                    <p>
                        Ikatan Saudagar Muslim se-Indonesia (ISMI) adalah organisasi yang menghimpun para
                        pengusaha dan profesional Muslim dari berbagai sektor usaha di seluruh Indonesia.
                        ISMI hadir sebagai wadah kolaborasi, silaturahmi, dan penguatan ekonomi umat dengan
                        berlandaskan nilai-nilai Islam yang berintegritas, amanah, dan berorientasi pada
                        kemaslahatan bersama.
                    </p>
                    <p>
                        Melalui berbagai program seperti forum bisnis, pelatihan kewirausahaan,
                        pendampingan usaha, serta kolaborasi strategis lintas sektor, ISMI berupaya
                        menciptakan ekosistem ekonomi yang inklusif dan berdampak luas.
                    </p>
                </div>
                <a href="{{ route('about-us') }}" class="btn-green">Selengkapnya Tentang Kami</a>
            </div>
        </div>
    </section>
    <section class="wrapper-white-2">
        <div class="anggota-home" data-aos="fade-up">
            <div class="section-head">
                <span class="label">Anggota</span>
                <h1>Anggota ISMI</h1>
                <p>Kekuatan Kami Ada Pada Anggota</p>
            </div>
            <div class="grid">
                <a href="#">
                    <div class="katalog-card">
                        <img src="{{ asset('images/h-ilham-habibie.png') }}" alt="Anggota ISMI">
                        <div class="container">
                            <h4><b>CyberLabs</b></h4>
                            <p>Digital Marketing</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="katalog-card">
                        <img src="{{ asset('images/h-ilham-habibie.png') }}" alt="Anggota ISMI">
                        <div class="container">
                            <h4><b>CyberLabs</b></h4>
                            <p>Digital Marketing</p>
                        </div>
                    </div>
                </a>
            </div>
            <a href="{{ route('e-katalog') }}" class="btn-green">Lihat Semua Anggota</a>
        </div>
    </section>
    <section class="wrapper-green">
        <div class="product-home" data-aos="fade-up">
            <div class="left">
                <div class="title">
                    <span class="label">Produk</span>
                    <h1>Beberapa Produk ISMI untuk mendukung Bisnis yang Anda Miliki</h1>
                </div>
                <p>Lihat dan optimalkan produk yang sudah disediakan</p>
                <a href="{{ route('produk-ismi') }}" class="btn-white">Lihat Produk Kami</a>
            </div>
            <div class="right">
                <img src="{{ asset('images/mosque-shape.png') }}" alt="Mosque Shape">
            </div>
        </div>
    </section>
    <section class="wrapper-white-1">
        <div class="berita-home" data-aos="fade-up">
            <div class="section-head">
                <span class="label">Berita</span>
                <h1>Berita Kami</h1>
                <p>Update Berita Terbaru seputar ISMI</p>
            </div>
            <div class="grid">
                <a href="#">
                    <div class="berita-card">
                        <img src="{{ asset('images/ilham-habibie-ketua-umum-ismi.webp') }}" alt="Anggota ISMI">
                        <div class="container">
                            <h3><b>Ilham Akbar Habibie dikukuhkan kembali sebagai Ketua Umum ISMI</b></h3>
                            <p>{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum, nulla vitae varius ultricies, sapien arcu laoreet est, nec blandit nibh velit nec ex.', 100) }}
                            </p>
                            <div class="read">
                                <p>Baca Selengkapnya</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="berita-card">
                        <img src="{{ asset('images/ilham-habibie-ketua-umum-ismi.webp') }}" alt="Anggota ISMI">
                        <div class="container">
                            <h3><b>Ilham Akbar Habibie dikukuhkan kembali sebagai Ketua Umum ISMI</b></h3>
                            <p>{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum, nulla vitae varius ultricies, sapien arcu laoreet est, nec blandit nibh velit nec ex.', 100) }}
                            </p>
                            <div class="read">
                                <p>Baca Selengkapnya</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="berita-card">
                        <img src="{{ asset('images/ilham-habibie-ketua-umum-ismi.webp') }}" alt="Anggota ISMI">
                        <div class="container">
                            <h3><b>Ilham Akbar Habibie dikukuhkan kembali sebagai Ketua Umum ISMI</b></h3>
                            <p>{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum, nulla vitae varius ultricies, sapien arcu laoreet est, nec blandit nibh velit nec ex.', 100) }}
                            </p>
                            <div class="read">
                                <p>Baca Selengkapnya</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <a href="{{ route('berita') }}" class="btn-green">Lihat Semua Berita</a>
        </div>
    </section>
    <section class="wrapper-white-2">
        <div class="sponsor" data-aos="fade-up">
            <div class="section-head">
                <span class="label">Sponsor</span>
                <h1>Sponsor Kami</h1>
                <p>Bersama Membangun Masa Depan</p>
            </div>
            <div class="grid">
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_1.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_2.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_3.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_4.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_5.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_6.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_7.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_8.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_9.jpg') }}" alt="Sponsor">
                </div>
                <div class="sponsor-card">
                    <img src="{{ asset('images/sponsor/sponsor_10.jpg') }}" alt="Sponsor">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        const text = "Assalamu'alaikum";
        let i = 0;

        function ketik() {
            if (i < text.length) {
                document.getElementById("ketik").innerHTML += text.charAt(i);
                i++;
                setTimeout(ketik, 70);
            }
        }

        ketik();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.counter');

            const animateCounter = (counter) => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };

                updateCounter();
            };

            // Intersection Observer untuk animasi saat scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>
@endpush