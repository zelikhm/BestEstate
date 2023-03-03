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
        Schema::create('jk_flat_models', function (Blueprint $table) {
            $table->id();
            $table->integer('jk_id');
            $table->string('title')->comment('название');
            $table->longText('description')->comment('описание');
            $table->string('slug')->comment('ссылка');
            $table->integer('plan')->nullable();
            $table->integer('support_id')->nullable();
            $table->double('square_main', 5, 2)->nullable();
            $table->double('square_life', 5, 2)->nullable();
            $table->double('square_kitchen', 5, 2)->nullable();
            $table->integer('float')->nullable();
            $table->double('height')->nullable();
            $table->date('date_building')->nullable();
            $table->string('type')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('balcon')->nullable();
            $table->string('repair')->nullable();
            $table->string('view')->nullable();
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
        Schema::dropIfExists('jk_flat_models');
    }
};
