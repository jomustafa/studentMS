<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semester;
use App\Models\Student;
use Faker\Factory as Faker; 

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach(range(0,15) as $i){
            student::create([
                'semester_id' => $faker->numberBetween(1,15),
                'name' => $faker->name(),
                'lastName' => $faker->name(),
                'age' => $faker->numerify('##'),
                'gender' =>  $faker->randomElement(['male', 'female']),
                'levelOfStudies' => $faker->randomElement(['undergraduate', 'graduate']),
                'yearOfStudies' => $faker->randomElement(['1', '2', '3']),
                'scholarship' => $faker->randomElement(['50%', '100%'])
            ]);
        }
    }
}
