<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTalent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('service_id')->nullable();
            $table->text('service_sort')->nullable();
            $table->text('service_kind')->nullable();
            $table->text('service_name')->nullable();
            $table->text('duration')->nullable();
            $table->integer('price_service')->nullable()->unsigned();
            $table->text('description')->nullable();
            $table->text('point')->nullable();
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
        Schema::dropIfExists('service_talent');
    }
}
