<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProgramStudi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('DATA_PROGRAM_STUDI')->create('program_studi', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('kode_perguruan_tinggi');
            $table->BigInteger('kode_fakultas');

            // informasi program studi
            $table->string('program_studi', 150)->index();
            $table->text('description');
            $table->text('visi');
            $table->text('misi');
            $table->string('jenjang', 2);
            $table->string('gelar', 5);
            $table->string('logo');

            // informasi pendirian
            $table->date('tanggal_berdiri');
            $table->date('tanggal_sk_pendirian');
            $table->string('nomor_sk_pendirian', 55);
            
            // informasi akreditas
            $table->enum('akreditas',['A','B','C','D']);
            
            // kontak
            $table->string('website');
            $table->string('no_telp');
            $table->string('email');
            $table->string('fax');
            $table->timestamps();
        });

        Schema::connection('DATA_PROGRAM_STUDI')->create('berkas_program_studi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_berkas')->index();
            $table->string('url_berkas')->index();
            $table->string('keterangan')->index();
            $table->BigInteger('service_baak_id_program_studi');
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
        Schema::connection('DATA_PROGRAM_STUDI')->dropIfExists('program_studi');
        Schema::connection('DATA_PROGRAM_STUDI')->dropIfExists('berkas_program_studi');
    }
}
