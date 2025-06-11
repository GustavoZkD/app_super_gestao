<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProdutosRelacionamentoFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando coluna em produtos que vai receber a fk (fornecedor_id) de fornecedores
        Schema::table('produtos', function(Blueprint $table){

            //insere um registro de forncedor para estabelecer o relacionamento
            $fornecedor_id = DB::table('fornecedors')->insertGetId([
                'name' => 'Fornecedor Padrão SG',
                'site' => 'fornecedorpradrao.com.br',
                'uf' => 'GO',
                'email' => 'contato@fornecedorpradrao.com.br'
            ]);

            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function(Blueprint $table){
            $table->dropForeign('produtos_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');
        });
    }
}
