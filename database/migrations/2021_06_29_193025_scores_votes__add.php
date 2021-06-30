<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScoresVotesAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scorevotes', function (Blueprint $table) {
            $table->text('full_name')->nullable();
            $table->integer('category')->nullable();
            $table->integer('all_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scorevotes', function (Blueprint $table) {
            //
        });
    }
}
