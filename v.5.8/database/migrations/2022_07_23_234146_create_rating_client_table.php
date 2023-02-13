<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rent_id');
            $table->unsignedBigInteger('client_id');
            $table->decimal('rating_point', 3, 1)->nullable(); // rating
            $table->string('description_rating');
            $table->timestamps();

            $table->foreign('rent_id')
            ->references('id')->on('rent_service')
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
        Schema::dropIfExists('rating_client');
    }
}
