<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    protected $dates = ['created_at', 'updated_at', 'membro_desde'];

    public function getNomeCidadeAttribute()	 	 
		{	 	 
		    return mb_strtoupper($this->nome . ' - ' . $this->cidade);
		}

	public function member()
	{
		return $this->hasMany('App\Member');
	}

	public function addresses()
    {
    	return $this->morphMany('App\Address', 'addressable');
    }
}
