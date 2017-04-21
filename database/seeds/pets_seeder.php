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
            'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
            'gender'=> 'male',
            'breed_id'=>"1",
            'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
             'in_adoption'=> "false",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],

            ['name' => "Rufus",
                'weight'=>"10",
                'height' =>"50",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'male',
                'breed_id'=>"5",
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "false",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],

            ['name' => "Petarda",
                'weight'=>$faker->numberBetween($min = 5, $max = 50),
                'height' =>"42",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'female',
                'breed_id'=>"3",
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "false",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],


            ['name' => "Batman",
                'weight'=>$faker->numberBetween($min = 5, $max = 50),
                'height' =>"15",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'Male',
                'breed_id'=>"5",
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],



            ['name' => "Alice",
                'weight'=>$faker->numberBetween($min = 5, $max = 50),
                'height' =>"24",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'female',
                'breed_id'=>"3",
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "false",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],




            ['name' => "Luna",
                'weight'=>$faker->numberBetween($min = 5, $max = 50),
                'height' =>"69",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'female',
                'breed_id'=>"11",
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],


            ['name' => "Silvestre",
                'weight'=>"30",
                'height' =>"70",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'Male',
                'breed_id'=>"15",
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],


            ['name' => "Pongo",
                'weight'=>$faker->numberBetween($min = 5, $max = 50),
                'height' =>"110",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'Male',
                'breed_id'=>$faker->numberBetween($min = 1, $max = 20),
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "false",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],


            ['name' => "Byte",
                'weight'=>$faker->numberBetween($min = 5, $max = 50),
                'height' =>"100",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'Male',
                'breed_id'=>$faker->numberBetween($min = 1, $max = 20),
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],


            ['name' => "clara",
                'weight'=>$faker->numberBetween($min = 5, $max = 50),
                'height' =>"55",
                'age'=> $faker->date('Y-m-d'),
                'urlImg'=>$faker->imageUrl($width = 200, $height = 200),
                'gender'=> 'Female',
                'breed_id'=>$faker->numberBetween($min = 1, $max = 20),
                'user_id'=>$faker->randomElement($array = array (4,8,9,10,11,12)),
                'in_adoption'=> "true",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],










        ]);
    }





}