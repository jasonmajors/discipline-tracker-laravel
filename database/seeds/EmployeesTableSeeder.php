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
        	'emp_num' => 100001,
        	'firstname' => 'John',
        	'lastname' => 'Doe',
        	'dept' => 'Marketing',
        	'title' => 'Marketing Coordinator',
        ]);

        DB::table('employees')->insert([
        	'emp_num' => 100002,
        	'firstname' => 'Jane',
        	'lastname' => 'Doe',
        	'dept' => 'Marketing',
        	'title' => 'Marketing Manager',
        ]);
    }
}
