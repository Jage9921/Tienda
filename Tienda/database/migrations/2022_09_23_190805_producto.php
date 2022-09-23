<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('producto', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->string('sku_producto');
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->decimal('valor_producto');
            $table->integer('fk_tienda')->unsigned();
            $table->string('imagen_producto');

            $table->primary('sku_producto');
            $table->foreign('fk_tienda')->references('id_tienda')->on('tienda')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
