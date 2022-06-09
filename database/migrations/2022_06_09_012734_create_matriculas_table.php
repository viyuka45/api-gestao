<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_matricula', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_aluno')
                ->constrained('tb_aluno')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('id_curso')
                ->constrained('tb_curso')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_matricula');
    }
}
