<!DOCTYPE html>
<html lang="en">

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img class="logo1" src="{{ asset('images/ismi-logo.png') }}" alt="Logo 1">
                </a>
            </div>

            <div class="menu-toggle" id="menu-toggle">
                <i class="fa fa-bars"></i>
            </div>

            <div class="menu" id="menu">
                <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('about-us') }}" class="nav-link {{ Request::routeIs('about-us') ? 'active' : '' }}">
                    Tentang
                </a>
                <!-- <div class="dropdown">
                    <a href="javascript:void(0)"
                        class="nav-link dropdown-toggle {{ Request::routeIs('about-us', 'susunan-pengurus') ? 'active' : '' }}">
                        Profile <i class="fa fa-caret-down"></i>
                    </a>

                    <div class="dropdown-menu">
                        <a href="{{ route('about-us') }}" class="{{ Request::routeIs('about-us') ? 'active' : '' }}">
                            Tentang ISMI
                        </a>
                        <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">
                            Sejarah
                        </a>
                        <a href="{{ route('vision-mission') }}"
                            class="{{ Request::routeIs('vision-mission') ? 'active' : '' }}">
                            Visi Misi
                        </a>
                        <a href="{{ route('susunan-pengurus') }}"
                            class="{{ Request::routeIs('susunan-pengurus') ? 'active' : '' }}">
                            Pengurus
                        </a>
                        <a href="{{ route('peranan-ismi') }}"
                            class="{{ Request::routeIs('peranan-ismi') ? 'active' : '' }}">
                            Peranan ISMI
                        </a>
                    </div>
                </div> -->
                <a href="{{ route('berita') }}" class="nav-link {{ Request::routeIs('berita') ? 'active' : '' }}">
                    Berita
                </a>
                <!-- <a href="{{ route('kegiatan') }}" class="nav-link {{ Request::routeIs('kegiatan') ? 'active' : '' }}">
                    Kegiatan
                </a> -->
                <a href="{{ route('e-katalog') }}" class="nav-link {{ Request::routeIs('e-katalog') ? 'active' : '' }}">
                    Anggota
                </a>
                <a href="{{ route('produk-ismi') }}"
                    class="nav-link {{ Request::routeIs('produk-ismi') ? 'active' : '' }}">
                    Produk
                </a>
                <a href="{{ route('contact') }}" class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">
                    Kontak
                </a>
                <div class="buttons-mobile">
                    @auth('admin')
                        {{-- Jika login sebagai Admin --}}
                        <a href="{{ route('admin.dashboard') }}" class="btn">Dashboard Admin</a>
                    @else
                        @auth('anggota')
                            {{-- Jika login sebagai Anggota --}}
                            <a href="{{ route('profile-anggota') }}" class="btn-border-orange">Profile Anggota</a>
                        @else
                            {{-- Jika belum login (Guest) --}}
                            <a href="{{ route('anggota.login') }}" class="btn">Masuk</a>
                            <a href="{{ route('jadi-anggota') }}" class="btn-border-orange">Gabung</a>
                        @endauth
                    @endauth
                </div>
            </div>

            <div class="buttons">
                @auth('admin')
                    {{-- Jika login sebagai Admin --}}
                    <a href="{{ route('admin.dashboard') }}" class="btn">Dashboard Admin</a>
                @else
                    @auth('anggota')
                        {{-- Jika login sebagai Anggota --}}
                        <a href="{{ route('profile-anggota') }}" class="btn-border-orange">Profile Anggota</a>
                    @else
                        {{-- Jika belum login (Guest) --}}
                        <a href="{{ route('anggota.login') }}" class="btn">Masuk</a>
                        <a href="{{ route('jadi-anggota') }}" class="btn-border-orange">Gabung</a>
                    @endauth
                @endauth
            </div>
        </nav>
    </header>
</body>

</html>