<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	'emp_id' => 100001,
        	'firstname' => 'John',
        	'lastname' => 'Doe',
        	'dept' => 'Marketing',
        	'title' => 'Marketing Coordinator',
        ]);

        DB::table('employees')->insert([
        	'emp_id' => 100002,
        	'firstname' => 'Jane',
        	'lastname' => 'Doe',
        	'dept' => 'Marketing',
        	'title' => 'Marketing Manager',
        ]);
    }
}
