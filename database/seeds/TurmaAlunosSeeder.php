<?php

use Illuminate\Database\Seeder;

class TurmaAlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turma_alunos')->insert([
            'semestre'     => 6,
            'turma_id'     => 1,
            'aluno_id'     => 1,
        ]);
    }
}
