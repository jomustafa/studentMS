<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\unit;
use Faker\Factory as Faker;

class UnitSeeder extends Seeder
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
            unit::create([
                'semester_id' => $faker->numberBetween(1,15),
                'name' => $faker->sentence(3),
                'credits' => $faker->randomElement(['10', '20']),
                'unitCode' => $faker->sentence(2),
                'lecturer' => $faker->name()
            ]);
        }
        
    }
}
