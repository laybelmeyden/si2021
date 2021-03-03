<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('user_name')->nullable();
            $table->text('user_surname')->nullable();
            $table->text('user_middlename')->nullable();
            $table->text('user_phone')->nullable();
            $table->text('user_city')->nullable();
            $table->text('user_education')->nullable();
            $table->text('user_moreinfo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
