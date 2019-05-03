<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
  
  protected $table = "reserva";

	protected $primaryKey = 'id';
	
	protected $fillable = ['id_usuario','id_equipamento'];

	public $timestamps = true;
	
}
