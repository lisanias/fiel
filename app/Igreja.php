<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
	protected $dates = ['created_at', 'updated_at', 'membro_desde'];
	
    protected $fillable = [
        'nome', 'nome_abreviado', 'email', 'membro_desde', 'telefone', 'pastor_id'
    ];

    public function getNomeCidadeAttribute()	 	 
    {			
        $nome = $this->nome;
        if (!$this->addresses->isEmpty()) {
                $cidade = $this->addresses()->get()->first()->cidade;
                $uf = $this->addresses()->get()->first()->uf;
        } else {
                $cidade = '________';
                $uf = '___';
        }

        return($nome.' — '.$cidade.'-'.$uf);
    }

    public function member()
    {
        return $this->hasMany('App\Member');
    }

	public function addresses()
    {
    	return $this->morphMany(Address::class, 'addressable');
    }
}
