<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsHasEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons_has_episodes', function (Blueprint $table) {
            $table->unsignedInteger('seasons_id');
            $table->unsignedInteger('episodes_id');
            $table->unsignedInteger('series_id');

            $table->foreign('seasons_id')
                ->references('id')
                ->on('episodes');
            $table->foreign('episodes_id')
                ->references('id')
                ->on('episodes');
            $table->foreign('series_id')
                ->references('id')
                ->on('series');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons_has_episodes');
    }
}
