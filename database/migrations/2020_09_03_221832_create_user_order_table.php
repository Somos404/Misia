<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_order', function (Blueprint $table) {
            $table->id();

            $table->string('colorname');
            $table->string('color');

            $table->integer('cont_bust')->nullable();
            $table->integer('cont_cint')->nullable();
            $table->integer('cont_cadera')->nullable();
            $table->integer('estatura_total')->nullable();
            $table->integer('lar_cint')->nullable();
            $table->integer('larg_mang')->nullable();
            $table->integer('cont_bra')->nullable();
            $table->integer('larg_taj')->nullable();
            $table->string('tip_bret')->nullable();

            $table->boolean('pagado')->default(false);
            $table->boolean('en_produccion')->default(false);
            
            $table->bigInteger('price');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('user_order');
    }
}
