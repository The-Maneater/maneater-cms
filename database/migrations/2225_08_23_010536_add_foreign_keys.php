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
        Schema::table('layout_photo', function($table){
            $table->foreign('layout_id')->references('id')->on('layouts');
            $table->foreign('photo_id')->references('id')->on('photos');
        });
        Schema::table('layout_story', function($table){
            $table->foreign('layout_id')->references('id')->on('layouts');
            $table->foreign('story_id')->references('id')->on('stories');
        });
        Schema::table('layout_graphic', function($table){
            $table->foreign('layout_id')->references('id')->on('layouts');
            $table->foreign('graphic_id')->references('id')->on('graphics');
        });
        Schema::table('sections', function($table){
            $table->foreign('publication_id')->references('id')->on('publications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stories', function (Blueprint $table) {
            $table->dropForeign(['section_id']);
            $table->dropForeign(['issue_id']);
        });
        Schema::table('corrections', function(Blueprint $table){
            $table->dropForeign(['story_id']);
        });
        Schema::table('layouts', function(Blueprint $table){
            $table->dropForeign(['staffer_id']);
        });
        Schema::table('graphic_staffer', function(Blueprint $table){
            $table->dropForeign(['graphic_id']);
            $table->dropForeign(['staffer_id']);
        });
        Schema::table('photo_staffer', function(Blueprint $table){
            $table->dropForeign(['photo_id']);
            $table->dropForeign(['staffer_id']);
        });
        Schema::table('photo_story', function(Blueprint $table){
            $table->dropForeign(['photo_id']);
            $table->dropForeign(['story_id']);
        });
        Schema::table('position_staffer', function(Blueprint $table){
            $table->dropForeign(['position_id']);
            $table->dropForeign(['staffer_id']);
        });
        Schema::table('special_section_staffer', function(Blueprint $table){
            $table->dropForeign(['special_section_id']);
            $table->dropForeign(['staffer_id']);
        });
        Schema::table('staffer_story', function(Blueprint $table){
            $table->dropForeign(['staffer_id']);
            $table->dropForeign(['story_id']);
        });
        Schema::table('graphic_story', function(Blueprint $table){
            $table->dropForeign(['graphic_id']);
            $table->dropForeign(['story_id']);
        });
        Schema::table('issues', function(Blueprint $table){
            $table->dropForeign(['volume_id']);
        });
        Schema::table('layout_photo', function(Blueprint $table){
            $table->dropForeign(['layout_id']);
            $table->dropForeign(['photo_id']);
        });
        Schema::table('layout_story', function(Blueprint $table){
            $table->dropForeign(['layout_id']);
            $table->dropForeign(['story_id']);
        });
        Schema::table('layout_graphic', function(Blueprint $table){
            $table->dropForeign(['layout_id']);
            $table->dropForeign(['graphic_id']);
        });
        Schema::table('sections', function(Blueprint $table){
            $table->dropForeign(['publication_id']);
        });
    }
}
