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
        Schema::create('send_models', function (Blueprint $table) {
            $table->id();
            $table->string('isTg')->nullable();
            $table->string('isWhatsapp')->nullable();
            $table->string('isViber')->nullable();
            $table->string('isPhone')->nullable();
            $table->string('name');
            $table->string('phone');
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
        Schema::dropIfExists('send_models');
    }
};
