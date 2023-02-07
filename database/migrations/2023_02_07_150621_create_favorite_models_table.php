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
        Schema::create('favorite_models', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('jk_id')->comment('жк')->nullable();
            $table->integer('flat_id')->comment('квартира')->nullable();
            $table->integer('village_id')->comment('поселок')->nullable();
            $table->integer('house_id')->comment('вилла')->nullable();
            $table->integer('shale_id')->comment('шалле')->nullable();
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
        Schema::dropIfExists('favorite_models');
    }
};
