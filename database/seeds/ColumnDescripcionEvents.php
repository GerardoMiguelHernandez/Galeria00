<?php

use Illuminate\Database\Seeder;

class ColumnDescripcionEvents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Event::class, 8)->create();
    }
}
