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
        Schema::create('work_order', function (Blueprint $table) {
            $table->id('id_wo')->autoIncrement();
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
        Schema::create('user_wo', function (Blueprint $table) {
            $table->id('user_id');
            $table->char('nama', 25);
            $table->char('username', 25);
            $table->char('password', 15);
        });
        Schema::create('kategori_wo', function (Blueprint $table) {
            $table->id('id_kategori');
            $table->char('nama_kategori', 25);
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_order');
    }
};
