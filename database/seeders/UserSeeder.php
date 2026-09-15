<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' =>'Achmad Febri Evan',
            'username' => 'febrievan16',
            'email' => 'febrievan16@gmail.com',
            'password' => Hash::make('pass12345')
        ]);

        User::factory()->create([
            'name' =>'Riski Della',
            'username' => 'Risdell',
            'email' => 'riskidella@gmail.com',
            'password' => Hash::make('pass12345')
        ]);

        User::factory(2)->create();

    }
}
