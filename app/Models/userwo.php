<?php

namespace App\Models;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class userwo extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'admin_id';

   protected $fillable = [
       'name',
       'unit',
       'username',
       'password',
   ];
    public function workorder():HasMany
    {
        return $this->hasMany(workorder::class);
    }
}
