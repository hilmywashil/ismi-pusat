@extends('layouts.app')

@section('title', 'Produk ISMI')

@section('content')
    <section class="wrapper-quran-page-2">
        <div class="katalog-hero" data-aos="fade-up">
            <h2>Produk ISMI</h2>
            <h1>Inovasi yang Mengubah Cara Kerja</h1>
        </div>
    </section>

    <section class="wrapper-white-2">
        <div class="berita-home" data-aos="fade-up">
            <div class="search-bar">
                <form action="{{ route('produk-ismi') }}" method="GET" class="search-box">
                    <input type="text" name="search" placeholder="Cari Produk..." value="{{ request('search') }}">
                    <button type="submit" style="background: none; border: none; cursor: pointer;">
                    </button>
                </form>
            </div>
            <div class="grid">
                @forelse($products as $product)
                    <a href="#">
                        <div class="berita-card">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Anggota ISMI">
                            <div class="container">
                                <h3><b>{{ $product->product_name }}</b></h3>
                                <!-- <p>{{ Str::limit($product->description, 100) }} -->
                                <p>{{ $product->description }}
                                </p>
                                <!-- <div class="read">
                                    <p>Lihat Selengkapnya</p>
                                </div> -->
                            </div>
                        </div>
                    </a>
                @empty
                    <p>Tidak ada</p>
                @endforelse
            </div>
            @if ($products->isEmpty())
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