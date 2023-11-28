<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class workorder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'workorders';
    protected $fillable = ['kategoriwo_id','userwo_id','nama_pic','slug','nomor_komplain','prioritas','jenis_servis','waktu_pengajuan', 'waktu_ambil', 'waktu_selesai', 'keluhan','solusi', 'status'];
    public function userwo():BelongsTo
    {
        return $this->belongsTo(userwo::class);
    }
    public function kategoriwo():BelongsTo
    {
        return $this->belongsTo(kategoriwo::class);
    }
}
