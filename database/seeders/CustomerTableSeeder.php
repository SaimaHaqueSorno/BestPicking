<?php

namespace Database\Seeders;
use\App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Customer::create([
          'name'=>'Runa',
          'contact'=>'0154656459',
          'email'=>'Runa12@gmail.com',
          'address'=>'Uttara,12/1230',

      ]);
    }
}
