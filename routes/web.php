<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LaporanPenjualanController;

Route::get('/greeting', function () {
    return view('greeting', ['name' => 'Naila']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/conditional', function () {
    return view('conditional', ['status' => 'admin']);
});

Route::get('/', function () {
    // Mengirim data ke view menggunakan array asosiatif
    return view('dashboard_pos', [
        'nama_pegawai' => 'Budi Santoso',
        'shift' => 'Pagi (08:00 - 15:00)'
    ]);
});

// Routing menuju Controller Produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/{id}', [ProdukController::class, 'show']);

// Route menuju Single Action Controller Laporan Penjualan
Route::get('/laporan', LaporanPenjualanController::class);

// Rute dengan Parameter Opsional
Route::get('/produk/cari/{nama?}', function ($nama = null) {
    if ($nama) {
        return 'Hasil pencarian produk: ' . $nama;
    }

    return 'Silakan masukkan kata kunci pencarian pada URL 
    (contoh: /produk/cari/sabun)';
});

// Route Group Admin
Route::prefix('admin')->group(function () {
    Route::get('/produk', function () {
        return 'Halaman Kelola Produk (Hanya Admin)';
    })->name('admin.produk');

    Route::get('/kategori', function () {
        return 'Halaman Kelola Kategori Produk (Hanya Admin)';
    })->name('admin.kategori');
});

// Route Group Kasir
Route::prefix('kasir')->group(function () {
    Route::get('/transaksi', function () {
        return 'Halaman Input Transaksi Penjualan (Kasir)';
    })->name('kasir.transaksi');
});

Route::get('/produk-toko', function () {

    $produk = [
        [
            'nama' => 'Beras Premium 5 Kg',
            'sku' => 'BR001',
            'harga' => 75000,
            'stok' => 20
        ],
        [
            'nama' => 'Minyak Goreng 1 Liter',
            'sku' => 'MG001',
            'harga' => 18000,
            'stok' => 35
        ],
        [
            'nama' => 'Gula Pasir 1 Kg',
            'sku' => 'GL001',
            'harga' => 17000,
            'stok' => 25
        ],
        [
            'nama' => 'Telur Ayam 1 Kg',
            'sku' => 'TL001',
            'harga' => 30000,
            'stok' => 15
        ],
        [
            'nama' => 'Mi Instan Goreng',
            'sku' => 'MI001',
            'harga' => 3500,
            'stok' => 50
        ]
    ];

    return view('daftar_produk', [
        'produk' => $produk
    ]);
});
