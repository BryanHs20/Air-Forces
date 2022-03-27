<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Se manda a llamar el seeder anteriormente hecho
use Database\Seeders\AForceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Se manda a llamar la BD
        $this->call(AForceSeeder::class);
    }
}
