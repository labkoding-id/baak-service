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
            $table->string('kode_universitas')->index();
            $table->string('kode_fakultas')->index();
            $table->string('kode_program_studi')->index();
            $table->string('kode_bahan_ajar')->index();
            $table->string('kode_jenjang')->index();
            $table->string('kode_matakuliah', 15)->unique()->index();

            $table->string('matakuliah_id', 255)->index();
            $table->string('matakuliah_en', 255)->index();
            
            $table->string('silabus', 255)->nullable();
            $table->integer('semester');
            $table->integer('sks_matakuliah')->nullable();
            $table->integer('sks_teori')->nullable();
            $table->integer('sks_praktek')->nullable();
            $table->integer('sks_lapangan')->nullable();
            $table->integer('sks_max')->nullable();
            $table->integer('tahun_akademik', 5);
            $table->timestamps();
        });

        Schema::connection('DATA_MATAKULIAH')->create('mata_kuliah_ajar', function (Blueprint $table) {
            $table->id();
            $table->string('kode_matakuliah_ajar')->unique()->index();
            $table->string('kode_matakuliah');
            $table->string('kode_dosen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection('DATA_MATAKULIAH')->dropIfExists('mata_kuliah');
        Schema::connection('DATA_MATAKULIAH')->dropIfExists('mata_kuliah_ajar');
    }
}
