<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class type_rooms_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        { $faker = Faker::create();
            DB::table('type_rooms')->insert([


                    [   'type'  => "CONSULTORIO",
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                        'createdBy'=>Carbon::now()->format('admin'),
                        'updatedBy'=>Carbon::now()->format('admin'),
                        'deletedBy'=>Carbon::now()->format('')

                    ],
                    [   'type'  => "QUIROFANO",
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                        'createdBy'=>Carbon::now()->format('admin'),
                        'updatedBy'=>Carbon::now()->format('admin'),
                        'deletedBy'=>Carbon::now()->format('')

                    ],
                    [   'type'  => "PELUQUERIA",
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                        'createdBy'=>Carbon::now()->format('admin'),
                        'updatedBy'=>Carbon::now()->format('admin'),
                        'deletedBy'=>Carbon::now()->format('')

                    ],

                ]


            );
        }

    }
    }

