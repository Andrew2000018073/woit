<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategoriwo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function workorder():HasMany
    {
        return $this->hasMany(workorder::class);
    }
}
