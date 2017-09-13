<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThingiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thingies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type', 16);
            $table->integer('entity_id')->unsigned();
            $table->integer('integer_value')->nullable();
            $table->unsignedInteger('unsigned_integer_value')->unsigned()->nullable();
            $table->string('string_value')->nullable();
            $table->text('text_value')->nullable();
            $table->longtext('long_text_value')->nullable();
            $table->boolean('boolean_value')->nullable();
            $table->date('date_value')->nullable();
            $table->time('time_value')->nullable();
            $table->dateTime('date_time_value')->nullable();
            $table->decimal('decimal_value')->nullable();
            $table->float('float_value')->nullable();
            $table->double('double_value')->nullable();
            $table->json('json_value')->nullable();

            // These are fake value types that we will need to work some magic to make them configurable.
            $table->json('enum_value')->nullable();
            $table->integer('increment_value')->nullable();

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
        Schema::dropIfExists('thingies');
    }
}
