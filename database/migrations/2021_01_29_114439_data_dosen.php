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
        Schema::connection('DATA_DOSEN')->create('penasehat_akademik', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->bigInteger('nidn');
            $table->bigInteger('nim');
            $table->integer('tahun_akademik');
            $table->timestamps();
        });

        Schema::connection('DATA_DOSEN')->create('bimbingan_proposal', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->bigInteger('nidn');
            $table->bigInteger('nim');
            $table->integer('tahun_akademik');
            $table->timestamps();
        });

        Schema::connection('DATA_DOSEN')->create('bimbingan_skripsi', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->bigInteger('nidn');
            $table->bigInteger('nim');
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
        Schema::connection('DATA_DOSEN')->dropIfExists('penasehat_akademik');
        Schema::connection('DATA_DOSEN')->dropIfExists('bimbingan_proposal');
        Schema::connection('DATA_DOSEN')->dropIfExists('bimbingan_skripsi');
    }
}
