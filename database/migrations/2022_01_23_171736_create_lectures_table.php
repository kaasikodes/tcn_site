<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            // lecture - title, ?summary, content, material[ids, ...], video [id, ...], userId, belongsTo = none | category

            $table->id();
            $table->string("title");
            $table->string("summary")->nullable();
            $table->longText("content");
            $table->bigInteger("user_id");
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
        Schema::dropIfExists('lectures');
    }
}