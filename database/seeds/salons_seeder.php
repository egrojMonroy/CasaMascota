<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;


class salons_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        For($i=0;$i<10;$i++){
        DB::table('salons')->insert([


            [   'date' =>$faker->date('Y-m-d'),
                'observation'=> $faker->randomElement($array = array ('Baño y corte','Baño','Corte')),
                'user_id' => $faker->randomElement($array = array (2,6)),
                'pet_id'  => $faker->numberBetween($min = 1, $max = 10),
                'type_id'=> $faker->numberBetween($min = 1, $max = 4),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ]





        ]);}













    }
}
