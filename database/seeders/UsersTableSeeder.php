<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo 10 người dùng mẫu
        User::create([
            'fullname' => 'Nguyen Van B',
            'email' => 'nguyenvanb@example.com',
            'phone_number' => '0987654321',
            'address' => '456 Another St, HCMC',
            'password' => Hash::make('password123'), // Mã hóa mật khẩu
            'role_id' => 2, // Giả sử role_id là 2
            'deleted' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
