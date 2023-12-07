<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class workorder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'workorders';
    protected $fillable = ['kategoriwo_id','admin_id','id_perangkat','user', 'unit','slug','nomor_komplain', 'nomor_referensi','prioritas','jenis_servis','waktu_pengajuan', 'waktu_ambil', 'waktu_selesai', 'keluhan','solusi', 'status', 'perangkat', 'analisis'];
    public function admin():BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
    public function kategoriwo():BelongsTo
    {
        return $this->belongsTo(kategoriwo::class);
    }
}
