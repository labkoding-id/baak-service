<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fakultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('DATA_FAKULTAS')->create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->string('fakultas', 150)->index();
            $table->string('alias', 35);
            $table->text('description');
            $table->text('visi');
            $table->text('misi');
            $table->string('logo');

            // informasi pendirian
            $table->date('tanggal_berdiri');
            $table->date('tanggal_sk_pendirian');
            $table->string('nomor_sk_pendirian', 55);
            $table->timestamps();
        });

        Schema::connection('DATA_FAKULTAS')->create('berkas_fakultas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_berkas')->index();
            $table->string('url_berkas')->index();
            $table->string('keterangan')->index();
            $table->BigInteger('service_baak_id_fakultas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('DATA_FAKULTAS')->dropIfExists('fakultas');
        Schema::connection('DATA_FAKULTAS')->dropIfExists('berkas_fakultas');
    }
}
