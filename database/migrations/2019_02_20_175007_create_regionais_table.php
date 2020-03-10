<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regionais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 191);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->string('pais', 50)->nullable()->default('Brasil');
            $table->text('descricao', 50)->nullable()->default(null);
            $table->unsignedBigInteger('lider_id')->nullable();
            $table->timestamps();
            
            /*$table->foreign('lider_id')->references('id')->on('members');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regionais');
    }
}
