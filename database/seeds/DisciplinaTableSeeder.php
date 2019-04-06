<?php

use Illuminate\Database\Seeder;
use App\Disciplina;

class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disciplina::create([
            'nome' => "rede",'curso_id'=>1
        ]);
    }
}
