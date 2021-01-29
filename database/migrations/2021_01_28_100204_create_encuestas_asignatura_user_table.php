<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasAsignaturaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('encuestas_asignatura_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('estudiante_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');
            $table->set('pregunta_1',['0','1','2','3','4','5'])->default(0);
            $table->set('pregunta_2',['0','1','2','3','4','5'])->default(0);
            $table->set('pregunta_3',['0','1','2','3','4','5'])->default(0);
            $table->set('pregunta_4',['0','1','2','3','4','5'])->default(0);
            $table->set('pregunta_5',['0','1','2','3','4','5'])->default(0);
            $table->set('estado',['No_Iniciada','Iniciada','Finalizada_Con_Incidencias','Finalizada_Sin_Incidencias'])->default('No_Iniciada');
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
        Schema::dropIfExists('encuestas_asignatura_user');
    }
}
