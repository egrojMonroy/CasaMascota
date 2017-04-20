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

                ['name'  => 'Puppy dp',
                    'diseases'  => 'parvo y moquillo',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                ['name'  => 'Polivalente',
                    'diseases'  => 'parvo, moquillo, parainfluenza, hepatitis y leptospirosis',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                ['name'  => 'Rabia',
                    'diseases'  => 'rabia',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                ],
                [   'name'  => 'Trivalente felina',
                    'diseases'  => 'panleucopenia felina, la calicivirosis felina y la rinotraqueitis vírica felina',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')]]
        );


    }

    //

}
