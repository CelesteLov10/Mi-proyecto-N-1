<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cliente::Factory(500)->create();
        //
    }
}
