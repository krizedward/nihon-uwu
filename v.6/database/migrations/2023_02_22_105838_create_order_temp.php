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
            $table->bigIncrements('id');
            $table->text('service_id')->nullable();
            $table->text('talent_id')->nullable();
            $table->text('service_id')->nullable();
            $table->text('qty')->nullable();
            $table->text('subtotal')->nullable();
            $table->timestamps();
            // Tabel temporders ini kita umpamakan sebagai keranjang belanja yang menjadi tempat
            // untuk menyimpan sementara data menu yang dipilih oleh pembeli/customer.
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
