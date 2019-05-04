<?php

use Illuminate\Database\Seeder;

class EquipamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipamentos')->insert([
	        
	        'nome_equipamento' => 'Epson 5080',
	       	'tombamento' => '123456',
	        'tipo_equipamento_id' => 4
	    ]);      
	   
	    DB::table('equipamentos')->insert([

	        'nome_equipamento' => 'HP Deskjet',
	        'tombamento' => '654321',
	        'tipo_equipamento_id' => 4
	    ]);

	    DB::table('equipamentos')->insert([

	        'nome_equipamento' => 'Epson Projector',
	        'tombamento' => '789456',
	        'tipo_equipamento_id' => 2
        ]);
    }
}
