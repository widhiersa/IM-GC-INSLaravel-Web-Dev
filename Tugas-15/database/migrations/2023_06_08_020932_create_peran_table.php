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
        Schema::create('peran', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('cast_id');
            $table->timestamps();
        });

        Schema::table('peran', function (Blueprint $table) {
            $table->foreign('film_id')->references('id')->on('film')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cast_id')->references('id')->on('cast')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peran');
    }
};
