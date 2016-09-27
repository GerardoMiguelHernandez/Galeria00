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
        // $this->call(UsersTableSeeder::class);
        $this->call(user_seeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ColumnDescripcionEvents::class);
        $this->call(CentrosTables::class);
        $this->call(AlbumSeederTable::class);
        $this->call(ImagenesSeederTable::class);
        
    }
}
