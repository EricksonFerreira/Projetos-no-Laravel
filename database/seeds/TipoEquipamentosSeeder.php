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
        'nome' => 'microfone'
        ]);      
         DB::table('tipo_equipamento')->insert([
        'nome' => 'projetor'
        ]);      
         DB::table('tipo_equipamento')->insert([
        'nome' => 'caixa de som'
        ]);
    }
}
