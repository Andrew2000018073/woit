<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{

    use  HasFactory, Notifiable, HasApiTokens;
    protected $table = 'users';
    protected $guarded=[
        'id'
    ];
    protected $fillable=[
        'nama',
        'username',
        'password',
    ];

    public function workorder()
    {
        return $this->hasOne(workorder::class);
    }

}
