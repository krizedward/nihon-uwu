<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('order_id')->nullable();
            $table->text('service_id')->nullable();
            $table->text('service_name')->nullable();
            $table->text('service_price')->nullable();
            $table->text('qty')->nullable();
            $table->text('subtotal')->nullable();
            $table->timestamps();
            // membuat igunakan untuk menyimpan detail dari pembelian yang
            // dilakukan oleh client
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
