<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PerguruanTinggi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('DATA_PERGURUAN_TINGGI')->create('perguruan_tinggi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_perguruan_tinggi', 15)->unique()->index();
            $table->string('perguruan_tinggi', 250)->index();
            $table->string('alias', 55)->index();
            $table->text('description')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('logo')->nullable();

            // informasi pendirian perguruan tinggi
            $table->date('tanggal_berdiri');
            $table->date('tanggal_sk_pendirian_perguruan_tinggi');
            $table->string('nomor_sk_pendirian_perguruan_tinggi', 55);

            // informasi akreditas perguruan tinggi
            $table->string('kode_akreditas', 15)->nullable();

            // alamat perguruan tinggi
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->text('alamat')->nullable();

            // kontak perguruan tinggi
            $table->string('website')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->timestamps();
        });

        Schema::connection('DATA_PERGURUAN_TINGGI')->create('berkas_perguruan_tinggi', function (Blueprint $table) {
            $table->id();
            // informasi yayasan
            $table->string('kode_berkas_perguruan_tinggi')->index();
            $table->string('nama_berkas')->index();
            $table->string('url_berkas')->index();
            $table->string('keterangan')->index();
            $table->string('kode_perguruan_tinggi')->index();
            $table->integer('tahun_akademik');
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
        Schema::connection('DATA_PERGURUAN_TINGGI')->dropIfExists('perguruan_tinggi');
        Schema::connection('DATA_PERGURUAN_TINGGI')->dropIfExists('berkas_perguruan_tinggi');
    }
}
