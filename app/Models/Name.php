<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    // aggiungo la proprietà fillable per dire quali campi che posso accetare nella create
    protected $fillable = [
        'nome', 'cognome'
    ];
}
