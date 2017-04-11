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
            'name'  => "cooker",
            'family_id'=>"1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')






        ]);
    }

}
