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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();

            $table->string('calle',45);
            $table->integer('numero');
            $table->string('piso',10)->nullable();
            $table->string('puerta',10)->nullable();
            $table->integer('cp');
            $table->string('ciudad',45);
            $table->string('provincia',45);

            $table->foreignId('user_id')//creamos la relación 1:1
                    ->unique()
                    ->constrained()
                    ->cascadeOnDelete();

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
        Schema::dropIfExists('adresses');
    }
};
