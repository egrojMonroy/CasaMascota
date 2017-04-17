<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
class breeds_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    { $faker = Faker::create();
        DB::table('breeds')->insert([

        //seeder de razas de perro
            ['name'  => "Cooker",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],



            ['name'  => "American Pit Bull Terrier",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],

        ['name'  => "Akita",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],



        ['name'  => "Bull Terrier",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],


        ['name'  => "Akita Americano",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "Cavalier King Charles Spaniel",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],
        ['name'  => "Collie",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],
        ['name'  => "Dálmata",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],
        ['name'  => "Galgo Italiano",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],
        ['name'  => "Mestiza(Sin Raza)",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        // termina aca

        // Seeder para razas de gatos


        ['name'  => "Abisinio",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "Balinés",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],


        ['name'  => "Británico de Pelo Corto Azul",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "German Rex",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "Manx",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "Persa",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "Siamés",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "Sphynx",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "Toyger",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ],

        ['name'  => "California Spangled",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]











       ] );
    }

}
