<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname')->nullable();
            $table->string('insertion')->nullable();
            $table->string('lastname')->nullable();
            $table->longText('bio')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@imdb.com',
                'password' => password_hash('admin', PASSWORD_DEFAULT)
            ],
            [
                'username' => 'moderator',
                'email' => 'moderator@imdb.com',
                'password' => password_hash('moderator', PASSWORD_DEFAULT)
            ]
        ]);

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
