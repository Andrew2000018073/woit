<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriwo extends Model
{
    use HasFactory;

    public function workorder()
    {
        return $this->hasMany(workorder::class);
    }
}