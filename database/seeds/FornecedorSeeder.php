<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->name = 'Gustavo';
        $fornecedor->site = 'gustavo.com.br';
        $fornecedor->uf = 'GO';
        $fornecedor->email = 'gustavo@contato.com';
        $fornecedor->save();
    }
}
