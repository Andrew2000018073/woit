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
            $table->foreignId('kategoriwo_id')->nullable();
            $table->foreignId('admin_id')->nullable();

            $table->timestamps();
            $table->string('user');
            $table->string('unit');
            $table->string('slug')->nullable();
            $table->string('nomor_komplain')->nullable();
            $table->string('nomor_referensi');
            $table->enum('prioritas', ['rendah', 'menengah', 'tinggi'])->nullable();
            $table->enum('jenis_servis', ['internal', 'external'])->nullable();
            $table->dateTime('waktu_pengajuan', $precision = 0)->nullable();
            $table->dateTime('waktu_ambil', $precision = 0)->nullable();
            $table->dateTime('waktu_selesai', $precision = 0)->nullable();
            $table->time('waktu_estimasi', $precision = 0)->nullable();
            $table->time('durasi', $precision = 0)->nullable();
            $table->text('keluhan');
            $table->text('analisis')->nullable();
            $table->text('solusi')->nullable();
            $table->enum('status', ['Belum dikerjakan', 'Sedang dikerjakan', 'Selesai']);
            $table->enum('perangkat', ['CPU', 'MONITOR', 'MOUSE', 'KEYBOARD', 'JARINGAN', 'SPEAKER', 'PRINTER','LAINNYA']);
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
