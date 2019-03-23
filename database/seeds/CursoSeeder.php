<?php

use Illuminate\Database\Seeder;
use App\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'nome' => "ADS",'duracao'=>2
        ]);
        // BD::table('cursos')->insert([
        //     ['nome' => "ADS",'duracao'=>2],
        //     ['nome' => "Direito",'duracao'=>10],
        //     ['nome' => "Redes",'duracao'=>4],
        //     ['nome' => "ADM",'duracao'=>5],
        // ]);
    }
}
