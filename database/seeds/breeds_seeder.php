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
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
            ],


            ['name'  => "American Pit Bull Terrier",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
            ],

        ['name'  => "Akita",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],



        ['name'  => "Bull Terrier",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],


        ['name'  => "Akita Americano",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "Cavalier King Charles Spaniel",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],
        ['name'  => "Collie",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],
        ['name'  => "Dálmata",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],
        ['name'  => "Galgo Italiano",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],
        ['name'  => "Mestiza(Sin Raza)",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        // termina aca

        // Seeder para razas de gatos


        ['name'  => "Abisinio",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "Balinés",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],


        ['name'  => "Británico de Pelo Corto Azul",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "German Rex",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "Manx",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "Persa",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "Siamés",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "Sphynx",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "Toyger",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ],

        ['name'  => "California Spangled",
            'family_id'=>"2",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'createdBy'=>Carbon::now()->format('admin'),
            'updatedBy'=>Carbon::now()->format('admin'),
            'deletedBy'=>Carbon::now()->format(''),
        ]











       ] );
    }

}
