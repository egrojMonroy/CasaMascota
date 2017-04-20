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
        $this->call(roles_seeder::class);
        $this->call(users_seeder::class);
        $this->call(us_rol_seeder::class);
        $this->call(pets_seeder::class);
        $this->call(vaccines_seeder::class);
        $this->call(clinic_records_seeder::class);
        $this->call(pet_cr_seeder::class);
        $this->call(pet_vac_seeder::class);
        $this->call(salons_seeder::class);
        $this->call(type_salon_seeder::class);
        $this->call(user_nit_seeder::class);
    }
}
