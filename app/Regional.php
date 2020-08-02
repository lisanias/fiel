<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
    'nome', 'cidade', 'uf', 'descricao'
    ];
    /**
     * Nome da tabela associada.
     *
     * @var string
     */
    public $table = 'regionais';
    
    public function getNomeCidadeAttribute()	 	 
    {			
        $nome = $this->nome;
        $cidade = $this->cidade ? $this->cidade : '_____';
        $separador = $this->cidade & $this->uf ? " - ": "";
        $uf = $this->uf ? $this->uf : '';

        return($nome.' (' . $cidade . $separador . $uf . ")");
    }

    public function membros()
	{
		return $this->hasMany('App\Member');
	}
}
