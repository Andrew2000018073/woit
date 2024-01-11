<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Model
{
    use  HasFactory, Notifiable;
    protected $table = 'admin';
    protected $guarded = ['id'];
    // protected $primaryKey = 'admin_id';

   protected $fillable = [
       'name',
   ];

   public function workorder()
   {
       return $this->hasMany(workorder::class);
   }

}
