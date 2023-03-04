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
        Schema::create('flat_price_models', function (Blueprint $table) {
            $table->id();
            $table->integer('flat_id');
            $table->integer('price')->nullable();
            $table->boolean('sale')->default(1);
            $table->boolean('rent')->default(1);
            $table->integer('rent_price');
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
        Schema::dropIfExists('flat_price_models');
    }
};
