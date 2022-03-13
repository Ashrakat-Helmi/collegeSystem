<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFinalDecisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('final_decisions', function (Blueprint $table) {
            $table->foreign(['userId'], 'final_decisions_ibfk_1')->references(['id'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['preDecisionId'], 'final_decisions_ibfk_3')->references(['id'])->on('pre_decisions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('final_decisions', function (Blueprint $table) {
            $table->dropForeign('final_decisions_ibfk_1');
            $table->dropForeign('final_decisions_ibfk_3');
        });
    }
}
