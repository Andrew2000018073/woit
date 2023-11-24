<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriwo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function workorder()
    {
        return $this->hasMany(workorder::class);
    }
}
