<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPost extends Model
{
    protected $table='post';
    protected $fillable=['postagens','id_user','tipo','image','comentarios'];
    public function relUser()
    {
    return $this->hasOne('app\Models\User','id','id_user');
    }
}