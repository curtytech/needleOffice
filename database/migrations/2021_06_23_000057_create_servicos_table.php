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
            $table->json('servico')->nullable();
            $table->json('qtdServico')->nullable();
            $table->json('descServico')->nullable();
            $table->json('valServico')->nullable();
            $table->decimal('valTotalServico')->nullable();
            $table->json('material')->nullable();
            $table->json('qtdMaterial')->nullable();
            $table->json('valUnitarioMaterial')->nullable();
            $table->json('valTotalMaterial')->nullable();
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
