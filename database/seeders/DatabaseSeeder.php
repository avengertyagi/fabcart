<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; 
use Faker\Factory as Faker;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $faker= Faker::create();
       foreach(range(1,5) as $index)
       {
           DB::table('products')->insert([
               'name'=>$faker->name,
               'email'=>$faker->email,
               'mobile'=>$faker->text(10)
           ]);
       }
    }
}
