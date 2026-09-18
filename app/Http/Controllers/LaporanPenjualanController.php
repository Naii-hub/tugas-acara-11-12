<?php

namespace App\Http\Controllers;

class LaporanPenjualanController extends Controller
{
    public function __invoke()
    {
        $statistik = [
            'total_transaksi' => 120,
            'total_pendapatan' => 625000000,
            'produk_terjual' => 350,
            'produk_terlaris' => 'Laptop ThinkPad',
        ];

        return view('laporan.index', compact('statistik'));
    }
}