<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable('false')->unique('true');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')
                ->references('id')->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');  // FK Categorias de Servicios


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
        Schema::dropIfExists('caracteristicas');
    }
}
