<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplieddesiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applieddesires', function (Blueprint $table) {
            $table->string('firstDesire');
            $table->string('secondDesire');
            $table->string('thirdDesire');
            $table->bigInteger('id')->default(0)->index('id');
            $table->string('studentName');
            $table->timestamp('createdAt')->useCurrent();
            $table->dateTime('updatedAt')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applieddesires');
    }
}
