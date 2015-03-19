<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoryWorkTableSeeder extends Seeder {

    public function run()
    {	$faker = Faker\Factory::create();
       foreach( range(1, 100) as $item )
		{		DB::table('category_work')->insert(
				    ['category_id'=>$faker->numberBetween(1,5), 
				    'work_id'=>$faker->numberBetween(1,20)]
				);
		}
    }

}