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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->string('descripcion')->nullable();
            $table->string('image');
            $table->tinyInteger('finalizada')->default(0);
            $table->timestamp('fecha_limite');
            $table->tinyInteger('urgencia')->comment('0: no es urgente, 1: urgencia normal, 2: es muy urgente');
            $table->softDeletes();
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
        Schema::dropIfExists('tareas');
    }
};
