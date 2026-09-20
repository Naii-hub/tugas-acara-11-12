<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Jalankan Seeder Kategori terlebih dahulu
        $this->call(CategorySeeder::class);

        // 2. Jalankan Factory Produk
        \App\Models\Product::factory(50)->create();

        // 3. Jalankan Seeder Supplier
        $this->call(SupplierSeeder::class);
    }
}
