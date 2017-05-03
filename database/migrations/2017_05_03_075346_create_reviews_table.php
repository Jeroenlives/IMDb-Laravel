<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('body');
            $table->integer('rating')->nullable();
            $table->unsignedInteger('contents_id');
            $table->unsignedInteger('users_id');
            $table->timestamps();

            $table->foreign('contents_id')
                ->references('id')
                ->on('contents');
            $table->foreign('users_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
