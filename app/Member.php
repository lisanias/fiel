<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;
    
    protected $dates = ['created_at', 'updated_at', 'dnas', 'data_filiacao', 'data_ordenacao', 'deleted_at'];

    protected $fillable = [
        'titulo', 'nome', 'nome_abreviado', 'email', 'dnas', 'naturalde', 'rg', 'cpf', 'igreja', 'igreja_id', 'data_filiacao', 'data_ordenacao', 'obs',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function phones()
    {
    	return $this->hasMany('App\Phone');
    }

    public function addresses()
    {
    	return $this->morphMany(Address::class, 'addressable');
    }

    public function igreja()
    {
        return $this->belongsTo('App\Igreja');
    }

    public function regional()
    {
        return $this->belongsTo('App\Regional');
    }
    
    public function identidades()
	{
		return $this->hasMany('App\Identidade');
	}

    public function scopeMonthBirthdays($query, $mes=null)
        {
            if(!$mes || $mes < 1 || $mes > 12){
                $mes = Carbon::today()->month;
            }
            return $query
                ->whereRaw('extract(month from dnas) = ?', [$mes])
                ->orderByRaw ('extract(day from dnas)', 'asc');
            
        }

        public function scopeMonthBirthdaysName($query, $mes=null)
        {
            if(!$mes || $mes < 1 || $mes > 12){
                $mes = Carbon::today()->month;
            }
            return $query
                ->whereRaw('extract(month from dnas) = ?', [$mes])
                ->orderByRaw ('nome', 'asc');
            
        }

}
