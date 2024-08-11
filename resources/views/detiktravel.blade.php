<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetikTravel - Thailand</title>
    <script src="https://kit.fontawesome.com/b684884155.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="container-nav">
                <a href="#" class="navbar-logo"><img src="{{ asset('images/logo.png') }}" alt=""
                        width="150px"></a>
                <ul class="navbar-menu">
                    <a href="#" class="navbar-link">Home</a>
                    <a href="#" class="navbar-link">Tentang Program</a>
                    <a href="#" class="navbar-link">Berita</a>
                    <div class="register"><a href="#" class="navbar-link">Registrasi</a></div>
                </ul>
            </div>
        </nav>

        <div class="bottom-header">
            <div class="explore">
                <h3>Explore</h3>
                <p>Thailand</p>
                <h6>By</h6>
                <img src="{{ asset('images/logo.png') }}" alt="logo">
                <div class="tentang-pro"><a href="#">Tentang Program</a></div>
            </div>

            <div class="carousel">
                <div class="kotak" style="background: #333 url('images/gambar2.jpg') center/cover no-repeat;"></div>
                <div class="kotak" style="background: #333 url('images/gambar1.jpg') center/cover no-repeat;"></div>
                <div class="kotak" style="background: #333 url('images/gambar3.jpg') center/cover no-repeat;"></div>
                <div class="kotak" style="background: #333 url('images/gambar1.jpg') center/cover no-repeat;"></div>
                <div class="kotak" style="background: #333 url('images/gambar2.jpg') center/cover no-repeat;"></div>
                <div class="kotak" style="background: #333 url('images/gambar3.jpg') center/cover no-repeat;"></div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-info">
            <div class="program-info">
                <div class="image-container">
                    <img src="{{ asset('images/bali.jpg') }}" alt="Thailand Beach">
                </div>

            </div>
            {{-- <div class="text-container">
                <h1>Tentang Program</h1>
                <p>
                    Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!
                </p>
                <button class="cta-button">DAFTAR SEKARANG</button>
            </div> --}}
            <div class="timeline-container">
                <div class="text-container">
                    <h1>Tentang Program</h1>
                    <p>
                        Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca
                        Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan seperti
                        pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari perjalanan kami
                        dan menangkan hadiah jalan-jalan yang tak terlupakan!
                    </p>
                    <button class="cta-button">DAFTAR SEKARANG</button>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <h3>Isi Formulir</h3>
                        <span class="date">1 - 31 Mei 2023</span>
                        <p>Lengkapi formulir pendaftaran dengan data sebenarnya</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <h3>Penjurian</h3>
                        <span class="date">1 - 7 Juni 2023</span>
                        <p>Ikuti rangkaian penjurian online/offline</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <h3>Pengumuman Pemenang</h3>
                        <span class="date">11 Juni 2023</span>
                        <p>Ikuti rangkaian penjurian online/offline</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-update">
            <div class="header">
                <img src="{{ asset('images/logo.png') }}" alt=""><span class="highlight">Update</span>
            </div>
            <div class="main-content">
                <div class="news-card">
                    <img src="{{ asset('images/gambar1.jpg') }}" alt="Doraemon Image">
                    <div class="news-content">
                        <h2>Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggil Hujan</h2>
                        <p>3 jam yang lalu</p>
                    </div>
                </div>
                <div class="side-news">
                    <div class="news-item">
                        <img src="https://via.placeholder.com/150" alt="News Image">
                        <div class="sub-news-item">
                            <h3>Thailand Ngarep Cuan Banyak dari Turis China dan Jepang</h3>
                            <p>1 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="news-item">
                        <img src="https://via.placeholder.com/150" alt="News Image">
                        <div class="sub-news-item">
                            <h3>Cahaya Lampu Hiasi Kuil Wat Phra Dhammakaya Thailand Saat Waisak</h3>
                            <p>1 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="news-item">
                        <img src="https://via.placeholder.com/150" alt="News Image">
                        <div class="sub-news-item">
                            <h3>Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand</h3>
                            <p>1 jam yang lalu</p>
                        </div>
                    </div>
                    <button class="view-other">
                        Lihat Berita Lainnya
                    </button>
                </div>
            </div>

        </div>
    </main>

    <!-- HTML Structure -->
    <!-- HTML Structure -->
    <footer style="background-color: #00c0f3; color: white; padding: 20px ;">
        <div class="footer-flex">
            <div class="left-footer">
                <h2 class="title-footer">
                    <span class="explore-footer">Explore</span>
                    <span class="thailand-footer">Thailand</span>
                    <span class="by-footer">By</span>

                </h2>
                <img class="logo-footer" src="{{ asset('images/logo.png') }}" alt="logo" width="100px" style="filter: brightness(0) invert(1);">
                <p>Bergabunglah dalam "Explore Thailand bersama Detiktravel"! <br> Kompetisi ini terbuka bagi pembaca
                    Detiktravel
                    yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi
                    <br> menakjubkan seperti pantai Pak Bia
                    Island dan destinasi lain di Phuket, Thailand. <br> Jadi bagian dari perjalanan kami dan menangkan
                    hadiah
                    jalan-jalan yang tak terlupakan!
                </p>
            </div>

            
            <div class="right-footer">
                <br><br><br>
                <p>Connect With Us</p>
                <a href="#"><i class="fa fa-facebook"
                        style="font-size: 20px;"></i></a>
                <a href="#"><i class="fa fa-twitter"
                        style="font-size: 20px;"></i></a>
                <a href="#"><i class="fa fa-instagram"
                        style="font-size: 20px;"></i></a>
                <a href="#"><i class="fa fa-linkedin"
                        style="font-size: 20px;"></i></a>
                <a href="#"><i class="fa fa-youtube"
                        style="font-size: 20px;"></i></a>
            </div>
        </div>

        <hr style="width: 100%; margin: 20px auto; border: 1px solid white;">
        <div style="text-align: center; margin-top: 20px;">
            <p>Copyright @ 2023 detikcom. All rights reserved</p>
        </div>
    </footer>

    <script>
        // Get all the kotak elements
        const kotaks = document.querySelectorAll('.kotak');

        // Add a click event listener to each kotak
        kotaks.forEach(kotak => {
            kotak.addEventListener('click', () => {
                // Get the background style of the clicked kotak
                const backgroundImage = kotak.style.backgroundImage;

                // Change the background of the header, keeping the linear gradient
                document.querySelector('header').style.backgroundImage =
                    `linear-gradient(rgba(0, 0, 0, 0), rgba(74, 228, 255, 0.995)), ${backgroundImage}`;
            });
        });

        // JavaScript untuk menambahkan animasi (opsional)
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.timeline-item');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            items.forEach(item => {
                observer.observe(item);
            });
        });

        document.getElementById('load-more').addEventListener('click', function() {
            alert('Load more news functionality not implemented in this demo.');
        });
    </script>
</body>

</html>
