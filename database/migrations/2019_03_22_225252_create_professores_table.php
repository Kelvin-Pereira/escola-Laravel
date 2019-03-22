<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('matricula');
            $table->string('cpf',14);
            $table->string('telefone',16);
            $table->string('email',100);
            $table->integer('cep');
            $table->string('logradoro',100);
            $table->string('complemento',100);
            $table->string('bairro',100);
            $table->char('uf',2);
            $table->string('municipio');
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
        Schema::dropIfExists('professores');
    }
}
