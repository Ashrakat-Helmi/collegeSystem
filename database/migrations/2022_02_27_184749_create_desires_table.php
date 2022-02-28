<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstDesire')->index('firstDesire');
            $table->string('secondDesire')->index('secondDesire');
            $table->string('thirdDesire')->index('thirdDesire');
            $table->bigInteger('userId')->index('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desires');
    }
}
