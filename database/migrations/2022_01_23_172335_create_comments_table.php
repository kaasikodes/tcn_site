<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // wont it be costly
            // isnt it better stored in json array
            // comment - lectureId, content, userId, timeStamp [requires a socket - real time], parentCommentId
            $table->id();
            $table->string("content");
           
            $table->bigInteger("user_id");
            $table->string("lecture_id");
            $table->string("parent_id")->nullable();
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
        Schema::dropIfExists('comments');
    }
}