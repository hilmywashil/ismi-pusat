@extends('layouts.app')

@section('title', $katalog->company_name . ' - E-Katalog ISMI Jawa Barat')

@section('content')
    <section class="page-banners">
        <div class="page-banner-2">
            <div class="detail-katalog-info">
                <h1>{{ $katalog->company_name }}</h1>
                <p>{{ $katalog->business_field }}</p>
            </div>
            <div class="detail-katalog-logo">
                <img src="{{ $katalog->logo_url }}" alt="{{ $katalog->company_name }}">
            </div>
        </div>
    </section>

    <section class="detail-katalog-texts">
        <div class="detail-katalog-text">
            <p>{{ $katalog->description }}</p>
        </div>
    </section>

    <section class="details-katalog-images">
        <div class="detail-katalog-images">
            @foreach($katalog->images_url as $imageUrl)
                <img src="{{ $imageUrl }}" alt="{{ $katalog->company_name }}">
            @endforeach
        </div>
    </section>

    <section class="detail-katalog-contacts">
        <div class="detail-katalog-contact-map">
            <div class="detail-katalog-contact">
                <div>
                    <div class="footer-item-child">
                        <i class="fa fa-map-marker contact-social-icons"></i>
                        <p>{{ $katalog->address }}</p>
                    </div>
                    <div class="footer-item-child">
                        <i class="fa fa-phone contact-social-icons"></i>
                        <p>{{ $katalog->phone }}</p>
                    </div>
                    <div class="footer-item-child">
                        <i class="fa fa-envelope contact-social-icons"></i>
                        <p>{{ $katalog->email }}</p>
                    </div>
                </div>
            </div>

            @if($katalog->map_embed_url)
                <div class="detail-catalog-contact">
                    <iframe class="map-embed" src="{{ $katalog->map_embed_url }}" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            @endif
        </div>
    </section>

@endsection