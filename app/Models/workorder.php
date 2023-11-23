<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workorder extends Model
{
    use HasFactory;

    public function userwo()
    {
        return $this->belongsTo(userwo::class);
    }
    public function kategoriwo()
    {
        return $this->belongsTo(kategoriwo::class);
    }
}
