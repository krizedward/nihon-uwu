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
            $table->text('paytalent_code')->nullable();
            $table->text('talent_name')->nullable();
            $table->text('service')->nullable();
            $table->text('start_service')->nullable();
            $table->text('end_service')->nullable();
            $table->text('proof_of_transfer')->nullable();
            $table->text('client_name')->nullable();
            $table->integer('price_service')->nullable()->unsigned();
            $table->integer('talent_fee')->nullable()->unsigned();
            $table->integer('admin_fee')->nullable()->unsigned();
            $table->text('status')->nullable();
            $table->timestamps();
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
