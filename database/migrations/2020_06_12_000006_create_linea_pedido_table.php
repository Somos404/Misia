<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_pedido', function (Blueprint $table) {
            $table->id();
            $table->integer('pedido_id');
            $table->foreign('pedido_id')->references('id')->on('pedido')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('producto_id');
            $table->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('linea_pedido');
    }
}
