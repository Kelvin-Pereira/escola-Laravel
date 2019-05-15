<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this-> call([
            CursoSeeder::class,
            DisciplinaTableSeeder::class,
            ProfessorSeeder::class,
            TurmasSeeder::class,
            AlunosSeeder::class,
            TurmaAlunosSeeder::class,
            UfTableSeeder::class,
            MunicipioTableSeeder::class,
           
         ] );
    }
}
