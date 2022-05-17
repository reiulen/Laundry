<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi')->unique();
            $table->string('nama_konsumen');
            $table->string('no_telepon');
            $table->string('kode_paket');
            $table->string('nama_paket');
            $table->string('jenis_paket');
            $table->integer('estimasi');
            $table->integer('harga');
            $table->string('satuan');
            $table->integer('jumlah');
            $table->date('tanggal_masuk');
            $table->date('tanggal_selesai');
            $table->string('jenis_pembayaran');
            $table->string('status_bayar');
            $table->integer('total_bayar');
            $table->text('keterangan');
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
        Schema::dropIfExists('transaksis');
    }
}
