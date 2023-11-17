<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class work_order extends Model
{
    use HasFactory;
    public function KategoriWo(): BelongsTo
    {
        return $this->belongsTo(kategori_wo::class);
    }
    public function user_wo(): BelongsTo
    {
        return $this->belongsTo(user_wo::class);
    }
}
