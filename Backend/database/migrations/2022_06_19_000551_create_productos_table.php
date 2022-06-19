<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('foto');
        });

        DB::table("productos")
        ->insert([
            "nombre" => "Huawei Mate 8",
            "descripcion" => "Tecnología de punta",
            "precio" => "299",
            "foto" => "/huawei",
        ]);
        DB::table("productos")
        ->insert([
            "nombre" => "HP Pro Book",
            "descripcion" => "Tecnología de punta",
            "precio" => "560",
            "foto" => "/hp",
        ]);
        DB::table("productos")
        ->insert([
            "nombre" => "Xiaomi Redmi 7",
            "descripcion" => "Tecnología de punta",
            "precio" => "110",
            "foto" => "/xiaomi",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
