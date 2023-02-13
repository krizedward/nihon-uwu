<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('id_account')->unique();
            $table->string('nickname')->nullable();
            $table->string('photo_profile')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('upload_ktp')->nullable();
            $table->text('short_description')->nullable(); //perkenalan singkat
            $table->enum('status',['active','block']);
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            // $table->bigIncrements('id');
            // $table->unsignedBigInteger('user_id');
            // $table->string('fullname');
            // $table->string('nickname');
            // $table->string('address');
            // $table->string('number_wa');
            // $table->string('bank_account');
            // $table->string('upload_ktp');
            // $table->timestamps();

            // $table->foreign('user_id')
            // ->references('id')->on('users')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
