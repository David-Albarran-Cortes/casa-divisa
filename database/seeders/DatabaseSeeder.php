<?php

namespace Database\Seeders;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use App\Models\Post;
 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Suscripciones::factory(10)->create();
        $this->call(UserSeeder::class);
        
    }
}
