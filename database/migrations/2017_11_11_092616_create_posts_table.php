<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(Schema::hastable('posts')){
            Schema::dropIfExists('posts');
        };
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable(false);
            $table->longText('content')->nullable(false);
            $table->integer('user_id')->unsigned();
            $table->integer('cat_id')->unsigned();
            $table->integer('view_count')->unsigned()->default(0);
            $table->integer('like')->unsigned()->default(0);
            $table->tinyInteger('status')->default(0);
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
        //
        Schema::dropIfExists('posts');
    }
}



