<?php

use Illuminate\Database\Seeder;

class ImagenesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         factory(App\Image::class, 50)->create();
    }
}
