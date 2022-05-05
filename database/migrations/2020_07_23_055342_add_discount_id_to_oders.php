<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDiscountIdToOders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedInteger('discount_id')->nullable()->after('code');

            $table->foreign('discount_id')->references('id')->on('discounts');
        });
    }
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['orders_discount_id_foreign']);
        });
    }
}
