<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Votealls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votealls', function (Blueprint $table) {
            $table->id();
            $table->integer('scorevote_id')->nullable();
            $table->text('comments')->nullable();
            $table->integer('score1')->nullable();
            $table->integer('score3')->nullable();
            $table->integer('score4')->nullable();
            $table->integer('score5')->nullable();
            $table->integer('score6')->nullable();
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
        Schema::dropIfExists('votealls');
    }
}
