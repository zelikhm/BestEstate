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
        Schema::table('balcony_models', function (Blueprint $table) {
            $table->boolean('active')->default(false);
        });
        Schema::table('repair_models', function (Blueprint $table) {
            $table->boolean('active')->default(false);
        });
        Schema::table('bathroom_models', function (Blueprint $table) {
            $table->boolean('active')->default(false);
        });
        Schema::table('type_com_models', function (Blueprint $table) {
            $table->boolean('active')->default(false);
        });
        Schema::table('type_house_models', function (Blueprint $table) {
            $table->boolean('active')->default(false);
        });
        Schema::table('infrastructure_models', function (Blueprint $table) {
            $table->boolean('active')->default(false);
        });
        Schema::table('plot_models', function (Blueprint $table) {
            $table->boolean('active')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
