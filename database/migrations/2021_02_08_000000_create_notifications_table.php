<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('From_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('To_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('subject');
            $table->text('body');
            $table->set('type_notification',['normal','incidencia'])->default('normal');
            $table->set('estado',['no_leido','leido','finalizado'])->default('no_leido');
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
        Schema::dropIfExists('notifications');
    }
}
