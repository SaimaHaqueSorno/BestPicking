<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'=>'sorno',
            'email'=>'sorno@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt('121212'),
        ]);
    }
}
