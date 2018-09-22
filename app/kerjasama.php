<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kerjasama extends Model
{
    protected $table='kerjasamas';
    protected $fillable=['keterangan'];
    public $timestamps=true;
}
