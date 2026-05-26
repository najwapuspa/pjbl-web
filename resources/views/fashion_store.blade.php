<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ULTRA | Pusat Fashion Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; scroll-behavior: smooth; }
        .serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-white">

    <div class="bg-gray-100 py-2 text-[10px] text-center tracking-widest font-bold border-b">
        GRATIS PENGEMBALIAN S&K BERLAKU | DISKON 25% UNTUK PENGGUNA BARU
    </div>

    <header class="sticky top-0 z-50 bg-white shadow-sm">
        <div class="max-w-[1400px] mx-auto px-6">
            
            <div class="flex items-center justify-between py-4 gap-8">
                <div class="flex-shrink-0">
                    <a href="/" class="serif text-3xl font-black tracking-tighter">ULTRA</a>
                </div>

                <div class="flex-1 max-w-2xl">
                    <form action="/search" method="GET" class="relative">
                        <input type="text" name="query" placeholder="Cari produk, tren, dan merek..." 
                            class="w-full border border-gray-200 rounded-full py-2 px-6 focus:outline-none focus:border-black transition text-sm bg-gray-50">
                        <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2">
                            <i class="fa-solid fa-magnifying-glass text-gray-400 hover:text-black"></i>
                        </button>
                    </form>
                </div>

                <div class="flex items-center gap-6 text-gray-700">
                    <div class="flex items-center gap-2">
                        <i class="fa-regular fa-user text-xl"></i>
                        <div class="text-[10px] font-bold uppercase tracking-tighter hidden md:block">
                            <a href="/login" class="hover:text-black">Masuk</a>
                            <span class="text-gray-300 mx-1">/</span>
                            <a href="/register" class="hover:text-black">Daftar</a>
                        </div>
                    </div>
                    <a href="#" class="hover:text-red-500 transition">
                        <i class="fa-regular fa-heart text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-black transition relative">
                        <i class="fa-solid fa-bag-shopping text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-black text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full">0</span>
                    </a>
                </div>
            </div>

            <nav class="flex justify-start gap-10 pb-4 text-[11px] font-bold tracking-[0.15em] uppercase border-t pt-4">
                <a href="/category/wanita" class="hover:text-gray-500 transition border-b-2 border-transparent hover:border-black pb-1">Wanita</a>
                <a href="/category/pria" class="hover:text-gray-500 transition border-b-2 border-transparent hover:border-black pb-1">Pria</a>
                <a href="/category/sports" class="hover:text-gray-500 transition border-b-2 border-transparent hover:border-black pb-1">Sports</a>
                <a href="/category/anak" class="hover:text-gray-500 transition border-b-2 border-transparent hover:border-black pb-1">Anak</a>
                <a href="/category/luxury" class="hover:text-gray-500 transition border-b-2 border-transparent hover:border-black pb-1">Luxury</a>
                <a href="/category/sale" class="text-red-600 hover:opacity-70 transition border-b-2 border-transparent hover:border-red-600 pb-1">Sale</a>
            </nav>

        </div>
    </header>

    <main>
        <section class="relative w-full h-[500px] bg-sky-400 overflow-hidden">
            <div class="max-w-[1400px] mx-auto h-full flex items-center px-10">
                <div class="z-10 text-white max-w-lg">
                    <h2 class="text-6xl font-bold mb-4 tracking-tight leading-tight">Shop Next-Level Fashion Finds</h2>
                    <p class="text-lg mb-8 opacity-90 leading-relaxed">Dapatkan koleksi terbaru dari brand ternama dengan diskon eksklusif hari ini saja.</p>
                    <button class="bg-white text-black px-8 py-3 font-bold uppercase text-sm hover:bg-gray-100 transition shadow-lg">Belanja Sekarang</button>
                </div>
                <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?q=80&w=1935" 
                    class="absolute right-0 top-0 h-full w-2/3 object-cover object-top opacity-80" 
                    style="clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);">
            </div>
        </section>

        <section class="max-w-4xl mx-auto py-20 px-6 text-center">
            <h2 class="text-2xl font-bold mb-8 uppercase tracking-widest">Belanja Fashion Online di ULTRA Indonesia</h2>
            <p class="text-gray-500 text-sm leading-loose text-justify md:text-center">
                ULTRA Indonesia merupakan pusat fashion online terdepan yang menyediakan brand lokal dan internasional. Kami memiliki lebih dari 150.000 produk yang dapat memenuhi kebutuhan fashion Anda, mulai dari rok hingga gaun, sepatu kets hingga sandal, pakaian olahraga hingga jam tangan, dan masih banyak lagi. Temukan koleksi eksklusif kami dan nikmati pengalaman belanja yang aman dengan sistem pembayaran terenkripsi.
            </p>
        </section>
        
        <div class="h-[600px] bg-gray-50 flex flex-col items-center justify-center border-t border-dashed">
            <i class="fa-solid fa-arrow-down mb-4 animate-bounce text-gray-300 text-2xl"></i>
            <p class="text-gray-400 tracking-widest text-[10px] font-bold">SCROLL UNTUK MELIHAT PRODUK LAINNYA</p>
        </div>
    </main>

</body>
</html>  