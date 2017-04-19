<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
class clinic_records_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('clinic_records')->insert([


            [   'recipe'  => "Antibioticos",
                'diagnosis'=>"Mal de estomago ",
                'temperature'=>"46",
                'heartbeat'=>"95",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "Antibioticos",
                'diagnosis'=>"Mal de estomago, muchas golosinas",
                'temperature'=>"42",
                'heartbeat'=>"87",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "Canigen cachorros 2B, 8 tabletas ",
                'diagnosis'=>"ansiedad",
                'temperature'=>"76",
                'heartbeat'=>"101",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "Glucantime 5 ampollas 5 ml",
                'diagnosis'=>"Manias de mordeduras",
                'temperature'=>"86",
                'heartbeat'=>"89",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "Coracan 10 ml, 15 ampollas",
                'diagnosis'=>"Problemas cardiacos al correr",
                'temperature'=>"96",
                'heartbeat'=>"88",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "Hemo 141 5 x 20ml",
                'diagnosis'=>"Hemorragias bucales",
                'temperature'=>"99",
                'heartbeat'=>"101",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "framicas en polvo, tres semanas ",
                'diagnosis'=>"fungus en las heridas de las patas",
                'temperature'=>"48",
                'heartbeat'=>"95",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "Anesmol 10 ml, 5 ampollas",
                'diagnosis'=>"Problemas digestivos",
                'temperature'=>"46",
                'heartbeat'=>"88",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "Cerenia inyectables 5 x 20ml",
                'diagnosis'=>"vomitos",
                'temperature'=>"78",
                'heartbeat'=>"100",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   'recipe'  => "cerenia 60 mg 4 comprimidos  ",
                'diagnosis'=>"Dolores estomacales ",
                'temperature'=>"48",
                'heartbeat'=>"88",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ]

        ] );
    }

}
