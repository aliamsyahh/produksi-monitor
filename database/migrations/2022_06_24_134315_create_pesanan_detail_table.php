<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pesanan');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_aksesoris');
            $table->string('qty_product');
            $table->string('qty_aksesoris');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_pesanan')->references('id')->on('pesanan');
            $table->foreign('id_product')->references('id')->on('product');
            $table->foreign('id_aksesoris')->references('id')->on('aksesoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_detail');
    }
}
