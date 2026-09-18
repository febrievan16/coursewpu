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
            'password' => Hash::make('pass12345'),
            'job' => 'Front-end programer'
        ]);

        User::factory()->create([
            'name' =>'Riski Della',
            'username' => 'Risdell',
            'email' => 'riskidella@gmail.com',
            'password' => Hash::make('pass12345'),
            'job' => 'back-end programer'
        ]);
        User::factory()->create([
            'name' =>'Altheia',
            'username' => 'Althe',
            'email' => 'Althei10@gmail.com',
            'password' => Hash::make('pass12345'),
            'job' => 'Desainer'
        ]);
        User::factory()->create([
            'name' =>'Evan Achmad',
            'username' => 'evanach',
            'email' => 'Evnach11@gmail.com',
            'password' => Hash::make('pass12345'),
            'job' => 'Head Marketing'
        ]);
        User::factory()->create([
            'name' =>'Ardhilla Riski',
            'username' => 'Ardhilla',
            'email' => 'Ardhill11@gmail.com',
            'password' => Hash::make('pass12345'),
            'job' => 'Back-end Programmer'
        ]);
        

    }
}
