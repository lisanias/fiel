<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
	protected $dates = ['created_at', 'updated_at', 'membro_desde'];
	
    protected $fillable = [
        'nome', 'nome_abreviado', 'cnpj','email', 'membro_desde', 'telefone', 'pastor_id'
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

    public function Adr($data) 
    {			
        if (!$this->addresses->isEmpty()) {
                $result = $this->addresses()->get()->first()->$data;
        } else {
                $result = NULL;
        }

        return($result);
    }

    public function getCidadeAttribute(){
        $result = $this->Adr('cidade');
        return($result);
    }

    public function getBairroAttribute()	 	 
    {			
        $result = $this->Adr('bairro');
        return($result);
    }

    public function getUfAttribute()	 	 
    {			
        $result = $this->Adr('uf');
        return($result);
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
