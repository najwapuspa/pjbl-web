<!DOCTYPE html>
<html>
<head>
    <title>Toko Pakaian Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <h1 class="text-3xl font-bold mb-6">Katalog Pakaian</h1>
    
    <div class="grid grid-cols-3 gap-6">
        @foreach($products as $p)
        <div class="bg-white p-4 shadow rounded">
            <img src="{{ asset('storage/'.$p->image) }}" class="w-full h-48 object-cover">
            <h2 class="text-xl font-semibold mt-2">{{ $p->name }}</h2>
            <p class="text-gray-600 text-sm">{{ $p->description }}</p>
            <p class="text-blue-500 font-bold mt-2">Rp {{ number_format($p->price) }}</p>
            <a href="{{ route('add.cart', $p->id) }}" class="mt-4 block bg-black text-white text-center py-2 rounded">Tambah ke Keranjang</a>
        </div>
        @endforeach
    </div>
</body>
</html>