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
        Schema::create('transacoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_remetente', 200);
            $table->string('num_conta_rem', 200);
            $table->string('valor_transferencia', 200);
            $table->unsignedBigInteger('id_correntista');
            $table->foreign('id_correntista')->references('id')->on('users');
            $table->string('nome_destinatario', 200);
            $table->string('num_conta_dest', 200);
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
        Schema::dropIfExists('transacoes');
    }
};
