<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table ='instansis';
    protected $fillable = ['namainstansi','alamat','kota','provinsi','kodepos','namapemimpin','jabatan','nope','email','web','fake','jenisinstansi_id'];
    public $timestamps=true;
    public function instansi()
    {
        return $this->belongsTo('App\instansi','instansi_id');
    }
    
}
