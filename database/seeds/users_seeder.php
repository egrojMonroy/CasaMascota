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
            [
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],



         ['name' => $faker->firstNameFemale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],


         ['name' => $faker->firstNameFemale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],
         ['name' => $faker->firstNameFemale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],
         ['name' => $faker->firstNameFemale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],
         ['name' => $faker->firstNameMale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],

        ['name' => $faker->firstNameMale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],
        ['name' => $faker->firstNameMale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],
        ['name' => $faker->firstNameMale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],
        ['name' => $faker->firstNameMale,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            //'remember_token'=>str_random(50),

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],

            ['name' => $faker->firstNameMale,
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                //'remember_token'=>str_random(50),

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ],

            ['name' => $faker->firstNameFemale,
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                //'remember_token'=>str_random(50),

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')

            ]









        ] );
    }
}
