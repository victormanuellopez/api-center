<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    protected $fillable = ['pacIdentificacion', 'pacNombre', 'pacApellidos', 'pacFechaNacimiento', 'pacSexo'];

    public $timestamps = false;
}
