<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class user_nit_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        For($i=0;$i<8;$i++){
            DB::table('user_nit')->insert([


                [   'user_id' => $faker->randomElement($array = array (2,6)),
                    'nit'  => $faker->numberBetween($min = 2422354, $max = 10000001),
                    'name' => $faker->lastName,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                ]





            ]);


            }
    }
}
