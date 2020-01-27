<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgrejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igrejas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->string('nome_abreviado', 191);
            $table->string('endereco', 191);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('estado', 2);
            $table->string('pais', 50);
            $table->string('telefone', 20);
            $table->string('pastor_id', 50);
            $table->date('membro_desde', 50);
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
        Schema::dropIfExists('igrejas');
    }
}
