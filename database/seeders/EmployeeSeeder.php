<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'phone' => '+20'.rand(1000000000, 9999999999),
            'name' => 'Rayan mohamed',
            'photo' => 'photos/1.png',
            'job_id' => 1
        ]);

        Employee::create([
            'phone' => '+20'.rand(1000000000, 9999999999),
            'name' => 'Rayan mohamed',
            'photo' => 'photos/2.png',
            'job_id' => 2
        ]);

        Employee::create([
            'phone' => '+20'.rand(1000000000, 9999999999),
            'name' => 'Rayan mohamed',
            'photo' => 'photos/1.png',
            'job_id' => 3
        ]);

        Employee::create([
            'phone' => '+20'.rand(1000000000, 9999999999),
            'name' => 'Rayan mohamed',
            'photo' => 'photos/2.png',
            'job_id' => 1
        ]);

    }
}
