<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       /* $faker = Faker::create();
        foreach (range(1,100) as $index) {
            DB::table('product')->insert([
                'productName' => $faker->company,
                'description' => $faker->text,
                'productId' => $faker->randomNumber(),
                'images' => $faker->image(),
            ]);
        }*/
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('recital')->insert([
                'pagesRecital' => $faker->text,
                'pageId' => $faker->randomNumber(),
            ]);
        }
    }
}
