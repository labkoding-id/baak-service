<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Yayasan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('DATA_YAYASAN')->create('yayasan', function (Blueprint $table) {
            $table->id();
            // informasi yayasan
            $table->string('nama_yayasan', 150)->index();
            $table->string('alias', 35);
            $table->text('description');
            $table->text('visi');
            $table->text('misi');
            $table->string('logo', 255);

            // informasi pendirian yayasan
            $table->date('tanggal_berdiri');
            $table->date('tanggal_sk_pendirian_yayasan');
            $table->string('nomor_sk_pendirian_yayasan', 55);
            $table->BigInteger('service_baak_id_berkas_yayasan');

            // alamat yayasan
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->integer('kode_pos')->length(6);
            $table->text('alamat');

            // kontak yayasan
            $table->string('website');
            $table->string('no_telp');
            $table->string('email');
            $table->string('fax');
            $table->timestamps();
        });

        Schema::connection('DATA_YAYASAN')->create('berkas_yayasan', function (Blueprint $table) {
            $table->id();
            // informasi yayasan
            $table->string('nama_berkas')->index();
            $table->string('url_berkas')->index();
            $table->string('keterangan')->index();
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
        Schema::connection('DATA_YAYASAN')->dropIfExists('yayasan');
        Schema::connection('DATA_YAYASAN')->dropIfExists('berkas_yayasan');
    }
}
