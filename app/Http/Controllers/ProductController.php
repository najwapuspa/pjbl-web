<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Middleware agar user wajib login untuk mengakses halaman ini.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Tampilan katalog produk dengan pagination.
     */
    public function index() : View
    {
        // Mengambil produk terbaru dan membaginya jadi 10 per halaman
        $products = Product::latest()->paginate(10);

        // Memastikan view yang dipanggil sesuai dengan folder kamu
        return view('products.index', compact('products'));
    }

    /**
     * Fungsi Tambah ke Keranjang menggunakan Session.
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Produk berhasil masuk keranjang!');
    }
}