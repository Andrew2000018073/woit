<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategori_wo extends Model
{
    use HasFactory;

    public function kategori_wo(): HasMany
    {
        return $this->hasMany(work_order::class);
    }
}
