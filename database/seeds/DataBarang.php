<?php

use Illuminate\Database\Seeder;

class DataBarang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('barang')->insert([
            'kode' => Str::random(5),
            'nama' => 'Indomie',
            'deskripsi' => 'Indomie Goreng',
            'stok' => '20',
            'harga' => '10000',
            'berat' => '2',
        ]);
    }
}
