<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stories', function ($table) {
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('issue_id')->references('id')->on('issues');
        });
        Schema::table('corrections', function($table){
            $table->foreign('story_id')->references('id')->on('stories');
        });
        Schema::table('layouts', function($table){
            $table->foreign('staffer_id')->references('id')->on('staffers');
        });
        Schema::table('graphic_staffer', function($table){
            $table->foreign('graphic_id')->references('id')->on('graphics');
            $table->foreign('staffer_id')->references('id')->on('staffers');
        });
        Schema::table('photo_staffer', function($table){
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->foreign('staffer_id')->references('id')->on('staffers');
        });
        Schema::table('photo_story', function($table){
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->foreign('story_id')->references('id')->on('stories');
        });
        Schema::table('position_staffer', function($table){
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('staffer_id')->references('id')->on('staffers');
        });
        Schema::table('special_section_staffer', function($table){
            $table->foreign('special_section_id')->references('id')->on('special_sections');
            $table->foreign('staffer_id')->references('id')->on('staffers');
        });
        Schema::table('staffer_story', function($table){
            $table->foreign('story_id')->references('id')->on('stories');
            $table->foreign('staffer_id')->references('id')->on('staffers');
        });
        Schema::table('graphic_story', function($table){
            $table->foreign('graphic_id')->references('id')->on('graphics');
            $table->foreign('story_id')->references('id')->on('stories');
        });
        Schema::table('issues', function($table){
            $table->foreign('volume_id')->references('id')->on('volumes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
