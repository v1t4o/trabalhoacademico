<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->string('outro_recomendado_')->nullable();
            $table->string('divulgar_e_mail_');
            $table->string('titulo');
            $table->text('resumo');
            $table->string('palavras_chave');
            $table->text('abstract')->nullable();
            $table->dateTime('data_da_defesa');
            $table->text('sala');
            $table->date('data_enviado_avaliacao')->nullable();
            $table->date('data_liberacao')->nullable();
            $table->text('comentario')->nullable();
            $table->date('data_devolucao')->nullable();
            $table->date('data_resultado')->nullable();
            $table->text('parecer')->nullable();
            $table->string('nome_do_orientador');
            $table->string('numero_usp_do_orientador');
            $table->string('status');
            $table->string('curso')->nullable();
            $table->string('url_biblioteca')->nullable();
            $table->string('publicado')->nullable();
            $table->date('data_publicacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
