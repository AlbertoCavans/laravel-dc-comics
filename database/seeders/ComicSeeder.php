<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $comic = new Comic;

            $comic->title = $faker->text(30);
            $comic->author_first_name = $faker->firstName();
            $comic->author_last_name = $faker->lastName();
            $comic->cover = $faker->imageUrl(400, 600, "comic-cover", true);
            $comic->description = $faker->paragraph(4, true);
            $comic->origin_country = $faker->country();
            $comic->publication_date = $faker->dateTime();
            $comic->sold_copies = $faker->randomNumber(7, false);
            $comic->publication_status = $faker->randomElement(["ongoing","finished","paused","uncompleted"]);
            $comic->save();
    }
}
}