<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritik', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->integer('point');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('film_id');
            $table->timestamps();
        });

        Schema::table('kritik', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('film_id')->references('id')->on('film')->onDelete('cascade')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kritik');
    }
};
