<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class pet_cr_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pet_cr')->insert([

            [   'pet_id'  => '1',
                'cr_id' => '1',
                'date' => Carbon::now()->Format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'pet_id'  => '1',
                'cr_id' => '3',
                'date' => Carbon::now()->Format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'pet_id'  => '2',
                'cr_id' => '2',
                'date' => Carbon::now()->Format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'pet_id'  => '2',
                'cr_id' => '4',
                'date' => Carbon::now()->Format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'pet_id'  => '3',
                'cr_id' => '5',
                'date' => Carbon::now()->Format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'pet_id'  => '3',
                'cr_id' => '6',
                'date' => Carbon::now()->Format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
            ]

        ]);


    }

    //

}
