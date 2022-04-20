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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('title',45);
            $table->text('biografia');
            $table->string('website',100)->nullable();

            /* Modo de relacionar la tabla 1:1 en laravel antiguo

            $table->unsignedBigInteger('user_id') // creando el campo relacion 1:1 users->profiles
                    ->unique(); //le decimos que el campo va a ser único por que la relación es 1:1 y limitamos a 1 profile por cada user

            $table->foreign('user_id') //creamos la clave foranea foreign key para crear la relación entre tablas y imposibilitar que se cree un profile con un user_id inexistente
                    ->references('id') //la relación sera con el campo id
                    ->on('users') //de la tabla users
                    ->onDelete('cascade') //tiene 2 opciones 'cascade' y 'set null' cascade borra el registro de profile si se borra el user, en cambio set null deja el campo en null
                                          // si decides set null debes poner $table->unsignedBigInteger('user_id')->nullable para que el campo pueda ser null
                    //->onUpdate('cascade') // si permitimos que el user cambie el id se cambiará automáticamente en la tabla profiles
                    ;
            ----------------------------------*/

            // Modo de relacionar la tabla 1:1 en laravel 8+ (siempre que se sigan las convenciones de laravel en los nombres de tabla) Muy resumido

            $table->foreignId('user_id') //creamos el campo
                    ->unique() //campo único para que sea 1:1 y no 1:n. Importante se debe poner los modificadores de columna antes que el constrained(unique(),nullable())
                    ->constrained() //crea la clave foranea si no le pasamos nada busca las convenciones de laravel, si no la usamos le tenemos k pasar 'tabla','columna'
                    ->cascadeOnDelete(); //opción en cascada al borrar el user.

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
        Schema::dropIfExists('profiles');
    }
};
