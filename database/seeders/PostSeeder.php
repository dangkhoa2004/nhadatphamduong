<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; // Make sure you import the Post model
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Example of seeding a single post
        Post::create([
            'title' => 'Bán nhà ngõ ô tô tại 3/522 Ngô Gia Tự, Thành Tô, Hải An, Hải Phòng',
            'content' => '',
            'link' => '',
            'code' => 'P123456',
            'info' => '',
            'document_type' => '',
            'area_mb' => 50,
            'area_sd' => 50,
            'width' => 10,
            'length' => 11,
            'floors' => 3,
            'bedrooms' => 4,
            'bathrooms' => 3,
            'price' => 4200000000,
            'direction' => 'Bắc',
            'feng_shui_direction' => 'Đông tứ trạch',
            'location' => '3/522 Ngô Gia Tự, Thành Tô, Hải An, Hải Phòng',
            'posted_at' => now(),
            'images' => 'https://i.ibb.co/h1h8Jckh/z6389305157284-c45630d5259e5d8013166496bb7d60be.jpg',
        ]);

        // You can add more posts here using a loop or additional create calls
    }
}
