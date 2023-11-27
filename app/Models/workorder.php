<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class workorder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function userwo():BelongsTo
    {
        return $this->belongsTo(userwo::class);
    }
    public function kategoriwo():BelongsTo
    {
        return $this->belongsTo(kategoriwo::class);
    }
}
