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
            $table->string('kode_fakultas', 15)->unique()->index();
            $table->string('fakultas', 255)->index();
            $table->string('alias', 35)->index();
            $table->text('description')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('logo')->nullable();

            // informasi pendirian
            $table->date('tanggal_berdiri');
            $table->date('tanggal_sk_pendirian');
            $table->string('nomor_sk_pendirian', 55);
            $table->timestamps();
        });

        Schema::connection('DATA_FAKULTAS')->create('berkas_fakultas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_berkas')->index()->unique();
            $table->string('nama_berkas')->index();
            $table->string('url_berkas')->index();
            $table->string('keterangan')->index();
            $table->string('kode_fakultas')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('DATA_FAKULTAS')->dropIfExists('fakultas');
        Schema::connection('DATA_FAKULTAS')->dropIfExists('berkas_fakultas');
    }
}
