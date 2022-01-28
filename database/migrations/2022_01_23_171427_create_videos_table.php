<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            // video - title, description, url, lectureId, userId, belongsTo = none | category
            $table->id();
            $table->string("title");
            $table->string("url");
            $table->string("description");
            $table->bigInteger("user_id");
            $table->string("lecture_id")->nullable();
            $table->string("belong_to")->default("none");
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
        Schema::dropIfExists('videos');
    }
}