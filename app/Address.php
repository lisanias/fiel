<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $dates = ['created_at', 'updated_at', 'desativado'];
}
