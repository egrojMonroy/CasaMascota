<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class vaccines_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vaccines')->insert([

                ['name'  => 'PUPPY DP',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                ['name'  => 'POLIVALENTE',

                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                ['name'  => 'RABIA',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                [   'name'  => 'TRIVALENTE FELINA',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')]]
        );


    }

    //

}
