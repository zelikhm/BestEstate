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
        Schema::create('course_models', function (Blueprint $table) {
            $table->id();
            $table->integer('BTC');
            $table->integer('ETH');
            $table->integer('USD');
            $table->integer('EUR');
            $table->integer('CYN');
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
        Schema::dropIfExists('course_models');
    }
};
