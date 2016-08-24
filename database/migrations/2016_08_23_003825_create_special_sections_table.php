<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('slug')->unique();
            $table->string('site');
            $table->boolean('registration_required');
            $table->string('template_location');
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
        Schema::drop('special_sections');
    }
}
