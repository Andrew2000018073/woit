<?php

namespace App\Models;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class userwo extends Model
{
    use HasFactory;

    protected $table = 'userwos';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'username',
        'password',
    ];
    public function workorder():HasMany
    {
        return $this->hasMany(workorder::class);
    }
}
