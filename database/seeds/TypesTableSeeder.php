<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('types')->insert(
    		['type' => 'Verbal']
    	);
        DB::table('types')->insert(
            ['type' => 'Written']
        );
        DB::table('types')->insert(
            ['type' => 'Suspension']
        );
    }
}
