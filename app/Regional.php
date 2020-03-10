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
    protected $table = 'regionais';

    public function membros()
	{
		return $this->hasMany('App\Member');
	}
}
