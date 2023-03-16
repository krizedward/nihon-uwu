<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTalent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('kode_id')->nullable();
            $table->text('kode_nomor')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->text('talent_nama')->nullable();
            $table->text('client_nama')->nullable();
            $table->text('total_bayar')->nullable();
            $table->integer('talent_fee')->nullable()->unsigned();
            $table->integer('admin_fee')->nullable()->unsigned();
            $table->text('bukti_bayar')->nullable();
            $table->text('status_bayar')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('payment_talent');
    }
}
