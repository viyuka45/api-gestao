<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_matricula')->insert([
            [
                'id_aluno' => 1,
                'id_curso' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id_aluno' => 1,
                'id_curso' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id_aluno' => 2,
                'id_curso' => 1,
                'created_at' => Carbon::now()
            ],
        ]);
    }

}
