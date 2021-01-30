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
            $table->string('kode_yayasan', 15)->unique()->index();
            $table->string('nama_yayasan', 255)->index();
            $table->string('alias', 35);
            $table->text('description')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('logo', 255);

            // informasi pendirian yayasan
            $table->date('tanggal_berdiri');
            $table->date('tanggal_sk_pendirian_yayasan');
            $table->string('nomor_sk_pendirian_yayasan', 55);

            // alamat yayasan
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->integer('kode_pos')->length(6)->nullable();
            $table->text('alamat')->nullable();

            // kontak yayasan
            $table->string('website')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->timestamps();
        });

        Schema::connection('DATA_YAYASAN')->create('berkas_yayasan', function (Blueprint $table) {
            $table->id();
            // informasi yayasan
            $table->string('kode_yayasan', 15);
            $table->string('kode_berkas', 15)->unique()->index();
            $table->string('nama_berkas')->index();
            $table->string('url_berkas');
            $table->string('keterangan');
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
