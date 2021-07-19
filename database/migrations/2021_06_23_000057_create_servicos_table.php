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
            $table->string('telefoneCliente')->nullable();
            $table->dateTime('dataPedido')->nullable();
            $table->dateTime('dataEntrega')->nullable();
            $table->string('servico');
            $table->integer('qtdServico')->nullable();
            $table->string('descServico')->nullable();
            $table->decimal('valServico')->nullable();
            $table->decimal('valTotalServico')->nullable();
            $table->string('material')->nullable();
            $table->integer('qtdMaterial')->nullable();
            $table->decimal('valUnitarioMaterial')->nullable();
            $table->decimal('valTotalMaterial')->nullable();
            $table->decimal('valTotalTodosMateriais')->nullable();
            $table->decimal('sinal')->nullable();
            $table->decimal('restante')->nullable();
            $table->decimal('frete')->nullable();
            $table->decimal('valTotalServicoEMaterial')->nullable();
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
