<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('penjualan_detail_id'); // Primary Key
            $table->unsignedBigInteger('penjualan_id'); // Foreign Key ke t_penjualan
            $table->unsignedBigInteger('barang_id'); // Foreign Key ke m_barang
            $table->integer('jumlah');
            $table->integer('subtotal');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan')->onDelete('cascade');
            $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
