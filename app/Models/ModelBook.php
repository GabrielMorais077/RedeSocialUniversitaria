<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';
    protected $fillable=['evento','title','pages','price','id_user',"link","texto"];
    
    public function relUser()
    {
    return $this->hasOne('app\Models\User','id','id_user');
    }


}