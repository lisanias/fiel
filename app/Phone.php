<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'ddd', 'numero', 'telefone_tipo', 'member_id',
    ];

    public function member()
    {
        return $this->belongsTo('App\Member');
    }
}
