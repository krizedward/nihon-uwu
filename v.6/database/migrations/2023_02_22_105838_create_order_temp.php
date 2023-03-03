<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_temp', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->text('service_id')->nullable();
            // $table->text('talent_id')->nullable();
            // $table->text('service_name')->nullable();
            // $table->text('service_price')->nullable();
            // $table->text('qty')->nullable();
            // $table->text('subtotal')->nullable();

            $table->bigIncrements('id');
            $table->text('client_id')->nullable();
            $table->unsignedBigInteger('talent_id');
            $table->integer('price_service')->nullable()->unsigned();
            $table->integer('qty_service')->nullable()->unsigned();
            $table->date('start_service')->nullable();
            $table->date('end_service')->nullable();
            $table->integer('subtotal_service')->nullable()->unsigned();
            $table->timestamps();
            // Tabel temporders ini kita umpamakan sebagai keranjang belanja yang menjadi tempat
            // untuk menyimpan sementara data menu yang dipilih oleh pembeli/customer.

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
        Schema::dropIfExists('order_temp');
    }
}
