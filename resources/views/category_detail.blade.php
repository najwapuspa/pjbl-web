<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category }} - ULTRA Fashion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-white font-[Poppins]">

    <nav class="p-6 border-b flex justify-between items-center bg-white sticky top-0 z-50">
    <a href="/" class="text-xs font-bold tracking-widest uppercase border-b border-black">← Kembali ke Home</a>
    
    <h1 class="font-[Playfair Display] text-2xl font-black tracking-tighter">ULTRA</h1>
    
    <div class="flex items-center gap-4">
        <a href="/login" class="text-[10px] font-bold tracking-widest uppercase hover:text-gray-500 transition">Masuk</a>
        <span class="text-gray-300">|</span>
        <a href="/register" class="text-[10px] font-bold tracking-widest uppercase hover:text-gray-500 transition">Daftar</a>
        <a href="#" class="ml-2"><i class="fa-regular fa-user text-lg"></i></a>
    </div>
</nav>
    <main class="max-w-[1400px] mx-auto px-6 py-12">
        <div class="text-center mb-16">
            <h2 class="font-[Playfair Display] text-5xl italic mb-4">{{ $category }}</h2>
            <p class="text-gray-500 tracking-widest uppercase text-xs">Koleksi Terkini & Eksklusif</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            
            <div class="group cursor-pointer">
                <div class="relative aspect-[3/4] overflow-hidden bg-gray-100 mb-6">
                    <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1000" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <button class="absolute bottom-4 left-4 right-4 bg-white/90 py-3 text-xs font-bold opacity-0 group-hover:opacity-100 transition duration-300">QUICK VIEW</button>
                    <i class="fa-regular fa-heart absolute top-4 right-4 text-xl hover:text-red-500 transition"></i>
                </div>
                <h3 class="font-bold text-lg mb-2 uppercase tracking-tight">Koleksi Utama {{ $category }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Deskripsi Produk: Didesain khusus untuk kenyamanan maksimal dengan sentuhan gaya modern yang elegan. Cocok untuk penggunaan sehari-hari maupun acara formal.
                </p>
                <p class="font-bold text-red-600">IDR 1.299.000</p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative aspect-[3/4] overflow-hidden bg-gray-100 mb-6">
                    <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=1000" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <button class="absolute bottom-4 left-4 right-4 bg-white/90 py-3 text-xs font-bold opacity-0 group-hover:opacity-100 transition duration-300">QUICK VIEW</button>
                    <i class="fa-regular fa-heart absolute top-4 right-4 text-xl hover:text-red-500 transition"></i>
                </div>
                <h3 class="font-bold text-lg mb-2 uppercase tracking-tight">Premium Essentials</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Produk pilihan yang menggunakan bahan serat alami terbaik untuk menjaga sirkulasi udara dan kelembutan pada kulit Anda.
                </p>
                <p class="font-bold text-red-600">IDR 899.000</p>
            </div>

            <div class="group cursor-pointer">
                <div class="relative aspect-[3/4] overflow-hidden bg-gray-100 mb-6">
                    <img src="https://images.unsplash.com/photo-1539109132382-381bb3f1c2b3?q=80&w=1000" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    <button class="absolute bottom-4 left-4 right-4 bg-white/90 py-3 text-xs font-bold opacity-0 group-hover:opacity-100 transition duration-300">QUICK VIEW</button>
                    <i class="fa-regular fa-heart absolute top-4 right-4 text-xl hover:text-red-500 transition"></i>
                </div>
                <h3 class="font-bold text-lg mb-2 uppercase tracking-tight">Seasonal Favorite</h3>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Koleksi terbatas yang paling banyak dicari musim ini. Pastikan Anda mendapatkannya sebelum kehabisan stok.
                </p>
                <p class="font-bold text-red-600">IDR 2.450.000</p>
            </div>

        </div>
    </main>

    <footer class="bg-black text-white py-16 mt-20">
        <div class="max-w-[1400px] mx-auto px-6 text-center">
            <h2 class="serif text-3xl mb-6">ULTRA</h2>
            <p class="text-gray-400 text-xs tracking-widest">PUSAT FASHION ONLINE TERPERCAYA</p>
        </div>
    </footer>

</body>
</html>