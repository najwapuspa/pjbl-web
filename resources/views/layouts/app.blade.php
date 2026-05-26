<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZALORA Fashion | Zalora Clone</title>

    <!-- CSS Frameworks -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')

    <style>
        /* 1. RESET TOTAL AGAR TIDAK ADA GAP PUTIH */
        html, body { 
            margin: 0 !important; 
            padding: 0 !important; 
            width: 100%;
            overflow-x: hidden; 
            font-family: 'Inter', sans-serif;
            background-color: #fff;
        }

        /* 2. FOOTER FULL WIDTH & FULL DOWN */
        footer {
            background-color: #000;
            color: #fff;
            /* Memaksa lebar penuh layar */
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
            
            /* Padding atas dan bawah yang sangat luas agar memanjang */
            padding: 100px 0 150px 0; 
            margin-top: 80px;
            border-top: 1px solid #333;
        }

        .footer-link-list li { margin-bottom: 15px; }
        .footer-link-list a {
            font-size: 14px;
            color: #fff;
            opacity: 0.6;
            transition: 0.3s;
        }
        .footer-link-list a:hover { opacity: 1; color: #fff !important; }

        .newsletter-input {
            border-radius: 0 !important;
            height: 50px;
        }

        /* Merapikan kontainer di dalam footer */
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Ikon Sosmed */
        .social-icons a {
            font-size: 20px;
            color: #fff;
            opacity: 0.8;
            margin-right: 20px;
        }
    </style>
</head>
<body>

    <main>
        @yield('content') 
    </main>

    {{-- 3. FOOTER YANG SUDAH DIBETULKAN --}}
    <footer>
        <div class="footer-container">
            <div class="row g-5">
                <!-- Kolom 1: Branding -->
                <div class="col-lg-4 col-md-6">
                    <h2 class="fw-bold mb-4" style="letter-spacing: 4px; font-size: 28px;">ZALORA</h2>
                    <p style="font-size: 14px; line-height: 1.8; opacity: 0.7;">
                        Sebagai Pusat Fashion Online di Asia, kami menciptakan kemungkinan-kemungkinan gaya tanpa batas dengan cara memperluas jangkauan produk, mulai dari produk internasional hingga lokal dambaan. Kami menjadikan Anda sebagai pusatnya. Bersama ZALORA, You Own Now.
                    </p>
                    
                    <div class="mt-5">
                        <h6 class="fw-bold mb-3" style="font-size: 13px; letter-spacing: 1px;">TEMUKAN KAMI</h6>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Kolom 2: Layanan -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-4" style="letter-spacing: 2px; font-size: 13px;">LAYANAN</h6>
                    <ul class="list-unstyled footer-link-list">
                        <li><a href="#">Bantuan</a></li>
                        <li><a href="#">Cara Pengembalian</a></li>
                        <li><a href="#">Product Index</a></li>
                        <li><a href="#">Konfirmasi Transfer</a></li>
                        <li><a href="#">Status Order</a></li>
                        <li><a href="#">Brand di Zalora</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Tentang Kami -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-4" style="letter-spacing: 2px; font-size: 13px;">TENTANG KAMI</h6>
                    <ul class="list-unstyled footer-link-list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Promosikan Brand Anda</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Influencer Program</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Newsletter -->
                <div class="col-lg-4 col-md-6">
                    <h6 class="fw-bold mb-4" style="letter-spacing: 2px; font-size: 13px;">ANDA BARU DI ZALORA?</h6>
                    <p style="font-size: 14px; opacity: 0.7;">Subscribe newsletter kami untuk berita mode terbaru.</p>
                    
                    <div class="mb-3">
                        <input type="email" class="form-control newsletter-input" placeholder="Alamat email Kamu">
                    </div>
                    
                    <div class="d-flex gap-2 mb-4">
                        <button class="btn btn-outline-light w-50 fw-bold" style="border-radius: 0; height: 45px;">WANITA</button>
                        <button class="btn btn-outline-light w-50 fw-bold" style="border-radius: 0; height: 45px;">PRIA</button>
                    </div>

                    <div class="mt-5">
                        <h6 class="fw-bold mb-3" style="font-size: 12px;">DOWNLOAD APP KAMI</h6>
                        <div class="d-flex gap-3">
                            <img src="{{ asset('gambar/google-play.png') }}" height="35" alt="Google Play">
                            <img src="{{ asset('gambar/app-store.png') }}" height="35" alt="App Store">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5" style="border-color: rgba(255,255,255,0.1);">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center opacity-50" style="font-size: 12px; letter-spacing: 1px;">
                <p class="mb-0">&copy; 2012-2026 ZALORA FASHION. SELURUH HAK CIPTA DILINDUNGI.</p>
                <div class="mt-3 mt-md-0">
                    <span class="me-3">BAHASA INDONESIA</span>
                    <span class="me-3">|</span>
                    <span>TENTANG KAMI</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')
</body>
</html>