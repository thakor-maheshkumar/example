<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert([
        	[
        		'name'=>'kalpesh',
        		'email'=>'kalpesh@gmail.com',
        		'mobile'=>9558263394
        	],
        	[
        		'name'=>'aasha',
        		'email'=>'aasha@gmail.com',
        		'mobile'=>7359505060
        	],

        ]);
    }
}
