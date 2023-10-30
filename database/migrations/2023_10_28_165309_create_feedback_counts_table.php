<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_counts', function (Blueprint $table) {
            $table->id();
            $table->integer('feedback_id')->unsigned(); 
            $table->foreign('feedback_id')->references('id')->on('feedback'); 
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('feedback_counts');
    }
}
