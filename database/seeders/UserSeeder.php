<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis Enrique',
            'last_name' => 'Solis Puc',
            'phone' => '9999033517',
            'user_name' => 'lsolis',
            'email' => 'sop199642@gmail.com',
            'password' => Hash::make('MercaMID123') ,
        ])->assignRole('ADMINISTRADOR');
    }
}
