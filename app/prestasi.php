<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $fillable = array('nama','keterangan','id_eskul');
    public $timestamps = true;

    public function eskul()
    {
    	return $this->belongsTo('App\eskul','id_eskul');
    }
}
