<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    protected $dates = ['created_at', 'updated_at', 'membro_desde'];

    public function getNameCidadeAttribute()	 	 
		{	 	 
		    return mb_strtoupper($this->name . ' - ' . $this->cidade);
		}

	public function member()
	{
		return $this->hasMany('App\Member');
	}
}
