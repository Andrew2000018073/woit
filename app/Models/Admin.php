<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Contracts\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use  HasFactory, Notifiable;
    protected $table = 'admin';
    protected $guarded = ['id'];
    // protected $primaryKey = 'admin_id';

   protected $fillable = [
       'name',
       'unit',
       'username',
       'password',
   ];

   public function workorder()
   {
       return $this->hasMany(workorder::class);
   }

}
