<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            ['name' => strtoupper($faker->firstNameMale),
            'last_name' => strtoupper($faker->lastName),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),

            ],



         ['name' => strtoupper($faker->firstNameFemale),
            'last_name' => strtoupper($faker->lastName),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),

            ],


         ['name' => strtoupper($faker->firstNameFemale),
             'last_name' => strtoupper($faker->lastName),
             'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),

            ],
         ['name' => strtoupper($faker->firstNameFemale),
             'last_name' => strtoupper($faker->lastName),
             'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),


            ],
         ['name' => strtoupper($faker->firstNameFemale),
             'last_name' => strtoupper($faker->lastName),
             'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),


            ],
         ['name' => strtoupper($faker->firstNameMale),
             'last_name' => strtoupper($faker->lastName),
             'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),


            ],

        ['name' => strtoupper($faker->firstNameMale),
            'last_name' => strtoupper($faker->lastName),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),


            ],
        ['name' => strtoupper($faker->firstNameMale),
            'last_name' => strtoupper($faker->lastName),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),


            ],
        ['name' => strtoupper($faker->firstNameMale),
            'last_name' => strtoupper($faker->lastName),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),


            ],
            //9
        ['name' => strtoupper($faker->firstNameMale),
            'last_name' => strtoupper($faker->lastName),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),

            ],

            ['name' => strtoupper($faker->firstNameMale),
                'last_name' => strtoupper($faker->lastName),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                //'remember_token'=>str_random(50),

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),

            ],

            ['name' => strtoupper($faker->firstNameFemale),
                'last_name' => strtoupper($faker->lastName),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                //'remember_token'=>str_random(50),

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),

            ],



            ['name' => 'admin',
            'last_name' => 'nimda',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),

            ]









        ] );
    }
}
