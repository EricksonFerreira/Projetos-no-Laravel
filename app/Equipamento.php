<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tipo_equipamento;

class Equipamento extends Model
{

	protected $table = "equipamentos";
  
	protected $primaryKey = 'id';
	
	protected $fillable = ['nome_equipamento','tombamento','tipo_equipamento_id'];

	public $timestamps = false;

	public function tipo_equipamento(){

    return $this->hasMany(Tipo_equipamento::class);

 	} 
}
