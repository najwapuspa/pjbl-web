<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ZALORA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-[Poppins] flex items-center justify-center min-h-screen">

    <div class="bg-white p-10 shadow-2xl w-full max-w-md">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-black tracking-tighter mb-2">ZALORA</h1>
            <p class="text-gray-400 text-xs tracking-widest uppercase">Selamat Datang Kembali</p>
        </div>

        <form action="{{ route('login') }}" method="POST">
    @csrf 
    <!-- input email dan password kamu di sini -->
    <button type="submit">Login</button>
</form>
  
            <div>
                <label class="block text-[10px] font-bold tracking-widest uppercase mb-2">Email</label>
                <!-- Tambahkan name="email" -->
                <input type="email" name="email" required
                    class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-black transition bg-transparent">
                @error('email')
                    <span class="text-red-500 text-[10px]">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label class="block text-[10px] font-bold tracking-widest uppercase mb-2">Kata Sandi</label>
                <!-- Tambahkan name="password" -->
                <input type="password" name="password" required
                    class="w-full border-b border-gray-300 py-2 focus:outline-none focus:border-black transition bg-transparent">
                @error('password')
                    <span class="text-red-500 text-[10px]">{{ $message }}</span>
                @enderror
            </div>
            
            <button type="submit" 
                class="w-full bg-black text-white py-4 text-xs font-bold tracking-[0.2em] hover:bg-gray-800 transition uppercase">
                Masuk
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-gray-500 text-xs">Belum punya akun? 
                <a href="{{ route('register') }}" class="font-bold text-black border-b border-black">Daftar Sekarang</a>
            </p>
            <a href="/" class="block mt-6 text-[10px] text-gray-400 uppercase tracking-widest">Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>