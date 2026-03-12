@extends('layouts.app')

@section('title', 'Contact ISMI Jabar')

@section('content')
    <section class="page-banners">
        <div class="page-banner">
            <span class="label">Kontak</span>
            <h1>Kontak ISMI</h1>
            <p>Informasi Kontak ISMI JABAR</p>
        </div>
    </section>
    <section class="contacts">
        <div class="contact-wrapper" data-aos="fade-up">
            <div class="contact-forms">
                <div class="contact-form">
                    <div class="forms">

                        @if(session('success'))
                            <div class="alert alert-success">
                                Pesan Anda telah terkirim. Kami akan mengirimkan email kepada Anda secepatnya.
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Anda" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subjek" placeholder="Subjek" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Pesan Anda" rows="5" class="form-control"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn-submit">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="getintouch">

                <div class="contact">
                    <div class="contact-child">
                        <div class="contact-child-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact-child-detail">
                            <h4>Alamat</h4>
                            <p>Jl. Warung Jati Timur No. 1 Pancoran, Jakarta Selatan</p>
                        </div>
                    </div>

                    <div class="contact-child">
                        <div class="contact-child-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact-child-detail">
                            <h4>Hotline</h4>
                            <p>085284005200</p>
                        </div>
                    </div>
                    <div class="contact-child">
                        <div class="contact-child-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-child-detail">
                            <h4>Email</h4>
                            <p>sekretariat@ismi.co.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection