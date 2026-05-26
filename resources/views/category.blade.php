@extends('layouts.app')

{{-- NAVBAR & HEADER SECTION --}}
@section('header_top')
<div class="container-fluid bg-light border-bottom py-2">
    <div class="container d-flex justify-content-end align-items-center gap-4">
        {{-- Login Section --}}
        <div class="d-flex align-items-center gap-2" style="cursor: pointer;">
            <i class="bi bi-person fs-5"></i>
            <span class="fw-bold" style="font-size: 13px;">Masuk / Daftar</span>
        </div>
        
        {{-- Wishlist Section --}}
        <div class="position-relative cursor-pointer" id="wishlist-trigger">
            <i class="bi bi-heart fs-5"></i>
            <span id="wishlist-counter" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 9px; display: none;">
                0
            </span>
        </div>

        {{-- Cart Section --}}
        <div class="position-relative cursor-pointer">
            <i class="bi bi-bag fs-5"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark" style="font-size: 9px;">0</span>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container py-4">
    {{-- BREADCRUMB NAVIGATION --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2" style="font-size: 11px; letter-spacing: 0.5px;">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Beranda</a></li>
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">{{ strtoupper($slug) }}</li>
        </ol>
    </nav>
    
    <div class="d-flex justify-content-between align-items-end mb-4 border-bottom pb-3">
        <h3 class="fw-bold text-uppercase m-0" style="letter-spacing: 2px; font-family: 'Inter', sans-serif;">
            KOLEKSI {{ $slug }}
        </h3>
    </div>

    <div class="row g-3 g-md-4">
        @php
            $currentSlug = strtolower($slug);

            // DATA SPORTS
            $sportProducts = [
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes', 'price' => 2500000, 'img' => 'adidas-pink.jpg', 'is_vip' => true],
                ['brand' => 'ADIDAS', 'name' => 'Adizero EVO SL Shoes', 'price' => 2500000, 'img' => 'adidas-white-blue.jpg', 'is_vip' => false],
                ['brand' => 'ADIDAS', 'name' => 'Adizero EVO SL Shoes', 'price' => 2500000, 'img' => 'adidas-white-purple.jpg', 'is_vip' => false],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes', 'price' => 2500000, 'img' => 'adidas-white-black.jpg', 'is_vip' => true],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes', 'price' => 2500000, 'img' => 'adidas-mix.jpg', 'is_vip' => true],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes', 'price' => 2500000, 'img' => 'adidas-grey.jpg', 'is_vip' => true],
            ];

            // DATA ANAK
            $kidsProducts = [
                ['brand' => 'H&M', 'name' => 'T-shirt NASA Space Admin', 'price' => 129900, 'old_price' => null, 'discount' => null, 'img' => 'hm-nasa.jpg'],
                ['brand' => 'H&M', 'name' => 'Sweatshirt Mon Amour Cherry', 'price' => 169915, 'old_price' => 199900, 'discount' => '-15%', 'img' => 'hm-red.jpg'],
                ['brand' => 'PAYLESS', 'name' => 'Payless Smartfit Childrens Aqua', 'price' => 63000, 'old_price' => 299000, 'discount' => '-79%', 'img' => 'payless-pink.jpg'],
                ['brand' => 'PAYLESS', 'name' => 'Payless Club Culture Childrens', 'price' => 90000, 'old_price' => 179000, 'discount' => '-50%', 'img' => 'payless-purple.jpg'],
                ['brand' => 'PAYLESS', 'name' => 'Payless Smartfit Childrens Bamp', 'price' => 63000, 'old_price' => 299000, 'discount' => '-79%', 'img' => 'payless-black.jpg'],
                ['brand' => 'PAYLESS', 'name' => 'Payless Club Culture Childrens Bel', 'price' => 72000, 'old_price' => 219000, 'discount' => '-67%', 'img' => 'payless-white.jpg'],
            ];

            // DATA LUXURY
            $luxuryProducts = [
                ['brand' => 'Michael Kors', 'name' => 'Michael Kors Fulton Studded Log...', 'price' => 1900000, 'old_price' => 3250000, 'discount' => '-42%', 'img' => 'mk-shoes.jpg'],
                ['brand' => 'Longchamp', 'name' => 'Le Pliage Original Pouch with...', 'price' => 1411200, 'old_price' => 2240000, 'discount' => '-37%', 'img' => 'lc-pouch.jpg'],
                ['brand' => 'BALLY', 'name' => 'Brixton O Leather Espardilles -...', 'price' => 4741200, 'old_price' => 8700000, 'discount' => '-46%', 'img' => 'bally.jpg'],
                ['brand' => 'Juene Jewelry', 'name' => 'Gelang Serut Emas 7k - Siena Gol...', 'price' => 3748320, 'old_price' => 5206000, 'discount' => '-28%', 'img' => 'juene.jpg'],
                ['brand' => 'Longchamp', 'name' => 'Le Pliage Original L Tote Bag -...', 'price' => 1814400, 'old_price' => 3360000, 'discount' => '-46%', 'img' => 'lc-tote.jpg'],
                ['brand' => 'Longchamp', 'name' => 'Le Pliage Original L Tote Bag -...', 'price' => 1814400, 'old_price' => 3360000, 'discount' => '-46%', 'img' => 'lc-tote2.jpg'],
            ];

            // DATA BEAUTY
            $beautyProducts = [
                ['brand' => 'Dior', 'name' => 'Dior Backstage Glow Face Palette 001 Uni...', 'price' => 1175000, 'old_price' => null, 'discount' => null, 'img' => 'beauty-dior-palette.jpg', 'is_vip' => true],
                ['brand' => 'Christian Dior', 'name' => 'Christian Dior Dior Addict Lip Maximizer 0...', 'price' => 274500, 'old_price' => 535000, 'discount' => '-49%', 'img' => 'beauty-dior-lip.jpg', 'is_vip' => true],
                ['brand' => 'Benefit', 'name' => 'Benefit Precisely, My Brow Eyebrow Pencil...', 'price' => 480000, 'old_price' => null, 'discount' => null, 'img' => 'beauty-benefit-pencil.jpg', 'is_vip' => true],
                ['brand' => 'Benefit', 'name' => 'Benefit - Precisely My Brow Wax 6', 'price' => 336000, 'old_price' => 480000, 'discount' => '-30%', 'img' => 'beauty-benefit-wax.jpg', 'is_vip' => true],
                ['brand' => 'Mac Cosmetics', 'name' => 'Matte Lipstick Cherish', 'price' => 395000, 'old_price' => null, 'discount' => null, 'img' => 'beauty-mac-lipstick.jpg', 'is_vip' => true],
                ['brand' => 'Benefit', 'name' => 'Benefit The POREfessional Face Primer', 'price' => 615000, 'old_price' => null, 'discount' => null, 'img' => 'beauty-benefit-primer.jpg', 'is_vip' => true],
            ];

            if ($currentSlug == 'sports') {
                $displayProducts = $sportProducts;
            } elseif ($currentSlug == 'anak') {
                $displayProducts = $kidsProducts;
            } elseif ($currentSlug == 'luxury') {
                $displayProducts = $luxuryProducts;
            } elseif ($currentSlug == 'beauty') {
                $displayProducts = $beautyProducts;
            } else {
                $displayProducts = $products ?? [];
            }
        @endphp

        @forelse($displayProducts as $p)
        @php $p = (array)$p; @endphp
        <div class="col-lg-4 col-6 mb-4">
            <div class="card border-0 h-100 product-card shadow-sm position-relative">
                <div class="position-relative overflow-hidden bg-light" style="aspect-ratio: 1/1;">
                    <button class="btn btn-search-overlay shadow-sm rounded-circle position-absolute">
                        <i class="bi bi-arrow-repeat"></i>
                    </button>
                    <img src="{{ asset('gambar/' . ($p['img'] ?? 'default.jpg')) }}" 
                         class="img-fluid w-100 h-100 object-fit-cover transition-transform" 
                         alt="{{ $p['name'] ?? 'Product' }}">
                    <div class="position-absolute bottom-0 w-100 bg-black text-white text-center py-1 px-1" style="font-size: 9px; line-height: 1.2; opacity: 0.8;">
                        <span class="fw-bold">Indodana 12% off</span><br>
                        <span style="font-size: 7px;">Min. belanja Rp2.000.000...</span>
                    </div>
                </div>
                
                <div class="card-body px-3 py-3 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-1">
                        <div class="flex-grow-1 overflow-hidden">
                            <span class="fw-bold d-inline-block text-uppercase" style="font-size: 11px; color: #222;">
                                {{ $p['brand'] ?? 'BRAND' }}
                                @if(isset($p['is_vip']) && $p['is_vip'])
                                    <span class="badge bg-primary ms-1" style="font-size: 7px; background-color: #6f42c1 !important;">VIP</span>
                                @endif
                            </span>
                        </div>
                        <button class="btn p-0 border-0 btn-wishlist-toggle">
                            <i class="bi bi-heart heart-icon" style="font-size: 18px;"></i>
                        </button>
                    </div>
                    <p class="text-muted mb-2 text-truncate" style="font-size: 12px;">{{ $p['name'] ?? 'Produk Terbaru' }}</p>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center gap-2">
                            <span class="fw-bold {{ (isset($p['old_price']) && $p['old_price'] > 0) ? 'text-danger' : 'text-dark' }}" style="font-size: 14px;">
                                Rp {{ number_format((int)($p['price'] ?? 0), 0, ',', '.') }}
                            </span>
                        </div>
                        @if(isset($p['old_price']) && $p['old_price'] > 0)
                        <div class="d-flex align-items-center gap-1 mt-1">
                            <span class="text-muted text-decoration-line-through" style="font-size: 10px;">
                                Rp {{ number_format($p['old_price'], 0, ',', '.') }}
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger fw-bold" style="font-size: 9px;">
                                {{ $p['discount'] ?? '' }}
                            </span>
                        </div>
                        @endif
                    </div>
                    <div class="d-flex gap-2 align-items-center mt-3 pt-2 border-top">
                        <div class="rating text-warning" style="font-size: 10px;">
                            <i class="bi bi-star-fill"></i><span class="text-muted ms-1">5.0</span>
                        </div>
                        <span class="badge bg-light text-dark fw-normal border" style="font-size: 9px;">Original</span>
                    </div>
                    @if($currentSlug == 'luxury' || $currentSlug == 'beauty')
                    <div class="mt-3">
                        <button class="btn btn-outline-dark w-100 py-2 fw-bold" style="font-size: 11px; border-radius: 4px;">Masukkan ke Tas</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <i class="bi bi-box-seam fs-1 text-muted d-block mb-3"></i>
            <p class="text-muted">Produk untuk kategori ini belum tersedia.</p>
        </div>
        @endforelse
    </div>
</div>

{{-- SEO DESCRIPTION FOOTER (BERDASARKAN Screenshot 2026-05-14 123537.png) --}}
<section class="py-5 bg-white border-top mt-5 shadow-sm">
    <div class="container" style="font-size: 12px; color: #333; line-height: 1.8; font-family: 'Inter', sans-serif;">
        
        {{-- Teks Deskripsi Panjang --}}
        <div class="mb-4 text-justify">
            <h6 class="fw-bold text-uppercase mb-2" style="font-size: 13px; letter-spacing: 0.5px;">PRODUK TERBARU {{ strtoupper($slug) }}</h6>
            <p>Fashion sangat penting bagi siapa saja yang selalu menginginkan keindahan di segala hal. Kini sudah hadir koleksi <strong>Produk Terbaru {{ $slug }}</strong> yang siap melengkapi koleksi produk fashion anda di rumah. Tersedia berbagai keperluan <strong>fashion {{ $slug }} terbaru</strong> yang lengkap dan murah mulai dari alas kaki hingga kerudung penutup kepala. Produk – produk <strong>fashion terbaru</strong> ini sangat cocok anda miliki sebagai persiapan hari-hari besar.</p>

            <h6 class="fw-bold text-uppercase mb-2 mt-4" style="font-size: 13px; letter-spacing: 0.5px;">KOLEKSI PRODUK FASHION {{ strtoupper($slug) }} TERBARU</h6>
            <p>Sekarang anda sudah bisa memiliki koleksi <strong>Produk Terbaru {{ $slug }}</strong> yang trendi dan berkualitas. Tersedia produk fashion mulai dari alas kaki. Bagi anda yang gemar tampil feminin dan girly, tersedia produk sepatu flat cantik, sandal wedges, hingga berbagai macam heels. Untuk anda yang gemar tampil simpel dan sporty bisa memilih koleksi sepatu sneaker yang cocok dikenakan oleh anda. Untuk busana atasan tersedia <strong>koleksi terbaru</strong> mulai dari kerudung dan busana muslimah hingga busana trendi yang didesain khusus.</p>

            <h6 class="fw-bold text-uppercase mb-2 mt-4" style="font-size: 13px; letter-spacing: 0.5px;">TAMBAH KOLEKSI FASHION TERBARU ANDA DENGAN BELANJA DI ZALORA INDONESIA</h6>
            <p>Situs <strong>ZALORA Indonesia</strong> menawarkan kemudahan dalam berbelanja <strong>Produk Terbaru {{ $slug }}</strong> mulai dari busana, kerudung, hingga alas kaki. <strong>ZALORA Indonesia</strong> menyediakan koleksi lengkap <strong>produk-produk fashion terbaru</strong> dengan harga yang terjangkau dan sistem online yang akan memfasilitasi anda untuk berbelanja praktis dari rumah.</p>
        </div>

        {{-- Kategori Links --}}
        <div class="py-3 border-top border-bottom mb-5 mt-4">
            <span class="fw-bold me-2 text-uppercase" style="font-size: 11px;">KATEGORI:</span>
            <span class="text-muted" style="font-size: 11px;">Luxury | Zalokal | Pakaian | Sepatu | Tas | Jam & Aksesoris | Baju Muslim | Sports | Batik | Beauty</span>
        </div>

        {{-- Brand & Pencarian Populer Grid --}}
        <div class="row pt-2">
            {{-- Kolom Brand --}}
            <div class="col-md-6 mb-5">
                <h6 class="fw-bold text-uppercase mb-4" style="font-size: 13px; letter-spacing: 1px;">BRAND PALING TOP</h6>
                <div class="row g-3">
                    <div class="col-4" style="line-height: 2;">
                        GUESS<br>Havaianas<br>Wrangler<br>Dr. Martens<br>ALDO
                    </div>
                    <div class="col-4" style="line-height: 2;">
                        Birkenstock<br>CHRISTIAN LOUBOUTIN<br>CLARKS<br>Dior<br>Lacoste
                    </div>
                    <div class="col-4" style="line-height: 2;">
                        Melissa<br>Nike<br>Superdry<br>VANS<br>Skechers
                    </div>
                </div>
                <a href="#" class="text-dark fw-bold text-decoration-underline d-block mt-4" style="font-size: 11px;">Show More</a>
            </div>
            
            {{-- Kolom Pencarian --}}
            <div class="col-md-6 mb-5">
                <h6 class="fw-bold text-uppercase mb-4" style="font-size: 13px; letter-spacing: 1px;">PENCARIAN POPULER</h6>
                <div class="row g-3">
                    <div class="col-4" style="line-height: 2;">
                        Harbolnas 12.12<br>Pakaian Olahraga<br>Sepatu Wanita<br>Skincare<br>Baju Muslim
                    </div>
                    <div class="col-4" style="line-height: 2;">
                        Baju Atasan Wanita<br>Jam Tangan Pria<br>Sepatu Sneakers Wanita<br>Tas<br>Harbolnas
                    </div>
                    <div class="col-4" style="line-height: 2;">
                        Jilbab<br>Dompet Pria<br>Baju Lebaran<br>Big Sale<br>Baju Wanita
                    </div>
                </div>
                <a href="#" class="text-dark fw-bold text-decoration-underline d-block mt-4" style="font-size: 11px;">Show More</a>
            </div>
        </div>

      
</section>

<style>
    :root { --z-red: #dc3545; --z-black: #000; --z-gray: #f4f4f4; }
    body { font-family: 'Inter', sans-serif; background-color: #fafafa; }
    .product-card { border-radius: 4px; transition: 0.3s ease-in-out; background: #fff; }
    .product-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
    .transition-transform { transition: 0.5s ease; }
    .product-card:hover .transition-transform { transform: scale(1.08); }
    .btn-search-overlay { top: 10px; right: 10px; z-index: 5; width: 32px; height: 32px; background: #fff; border: none; display: flex; align-items: center; justify-content: center; opacity: 0; transition: 0.3s; }
    .product-card:hover .btn-search-overlay { opacity: 1; }
    .btn-wishlist-toggle:hover { transform: scale(1.2); color: var(--z-red); }
    .heart-icon { color: #ccc; transition: 0.2s; }
    .bi-heart-fill { color: var(--z-red) !important; }
    .text-justify { text-align: justify; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const wishlistBtns = document.querySelectorAll('.btn-wishlist-toggle');
        const counter = document.getElementById('wishlist-counter');
        let totalFav = 0;

        wishlistBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('bi-heart')) {
                    icon.classList.replace('bi-heart', 'bi-heart-fill');
                    totalFav++;
                } else {
                    icon.classList.replace('bi-heart-fill', 'bi-heart');
                    totalFav--;
                }
                counter.innerText = totalFav;
                counter.style.display = totalFav > 0 ? 'block' : 'none';
            });
        });
    });
</script>
@endsection