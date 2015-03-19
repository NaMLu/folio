<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {	$faker = Faker\Factory::create();
       foreach( range(1, 5) as $item )
		{
		        App\Category::create([
   			        'name' => $faker->word,
			        'description' => $faker->paragraph(4),

		        ]);
		}
    }

}