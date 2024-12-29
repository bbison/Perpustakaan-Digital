<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Ahmad Noor Khafid',
            'email' => 'ahmad@example.com',
            'password' => Hash::make('12345'), // Menggunakan hashing bcrypt
            'user_level' => 'admin', // Pastikan tabel memiliki kolom ini
        ]);
    }
    
}
