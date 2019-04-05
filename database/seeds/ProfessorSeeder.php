<?php

use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert([
            'nome'             => 'Orion',
            'matricula'        => '5648',
            'cpf'              => '987.654.123-89',
            'telefone'         => '9878-8954',
            'email'            => 'Kelvin@gmail.com',
            'cep'              =>  98798,
            'logradoro'        => 'Mercado Tatico',
            'complemento'      => 'Quadra C',
            'bairro'           => 'Arniqueira',
            'uf'               => 'DF',
            'municipio'        => 'SHSN',
        ]);
    }
}
