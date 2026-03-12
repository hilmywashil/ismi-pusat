@extends('layouts.app')

@section('title', 'Peranan ISMI - Ikatan Saudagar Muslim Indonesia Jawa Barat')

@section('content')
    <section class="page-banners">
        <div class="page-banner">
            <span class="label">Tentang</span>
            <h1>Peranan ISMI</h1>
            <p>Informasi Peranan ISMI</p>
        </div>
    </section>
    <section class="peranans">
        <div class="peranan">
            <div class="peranan-content">
                <h1>Peran ISMI</h1>
                <p>Sebagai Penegasan ISMI tidak berbisnis langsung tatapi ISMI Fokus sebagai inisiator program dengan konsep
                    mendalam, mendorong program, mengkomunikasikan program, memediasi program dan mengadvokasi program.
                    Terangkum sbb :
                </p>
                <ul class="numeric-list">
                    <li> Koordinator (Koordinasi & Regulasi program)</li>
                    <li>Inisiator (Inisiasi & Inovasi program2 aplikatif)</li>
                    <li>Fasilitator (Fasilitasi & Mediasi)</li>
                    <li>Agregator (Agregasi, Kolaborasi & Advokasi)</li>
                </ul>
            </div>
            <div class="peranan-image">
                <img src="{{ asset('images/rakornas.jpg') }}" alt="">
            </div>
        </div>
    </section>
@endsection