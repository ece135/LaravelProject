<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product; // Ürün modelini çağırıyoruz
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // GİDEN ÜRÜNLERİ OTOMATİK İÇERİ IŞINLIYORUZ
        // Not: Eğer senin veritabanında 'name' yerine 'title' yazıyorsa, aşağıdaki 'name' kelimelerini 'title' yapman yeterli.
        
        Product::create([
            'name' => 'Luxury Minimalist Jacket', 
            'price' => 299.99,
            'image' => 'uploads/product1.jpg', // Git'ten kurtarılan resim klasörün
            'description' => 'Premium quality luxury jacket for everyday elegance.'
        ]);

        Product::create([
            'name' => 'Classic Black Trousers',
            'price' => 149.95,
            'image' => 'uploads/product2.jpg',
            'description' => 'Elegant design with perfect fit.'
        ]);

        Product::create([
            'name' => 'Premium Leather Bag',
            'price' => 399.00,
            'image' => 'uploads/product3.jpg',
            'description' => '100% genuine leather luxury bag.'
        ]);
        
        Product::create([
            'name' => 'Silk Evening Dress',
            'price' => 599.00,
            'image' => 'uploads/product4.jpg',
            'description' => 'Stunning silk dress for special occasions.'
        ]);
    }
}
