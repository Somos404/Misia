<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->integer('status');
            $table->string('name');
            $table->string('descripcion');
            
            $table->string('color1');
            $table->string('color2');
            $table->string('color3');
            $table->string('color4');
            $table->string('color5');
            $table->string('color6');
            $table->string('color7');
            $table->string('color8');
            $table->string('color9');
            $table->string('color10');
            $table->string('color11');
            $table->string('color12');
            $table->integer('cont_bust');
            $table->integer('cont_cint');
            $table->integer('cont_cadera');
            $table->integer('estatura_total');
            $table->integer('lar_cint');
            $table->integer('larg_mang');
            $table->integer('cont_bra');
            $table->integer('larg_taj');

            $table->integer('tip_bret');//

            $table->string('image_destacada');
            $table->string('image_espalda');
            $table->string('image_lateral');
            $table->decimal('price', 11,2);
            $table->string('slug');
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
        Schema::dropIfExists('products');
    }
}
