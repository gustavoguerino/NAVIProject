<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'addresses';
    protected $fillable = ['cep', 'street', 'number','neighborhood','city','uf','user_id'];
}
