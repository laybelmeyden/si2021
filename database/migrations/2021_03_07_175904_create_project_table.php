<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->text('statuses')->nullable();
            $table->integer('stages')->nullable();
            $table->text('pending')->nullable();
            $table->text('other')->nullable();
            $table->text('about_source')->nullable();
            $table->text('nominations')->nullable();
            $table->text('project_ready')->nullable();
            $table->text('project_name')->nullable();
            $table->text('project_body')->nullable();
            $table->text('project_social')->nullable();
            $table->text('project_target')->nullable();
            $table->text('project_presentations')->nullable();
            $table->text('project_video')->nullable();
            $table->text('project_logo')->nullable();
            $table->text('project_mts')->nullable();
            $table->text('project_main_fio')->nullable();
            $table->text('project_main_info')->nullable();
            $table->text('project_main_phone')->nullable();
            $table->text('project_main_years')->nullable();
            $table->text('project_main_teams')->nullable();
            $table->text('project_main_security')->nullable();
            $table->text('project_files_1')->nullable();
            $table->text('project_files_2')->nullable();
            $table->text('project_files_3')->nullable();
            $table->text('project_files_4')->nullable();
            $table->text('project_files_5')->nullable();
            $table->text('project_main_social_links_1')->nullable();
            $table->text('project_main_social_links_2')->nullable();
            $table->text('project_main_social_links_3')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
