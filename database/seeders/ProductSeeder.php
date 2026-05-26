<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan ini terpanggil

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Kaos Oversize Hitam',
            'description' => 'Bahan katun combed 30s, nyaman dipakai.',
            'price' => 85000,
            'image' => 'kaos-hitam.jpg',
            'stock' => 20,
        ]);

        // Kamu bisa tambah data lain di sini jika mau
        Product::create([
            'name' => 'Jaket Hoodie Polos',
            'description' => 'Bahan fleece tebal, cocok untuk musim dingin.',
            'price' => 150000,
            'image' => 'hoodie.jpg',
            'stock' => 10,
        ]);
    }
}