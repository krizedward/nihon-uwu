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
            // $table->bigIncrements('id');
            // $table->text('order_id')->nullable();
            // $table->text('service_id')->nullable();
            // $table->text('service_name')->nullable();
            // $table->text('service_price')->nullable();
            // $table->text('qty')->nullable();
            // $table->text('subtotal')->nullable();

            $table->bigIncrements('id');
            $table->unsignedBigInteger('invoice');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('servicetalent_id');
            $table->unsignedBigInteger('talent_id');
            $table->integer('price_service')->nullable()->unsigned();
            $table->integer('qty_service')->nullable()->unsigned();
            $table->date('start_service')->nullable();
            $table->date('end_service')->nullable();
            $table->integer('subtotal_service')->nullable()->unsigned();
            $table->text('status_service')->nullable();

            $table->timestamps();
            // membuat igunakan untuk menyimpan detail dari pembelian yang
            // dilakukan oleh client
            $table->foreign('invoice')
            ->references('id')->on('order_service')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('client_id')
            ->references('id')->on('client')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('servicetalent_id')
            ->references('id')->on('service_talent')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('talent_id')
            ->references('id')->on('talent')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
