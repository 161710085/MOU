<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
    protected $table='hasils';
    protected $fillable=['keterangan'];
    public $timestamps=true;
}
