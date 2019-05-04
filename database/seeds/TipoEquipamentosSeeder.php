<?php


use Faker\Generator as Faker;
use Faker\Provider\DateTime as DateTimeProvider;
use Illuminate\Database\Seeder;
use App\TipoEquipamento;

class TipoEquipamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_equipamento')->insert([
        'nome' => 'Microfone'
        ]);      
         DB::table('tipo_equipamento')->insert([
        'nome' => 'Projetor'
        ]);      
         DB::table('tipo_equipamento')->insert([
        'nome' => 'Caixa de som'
        ]);
         DB::table('tipo_equipamento')->insert([
        'nome' => 'Impressora'
        ]);
    }
}
