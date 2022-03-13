<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalDecisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_decisions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('userId')->index('userId');
            $table->bigInteger('preDecisionId')->index('predId');
            $table->string('programId');
            $table->string('status');
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
        Schema::dropIfExists('final_decisions');
    }
}
