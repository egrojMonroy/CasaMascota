<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class diseases_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([

                [   'name'  => 'RABIA',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                ['name'  => 'GRIPE',

                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                ['name'  => 'HEMATOMAS',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                [   'name'  => 'VOMITO',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                [   'name'  => 'DOLOR DE ABDOMEN',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                [   'name'  => 'BRONCONEUMONIA',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                [   'name'  => 'OTITIS',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                [   'name'  => 'VOMITO',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                [   'name'  => 'MOQUILLO',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                [   'name'  => 'PARVOVIRUS',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')],
                [   'name'  => 'LEPTOSPIROSIS',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')]

        ]
        );
    }
}
