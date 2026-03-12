@extends('layouts.app')

@section('title', 'E-Katalog - ISMI Jawa Barat')

@section('content')

    <section class="page-banners">
        <div class="page-banner">
            <span class="label">Katalog</span>
            <h1>Anggota ISMI</h1>
            <p>Katalog Anggota ISMI</p>
        </div>
    </section>

    <section class="search-katalogs">
        <div class="search-katalog" data-aos="fade-up">
            <form action="{{ route('e-katalog') }}" method="GET" class="search-box">
                <input type="text" name="search" placeholder="Cari nama perusahaan atau bidang..."
                    value="{{ request('search') }}">
                <button type="submit" style="background: none; border: none; cursor: pointer;">
                </button>
            </form>
        </div>
    </section>

    <section class="showcase-wrappers">
        <div class="e-katalog-content" data-aos="fade-up">
            @forelse($katalogs as $katalog)
                <a href="{{ route('e-katalog.detail', $katalog->id) }}">
                    <div class="katalog-card">
                        <img src="{{ $katalog->logo_url }}" alt="{{ $katalog->company_name }}">
                        <div class="container">
                            <h4><b>{{ Str::limit($katalog->company_name, 25, '...') }}</b></h4>
                            <p>{{ Str::limit($katalog->business_field, 30, '...') }}</p>
                        </div>
                    </div>
                </a>
            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 3rem; color: #6b7280;">
                    <svg viewBox="0 0 24 24" style="width: 80px; height: 80px; margin: 0 auto 1rem; stroke: #d1d5db;"
                        fill="none" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                        <line x1="9" y1="9" x2="15" y2="9" />
                        <line x1="9" y1="15" x2="15" y2="15" />
                    </svg>
                    <h3>{{ request('search') ? 'Tidak ada hasil pencarian' : 'Belum ada katalog tersedia' }}</h3>
                    <p>{{ request('search') ? 'Coba kata kunci lain' : 'Silakan cek kembali nanti' }}</p>
                </div>
            @endforelse
        </div>

    </section>
    @if ($katalogs instanceof \Illuminate\Pagination\LengthAwarePaginator && $katalogs->hasPages())
        <div style="margin-top: 0px; margin-bottom: 100px; display: flex; justify-content: center; gap: 8px; flex-wrap: wrap;">

            {{-- Previous --}}
            @if ($katalogs->onFirstPage())
                <span style="padding: 8px 14px; border-radius: 8px; background: #e5e7eb; color: #9ca3af; font-size: 14px;">
                    ‹
                </span>
            @else
                <a href="{{ $katalogs->previousPageUrl() }}"
                    style="padding: 8px 14px; border-radius: 8px; background: #065f46; color: #fff; font-size: 14px; text-decoration: none;">
                    ‹
                </a>
            @endif

            {{-- Number Pages --}}
            @foreach ($katalogs->links()->elements[0] ?? [] as $page => $url)
                @if ($page == $katalogs->currentPage())
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
            @if ($katalogs->hasMorePages())
                <a href="{{ $katalogs->nextPageUrl() }}"
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

@endsection