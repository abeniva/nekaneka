<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    public function paket(){
    	return @$this->hasMany('App\Models\Paket','paket_id');
    }
}
