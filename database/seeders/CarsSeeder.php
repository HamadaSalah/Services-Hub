<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Company::create([
            'name' => 'العالمي لتاجير السيارات',
            'img'  => 'company1.png'
        ]);

        $faker = Faker::create();

        // Define arrays of possible values
        $carTypes = ['Opel', 'Toyota', 'Ford', 'Honda', 'BMW'];
        $carModels = [
            'Opel' => ['Astra', 'Corsa', 'Insignia'],
            'Toyota' => ['Corolla', 'Camry', 'RAV4'],
            'Ford' => ['Fiesta', 'Focus', 'Mustang'],
            'Honda' => ['Civic', 'Accord', 'CR-V'],
            'BMW' => ['3 Series', '5 Series', 'X5']
        ];
        $years = ['2019', '2020', '2021', '2022', '2023'];
        $prices = ['200', '250', '300', '350', '400'];

        for ($i = 0; $i < 30; $i++) {
            $type = $faker->randomElement($carTypes);
            $model = $faker->randomElement($carModels[$type]);

            $car = Car::create([
                'type' => $type,
                'model' => $model,
                'year' => $faker->randomElement($years),
                'price' => $faker->randomElement($prices),
                'assurance' => $faker->numberBetween(0, 1),
                'number' => $faker->bothify('####KSA'),
                'licence_file' => 'uploads/licence.jpg',
                'kilos' => $faker->numberBetween(100, 500),
                'with_driver' => $faker->numberBetween(0, 1),
                'status' => '0',
                'company_id' => 1,
            ]);
            for($J = 0; $J < 3; $J++) {
                $car->files()->create([
                    'path' => 'cars/'. $car->id . '.jpg'
                ]);
            }
        }
    }
}
