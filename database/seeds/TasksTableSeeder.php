<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		DB::table('tasks')->truncate();
		DB::table('tasks')->insert(
		    array(
		    	'user_id' 			=>	1,
		    	'project_id' 		=>	1,
		    	'name'				=>	"完成毕业论文",
		    	'state' 			=> 	"progress",
		    	'weight'			=>	3,
		    	'priority'   		=>  "highest",
		    	)
		);
		DB::table('tasks')->insert(
		    array(
		    	'user_id' 			=>	1,
		    	'project_id' 		=>	1,
		    	'name'				=>	"毕业论文答辩",
		    	'state' 			=> 	"complete",
		    	'weight'			=>	5,
		    	'priority'   		=>  "high",
		    	)
		);
		DB::table('tasks')->insert(
		   array(
		    	'user_id' 			=>	1,
		    	'project_id' 		=>	1,
		    	'name'				=>	"PPT制作",
		    	'state' 			=> 	"testing",
		    	'weight'			=>	1,
		    	'priority'   		=>  "normal",
		    	)
		);
		DB::table('tasks')->insert(
		   array(
		    	'user_id' 			=>	1,
		    	'project_id' 		=>	1,
		    	'name'				=>	"编程",
		    	'state' 			=> 	"backlog",
		    	'weight'			=>	1,
		    	'priority'   		=>  "normal",
		    	)
		);
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
