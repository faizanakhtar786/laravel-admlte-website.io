<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->string('content',1024)->nullable();
            $table->string('link')->nullable();
            $table->string('image');          
        });

        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('image');
            $table->text('description')->nullable();
        });

        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('mobile')->nullable();
            $table->string('image');
            $table->string('designation')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('company')->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('testimonial', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('message');
            $table->string('name');
            $table->string('email')->unique();
            $table->bigInteger('mobile')->nullable();
            $table->string('image');
            $table->string('designation')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('company')->nullable();
        });     

         Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();           
            $table->string('name');
            $table->string('email');
            $table->bigInteger('mobile')->nullable();
            $table->string('massage');           
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        Schema::dropIfExists('slider');
        Schema::dropIfExists('gallery');
        Schema::dropIfExists('team');
        Schema::dropIfExists('testimonial');
        Schema::dropIfExists('feedback');       
    }
}
