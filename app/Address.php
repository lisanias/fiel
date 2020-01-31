<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $dates = ['created_at', 'updated_at', 'desativado'];

    protected $fillable = [
        'tipo', 'logradouro', 'bairro', 'cidade', 'uf', 'cep', 'confirmed',
    ];

    public function addressable()
    {
        return $this->morphTo();
    }

}
