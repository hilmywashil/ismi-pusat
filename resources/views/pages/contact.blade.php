@extends('layouts.app')

@section('title', 'Kontak ISMI')

@section('content')
    <section class="wrapper-quran-page-3">
        <div class="katalog-hero" data-aos="fade-up">
            <h2>Kontak ISMI</h2>
            <h1>Ada yang Bisa Kami Bantu?</h1>
        </div>
    </section>
    <section class="wrapper-white-2">
        <div class="contact-card" data-aos="fade-up">
            <div class="left">
                <h1>Kami selalu siap untuk membantu Anda dan menjawab pertanyaan Anda</h1>
                <p>Jangan ragu untuk menyapa! Kami sangat senang mendengar
                    pendapat, pertanyaan, atau masukan dari Anda.</p>
                <div class="info">
                    <div class="info-item">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <span>0852-8400-5200</span>
                    </div>

                    <div class="info-item">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <span>sekretariat@ismi.id</span>
                    </div>

                    <div class="info-item">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <span>
                            Jl. Warung Jati Timur No. 1<br>
                            Pancoran, Jakarta Selatan,<br>
                            Indonesia
                        </span>
                    </div>
                </div>
            </div>
            <div class="right">
                <h1>Hubungi Kami</h1>

                <form class="form" method="POST" action="{{ route('contact.send') }}">
                    @csrf

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="nomor_telepon" placeholder="Nomor Telepon">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Subjek</label>
                        <input type="text" name="subjek" placeholder="Subjek">
                    </div>

                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea name="message" placeholder="Pesan"></textarea>
                    </div>

                    <button type="submit" class="btn-submit-contact">Kirim</button>
                </form>
            </div>
        </div>
    </section>
    <section class="maps">
        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9979229691407!2d106.82899591066258!3d-6.26400189369844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f231913550b1%3A0x843b421bb07c54cb!2sJl.%20Wr.%20Jati%20Timur%20Raya%20No.1%2C%20RT.13%2FRW.3%2C%20Kalibata%2C%20Kec.%20Pancoran%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012740!5e0!3m2!1sid!2sid!4v1773634547228!5m2!1sid!2sid"
            allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection