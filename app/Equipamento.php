<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tipo_equipamento;

class Equipamento extends Model
{

	protected $table = "equipamentos";
  
	protected $primaryKey = 'id';
	
	protected $fillable = ['nome','tipo'];

	public $timestamps = true;

	public function tipo_equipamento(){

    return $this->hasMany(Tipo_equipamento::class);

 	} 
}
