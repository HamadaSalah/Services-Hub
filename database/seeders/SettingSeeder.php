<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'intro_img' => 'intro.png'
        ]);

        //SLIDER SEEEDER
        Slider::create([
            'img' => 'slider1.png',
            'head' => '40% عروض حصرية'
        ]);

        Slider::create([
            'img' => 'slider2.png',
            'head' => '40% عروض حصرية'
        ]);
    }
}
