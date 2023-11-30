<?php

namespace App\Models;

use App\Models\workorder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
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
