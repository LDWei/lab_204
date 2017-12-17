<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name')->unique();
            $table->string('password');
            $table->string('email')->unique()->index();
            $table->string('real_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('avatar')->nullable();
            $table->string('tell')->nullable();
            $table->string('qq')->nullable();
            $table->string('weChat')->nullable();
            $table->string('gitHub')->nullable();
            $table->string('selfWeb')->nullable();
            $table->string('city')->nullable();
            $table->string('job')->nullable();
            $table->string('admin')->default(0);
            $table->integer('message_count')->default(0);
            $table->integer('follower_count')->default(0)->index();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}




