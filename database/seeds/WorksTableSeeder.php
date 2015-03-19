<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
class WorksTableSeeder extends Seeder {

    public function run()
    {	$faker = Faker\Factory::create();
       foreach( range(1, 20) as $item )
		{
		        App\Work::create([
   			        'name' 	=> $faker->company.''.$faker->companySuffix,
   			        'quote' => $faker->catchPhrase,
   			        'description' => $faker->paragraph(6),
			        'link' 	=> $faker->url,
			        'published' =>$faker->boolean($chanceOfGettingTrue = 90)
		        ]);
		}
    }

}