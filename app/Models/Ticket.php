<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeven', 'fecha', 'nument', 'proved', 'tipoeven', 'direccion', 'img_path'
    ];
}
