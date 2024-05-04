<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'name' => 'حلاقة',
            'job_name' => 'حلاق',
            'img' => 'category/1.png',
        ]);

        Job::create([
            'name' => 'تصوير',
            'job_name' => 'مصور',
            'img' => 'category/2.png',
        ]);

        Job::create([
            'name' => 'ميك اب',
            'job_name' => 'ميك اب ارتيستر',
            'img' => 'category/3.png',
        ]);

    }
}
