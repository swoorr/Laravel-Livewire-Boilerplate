<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            //
            $table->id();
            $table->string('name')->nullable();
            $table->string('brand');
            $table->string('model');
            $table->string('color');
            $table->string('year');
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is4x4')->default(false);
            $table->boolean('isAutomatic')->default(false);
            $table->boolean('isAirCondition')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
