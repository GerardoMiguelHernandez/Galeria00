<?php

use Illuminate\Database\Seeder;

class CentrosTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\Work_center::class, 10)->create();
    }
}
