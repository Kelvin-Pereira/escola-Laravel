<?php

use Illuminate\Database\Seeder;

class TurmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turmas')->insert([
            'disciplina_id'    => 1,
            'profesore_id'     => 1,
        ]);
    }
}
