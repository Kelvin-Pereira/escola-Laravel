<?php

use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            'nome'             => 'Kelvin',
            'telefone'         => '99999-9999',
            'email'            => 'Kelvin@gmail.com',
            'cep'              =>  '987',
            'logradoro'        => 'Mercado Ideal',
            'complemento'      => 'Quadra G',
            'bairro'           => 'Buritis',
            'uf'               => 'DF',
            'municipio'        => 'SHSN',
            'data_nascimento'  => '2019-01-26',
        ]);
    }
}
