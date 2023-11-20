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
            $table->id('id_wo');
            $table->char('id_kategori')->unique();
            $table->char('id_perangkat', 100)->unique();

            $table->timestamps();
            $table->string('nama_pic');
            $table->string('nomor_komplain');
            $table->enum('prioritas', ['rendah', 'menengah', 'tinggi']);
            $table->enum('jenis_servis', ['internal', 'external']);
            $table->dateTime('waktu_pengajuan', $precision = 0);
            $table->dateTime('waktu_ambil', $precision = 0);
            $table->dateTime('waktu_selesai', $precision = 0);
            $table->time('waktu_estimasi', $precision = 0);
            $table->string('masalah');
            $table->string('solusi');
            $table->enum('status', ['Belum dikerjakan', 'Sedang dikerjakan', 'Selesai']);
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
