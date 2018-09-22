<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table ='instansis';
    protected $fillable = ['instansi','kerjasama','mulai','berakhir','manfaat'];
    public $timestamps=true;
}
