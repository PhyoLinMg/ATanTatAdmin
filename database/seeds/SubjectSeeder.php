<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Subject::create([
        	'name'=>'Mech 01',
        	'yes'=>8,
        	'no'=>4
        ]);
    }
}
