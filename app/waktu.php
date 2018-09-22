<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class waktu extends Model
{
    protected $table='waktus';
    protected $fillable=['mulai','berakhir'];
    public $timestamps=true;
}

