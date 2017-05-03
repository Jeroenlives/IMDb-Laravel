<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->string('role');
            $table->string('character')->nullable();
            $table->unsignedInteger('contents_id');
            $table->unsignedInteger('persons_id');

            $table->foreign('contents_id')
                ->references('id')
                ->on('contents');
            $table->foreign('persons_id')
                ->references('id')
                ->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casts');
    }
}
