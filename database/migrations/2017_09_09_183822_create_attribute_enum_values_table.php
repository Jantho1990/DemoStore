<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeEnumValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_enum_values', function (Blueprint $table) {
            $table->increments('id');
            $table->json('value'); // We can't dynamically set enums, so we're going to fake it with JSON and some model logic.
            $table->integer('attribute_id')->unsigned();
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
        Schema::dropIfExists('attribute_enum_values');
    }
}
