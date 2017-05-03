<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresHasContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres_has_contents', function (Blueprint $table) {
            $table->unsignedInteger('genres_id');
            $table->unsignedInteger('contents_id')->nullable();

            $table->foreign('genres_id')
                ->references('id')
                ->on('genres');
            $table->foreign('contents_id')
                ->references('id')
                ->on('contents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres_has_contents');
    }
}
