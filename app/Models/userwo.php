<?php

namespace App\Models;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userwo extends Model
{
    use HasFactory;

    protected $table = 'userwos';
    protected $primaryKey = 'test';
    protected $fillable = [
        'name',
        'username',
        'password',
    ];
    // public function workorder()
    // {
    //     return $this->hasMany(workorder::class);
    // }
}
