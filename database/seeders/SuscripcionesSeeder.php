<?php

namespace Database\Seeders;
use App\Models\Suscripciones;

use Illuminate\Database\Seeder;

class SuscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suscripciones::factory(10)->create();
       
    }
}
