<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    public function agents(){
    	return @$this->belongsTo('App\Models\Agents','agents_id');
    }
    public function paketfoto(){
    	return @$this->hasMany('App\Models\PaketFoto','id','paket_foto_id');
    }

    protected $table = 'paket';
}
