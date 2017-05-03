<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('issuer');
            $table->unsignedInteger('persons_id');
            $table->unsignedInteger('contents_id');
            $table->timestamps();

            $table->foreign('persons_id')
                ->references('id')
                ->on('persons');
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
        Schema::dropIfExists('awards');
    }
}
