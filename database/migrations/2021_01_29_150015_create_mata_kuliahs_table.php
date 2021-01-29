<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahsTable extends Migration
{
    public function up()
    {
        Schema::connection('DATA_MATAKULIAH')->create('mata_kuliah', function (Blueprint $table) {
            
            $table->id();            
            $table->bigInteger('id_universitas');
            $table->bigInteger('id_fakultas');
            $table->bigInteger('id_bahan_ajar');
            $table->bigInteger('id_jenjang');

            $table->string('kode_matakuliah', 35);

            $table->string('matakuliah', 255);
            $table->string('tahun_akademik', 255);
            $table->string('silabus', 255);
            $table->integer('semester');

            $table->integer('sks_matakuliah');
            $table->integer('sks_teori');
            $table->integer('sks_praktek');
            $table->integer('sks_lapangan');
            $table->integer('sks_max');

            $table->timestamps();
        });

        Schema::connection('DATA_MATAKULIAH')->create('mata_kuliah_ajar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_matakuliah');
            $table->bigInteger('nidn');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('DATA_MATAKULIAH')->dropIfExists('mata_kuliah');
        Schema::connection('DATA_MATAKULIAH')->dropIfExists('mata_kuliah_ajar');
    }
}
