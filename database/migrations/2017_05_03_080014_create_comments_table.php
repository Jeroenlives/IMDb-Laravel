<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->mediumText('body');
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('episodes_id');
            $table->timestamps();

            $table->foreign('users_id')
                ->references('id')
                ->on('users');
            $table->foreign('episodes_id')
                ->references('id')
                ->on('episodes');
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
