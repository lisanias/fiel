<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identidades', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('member_id');
            $table->dateTime('data')->nullable()->default(null);
            $table->string('validade', 15)->nullable()->default(null);
            $table->string('cargo')->nullable()->default(null);
            $table->string('nome')->nullable()->default(null);
            $table->string('rg')->nullable()->default(null);
            $table->string('igreja')->nullable()->default(null);
            $table->dateTime('dataOrdenacao')->nullable()->default(null);
            $table->string('arquivo', 25)->nullable()->default(null);
            $table->longText('obs')->nullable()->default(null);
            
            $table->timestamps();

            $table->index(["id"], 'id');
            $table->index(["member_id"], 'member_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identidades');
    }
}
