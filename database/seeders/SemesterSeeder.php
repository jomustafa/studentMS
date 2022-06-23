<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semester;
use Faker\Factory as Faker;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach(range(0,20) as $i){
            semester::create([
                'semesterPeriod' => $faker->randomElement(['spring', 'fall']),
                'year' => $faker->randomElement(['2021-2022', '2020-2021']),
                'academicLevel' => $faker->randomElement(['1', '2', '3'])
            ]);
        }
    }
}
