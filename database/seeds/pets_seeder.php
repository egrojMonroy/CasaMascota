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
        $faker = Faker::create();
        DB::table('pets')->insert([


            ['name' => "Milo",
            'weight'=>"5",
            'height' =>"6.30",
            'age'=> $faker->date('Y-m-d'),
            'urlImg'=>"http://example.com",
            'gender'=> 'male',
            'breed_id'=>"1",
            'user_id'=>"1",
             'in_adoption'=> "false",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],

            ['name' => "Rufus",
                'weight'=>"10",
                'height' =>"50",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>"http://example.com",
                'gender'=> 'male',
                'breed_id'=>"5",
                'user_id'=>"2",
                'in_adoption'=> "false",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],

            ['name' => "Petarda",
                'weight'=>"30",
                'height' =>"42",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>"http://example.com",
                'gender'=> 'female',
                'breed_id'=>"3",
                'user_id'=>"3",
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],


            ['name' => "Batman",
                'weight'=>"30",
                'height' =>"42",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>"http://example.com",
                'gender'=> 'Male',
                'breed_id'=>"5",
                'user_id'=>"6",
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],



            ['name' => "Petarda",
                'weight'=>"30",
                'height' =>"42",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>"http://example.com",
                'gender'=> 'female',
                'breed_id'=>"3",
                'user_id'=>"3",
                'in_adoption'=> "false",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],




            ['name' => "Luna",
                'weight'=>"30",
                'height' =>"42",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>"http://example.com",
                'gender'=> 'female',
                'breed_id'=>"11",
                'user_id'=>"4",
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],


            ['name' => "Silvestre",
                'weight'=>"30",
                'height' =>"42",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>"http://example.com",
                'gender'=> 'Male',
                'breed_id'=>"15",
                'user_id'=>"9",
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ]










        ]);
    }





}
