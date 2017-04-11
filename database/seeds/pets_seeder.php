<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
class pets_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pets')->insert([
            'name' => "Milo",
            'weight'=>"5",
            'height' =>"6.30",
            'age'=> "3",
            'urlImg'=>"http://example.com",
            'gender'=> 'male',
            'breed_id'=>"1",
            'user_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }





}
