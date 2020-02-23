<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 20)->nullable();
            $table->string('nome', 100);
            $table->string('nome_abreviado', 25)->nullable();
            $table->string('email', 191)->nullable();
            $table->date('dnas')->nullable();
            $table->string('naturalde', 100)->nullable();
            $table->string('rg', 30)->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('igreja', 191)->nullable();
            $table->integer('igreja_id')->nullable();
            $table->date('data_filiacao')->nullable();
            $table->date('data_ordenacao')->nullable();
            $table->text('obs')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
