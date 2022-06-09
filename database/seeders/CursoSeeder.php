<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_curso')->insert([
            [
                'titulo' => 'Engenharia de Software',
                'descricao' => 'A Engenharia de Software capacita as pessoas com a utilização de teorias, técnicas e ferramentas da Ciência da Computação para
                produção e desenvolvimento de sistemas.',
                'created_at' => Carbon::now()
            ],
            [
                'titulo' => 'Lógica de programação',
                'descricao' => 'Lógica de programação é a organização coesa de uma sequência de instruções voltadas à resolução de um problema, ou à criação de um
                software ou aplicação.',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
