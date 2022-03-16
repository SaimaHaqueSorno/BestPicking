<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'wood',
            'quantity'=>'33',
            'price'=>'3000',
            'details'=>'woodeen',
            
            

        ]);
    }
}
