<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('product');
            $table->string('imei');
            $table->string('bulkimei')->nullable();
            $table->string('time')->nullable();
            $table->string('nota')->nullable();
            $table->string('comentario')->nullable();
            $table->string('email')->nullable();
            $table->enum('estado', ['En espera', 'Proceso', 'Éxito', 'Rechazado'])->default('En espera');
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
        Schema::dropIfExists('tasks');
    }
}
