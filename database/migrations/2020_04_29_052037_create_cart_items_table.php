<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCartItemsTable.
 */
class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('cart_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity')->default(0);
            $table->tinyInteger('color_id');
            $table->tinyInteger('size_id');
            $table->integer('price')->default(0);
            $table->integer('amount')->default(0);
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropForeign(['cart_items']);
        });
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropForeign(['cart_id']);
        });
        Schema::drop('cart_items');
    }
}
