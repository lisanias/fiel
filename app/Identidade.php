<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identidade extends Model
{
    protected $dates = ['created_at', 'updated_at', 'validade', 'data_ordenacao', 'data_impressao'];

    protected $fillable = [
        'member_id', 'nome', 'validade', 'arquivo', 'cargo', 'rg', 'igreja_nome', 'data_ordenacao', 'obs',
    ];
    
    public function member()
    {
        return $this->belongsTo('App\Member');
    }

}

    /**
     * ALTERAÇÕES EM IdentidadesTableSeeder.php
     * 
     * para tirar a linha "arquivo" que não vai ser usada na base de dados atual
     * procurar:
     * ,\n\s*'arquivo'=>'[\d]{4,}[-][\d]{1,}[-][\d]{1,}\w*',
     * substituir: 
     * ,
     *
     * mudar a data de validade para yyyy-mm-dd
     * procurar: 
     * 'validade'=....>'(\d{1,2}\/\d{4})'
     * substituir
     * 'validade'=>DateTime::createFromFormat("d/m/Y", '01/$1')->format('Y-m-d')
     */