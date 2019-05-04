<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Equipamento;

class Tipo_Equipamento extends Model
{
  
  protected $table = "tipo_equipamento";

	protected $primaryKey = 'id';
	
	protected $fillable = ['name','id_equipamento'];

	public $timestamps = false;

	public function tipo_equipamento(){
    return $this->belongsTo(Equipamento::class);
 	} 
}
