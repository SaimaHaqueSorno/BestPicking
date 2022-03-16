<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        Category::create([
            'name'=>'wood',
            'quantity'=>'33',
            'price'=>'3000',
            'details'=>'woodeen',
            
        ]);
        Category::create([
            'name'=>'books',
            'quantity'=>'33',
            'price'=>'3000',
            'details'=>'sdbdjgdueen',
            
        ]);



        
     }
}
