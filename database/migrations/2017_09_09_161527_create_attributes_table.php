<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type', 16);
            $table->integer('integer_value');
            $table->unsignedInteger('unsigned_integer_value')->unsigned();
            $table->string('string_value');
            $table->text('text_value');
            $table->longtext('long_text_value');
            $table->boolean('boolean_value');
            $table->date('date_value');
            $table->time('time_value');
            $table->dateTime('date_time_value');
            $table->decimal('decimal_value');
            $table->float('float_value');
            $table->double('double_value');
            $table->json('json_value');

            // These are fake value types that we will need to work some magic to make them configurable.
            $table->json('enum_value');
            $table->integer('increment_value');

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
        Schema::dropIfExists('attributes');
    }
}
