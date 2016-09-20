<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();
      foreach (range(1,5) as $index) {
        DB::table('bikes')->insert([
            'name' => $faker->name,
            'series' => $faker->catchPhrase,
            'created_at' => $faker->dateTime($max = 'now'),
            'updated_at' => $faker->dateTime($max = 'now'),
        ]);
      }
    }
}
