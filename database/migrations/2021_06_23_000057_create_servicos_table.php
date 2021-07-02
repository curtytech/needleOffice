<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCliente');
            $table->string('telefoneCliente');
            $table->dateTime('dataPedido');
            $table->dateTime('dataEntrega');
            $table->string('servico');
            $table->integer('qtdServico');
            $table->string('descServico');
            $table->decimal('valServico');
            $table->decimal('valTotalServico');
            $table->string('material');
            $table->integer('qtdMaterial');
            $table->decimal('valUnitarioMaterial');
            $table->decimal('valTotalMaterial');
            $table->decimal('valTotalTodosMateriais');
            $table->decimal('sinal');
            $table->decimal('restante');
            $table->decimal('frete');
            $table->decimal('valTotalServicoEMaterial');
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
        Schema::dropIfExists('servicos');
    }
}
