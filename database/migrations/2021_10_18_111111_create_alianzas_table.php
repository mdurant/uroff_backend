<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlianzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alianzas', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')
                ->references('id')->on('pais')
                ->onDelete('cascade')
                ->onUpdate('cascade');  // FK Pais, Chile = 45 (table Pais)

            $table->string('name')->nullable('false')->unique(true); //Nombre
            $table->string('entity')->nullable('false')->unique(false); //Razon Social
            $table->string('cod_entity')->nullable('false')->unique(false);  //RUT en el caso de Chile
            $table->string('url')->nullable('true'); //Sitio web
            $table->boolean('estado')->default(0); // 0 = Activo, 1 = Inactivo
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
        Schema::dropIfExists('alianzas');
    }
}
