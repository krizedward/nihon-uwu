<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_rental', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('servicetalent_id');
            $table->unsignedBigInteger('talent_id');
            $table->date('date_dating');
            $table->time('time_dating');
            $table->enum('status_payment',['pending','success']);
            $table->enum('status_dating',['process','done','reject']);
            $table->timestamps();

            $table->foreign('servicetalent_id')
            ->references('id')->on('service_talent')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('talent_id')
            ->references('id')->on('talent')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('client_id')
            ->references('id')->on('client')
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
        Schema::dropIfExists('service_rental');
    }
}
