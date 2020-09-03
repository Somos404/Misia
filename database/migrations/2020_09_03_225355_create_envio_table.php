<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio', function (Blueprint $table) {
            $table->id();
            
            $table->float('coste_envio');
            $table->string('empresa');
            $table->string('codigo_rastreo');
            $table->boolean('entregado')->default(false);

            $table->bigInteger('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade')->onUpdate('cascade');

            $table->bigInteger('user_order_id')->unsigned();
            $table->foreign('user_order_id')->references('id')->on('user_order')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('envio');
    }
}
