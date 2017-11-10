<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('runsheet_slug');
            $table->string('title');
            $table->string('type');
            $table->integer('issue_id')->unsigned();
            $table->dateTime('publish_date');
            $table->string('cDeck');
            $table->string('static_byline')->nullable();
            $table->integer('section_id')->unsigned();
            $table->longtext('body');
            $table->integer('priority');
            $table->integer('section_webfront_priority')->nullable();
            $table->integer('front_page_webfront_priority')->nullable();
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
        Schema::drop('stories');
    }
}
