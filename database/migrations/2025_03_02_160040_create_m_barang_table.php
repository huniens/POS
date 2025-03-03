<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id');
            $table->unsignedBigInteger('level_id')->index();
            $table->string('kategori_kode', 10);
            $table->string('kategori_nama', 100);
            $table->integer('harga_beli', false, true)->length(11);
            $table->integer('harga_jual', false, true)->length(11);
            $table->timestamps();

            $table->foreign('level_id')->references('level_id')->on('m_kategori')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
