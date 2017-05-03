<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchlistsHasContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watchlists_has_contents', function(Blueprint $table {
            $table->unsignedInteger('watchlists_id');
            $table->unsignedInteger('contents_id')->nullable();

            $table->foreign('watchlists_id')
                ->references('id')
                ->on('watchlists');
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
        Schema::dropIfExists('watchlists_has_contents');
    }
}
