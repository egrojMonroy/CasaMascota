<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(families_seeder::class);
        $this->call(breeds_seeder::class);
        $this->call(users_seeder::class);
        $this->call(pets_seeder::class);

    }
}
