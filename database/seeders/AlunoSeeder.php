<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_aluno')->insert([
            [
                'nome' => 'Paulo Andrade',
                'email' => 'pauloandrade@gmail.com',
                'data_nascimento' => '2022-06-09',
                'created_at' => Carbon::now()
            ],
            [
                'nome' => 'Maria Fernadez',
                'email' => 'mariafernandes@gmail.com',
                'data_nascimento' => '2021-06-18',
                'created_at' => Carbon::now()
            ]
        ]);

    }
}
