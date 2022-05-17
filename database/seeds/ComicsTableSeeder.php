<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100 ; $i++) { 
            $newComic = new Comic();
            $newComic->title = $faker->words(3, true);
            $newComic->description = $faker->paragraph();
            $newComic->thumb = 'https://source.unsplash.com/random/800x800/?img=' . $faker->randomNumber(3, true);
            $newComic->price = $faker->randomFloat(2, 10, 100);
            $newComic->series = $faker->words(3, true);
            $newComic->sale_date = $faker->dateTimeBetween('-2 years', '+1 year');
            $newComic->type = $faker->words(3, true);
            $newComic->save();
        }
    }
}
