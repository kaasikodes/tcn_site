<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            // material -  file, name, description, lectureId, userId, belongsTo = none | category
            $table->id();
            $table->string("name");
            $table->string("file");
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
        Schema::dropIfExists('materials');
    }
}