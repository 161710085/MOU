<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenisinstansi extends Model
{
    protected $table = 'produks';
     protected $fillable = ['instansi_id'];
     public $timestamps = true;

     public function master()
     {
         return $this->hasMany('App\jenisinstansi','instansi_id');
     }
}
