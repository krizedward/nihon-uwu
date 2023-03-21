<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('kode_id')->nullable();
            $table->text('kode_nomor')->nullable();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('client_id');
            $table->text('username_client')->nullable();
            $table->text('nama_client')->nullable();
            $table->text('noresi_bayar')->nullable();
            $table->text('namaterang_bayar')->nullable();
            $table->text('tanggal_bayar')->nullable();
            $table->text('bukti_bayar')->nullable();
            $table->text('metode_bayar')->nullable();
            $table->text('metodedetail_bayar')->nullable(); //kode bank, payment, dll
            $table->text('status_bayar')->nullable(); //successful, peding, cencel
            $table->timestamps();

            $table->foreign('client_id')
            ->references('id')->on('client')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('order_id')
            ->references('id')->on('order_service')
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
        Schema::dropIfExists('payment_client');
    }
}
