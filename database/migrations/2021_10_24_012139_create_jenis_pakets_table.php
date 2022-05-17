<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_pakets', function (Blueprint $table) {
            $table->id();
            $table->string('no_paket')->unique();
            $table->string('nama_paket');
            $table->string('jenis_paket');
            $table->string('jumlah_hari');
            $table->string('harga');
            $table->enum('Satuan',['Kg', 'Meter', 'Buah']);
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
        Schema::dropIfExists('jenis_pakets');
    }
}
