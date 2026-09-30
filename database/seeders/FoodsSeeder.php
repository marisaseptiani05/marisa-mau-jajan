<?php

namespace Database\Seeders;

use App\Http\Controllers\FoodsController;
use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodsSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $foods = [
            [
                'name' => 'Nasi Goreng Spesial',
                'category' => 'Makanan',
                'price' => 20000,
                'description' => 'Nasi goreng dengan telur, ayam suwir, dan kerupuk.',
                'image' => null,
            ],
            [
                'name' => 'Mie Ayam Bakso',
                'category' => 'Makanan',
                'price' => 18000,
                'description' => 'Mie ayam dengan tambahan bakso dan pangsit.',
                'image' => null,
            ],
            [
                'name' => 'Es Teh Manis',
                'category' => 'Minuman',
                'price' => 5000,
                'description' => 'Es teh manis segar cocok untuk cuaca panas.',
                'image' => null,
            ],
            [
                'name' => 'Es Jeruk',
                'category' => 'Minuman',
                'price' => 7000,
                'description' => 'Es jeruk peras asli tanpa pemanis buatan.',
                'image' => null,
            ],
            [
                'name' => 'Kentang Goreng',
                'category' => 'Cemilan',
                'price' => 12000,
                'description' => 'Kentang goreng renyah dengan saus sambal dan mayones.',
                'image' => null,
            ],
            [
                'name' => 'Pisang Goreng',
                'category' => 'Cemilan',
                'price' => 10000,
                'description' => 'Pisang goreng crispy disajikan hangat.',
                'image' => null,
            ],
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
    }
}