<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; 

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sử dụng model để chèn dữ liệu vào bảng categories
        Category::create([
            'name' => 'Adventure',
        ]);

        Category::create([
            'name' => 'Beach',
        ]);

        Category::create([
            'name' => 'Cultural',
        ]);

        Category::create([
            'name' => 'Nature',
        ]);

        // Hoặc bạn có thể tạo nhiều bản ghi cùng lúc
        Category::insert([
            ['name' => 'Mountain'],
            ['name' => 'Historical'],
            ['name' => 'City'],
        ]);
    }
}
