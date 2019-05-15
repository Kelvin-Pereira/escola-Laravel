<?php

use Illuminate\Database\Seeder;

class UfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ufs')->insert([
            'sigla'     => 'DF',
        ]);
    }
}
