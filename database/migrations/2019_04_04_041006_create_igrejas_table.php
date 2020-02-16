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
            $table->string('nome', 191);
            $table->string('nome_abreviado', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('pastor_id', 50)->nullable();
            $table->date('membro_desde', 50)->nullable();
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
