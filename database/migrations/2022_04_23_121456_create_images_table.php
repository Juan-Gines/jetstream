<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            //creamos la relación polimorfica 1 a 1 para que esta sea 1 a 1 debemos borrar el campo id y darle la primary key a los 2 imageable
            //en imageable_id se almacena la id del modelo que se le asigne una url de la imagenss imagen
            //en imageable_type se almacena el modelo al cual pertenece la id para asignarle al url de la imagen
            $table->string('url');

            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');

            $table->primary(['imageable_id','imageable_type']);

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
        Schema::dropIfExists('images');
    }
};
