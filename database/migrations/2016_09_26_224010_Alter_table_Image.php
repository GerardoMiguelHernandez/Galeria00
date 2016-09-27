<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('images', function (Blueprint $table) {
             $table->integer('album_id')->unsigned()->after('evento_id');
            $table->foreign('album_id')->references('id')->on('album')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('images', function (Blueprint $table) {
             $table->dropForeign('images_album_id_foreign');
         });
    }
}
