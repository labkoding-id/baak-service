<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('DATA_DOSEN')->create('berkas_dosen', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('kode_berkas_dosen', 15)->unique()->index();
            $table->string('nama_berkas')->index();
            $table->string('url_berkas');
            $table->string('keterangan');
            $table->integer('tahun_akademik');
            $table->string('kode_dosen', 15)->index();
            $table->timestamps();
        });

        Schema::connection('DATA_DOSEN')->create('penasehat_akademik_dosen', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('kode_penasehat_akademik_dosen', 15)->unique()->index();
            $table->string('kode_dosen');
            $table->string('nim');
            $table->integer('tahun_akademik');
            $table->timestamps();
        });

        Schema::connection('DATA_DOSEN')->create('bimbingan_proposal_dosen', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('kode_bimbingan_proposal_dosen', 15)->unique()->index();
            $table->string('kode_dosen');
            $table->string('nim');
            $table->integer('tahun_akademik');
            $table->timestamps();
        });

        Schema::connection('DATA_DOSEN')->create('bimbingan_skripsi_dosen', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('kode_bimbingan_skripsi', 15)->unique()->index();
            $table->string('kode_dosen');
            $table->string('nim');
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
        Schema::connection('DATA_DOSEN')->dropIfExists('berkas_dosen');
        Schema::connection('DATA_DOSEN')->dropIfExists('penasehat_akademik');
        Schema::connection('DATA_DOSEN')->dropIfExists('bimbingan_proposal');
        Schema::connection('DATA_DOSEN')->dropIfExists('bimbingan_skripsi');
    }
}
