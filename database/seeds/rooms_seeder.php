<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class rooms_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('rooms')->insert([
            [

                'name'=>'NUEVA',
                'type_room_id'=>'1',
              
                'franja'=>"00:30:00",
                'number'=>'1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format(''),
            ],


            [
                'name'=>'DOCTORES',
                'type_room_id'=>'2',
                'franja'=>"00:30:00",
                'number'=>'1',
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format(''),
            ],


            [
                'name'=>'5',
                'type_room_id'=>'2',
                'franja'=>"01:00:00",
                'number'=>'1',
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'name'=>'5',
                'type_room_id'=>'2',
                'franja'=>"00:30:00",
                'number'=>'1',
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'name'=>'8',
                'type_room_id'=>'1',
                'franja'=>"00:30:00",
                'number'=>'1',
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],
            [
                'name'=>'8',
                'type_room_id'=>'2',
                'franja'=>"00:30:00",
                'number'=>'1',
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],


            [
                'name'=>'9',
                'type_room_id'=>'1',
                'franja'=>"00:30:00",
                'number'=>'1',
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'createdBy'=>Carbon::now()->format('admin'),
                'updatedBy'=>Carbon::now()->format('admin'),
                'deletedBy'=>Carbon::now()->format('')
            ],



        ]);
    }
}
