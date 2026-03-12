<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ekatalog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jadi-anggota.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buku-informasi.css') }}">
    <link rel="stylesheet" href="{{ asset('css/info-kegiatan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/visi-misi.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/active-member.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sejarah.css') }}">
    <link rel="stylesheet" href="{{ asset('css/peranan.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pengurus.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7o3V8A4o0p5d6W0ZQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>

    @include('layouts.components.header')

    @yield('content')

    @include('layouts.components.footer')

    @include('layouts.components.footer-after')

    <button id="btnTop"><i class="fa fa-arrow-up"></i></button>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.anggota-carousel').owlCarousel({
                margin: 20,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                loop: false,
                smartSpeed: 800,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    768: {
                        items: 3
                    },
                    1024: {
                        items: 3
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.showcase-carousel').owlCarousel({
                margin: 20,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                loop: false,
                smartSpeed: 800,
                responsive: {
                    0: { items: 2 },
                    480: { items: 3 },
                    768: { items: 4 },
                    1024: { items: 4 }
                }
            });
        });

    </script>
    <script>
        const btnTop = document.getElementById("btnTop");

        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 200) {
                btnTop.style.display = "block";
            } else {
                btnTop.style.display = "none";
            }
        });

        btnTop.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });    
    </script>

</body>

</html>