<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('code');
            $table->integer('quantity');
            $table->integer('current_quantity')->default(0);
            $table->integer('price');
            $table->integer('original_price');
            $table->integer('sale_price');
            $table->integer('status');
            $table->tinyInteger('hot');
            $table->integer('view')->default(1);
            $table->string('type');
            $table->string('thumbnail');
            $table->tinyInteger('sale')->default(1);
            $table->string('content');
            $table->unsignedInteger('brand_id');
            $table->timestamps();

            $table->foreign('brand_id')
                ->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['products_brand_id_foreign']);
        });
        Schema::dropIfExists('products');
    }
}
