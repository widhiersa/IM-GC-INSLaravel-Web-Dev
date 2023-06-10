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
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('judul',45);
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();
        });
        
        Schema::table('film', function (Blueprint $table) {
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
};
