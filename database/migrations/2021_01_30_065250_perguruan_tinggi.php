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
            $table->string('perguruan_tinggi', 250)->index();
            $table->string('alias', 55);
            $table->text('description');
            $table->text('visi');
            $table->text('misi');
            $table->string('logo');

            // informasi pendirian perguruan tinggi
            $table->date('tanggal_berdiri');
            $table->date('tanggal_sk_pendirian_perguruan_tinggi');
            $table->string('nomor_sk_pendirian_perguruan_tinggi', 55);

            // informasi akreditas perguruan tinggi
            $table->string('kode_akreditas', 8)->index()->nullable();

            // alamat perguruan tinggi
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->integer('kode_pos');
            $table->text('alamat');

            // kontak perguruan tinggi
            $table->string('website');
            $table->string('no_telp');
            $table->string('email');
            $table->string('fax');
            $table->timestamps();
        });

        Schema::connection('DATA_PERGURUAN_TINGGI')->create('berkas_perguruan_tinggi', function (Blueprint $table) {
            $table->id();
            // informasi yayasan
            $table->string('nama_berkas')->index();
            $table->string('url_berkas')->index();
            $table->string('keterangan')->index();
            $table->BigInteger('service_baak_id_perguruan_tinggi')->nullable();
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
