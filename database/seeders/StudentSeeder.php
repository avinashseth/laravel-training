<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++) {
            \DB::table('students')->insert([
                'name'  =>  rand(1000,9999),
                'subject'   =>  rand(10000,99999),
                'likes' =>  rand(10,100)
            ]);
        }
    }
}
