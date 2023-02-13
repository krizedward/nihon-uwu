<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('id_account')->unique();
            $table->string('nickname')->nullable();
            $table->string('photo_profile')->nullable();
            $table->string('intro_voice')->nullable();
            $table->decimal('rating', 3, 1)->nullable(); // rating
            $table->string('number_wa')->nullable();
            $table->text('short_description')->nullable(); //perkenalan singkat
            $table->enum('status',['block','active']);
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            // $table->string('fullname')->nullable();
            // $table->string('nickname')->nullable();
            // $table->string('address')->nullable();
            // $table->integer('body_height')->nullable();
            // $table->string('number_wa')->nullable();
            // $table->date('birthdate')->nullable();
            // $table->string('bank_account')->nullable();
            // $table->string('upload_ktp')->nullable();
            // $table->enum('status',['block','active']);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent');
    }
}
