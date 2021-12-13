<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->integer('post_types_id')->unsigned(); 
            $table->foreign('post_types_id')->references('id')->on('post_types')->onDelete('cascade');
            $table->string('title') ;
            $table->string('description')->nullable() ;
            $table->string('image') ;
            $table->string('courseName')->nullable() ;
            $table->string('courseCode')->nullable() ;
            $table->string('contactWay')->nullable() ;
            $table->string('contactLink')->nullable() ;
            $table->string('postStatus')->default(0) ;
            
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
        Schema::dropIfExists('posts');
    }
}
