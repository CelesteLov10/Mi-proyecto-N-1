<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proveedore;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedore::Factory(500)->create();
        //
    }
}
