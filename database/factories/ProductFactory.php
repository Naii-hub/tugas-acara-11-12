<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            // Mengambil ID kategori secara acak dari data yang sudah ada
            'category_id' => Category::inRandomOrder()->first()->id ?? 1,

            // Menghasilkan 2 kata nama produk
            'name' => $this->faker->words(2, true),

            // Menghasilkan SKU unik
            'sku' => 'PRD-' . $this->faker->unique()->numberBetween(10000, 99999),

            // Rentang harga barang
            'price' => $this->faker->numberBetween(2000, 50000),

            // Rentang jumlah stok
            'stock' => $this->faker->numberBetween(5, 100),
        ];
    }
}