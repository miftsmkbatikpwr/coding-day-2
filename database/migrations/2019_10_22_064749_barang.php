<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Barang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function(Blueprint $table){
            //$table->increments('id');
            $table->increments('id');
            $table->string('kode',8);
            $table->string('nama',50);
            $table->text('deskripsi');
            $table->decimal('stok', 5, 2);
            $table->decimal('harga', 12, 2);
            $table->decimal('berat', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
