<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['name', 'site', 'uf', 'email'];

    public function produtos(){
        return $this->hasMany('App\Produto', 'fornecedor_id', 'id');
    }
}
