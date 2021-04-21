<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLinksExperts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkexperts', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('score1')->nullable();
            $table->text('score2')->nullable();
            $table->text('score3')->nullable();
            $table->text('score4')->nullable();
            $table->text('score5')->nullable();
            $table->text('score6')->nullable();
            $table->text('score7')->nullable();
            $table->text('score8')->nullable();
            $table->text('score9')->nullable();
            $table->text('score10')->nullable();
            $table->text('msg1')->nullable();
            $table->text('msg2')->nullable();
            $table->text('msg3')->nullable();
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
        Schema::dropIfExists('linkexperts');
    }
}
