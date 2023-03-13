<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_service', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->text('client_id')->nullable();
            // $table->text('invoice')->nullable();
            // $table->text('total_price')->nullable();
            // $table->text('pay')->nullable();
            // $table->text('methode_pay')->nullable();
            // $table->text('proof_of_pay')->nullable();
            // $table->text('note')->nullable();

            $table->bigIncrements('id');
            $table->string('invoice')->nullable();
            $table->date('start_service')->nullable();
            $table->date('end_service')->nullable();
            $table->integer('total_payment')->nullable()->unsigned();
            $table->text('status_order')->nullable();

            $table->timestamps();
            // untuk menyimpan data pembelian client
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_service');
    }
}
