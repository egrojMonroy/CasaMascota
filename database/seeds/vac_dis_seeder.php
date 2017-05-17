<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
class vac_dis_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vac_dis')->insert([

                [ 'vac_id'=> '1',
                    'dis_id'=>'1',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                [ 'vac_id'=> '2',
                    'dis_id'=>'2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                ['vac_id'=> '3',
                    'dis_id'=>'4',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                [   'vac_id'=> '4',
                    'dis_id'=>'5',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')]]
        );
    }
}
