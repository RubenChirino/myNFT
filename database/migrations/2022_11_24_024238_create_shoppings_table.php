<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_nfts');
            $table->timestamps();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_nfts')->references('id')->on('nfts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoppings');
    }
};
