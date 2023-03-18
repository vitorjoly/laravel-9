<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proposta extends Model
{
    protected $fillable = [
        'id',
        'numero_proposta',
        'valor_proposta',
        ''
    ]
}
