<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
        Hotel::create([
            'hotel_name' => 'Khách sạn A',
            'location' => 'Địa điểm A',
            'rating' => 4.5,
            'description' => 'Mô tả khách sạn A',
        ]);

        Hotel::create([
            'hotel_name' => 'Khách sạn A',
            'location' => 'Địa điểm A',
            'rating' => 4.5,
            'description' => 'Mô tả khách sạn A',
        ]);

        Hotel::create([
            'hotel_name' => 'Khách sạn B',
            'location' => 'Địa điểm B',
            'rating' => 5.5,
            'description' => 'Mô tả khách sạn B',
        ]);

        Hotel::create([
            'hotel_name' => 'Khách sạn C',
            'location' => 'Địa điểm C',
            'rating' => 6.5,
            'description' => 'Mô tả khách sạn C',
        ]);

        Hotel::create([
            'hotel_name' => 'Khách sạn D',
            'location' => 'Địa điểm D',
            'rating' => 7.5,
            'description' => 'Mô tả khách sạn D',
        ]);

        Hotel::create([
            'hotel_name' => 'Khách sạn E',
            'location' => 'Địa điểm E',
            'rating' => 8.5,
            'description' => 'Mô tả khách sạn E',
        ]);
    }
}
