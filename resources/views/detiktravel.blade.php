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
        <div class="container">
            <a href="#" class="logo">detiktravel</a>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tentang Program</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#" class="btn">Registrasi</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Thailand<br><span>Explore</span></h1>
                <p>by detiktravel</p>
                <a href="#" class="btn">TENTANG PROGRAM</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/bali.jpg') }}" alt="Thailand Landscape">
            </div>
        </div>
    </section>

    <section class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('images/bali2.jpg') }}" alt="Slide 1">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/bal3.jpg') }}" alt="Slide 2">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/bali.jpg') }}" alt="Slide 3">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>
</html>
