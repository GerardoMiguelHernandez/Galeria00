<?php

use Illuminate\Database\Seeder;

class AlbumSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\Album::class, 10)->create();
    }
}
