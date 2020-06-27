<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateSizeablesTable.
 */
class CreateSizeablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizeables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('size_id');
            $table->bigInteger('sizeable_id');
            $table->string('sizeable_type');
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
        Schema::drop('sizeables');
    }
}
