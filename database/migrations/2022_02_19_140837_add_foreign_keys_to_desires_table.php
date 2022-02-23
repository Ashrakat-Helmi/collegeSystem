<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDesiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('desires', function (Blueprint $table) {
            $table->foreign(['userId'], 'desires_ibfk_1')->references(['id'])->on('users');
            $table->foreign(['firstDesire'], 'desires_ibfk_2')->references(['id'])->on('programs');
            $table->foreign(['secondDesire'], 'desires_ibfk_3')->references(['id'])->on('programs');
            $table->foreign(['thirdDesire'], 'desires_ibfk_4')->references(['id'])->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('desires', function (Blueprint $table) {
            $table->dropForeign('desires_ibfk_1');
            $table->dropForeign('desires_ibfk_2');
            $table->dropForeign('desires_ibfk_3');
            $table->dropForeign('desires_ibfk_4');
        });
    }
}
