@extends('layouts.app')

@section('content')

<section class="py-2" style="background-color: #f3f3f3; border-bottom: 1px solid #e0e0e0;">
    <div class="container">
        <div class="row text-center align-items-center" style="font-size: 11px; font-weight: 500; letter-spacing: 0.5px;">
            <div class="col-md-4 border-end">
                <i class="bi bi-arrow-repeat"></i> GRATIS PENGEMBALIAN | S&K BERLAKU <i class="bi bi-chevron-right small"></i>
            </div>
            <div class="col-md-4 border-end">
                <span class="badge bg-dark" style="font-size: 9px; vertical-align: middle;">VIP</span> ULTRA VIP: UNLIMITED FREE & FASTER DELIVERY <i class="bi bi-chevron-right small"></i>
            </div>
            <div class="col-md-4">
                <i class="bi bi-phone"></i> DOWNLOAD & DAPATKAN DISKON 25% + CASHBACK 5% <i class="bi bi-chevron-right small"></i>
            </div>
        </div>
    </div>
</section>

<header class="py-3 bg-white border-bottom shadow-sm sticky-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <h2 class="fw-bold m-0" style="letter-spacing: 4px;">ZALORA</h2>
            </div>
            <div class="col-md-7">
                <div class="position-relative">
                    <input type="text" class="form-control rounded-pill ps-4" placeholder="Cari brand, produk, atau tren terbaru... ✨" style="height: 45px; border: 1px solid #ddd;">
                    <button class="btn position-absolute end-0 top-50 translate-middle-y me-2 bg-black text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <!-- Cari bagian ini di header -->
<div class="col-md-3 d-flex justify-content-end align-items-center gap-4">
    @guest
        <a href="{{ route('login') }}" class="text-decoration-none text-dark d-flex align-items-center gap-2">
            <i class="bi bi-person fs-4"></i>
            <span class="fw-bold small">Masuk / Daftar</span>
        </a>
    @else
        <div class="dropdown">
            <a href="#" class="text-decoration-none text-dark d-flex align-items-center gap-2 dropdown-toggle" data-bs-toggle="dropdown">
                <i class="bi bi-person-check fs-4"></i>
                <span class="fw-bold small">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profil Saya</a></li>
                <li><a class="dropdown-item" href="#">Pesanan Saya</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    @endguest
    
    <i class="bi bi-heart fs-4" style="cursor: pointer;"></i>
    <i class="bi bi-bag fs-4" style="cursor: pointer;"></i>
</div>
        <nav class="mt-3">
            <ul class="list-unstyled d-flex gap-4 fw-bold mb-0" style="font-size: 14px; text-transform: uppercase;">
                <li><a href="{{ route('category.show', 'wanita') }}" class="text-decoration-none text-dark category-link">Wanita</a></li>
                <li><a href="{{ route('category.show', 'pria') }}" class="text-decoration-none text-dark category-link">Pria</a></li>
                <li><a href="{{ route('category.show', 'sports') }}" class="text-decoration-none text-dark category-link">Sports</a></li>
                <li><a href="{{ route('category.show', 'anak') }}" class="text-decoration-none text-dark category-link">Anak</a></li>
                <li><a href="{{ route('category.show', 'luxury') }}" class="text-decoration-none text-dark category-link">Luxury</a></li>
                <li><a href="{{ route('category.show', 'beauty') }}" class="text-decoration-none text-dark category-link">Beauty</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="py-4 bg-white">
    <div class="container text-center"> 
        <div class="d-flex justify-content-center align-items-start gap-4 flex-wrap">
            @php
                $circleBrands = [
                    ['name' => 'Mexico 66', 'logo' => 'onitsuka.png'],
                    ['name' => 'Up to 55%', 'logo' => 'adidas.png'],
                    ['name' => 'Cloudmonster 3', 'logo' => 'on-logo.png'],
                    ['name' => 'Up to 15%', 'logo' => 'new-era.png'],
                    ['name' => 'Up to 60%', 'logo' => 'dc.png'],
                    ['name' => 'Up to 40%', 'logo' => 'under-armour.png'],
                ];
            @endphp
            @foreach($circleBrands as $cb)
            <div style="width: 100px;">
                <div class="mx-auto mb-2 d-flex align-items-center justify-content-center circle-hover" 
                     style="width: 85px; height: 85px; background-color: #A3B18A; border-radius: 50%; overflow: hidden; cursor: pointer;">
                    <img src="{{ asset('gambar/' . $cb['logo']) }}" style="width: 60%; filter: brightness(0) invert(1);" alt="{{ $cb['name'] }}">
                </div>
                <p style="font-size: 12px; font-weight: 500; color: #333; margin-top: 5px;">{{ $cb['name'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="mt-2">
    <div class="container text-white">
        <div style="background-color: #4DBFFF; border-radius: 20px; overflow: hidden; min-height: 350px;">
            <div class="row m-0 align-items-center text-start">
                <div class="col-md-5 p-5">
                    <h2 class="fw-bold mb-3">Shop Next-Level Fashion Finds</h2>
                    <p class="mb-4">Koleksi terbaru brand ternama dengan diskon eksklusif di ZALORA.</p>
                    <a href="#" class="btn btn-light fw-bold px-4">BELANJA SEKARANG</a>
                </div>
                <div class="col-md-7 p-0">
                    <img src="{{ asset('gambar/zalora.webp') }}" class="w-100" style="height: 400px; object-fit: cover;" alt="Banner">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        {{-- Bingkai dihapus, menyisakan teks saja --}}
        <div class="text-center py-3 mb-4">
            <h4 class="fw-bold m-0">Brands For You</h4>
        </div>
        <div class="row g-3">
            @php
                $brands = [
                    ['name' => 'Nike', 'img' => 'nike-model.jpg'],
                    ['name' => 'On Running', 'img' => 'on-model.jpg'],
                    ['name' => 'Puma', 'img' => 'puma-model.jpg'],
                    ['name' => 'Skechers', 'img' => 'skechers-model.jpg'],
                    ['name' => 'Vans', 'img' => 'vans-model.jpg'],
                    ['name' => 'Asics', 'img' => 'asics-model.jpg'],
                ];
            @endphp
            @foreach($brands as $brand)
            <div class="col-md-4 col-6"> 
                <div class="brand-item" style="height: 500px; position: relative; border-radius: 12px; overflow: hidden; background-color: #f0f0f0;">
                    <img src="{{ asset('gambar/' . $brand['img']) }}" class="w-100 h-100 object-fit-cover" alt="{{ $brand['name'] }}">
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 40%; background: linear-gradient(transparent, rgba(0,0,0,0.7));"></div>
                    <div style="position: absolute; bottom: 25px; left: 50%; transform: translateX(-50%); width: 90%; text-align: center;">
                        <h5 style="color: white; font-weight: bold; text-transform: uppercase; margin: 0; letter-spacing: 3px; font-size: 1.2rem;">{{ $brand['name'] }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5" style="background-color: #00AEEF;">
    <div class="container position-relative">
        <div class="row align-items-center mb-4 text-white">
            <div class="col-md-6 text-start">
                <p class="mb-1 fw-bold" style="letter-spacing: 2px; font-size: 13px;">EXCLUSIVE DROPS ONLY ON ZALORA</p>
                <h1 class="display-4 fw-bold" style="font-family: 'serif'; letter-spacing: -1px;">GOT YOU FIRST</h1>
                <p class="fw-light">Limited stocks only.</p>
            </div>
            <div class="col-md-6 text-end d-none d-md-block">
                <img src="{{ asset('gambar/exclusive-models.png') }}" class="img-fluid" style="max-height: 200px;" alt="Models">
            </div>
        </div>

        <div class="swiper productSwiper pb-5">
            <div class="swiper-wrapper">
                @php
                    $products = [
                        ['brand' => 'ADIDAS', 'name' => 'SL 72 RS Shoes', 'price' => '840.000', 'old_price' => '1.600.000', 'img' => 'adidas1.jpg'],
                        ['brand' => 'ADIDAS', 'name' => 'SL 72 RS Shoes', 'price' => '1.080.000', 'old_price' => '1.600.000', 'img' => 'adidas2.jpg'],
                        ['brand' => 'ADIDAS', 'name' => 'Handball Spezial Shoes', 'price' => '1.224.000', 'old_price' => '1.700.000', 'img' => 'adidas3.jpg'],
                        ['brand' => 'ADIDAS', 'name' => 'Gazelle Lo Pro Shoes', 'price' => '1.275.000', 'old_price' => '1.700.000', 'img' => 'adidas4.jpg'],
                        ['brand' => 'ADIDAS', 'name' => 'SL 72 OG Shoes', 'price' => '1.500.000', 'old_price' => '2.100.000', 'img' => 'adidas5.jpg'],
                        ['brand' => 'ADIDAS', 'name' => 'SL 72 OG Shoes', 'price' => '1.269.000', 'old_price' => '2.100.000', 'img' => 'adidas6.jpg'],
                    ];
                @endphp
                @foreach($products as $p)
                <div class="swiper-slide h-auto">
                    <div class="card border-0 rounded-3 overflow-hidden h-100 shadow-sm" style="background: white;">
                        <div class="position-relative p-2 bg-white text-center" style="height: 170px;">
                            <img src="{{ asset('gambar/' . $p['img']) }}" class="card-img-top object-fit-contain w-100 h-100" alt="{{ $p['name'] }}">
                            <div class="text-center py-1 fw-bold w-100" style="font-size: 8px; background-color: #E6FF00; color: #000; position: absolute; bottom: 0; left: 0;">
                                ULTRA EXCLUSIVE
                            </div>
                        </div>
                        <div class="card-body p-2 d-flex flex-column text-start">
                            <h6 class="fw-bold mb-0 text-uppercase" style="font-size: 10px;">{{ $p['brand'] }}</h6>
                            <p class="text-muted mb-2 text-truncate" style="font-size: 10px;">{{ $p['name'] }}</p>
                            <div class="mb-1">
                                <span class="text-danger fw-bold" style="font-size: 12px;">Rp {{ $p['price'] }}</span>
                                <span class="text-muted text-decoration-line-through d-block" style="font-size: 9px;">Rp {{ $p['old_price'] }}</span>
                            </div>
                            <button class="btn btn-outline-dark w-100 rounded-1 fw-medium mt-auto" style="font-size: 10px;" onclick="addToCart('{{ $p['name'] }}')">
                                Masukkan ke Tas
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next custom-nav shadow-sm"></div>
            <div class="swiper-button-prev custom-nav shadow-sm"></div>
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container text-center">
        <h3 class="fw-bold mb-4" style="font-family: 'serif';">Got You Slaying</h3>
        <div class="position-relative mx-auto overflow-hidden shadow-lg" style="max-width: 1100px; border-radius: 15px; background-color: #000;">
            <div class="row g-0 align-items-center">
                <div class="col-md-7 position-relative">
                    <img src="{{ asset('gambar/got-you.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Adidas Adizero" style="min-height: 450px;">
                    <div class="position-absolute top-50 start-0 translate-middle-y ps-3 d-none d-md-block" style="transform: rotate(-90deg) translateX(-50%); transform-origin: left top;">
                        <span class="text-white fw-bold small" style="letter-spacing: 3px; white-space: nowrap;">EXCLUSIVE DROP!</span>
                    </div>
                </div>
                <div class="col-md-5 text-start p-5 text-white">
                    <div class="mb-4">
                        <img src="{{ asset('gambar/adidas-logo-white.jpg') }}" alt="Adidas" style="width: 60px; filter: brightness(10) invert(1);">
                    </div>
                    <h1 class="display-5 fw-bold mb-3" style="letter-spacing: -1px; line-height: 1;">ADIZERO<br>EVO SL</h1>
                    <p class="mb-5 opacity-75">Shop the ULTRA Exclusive Colorways</p>
                    <a href="#" class="btn btn-light rounded-0 px-4 py-2 fw-bold" style="font-size: 13px;">SHOP NOW <i class="bi bi-chevron-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="py-5 bg-white">
    <div class="container text-center">
        <h3 class="fw-bold mb-4" style="font-family: 'serif';">Got You Ready</h3>
        <div class="row g-3">
            @php
                $categories = [
                    ['name' => 'Sports Performance Shoes', 'img' => 'cat-shoes.jpg', 'color' => '#ffffff'],
                    ['name' => 'Sandals', 'img' => 'cat-sandals.jpg', 'color' => '#ffffff'],
                    ['name' => 'Bottomwear', 'img' => 'cat-bottom.jpg', 'color' => '#ffffff'],
                    ['name' => 'Sneakers', 'img' => 'cat-sneakers.jpg', 'color' => '#ffffff'],
                    ['name' => 'Backpack', 'img' => 'cat-backpack.jpg', 'color' => '#ffffff'],
                ];
            @endphp
            @foreach($categories as $cat)
            <div class="col">
                <div class="category-card position-relative overflow-hidden shadow-sm" style="height: 380px; border-radius: 12px; background-color: {{ $cat['color'] }}; transition: 0.3s;">
                    <img src="{{ asset('gambar/' . $cat['img']) }}" class="w-100 h-100 object-fit-cover p-2" alt="{{ $cat['name'] }}" style="border-radius: 20px;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-center">
                        <p class="fw-bold text-dark mb-0 px-2 py-1 bg-white bg-opacity-75 rounded" style="font-size: 13px; display: inline-block;">
                            {{ $cat['name'] }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container text-center">
        <h3 class="fw-bold mb-4" style="font-family: 'serif';">Wear What Wins</h3>
        <div class="swiper mainBannerSwiper overflow-hidden position-relative" style="border-radius: 15px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="position-relative" style="height: 450px; background-color: #00AEEF;">
                        <div class="row h-100 m-0 align-items-center">
                            <div class="col-md-6 text-start ps-5">
                                <h1 class="fw-black mb-4" style="color: #E6FF00; font-size: 5rem; font-style: italic; line-height: 0.9; font-weight: 900;">BEST <br> SELLING</h1>
                                <a href="#" class="btn btn-black text-white px-4 py-2 rounded-0 fw-bold" style="background: black;">SHOP NOW ></a>
                            </div>
                            <div class="col-md-6 h-100 p-0 text-end">
                                <img src="{{ asset('gambar/adidas-model-blue.png') }}" class="h-100" style="object-fit: cover; width: 70%;" alt="Best Selling">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="position-relative" style="height: 450px; background-color: #FF6B6B;">
                        <div class="row h-100 m-0 align-items-center">
                            <div class="col-md-6 text-start ps-5 text-white">
                                <h1 class="fw-black mb-4" style="font-size: 5rem; line-height: 0.9; font-weight: 900;">NEW <br> ARRIVALS</h1>
                                <a href="#" class="btn btn-black text-white px-4 py-2 rounded-0 fw-bold" style="background: black;">SHOP NOW ></a>
                            </div>
                            <div class="col-md-6 h-100 p-0 text-end">
                                <img src="{{ asset('gambar/new-arrival.png') }}" class="h-100" style="object-fit: cover; width: 90%;" alt="New Arrival">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev custom-nav-banner"></div>
        </div>
    </div>
</section>

<section class="py-4 bg-white">
    <div class="container text-center">
        <h5 class="fw-bold mb-4">Enjoy Perks, Gifts & Support</h5>
        <div class="swiper vipSwiper overflow-hidden position-relative" style="border-radius: 12px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="p-5 d-flex justify-content-between align-items-center" style="background-color: #F8F1EB; min-height: 200px;">
                        <div class="text-start">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <h3 class="fw-bold m-0" style="letter-spacing: 2px;">ZALORA</h3>
                                <span class="badge px-3 py-2" style="background-color: #0004ff !important;">ViP</span>
                            </div>
                            <p class="mb-1 fw-bold">Sekali Langganan, Untung Terus</p>
                            <h2 class="fw-black mb-2" style="font-family: 'serif'; font-weight: 900;">MULAI DARI RP69.000</h2>
                            <p class="text-muted small mb-0">Gratis ongkir tanpa min. pembelian dan voucher 30% brand pilihan</p>
                        </div>
                        <div class="text-end">
                            <a href="#" class="btn btn-dark text-white rounded-0 px-4 py-3 fw-bold shadow" style="font-size: 12px; letter-spacing: 1px;">
                                LANGGANAN SEKARANG >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<style>
    .fw-black { font-weight: 900; }
    .category-link:hover { color: #666 !important; border-bottom: 2px solid black; }
    .circle-hover:hover { transform: scale(1.05); transition: 0.2s; }
    .custom-nav { background-color: white !important; width: 35px !important; height: 35px !important; border-radius: 50%; color: black !important; }
    .custom-nav::after { font-size: 14px !important; font-weight: bold; }
    .custom-nav-banner { background-color: rgba(255,255,255,0.7) !important; width: 40px !important; height: 40px !important; border-radius: 4px; color: black !important; left: 0 !important; top: 50% !important; z-index: 10; }
    .custom-nav-banner::after { font-size: 16px !important; font-weight: bold; }
    .swiper-pagination-bullet-active { background: #333 !important; }
    .category-card:hover { transform: translateY(-10px); }
</style>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper(".productSwiper", {
                slidesPerView: 2.2,
                spaceBetween: 10,
                navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
                breakpoints: {
                    640: { slidesPerView: 3.2 },
                    992: { slidesPerView: 5.2 },
                    1200: { slidesPerView: 6 }
                },
            });

            new Swiper(".mainBannerSwiper", {
                slidesPerView: 1,
                loop: true,
                pagination: { el: ".swiper-pagination", clickable: true },
                navigation: { prevEl: ".swiper-button-prev" },
            });

            new Swiper(".vipSwiper", {
                slidesPerView: 1,
                loop: true,
                pagination: { el: ".swiper-pagination", clickable: true },
            });
        }
    });

    function addToCart(name) {
        alert(name + " telah ditambahkan ke keranjang!");
    }
</script>
@endpush

{{-- SEO CONTENT & BRAND CATEGORY --}}
<section class="py-5 bg-white border-top">
    <div class="container text-start" style="font-size: 13px; color: #333; line-height: 1.8;">
        <div class="row">
            <div class="col-12 mb-4">
                <h6 class="fw-bold text-uppercase mb-2" style="font-size: 14px;">PRODUK TERBARU WANITA</h6>
                <p>Fashion sangat penting bagi wanita yang selalu menginginkan keindahan di segala hal. Kini sudah hadir koleksi <strong>Produk Terbaru Wanita</strong> yang siap melengkapi koleksi produk fashion anda di rumah. Tersedia berbagai keperluan <strong>fashion wanita terbaru</strong> yang lengkap dan murah mulai dari alas kaki hingga kerudung penutup kepala. Produk – produk <strong>fashion terbaru</strong> ini sangat cocok anda miliki sebagai persiapan hari-hari besar.</p>
            </div>

            <div class="col-12 mb-4">
                <h6 class="fw-bold text-uppercase mb-2" style="font-size: 14px;">KOLEKSI PRODUK FASHION WANITA TERBARU</h6>
                <p>Sekarang anda sudah bisa memiliki koleksi <strong>Produk Terbaru Wanita</strong> yang trendi dan berkualitas. Tersedia produk fashion mulai dari alas kaki. Bagi anda yang gemar tampil feminin dan girly, tersedia produk sepatu flat cantik, sandal wedges, hingga berbagai macam heels. Untuk anda yang gemar tampil simpel dan sporty bisa memilih koleksi sepatu sneaker yang cocok dikenakan oleh wanita. Untuk busana atasan tersedia <strong>koleksi terbaru</strong> mulai dari kerudung dan busana muslimah hingga busana trendi yang didesain khusus untuk ibu hamil.</p>
            </div>

            <div class="col-12 mb-5">
                <h6 class="fw-bold text-uppercase mb-2" style="font-size: 14px;">TAMBAH KOLEKSI FASHION TERBARU ANDA DENGAN BELANJA DI ZALORA INDONESIA</h6>
                <p>Situs <strong>ZALORA Indonesia</strong> menawarkan kemudahan dalam berbelanja <strong>Produk Terbaru Wanita</strong> mulai dari busana, kerudung, hingga alas kaki. <strong>ZALORA Indonesia</strong> menyediakan koleksi lengkap <strong>produk-produk fashion terbaru</strong> dengan harga yang terjangkau dan sistem online yang akan memfasilitasi anda untuk berbelanja praktis dari rumah.</p>
            </div>
        </div>

        <div class="mb-4">
            <span class="fw-bold text-uppercase me-2">KATEGORI:</span>
            <span class="text-muted">
                Luxury | Zalokal | Pakaian | Sepatu | Tas | Jam & Aksesoris | Baju Muslim | Sports | Batik | Beauty
            </span>
        </div>

        <hr class="my-5">

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <h6 class="fw-bold text-uppercase mb-4">BRAND PALING TOP</h6>
                <div class="row">
                    <div class="col-4">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">GUESS</li>
                            <li class="mb-2">Havaianas</li>
                            <li class="mb-2">Wrangler</li>
                            <li class="mb-2">Dr. Martens</li>
                            <li class="mb-2">ALDO</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">Birkenstock</li>
                            <li class="mb-2">CHRISTIAN LOUBOUTIN</li>
                            <li class="mb-2">CLARKS</li>
                            <li class="mb-2">Dior</li>
                            <li class="mb-2">Lacoste</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">Melissa</li>
                            <li class="mb-2">Nike</li>
                            <li class="mb-2">Superdry</li>
                            <li class="mb-2">VANS</li>
                            <li class="mb-2">Skechers</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#" class="text-dark fw-bold text-decoration-underline small">Show More</a>
                </div>
            </div>

            <div class="col-md-6">
                <h6 class="fw-bold text-uppercase mb-4">PENCARIAN POPULER</h6>
                <div class="row">
                    <div class="col-4">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">Harbolnas 12.12</li>
                            <li class="mb-2">Pakaian Olahraga</li>
                            <li class="mb-2">Sepatu Wanita</li>
                            <li class="mb-2">Skincare</li>
                            <li class="mb-2">Baju Muslim</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">Baju Atasan Wanita</li>
                            <li class="mb-2">Jam Tangan Pria</li>
                            <li class="mb-2">Sepatu Sneakers Wanita</li>
                            <li class="mb-2">Tas</li>
                            <li class="mb-2">Harbolnas</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">Jilbab</li>
                            <li class="mb-2">Dompet Pria</li>
                            <li class="mb-2">Baju Lebaran</li>
                            <li class="mb-2">Big Sale</li>
                            <li class="mb-2">Baju Wanita</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#" class="text-dark fw-bold text-decoration-underline small">Show More</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection