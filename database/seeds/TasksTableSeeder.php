<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 
            DB::table('tasks')->insert([
            	'name'=>$faker->realText($faker->numberBetween(10,20)),
                'description'=>$faker->realText($faker->numberBetween(100,200)),
                'user_id'=>1
            ]);
        }
    }
}
