<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>404 - Halaman Tidak Ditemukan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/logo.png" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            text-align: center;
        }

        .container {
            padding: 40px;
        }

        /* LOGO */
        .container img {
            width: 140px;
            max-width: 80%;
            margin-bottom: 25px;

            animation: floatLogo 3s ease-in-out infinite;
        }

        /* FLOAT ANIMATION */
        @keyframes floatLogo {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0);
            }
        }

        /* 404 TEXT */
        .error-code {
            font-size: 90px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #015931;
        }

        .title {
            font-size: 26px;
            margin-bottom: 10px;

        }

        .desc {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 30px;

        }

        /* BUTTON */
        .btn-home {
            display: inline-block;
            padding: 12px 26px;
            background: #015931;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-home:hover {
            background: #014a29;
            transform: translateY(-5px);
        }

        @media (max-width:480px) {

            .error-code {
                font-size: 70px;
            }

            .title {
                font-size: 22px;
            }

            .desc {
                font-size: 14px;
            }

        }
    </style>
</head>

<body>

    <div class="container">

        <img src="{{ asset('images/logo-ismi-2.png') }}" alt="Logo ISMI">

        <div class="error-code">404</div>

        <h1 class="title">Halaman Tidak Ditemukan</h1>

        <p class="desc">
            Maaf, halaman yang Anda cari tidak tersedia atau telah dipindahkan.
        </p>

        <a href="/" class="btn-home">
            Kembali ke Beranda
        </a>

    </div>

</body>

</html>