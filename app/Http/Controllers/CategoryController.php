<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function show($slug)
    {
        // Normalisasi slug ke huruf kecil untuk menghindari error case-sensitive
        $slug = strtolower($slug);

        if ($slug == 'pria') {
            $products = [
                ['brand' => 'ADIDAS', 'name' => 'Motorsport MERCEDES - AMG PETRONAS...', 'price' => 720000, 'old_price' => 800000, 'badge' => 'Paling Populer', 'img' => 'adidas-mercedes.jpg'],
                ['brand' => 'ADIDAS', 'name' => 'Lightweight Baseball Cap', 'price' => 270000, 'old_price' => 300000, 'badge' => 'Paling Populer', 'img' => 'adidas-cap.jpg'],
                ['brand' => 'ADIDAS', 'name' => 'Run Ess Jkt M', 'price' => 990000, 'old_price' => 1100000, 'badge' => 'Paling Populer', 'img' => 'adidas-jacket.jpg'],
                ['brand' => 'ADIDAS', 'name' => 'FC Bayern 25/26 Home Jersey', 'price' => 1080000, 'old_price' => 1200000, 'badge' => 'Terbaru', 'img' => 'adidas-bayern.jpg'],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Essentials Running T-Shirt', 'price' => 495000, 'old_price' => 550000, 'badge' => 'Paling Populer', 'img' => 'adidas-adizero.jpg'],
                ['brand' => 'ADIDAS', 'name' => 'Adicolor Loose Polo Shirt', 'price' => 630000, 'old_price' => 700000, 'badge' => 'Paling Populer', 'img' => 'adidas-polo.jpg'],
            ];
        } elseif ($slug == 'sport') {
            $products = [
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes (Pink)', 'price' => 2500000, 'old_price' => null, 'badge' => 'HOT', 'img' => 'adizero-pink.jpg'],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes (White/B)', 'price' => 2500000, 'old_price' => null, 'badge' => 'HOT', 'img' => 'adizero-white-b.png'],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes (Clean/B)', 'price' => 2500000, 'old_price' => null, 'badge' => 'Paling Populer', 'img' => 'adizero-clean-b.png'],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes (Purple)', 'price' => 2500000, 'old_price' => null, 'badge' => 'Paling Populer', 'img' => 'adizero-purple.jpg'],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes (Grey/R)', 'price' => 2500000, 'old_price' => null, 'badge' => 'Paling Populer', 'img' => 'adizero-grey-re.png'],
                ['brand' => 'ADIDAS', 'name' => 'Adizero Evo SL Shoes (White/B2)', 'price' => 2500000, 'old_price' => null, 'badge' => 'Paling Populer', 'img' => 'adizero-white-b-2.png'],
            ];
        } elseif ($slug == 'anak') {
            $products = [
                ['brand' => 'H&M', 'name' => 'T-shirt NASA', 'price' => 129900, 'old_price' => null, 'badge' => null, 'img' => 'hm-nasa.jpg'],
                ['brand' => 'H&M', 'name' => 'Sweatshirt Mon Amour', 'price' => 169915, 'old_price' => 199900, 'badge' => '15% OFF', 'img' => 'hm-sweatshirt.jpg'],
                ['brand' => 'PAYLESS', 'name' => 'Payless Smartfit Childrens Aqua...', 'price' => 63000, 'old_price' => 299000, 'badge' => '79% OFF', 'img' => 'payless-aqua.jpg'],
                ['brand' => 'PAYLESS', 'name' => 'Payless Club Culture Childrens...', 'price' => 90000, 'old_price' => 179000, 'badge' => '50% OFF', 'img' => 'payless-culture.jpg'],
                ['brand' => 'PAYLESS', 'name' => 'Payless Smartfit Childrens Bamp...', 'price' => 63000, 'old_price' => 299000, 'badge' => '79% OFF', 'img' => 'payless-bamp.jpg'],
                ['brand' => 'PAYLESS', 'name' => 'Payless Club Culture Childrens Bel...', 'price' => 72000, 'old_price' => 219000, 'badge' => '67% OFF', 'img' => 'payless-bel.jpg'],
            ];
        } elseif ($slug == 'luxury') {
            $products = [
                ['brand' => 'Juene Jewelry', 'name' => 'Gelang Serut Emas 7k - Siena Gol...', 'price' => 3748320, 'old_price' => 5206000, 'badge' => '-28%', 'img' => 'luxury-bracelet.jpg'],
                ['brand' => 'Longchamp', 'name' => 'Le Pliage Original L Tote Bag -...', 'price' => 1814400, 'old_price' => 3360000, 'badge' => '-46%', 'img' => 'luxury-tote-green.jpg'],
                ['brand' => 'Michael Kors', 'name' => 'Michael Kors Fulton Studded Log...', 'price' => 1900000, 'old_price' => 3250000, 'badge' => '-42%', 'img' => 'luxury-mk-shoes.jpg'],
                ['brand' => 'Longchamp', 'name' => 'Le Pliage Original Pouch with...', 'price' => 1411200, 'old_price' => 2240000, 'badge' => '-37%', 'img' => 'luxury-pouch.jpg'],
                ['brand' => 'BALLY', 'name' => 'Brixton O Leather Espardilles -...', 'price' => 4741200, 'old_price' => 8780000, 'badge' => '-46%', 'img' => 'luxury-bally.jpg'],
                ['brand' => 'Longchamp', 'name' => 'Le Pliage Original L Tote Bag -...', 'price' => 2116800, 'old_price' => 3360000, 'badge' => '-37%', 'img' => 'luxury-tote-darkgreen.jpg'],
            ];
        } elseif ($slug == 'beauty') {
            // Data 6 produk dari Screenshot 2026-05-14 155321.png
            $products = [
                ['brand' => 'Dior', 'name' => 'Dior Backstage Glow Face Palette 001 Uni...', 'price' => 1175000, 'old_price' => null, 'badge' => 'VIP', 'img' => 'beauty-dior-palette.jpg'],
                ['brand' => 'Christian Dior', 'name' => 'Christian Dior Dior Addict Lip Maximizer 0...', 'price' => 274500, 'old_price' => 535000, 'badge' => '-49%', 'img' => 'beauty-dior-lip.jpg'],
                ['brand' => 'Benefit', 'name' => 'Benefit Precisely, My Brow Eyebrow Pencil...', 'price' => 480000, 'old_price' => null, 'badge' => 'VIP', 'img' => 'beauty-benefit-pencil.jpg'],
                ['brand' => 'Benefit', 'name' => 'Benefit - Precisely My Brow Wax 6', 'price' => 336000, 'old_price' => 480000, 'badge' => '-30%', 'img' => 'beauty-benefit-wax.jpg'],
                ['brand' => 'Mac Cosmetics', 'name' => 'Matte Lipstick Cherish', 'price' => 395000, 'old_price' => null, 'badge' => 'VIP', 'img' => 'beauty-mac-lipstick.jpg'],
                ['brand' => 'Benefit', 'name' => 'Benefit The POREfessional Face Primer', 'price' => 615000, 'old_price' => null, 'badge' => 'VIP', 'img' => 'beauty-benefit-primer.jpg'],
            ];
        } else {
            // Default untuk kategori wanita
            $products = [
                ['brand' => 'Nike', 'name' => 'Dri-FIT Zenvy Tank Top', 'price' => 649000, 'old_price' => null, 'badge' => 'Terbaru', 'img' => 'nike-tank.jpg'],
                ['brand' => 'Nike', 'name' => 'Swift 4" Tight Running Shorts', 'price' => 593100, 'old_price' => 659000, 'badge' => 'Paling Populer', 'img' => 'nike-shorts.jpg'],
                ['brand' => 'Nike', 'name' => 'Heritage Cross-Body Bag 2.0 (4L)', 'price' => 389000, 'old_price' => null, 'badge' => 'Paling Populer', 'img' => 'nike-bag.jpg'],
                ['brand' => 'Nike', 'name' => 'Revolution 8 EasyOn Road Run...', 'price' => 869000, 'old_price' => null, 'badge' => 'Terbaru', 'img' => 'nike-shoes.jpg'],
                ['brand' => 'Nike', 'name' => 'Zenvy Dri-FIT Long Sleeve Top', 'price' => 737100, 'old_price' => 819000, 'badge' => 'Paling Populer', 'img' => 'nike-longsleeve.jpg'],
                ['brand' => 'Nike', 'name' => 'Dunk Low Suede Women\'s Shoes', 'price' => 1729000, 'old_price' => null, 'badge' => null, 'img' => 'nike-dunk.jpg'],
            ];
        }

        return view('category', compact('slug', 'products'));
    }
}