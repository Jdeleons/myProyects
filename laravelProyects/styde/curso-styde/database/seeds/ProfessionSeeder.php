<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 DB::table('profession')->insert([
			 'title' => 'Back-en Developer'
		 ]);
		 DB::table('profession')->insert([
			 'title' => 'Fron-end Developer'
		 ]);

		 DB::table('profession')->insert([
			 'title' => 'Diseñador Web'
		 ]);

    }
}
