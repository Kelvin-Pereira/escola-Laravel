<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->string('telefone',16);
            $table->string('email',50);
            $table->string('cep')->nullable();
            $table->string('logradoro',100)->nullable();
            $table->string('complemento',100)->nullable();
            $table->string('bairro',100)->nullable();
            $table->char('uf',2)->nullable();
            $table->string('municipio')->nullable();
            $table->date('data_nascimento');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
