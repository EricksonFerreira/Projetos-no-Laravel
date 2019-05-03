<?php

use Illuminate\Database\Seeder;

class TipoEquipamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_equipamentos')->insert([
        'nome' => 'microfone',
        ]);      
         DB::table('tipo_equipamentos')->insert([
        'nome' => 'projetor',
        ]);      
         DB::table('tipo_equipamentos')->insert([
        'nome' => 'caixa de som',
        ]);
    }
}
