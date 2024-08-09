<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetikTravel - Thailand</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <a href="#" class="navbar-logo"><img src=" {{ asset('images/logo.png') }} " alt=""
                        width="150px"></a>
                <ul class="navbar-menu">
                    <a href="#" class="navbar-link">Home</a>
                    <a href="#" class="navbar-link">Tentang Program</a>
                    <a href="#" class="navbar-link">Berita</a>
                    <div class="register"><a href="#" class="navbar-link">Registrasi</a>
                    </div>
                </ul>
            </div>
        </nav>

        <div class="bottom-header">
            <div class="explore">
                <h3>Explore</h3>
                <p>Thailand</p>
                <h6>By</h6>
                <img src="{{ asset('images/logo.png') }}" alt="logo">
                <div class="tentang-pro"><a href="#">Tentang Program</a>
                </div>
            </div>

            <div class="carousel">
                <div class="kotak" style="background: #333 url('images/gambar2.jpg') center/cover no-repeat; "></div>
                <div class="kotak" style="background: #333 url('images/gambar1.jpg') center/cover no-repeat; "></div>
                <div class="kotak" style="background: #333 url('images/gambar3.jpg') center/cover no-repeat; "></div>
                <div class="kotak" style="background: #333 url('images/gambar3.jpg') center/cover no-repeat; "></div>
                <div class="kotak" style="background: #333 url('images/gambar3.jpg') center/cover no-repeat; "></div>
                <div class="kotak" style="background: #333 url('images/gambar3.jpg') center/cover no-repeat; "></div>
            </div>
        </div>
    </header>

    <script>
        let gambar = [
            'images/gambar1.jpg',
            'images/gambar2.jpg',
            'images/gambar3.jpg',
            'images/gambar4.jpg',
            'images/gambar5.jpg',
            'images/gambar6.jpg',
        ]
    </script>
</body>

</html>
