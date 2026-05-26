<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - ULTRA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-[Poppins] flex items-center justify-center min-h-screen py-10">

    <div class="bg-white p-10 shadow-2xl w-full max-w-md">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-black tracking-tighter mb-2">ULTRA</h1>
            <p class="text-gray-400 text-xs tracking-widest uppercase">Buat Akun Baru</p>
        </div>

        <!-- PERBAIKAN: Form Action dan Method -->
        <form action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf 
            
            <div>
                <label class="block text-[10px] font-bold tracking-widest uppercase mb-2">Nama Lengkap</label>
                <!-- PERBAIKAN: Tambahkan name="name" -->
                <input type="text" name="name" required placeholder="Masukkan nama Anda" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-black transition bg-transparent text-sm">
            </div>

            <div>
                <label class="block text-[10px] font-bold tracking-widest uppercase mb-2">Email</label>
                <!-- PERBAIKAN: Tambahkan name="email" -->
                <input type="email" name="email" required placeholder="email@contoh.com" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-black transition bg-transparent text-sm">
            </div>

            <div>
                <label class="block text-[10px] font-bold tracking-widest uppercase mb-2">Kata Sandi</label>
                <!-- PERBAIKAN: Tambahkan name="password" -->
                <input type="password" name="password" required placeholder="••••••••" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-black transition bg-transparent text-sm">
            </div>

            <div>
                <label class="block text-[10px] font-bold tracking-widest uppercase mb-2">Konfirmasi Kata Sandi</label>
                <!-- PERBAIKAN: Tambahkan name="password_confirmation" (Harus pakai _confirmation agar Laravel otomatis mengecek kecocokannya) -->
                <input type="password" name="password_confirmation" required placeholder="••••••••" class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-black transition bg-transparent text-sm">
            </div>
            
            <button type="submit" class="w-full bg-black text-white py-4 text-xs font-bold tracking-[0.2em] hover:bg-gray-800 transition uppercase mt-4">Daftar Sekarang</button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-gray-500 text-xs">Sudah punya akun? 
                <a href="{{ route('login') }}" class="font-bold text-black border-b border-black">Masuk di sini</a>
            </p>
            <a href="/" class="block mt-6 text-[10px] text-gray-400 uppercase tracking-widest">Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>