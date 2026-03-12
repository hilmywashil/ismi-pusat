@extends ('layouts.app')

@section('title', 'Berita - Ikatan Saudagar Muslim Indonesia Jawa Barat')


@section('content')
    <section class="page-banners">
        <div class="page-banner">
            <span class="label">Kegiatan</span>
            <h1>Kegiatan ISMI</h1>
            <p>Kegiatan seputar ISMI JABAR</p>
        </div>
    </section>

    <section class="beritas">
        <div class="berita">
            <div class="berita-left">

                {{-- Berita Lainnya --}}
                @forelse($kegiatan as $berita)
                    <div class="berita-item">
                        <a href="{{ route('berita-detail', $berita->slug) }}" class="berita-item-image">
                            <img src="{{ $berita->gambar_url }}" alt="{{ $berita->judul }}">
                        </a>
                        <div class="berita-item-content">
                            <div class="berita-meta">
                                <h3>{{ $berita->judul }}</h3>
                                <p class="berita-home-date">{{ $berita->tanggal_format }}</p>
                                <p>{{ Str::limit(strip_tags($berita->konten), 150, '...') }}</p>
                            </div>

                            <a href="{{ route('berita-detail', $berita->slug) }}" class="berita-home-others-btn-more">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                @empty
                    @if(!isset($kegiatan) || !$kegiatan)
                        <div style="text-align: center; padding: 3rem; color: #9ca3af;">
                            <p style="font-size: 1.125rem; margin-bottom: 0.5rem;">Belum Ada Berita</p>
                            <p>Berita akan segera ditampilkan di sini</p>
                        </div>
                    @endif
                @endforelse
            </div>

            <div class="berita-right">
                {{-- Berita Populer --}}
                <h1>Kegiatan Lainnya</h1>
                @forelse($kegiatanLainnya as $populer)
                    <div class="berita-right-item">
                        <a href="{{ route('berita-detail', $populer->slug) }}" class="berita-right-item-image">
                            <img src="{{ $populer->gambar_url }}" alt="{{ $populer->judul }}">
                        </a>
                        <div class="berita-right-item-content">
                            <div>
                                <h3>{{ $populer->judul }}</h3>
                                <p class="berita-home-date">{{ $populer->tanggal_format }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p style="color: #9ca3af; font-size: 0.875rem; padding: 1rem 0;">Belum ada berita populer</p>
                @endforelse

        
            </div>
        </div>
    </section>
@endsection