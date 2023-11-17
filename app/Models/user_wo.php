<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class user_wo extends Model
{
    use HasFactory;
    public function kategori_wo(): HasMany
    {
        return $this->hasMany(work_order::class);
    }
}
