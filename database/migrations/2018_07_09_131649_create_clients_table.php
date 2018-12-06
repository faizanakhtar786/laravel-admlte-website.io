<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->nullable();
            $table->text("description")->nullable();
            $table->string("feature_image")->nullable();
            $table->string("rate")->nullable();
            $table->text("images")->nullable();
            $table->string("email")->nullable();
            $table->string("mobile")->nullable();
            $table->string("website")->nullable();
            $table->text("address")->nullable();

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
        Schema::dropIfExists('clients');
    }
}
