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
            $table->unsignedBigInteger('regional_id')->nullable()->default(NULL);
            $table->string('titulo', 20)->nullable();
            $table->string('nome', 100);
            $table->string('nome_abreviado', 25)->nullable();
            $table->string('email', 191)->nullable();
            $table->date('dnas')->nullable();
            $table->string('naturalde', 100)->nullable();
            $table->string('rg', 30)->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('igreja_nome', 191)->nullable();
            $table->unsignedBigInteger('igreja_id')->nullable()->default(NULL);
            $table->date('data_filiacao')->nullable();
            $table->date('data_ordenacao')->nullable();
            $table->text('obs')->nullable();
            $table->timestamps();
            $table->softDeletes();

            /*$table->foreign('regional_id')
                ->references('id')->on('regionais');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
        Schema::dropIfExists('members');
    }
}
