<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigIncrements('id_compra');
            $table->string('cantidad');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_producto');

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');

            $table->foreign('id_producto')->references('id_producto')->on('productos')->onDelete('cascade');

        });
        DB::table("compras")
        ->insert([
            "cantidad" => "2",
            "id_usuario" => "1",
            "id_producto" => "2",
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
