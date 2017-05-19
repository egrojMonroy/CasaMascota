<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class reservations_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('reservations')->insert([


            [
                'user_id'=>'4',
                'pet_id'=>'1',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'user_id'=>'4',
                'pet_id'=>'2',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'user_id'=>'5',
                'pet_id'=>'3',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'user_id'=>'5',
                'pet_id'=>'4',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'user_id'=>'8',
                'pet_id'=>'5',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],
            [
                'user_id'=>'8',
                'pet_id'=>'6',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'user_id'=>'9',
                'pet_id'=>'7',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'user_id'=>'11',
                'pet_id'=>'8',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],

            [
                'user_id'=>'12',
                'pet_id'=>'9',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],

            [
                'user_id'=>'12',
                'pet_id'=>'10',
                'date'=>$faker->date('Y-m-d H:i'),
                'tipo_res'=>$faker->randomElement($array = array (0,1)),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],




        ]);
    }
}
