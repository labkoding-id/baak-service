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

            $table->string('kode_perguruan_tinggi', 15)->index();
            $table->string('kode_fakultas', 15)->index();

            // informasi program studi
            $table->string('kode_program_studi', 15)->index()->unique();
            $table->string('program_studi', 150)->index();
            $table->text('description')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('jenjang', 2)->nullable();
            $table->string('gelar', 5)->nullable();
            $table->string('logo')->nullable();

            // informasi pendirian
            $table->date('tanggal_berdiri');
            $table->date('tanggal_sk_pendirian');
            $table->string('nomor_sk_pendirian', 55);
            
            // informasi akreditas
            $table->enum('akreditas',['A','B','C','D']);
            
            // kontak
            $table->string('website')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->timestamps();
        });

        Schema::connection('DATA_PROGRAM_STUDI')->create('berkas_program_studi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_berkas_program_studi')->index()->unique();
            $table->string('nama_berkas')->index();
            $table->string('url_berkas')->index();
            $table->string('keterangan')->index();
            $table->string('kode_program_studi')->index();
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
