<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Kode di bawah inilah yang akan mengisi kolom di phpMyAdmin secara otomatis
        Schema::create('products', function (Blueprint $table) {
            $table->id();                               // Kolom ID
            $table->string('name');                      // Kolom Nama
            $table->text('description');               // Kolom Deskripsi
            $table->integer('price');                    // Kolom Harga
            $table->string('image');                     // Kolom Nama Gambar
            $table->integer('stock');                    // Kolom Stok
            $table->timestamps();                        // Kolom created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};