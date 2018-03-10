<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orden extends Model
{
    //
    protected $table = 'ordens';
  	protected $fillable = ['id_usuario','id_servicio','estado'];
}
