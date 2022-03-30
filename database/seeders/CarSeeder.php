<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create("tr_TR");

        $randomBrandCarList = [
            'Audi','BMW','Chevrolet','Citroen','Dacia','Fiat','Ford','Honda','Hyundai','Kia','Mazda','Mercedes-Benz','Mini','Nissan','Opel','Peugeot','Renault','Seat','Skoda','Subaru','Suzuki','Toyota','Volkswagen','Volvo',
        ];

        $randomModelCarList = [
            'A1','A3','A4','A5','A6','A7','A8','Q3','Q5','Q7','Q8','R8','RS3','RS4','RS5','RS6','S1','S2','S3','S4','S5','S6','S7','S8','TT','TTS','V8','X1','X3','X4','X5','X6','XC60','XC70','XC90',
        ];

        $randomAnimalNames = ['cat', 'dog', 'bird', 'fish', 'lion', 'tiger', 'bear', 'panda', 'pig', 'cow', 'horse', 'sheep', 'goat', 'chicken', 'duck', 'goose', 'pigeon', 'parrot', 'rabbit', 'camel', 'deer', 'elephant', 'giraffe', 'hippo', 'monkey', 'penguin', 'rhino', 'snake', 'turtle', 'zebra', 'ant', 'bee', 'butterfly', 'caterpillar'];

        $randomCarImagesListWithURL = [
            'https://www.carlogos.org/car-logos/audi-logo.png',
            'https://www.carlogos.org/car-logos/bmw-logo.png',
            'https://www.carlogos.org/car-logos/chevrolet-logo.png',
            'https://www.carlogos.org/car-logos/citroen-logo.png',
            'https://www.carlogos.org/car-logos/dacia-logo.png',
            'https://www.carlogos.org/car-logos/fiat-logo.png',
            'https://www.carlogos.org/car-logos/ford-logo.png',
            'https://www.carlogos.org/car-logos/honda-logo.png',
            'https://www.carlogos.org/car-logos/hyundai-logo.png',
            'https://www.carlogos.org/car-logos/kia-logo.png',
            'https://www.carlogos.org/car-logos/mazda-logo.png',
            'https://www.carlogos.org/car-logos/mercedes-benz-logo.png',
            'https://www.carlogos.org/car-logos/mini-logo.png',
            'https://www.carlogos.org/car-logos/nissan-logo.png',
            'https://www.carlogos.org/car-logos/opel-logo.png',
            'https://www.carlogos.org/car-logos/peugeot-logo.png'
        ];


        $findImageByBrandName = function ($brandName) use ($randomCarImagesListWithURL) {
            foreach ($randomCarImagesListWithURL as $value) {
                $brandName = strtolower($brandName);
                if (strpos($value, $brandName) !== false) {
                    return $value;
                }
            }

            return 'https://www.carlogos.org/car-logos/ferrari-logo.png';
        };

        for ($i = 0; $i < 200; $i++) {

            $brand = $randomBrandCarList[array_rand($randomBrandCarList)];

            $img = $findImageByBrandName($brand);

            DB::table('cars')->insert([
                'name' => $randomAnimalNames[array_rand($randomAnimalNames)],
                'brand' => $brand,
                'model' => $randomModelCarList[array_rand($randomModelCarList)],
                'color' => $faker->colorName,
                'year' => $faker->year,
                'price' => $faker->numberBetween(10000, 100000),
                'image' => $img,
                'is4x4' => $faker->boolean,
                'isAutomatic' => $faker->boolean,
                'isAirCondition' => $faker->boolean,
            ]);
            
        }
    }
}
