<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama_panjang' => 'Angga',
            'telepon' => '081290573256',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(12345678),
            'level' => 1,
        ]);
    }
}
