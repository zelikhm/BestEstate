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
        Schema::create('jk_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('slug');
            $table->integer('status')->comment('Сдача')->nullable();
            $table->integer('city')->comment('Город')->default(0)->nullable();
            $table->decimal('longitude', 20, 10)->comment('Долгота')->nullable();
            $table->decimal('latitude', 20, 10)->comment('Широта')->nullable();
            $table->integer('class')->comment('Класс')->nullable();
            $table->integer('floors')->comment('Этажность')->nullable();
            $table->integer('frames')->comment('Корпусов')->nullable();
            $table->float('height', 10, 5)->comment('Высота потолков')->nullable();
            $table->integer('variable')->comment('Варианты отделки')->nullable();
            $table->integer('parking')->comment('Парковка')->nullable();
            $table->integer('type')->comment('Тип дома')->nullable();
            $table->integer('support_id')->comment('Айди саппорта')->nullable();
            $table->integer('builder_id')->comment('Айди застройщика')->nullable();
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
        Schema::dropIfExists('jk_models');
    }
};
