<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChaveEstrangeiraUsuariosPermissoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios_permissoes', function(Blueprint $table){
            $table->foreign('permissoes_id')->references('id')->on('permissoes');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios_permissoes', function(Blueprint $table){
            $table->dropForeign(['permissoes_id']);
            $table->dropForeign(['usuarios_id']);
        });
    }
}
