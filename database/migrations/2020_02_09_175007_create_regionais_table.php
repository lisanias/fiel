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
            $table->unsignedBigInteger('lider_id');
            $table->integer('regionsable_id');
            $table->string('regionsable_type', 50);
            $table->timestamps();
            
            $table->foreign('lider_id')->references('id')->on('members');
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
