<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTaks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 50);
        });

        Schema::create('user_tasks', function(Blueprint $table){
            $table->increments('id');
            $table->text('description');
            $table->string('state', 5);
            // relation with the table user
            $table->foreignId('user_id')->reference('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // delete the table if is need it
        Schema::dropIfExists('user_tasks');
        Schema::dropIfExists('user');

    }
}
