<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table) {
            $table->id('id_workorder')->autoIncrement();

            // $table->string('id_kategori')->nullable()->unique();
            // $table->string('id_user')->nullable()->unique();
            $table->foreignId('kategoriwo_id');
            $table->foreignId('userwo_id');

            $table->timestamps();
            $table->string('nama_pic');
            $table->string('slug');
            $table->string('nomor_komplain')->nullable();
            $table->enum('prioritas', ['rendah', 'menengah', 'tinggi'])->nullable();
            $table->enum('jenis_servis', ['internal', 'external'])->nullable();
            $table->dateTime('waktu_pengajuan', $precision = 0)->nullable();
            $table->dateTime('waktu_ambil', $precision = 0)->nullable();
            $table->dateTime('waktu_selesai', $precision = 0)->nullable();
            $table->time('waktu_estimasi', $precision = 0)->nullable();
            $table->text('masalah');
            $table->text('solusi')->nullable();
            $table->enum('status', ['Belum dikerjakan', 'Sedang dikerjakan', 'Selesai'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workorders');
    }
};
