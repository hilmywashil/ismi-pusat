@extends('layouts.app')

@section('title', 'ISMI JABAR - Ikatan Saudagar Muslim Indonesia')

@section('content')

    <section class="heros">
        <div class="hero">
            <div class="hero-1" data-aos="fade-up">
                <h1>Selamat datang di Website ISMI JABAR</h1>
                <p>IKATAN SAUDAGAR MUSLIM SE-INDONESIA</p>
                <div class="hero-buttons">
                    <a href="{{ route('about') }}" class="btn">Tentang Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="abouts" data-aos="fade-up">
            <div class="about-image">
                <img src="{{ asset('images/about.jpg') }}" alt="about Image">
            </div>

            <div class="about-content">
                <div class="about-heading">
                    <span class="label">Overview</span>
                    <h2>Tentang ISMI JABAR</h2>
                </div>
                <div class="about-text">
                    ISMI Jabar hadir sebagai wadah profesional para saudagar muslim di Jawa Barat yang berkomitmen mendorong
                    pertumbuhan ekonomi berbasis nilai-Islam. Melalui kolaborasi, inovasi, dan jaringan yang kuat, kami
                    mewujudkan iklim usaha yang berdaya saing — sekaligus beretika dan berkelanjutan.
                </div>
                <a href="{{ route('about') }}" class="btn">Tentang Kami</a>
            </div>
        </div>
        </div>
    </section>

    <section class="events">
        <div class="event" data-aos="fade-up">
            <span class="label">Kegiatan</span>
            <h2>Kegiatan Kami di ISMI JABAR</h2>
            <div class="events-content">
                @if($kegiatanBerita->count() > 0)
                    {{-- Berita Featured (Terbesar) --}}
                    <div class="events-lastest">
                        <a class="events-hover" href="{{ route('berita-detail', $kegiatanBerita->first()->slug) }}"
                            style="text-decoration: none; color: white;">
                            <div class="events-banner-card-lastest">
                                <img src="{{ $kegiatanBerita->first()->gambar_url }}" class="events-banner-bg"
                                    alt="{{ $kegiatanBerita->first()->judul }}">

                                <div class="events-overlay"></div>

                                <div class="events-banner-content">
                                    <h2>{{ Str::limit($kegiatanBerita->first()->judul, 80) }}</h2>
                                    <p class="events-date">{{ $kegiatanBerita->first()->tanggal_format }}</p>
                                    <a href="{{ route('berita-detail', $kegiatanBerita->first()->slug) }}"
                                        class="events-btn-more">Lihat Lebih Banyak</a>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Berita Lainnya (4 berita dalam grid) --}}
                    <div class="events-others">
                        @foreach($kegiatanBerita->skip(1)->take(4) as $berita)
                            <a href="{{ route('berita-detail', $berita->slug) }}" style="text-decoration: none; color: white;">
                                <div class="events-banner-card">
                                    <img src="{{ $berita->gambar_url }}" class="events-banner-bg" alt="{{ $berita->judul }}">

                                    <div class="events-overlay"></div>

                                    <div class="events-banner-content" style="left: 20px; bottom: 20px;">
                                        <h2>{{ Str::limit($berita->judul, 50) }}</h2>
                                        <p class="events-date">{{ $berita->tanggal_format }}</p>
                                        <span class="events-btn-more">Lihat Lebih Banyak</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center; padding: 3rem 0; color: #ffffff;">
                        <p>Belum ada informasi kegiatan yang tersedia.</p>
                    </div>
                @endif
            </div>
            <div style="text-align:center; margin-top: 50px;">
                <a href="{{ route('informasi-kegiatan') }}" class="btn">Lihat Lebih Banyak</a>
            </div>
        </div>
    </section>

    <section class="home-highlight">
        <div class="home-highlight-container">
            <div class="highlight-head">
                <span class="label">Produk</span>
                <h1>Beberapa Produk ISMI untuk mendukung Bisnis yang Anda Miliki</h1>
            </div>
            <div class="highlight-text">
                <p>Lihat dan optimalkan produk yang sudah disediakan</p>
            </div>
            <div class="highlight-button">
                <a href="{{ route('about') }}" class="btn">Lihat Produk Kami</a>
            </div>
        </div>
    </section>

    <section class="ekatalog-home">
        <div class="ekatalog-homes" data-aos="fade-up">
            <span class="label">Anggota</span>

            <h2>Anggota ISMI JABAR</h2>
            <div class="owl-carousel showcase-carousel">

                @foreach($katalogs->take(6) as $katalog)
                    <a href="{{ route('e-katalog.detail', $katalog->id) }}">
                        <div class="katalog-card">
                            <img src="{{ $katalog->logo_url }}" alt="{{ $katalog->company_name }}">
                            <div class="container">
                                <h4><b>{{ Str::limit($katalog->company_name, 20, '...') }}</b></h4>
                                <p>{{ Str::limit($katalog->business_field, 25, '...') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            @if ($katalogs->isEmpty())
                <a href="{{ route('e-katalog') }}" style="text-decoration: none; color: #015931;">
                    Tidak ada data
                </a>
            @endif

            <div style="margin-top: 50px;">
                <a href="{{ route('e-katalog') }}" class="btn">Lihat Lebih Banyak</a>
            </div>
        </div>
    </section>
    <section class="beritas-homes">
        <div class="berita-heading" data-aos="fade-up">
            <span class="label">Berita</span>
            <h2>Berita Terkini dari ISMI JABAR</h2>
        </div>

        <div class="berita-content" data-aos="fade-up">

            @foreach($beritas as $b)
                <a href="{{ route('berita-detail', $b->slug) }}">
                    <div class="buku-card">
                        <img src="{{ $b->gambar_url }}" alt="Usaha Anggota 1" loading="lazy">
                        <div class="container">
                            <p>{{ $b->tanggal_format }}</p>
                            <h4>{{ Str::limit($b->judul, limit: 80) }}</h4>
                            <p>Baca Selengkapnya</p>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </section>

@endsection

@push('scripts')
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