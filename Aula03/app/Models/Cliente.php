<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // use HasFactory;

    protected $table = 'cliente'; //nome da tabela

    public $fillable = ['id','primeiroNome','sobrenome'];

    public $timestamps = false;
}
