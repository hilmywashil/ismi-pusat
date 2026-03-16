@extends ('layouts.app')

@section('title', 'Berita')


@section('content')
    @if ($beritaUtama)
        <section class="wrapper-white-2">
            <div class="berita-highlight" data-aos="fade-up">
                <div class="left">
                    <a href="{{ route('berita-detail', $beritaUtama->slug) }}">
                        <img src="{{ asset('storage/' . $beritaUtama->gambar) }}" alt="Article">
                    </a>
                </div>
                <div class="right">
                    <span class="label">Terbaru</span>
                    <a href="{{ route('berita-detail', $beritaUtama->slug) }}">
                        <h1>{{ $beritaUtama->judul }}</h1>
                    </a>
                    <p>{{ $beritaUtama->tanggal_format }}</p>
                    <p>{{ Str::limit($beritaUtama->konten, 200) }}</p>
                    <a href="{{ route('berita-detail', $beritaUtama->slug) }}" class="read">
                        Baca Selengkapnya</a>
                </div>
            </div>
        </section>
    @endif
    <section class="wrapper-white-3">
        <div class="berita-home" data-aos="fade-up">
            <div class="search-bar">
                <form action="{{ route('berita') }}" method="GET" class="search-box">
                    <input type="text" name="search" placeholder="Cari Berita..." value="{{ request('search') }}">
                    <button type="submit" style="background: none; border: none; cursor: pointer;">
                    </button>
                </form>
            </div>
            <div class="grid">
                @forelse($beritas as $berita)
                    <a href="{{ route('berita-detail', $berita->slug) }}">
                        <div class="berita-card">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Anggota ISMI">
                            <div class="container">
                                <h3><b>{{ $berita->judul }}</b></h3>
                                <p>{{ Str::limit($berita->konten, 100, ' -') }}
                                </p>
                                <div class="read">
                                    <p>Baca Selengkapnya</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    not found
                @endforelse
            </div>
            @if ($beritas instanceof \Illuminate\Pagination\LengthAwarePaginator && $beritas->hasPages())
                <div style="margin-top: 0px; display: flex; justify-content: center; gap: 8px; flex-wrap: wrap;">

                    {{-- Previous --}}
                    @if ($beritas->onFirstPage())
                        <span style="padding: 8px 14px; border-radius: 8px; background: #e5e7eb; color: #9ca3af; font-size: 14px;">
                            ‹
                        </span>
                    @else
                        <a href="{{ $beritas->previousPageUrl() }}"
                            style="padding: 8px 14px; border-radius: 8px; background: #065f46; color: #fff; font-size: 14px; text-decoration: none;">
                            ‹
                        </a>
                    @endif

                    {{-- Number Pages --}}
                    @foreach ($beritas->links()->elements[0] ?? [] as $page => $url)
                        @if ($page == $beritas->currentPage())
                            <span
                                style="padding: 8px 14px; border-radius: 8px; background: #047857; color: #fff; font-size: 14px; font-weight: 600;">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                                style="padding: 8px 14px; border-radius: 8px; border: 1px solid #047857; color: #047857; font-size: 14px; text-decoration: none;">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    {{-- Next --}}
                    @if ($beritas->hasMorePages())
                        <a href="{{ $beritas->nextPageUrl() }}"
                            style="padding: 8px 14px; border-radius: 8px; background: #065f46; color: #fff; font-size: 14px; text-decoration: none;">
                            ›
                        </a>
                    @else
                        <span style="padding: 8px 14px; border-radius: 8px; background: #e5e7eb; color: #9ca3af; font-size: 14px;">
                            ›
                        </span>
                    @endif
                </div>
            @endif
            @if ($beritas->isEmpty())
                <div style="margin-top: 0px; display: flex; justify-content: center; gap: 8px; flex-wrap: wrap;">

                    {{-- Previous --}}
                    <a href="#"
                        style="padding: 8px 14px; border-radius: 8px; background: #065f46; color: #fff; font-size: 14px; text-decoration: none;">
                        < </a>

                            {{-- Page Numbers --}}
                            <a href="#"
                                style="padding: 8px 14px; border-radius: 8px; border: 1px solid #047857; color: #047857; font-size: 14px; text-decoration: none;">
                                1
                            </a>

                            <span
                                style="padding: 8px 14px; border-radius: 8px; background: #047857; color: #fff; font-size: 14px; font-weight: 600;">
                                2
                            </span>

                            <a href="#"
                                style="padding: 8px 14px; border-radius: 8px; border: 1px solid #047857; color: #047857; font-size: 14px; text-decoration: none;">
                                3
                            </a>

                            <a href="#"
                                style="padding: 8px 14px; border-radius: 8px; border: 1px solid #047857; color: #047857; font-size: 14px; text-decoration: none;">
                                4
                            </a>

                            {{-- Next --}}
                            <a href="#"
                                style="padding: 8px 14px; border-radius: 8px; background: #065f46; color: #fff; font-size: 14px; text-decoration: none;">
                                >
                            </a>

                </div>
            @endif
        </div>
    </section>
@endsection