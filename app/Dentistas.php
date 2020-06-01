<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dentistas extends Model
{
    protected $fillable = ['denIdentificacion', 'denNombres', 'denApellidos', 'denEspecialidad', 'denTelefono', 'denCorreo'];

    public $timestamps = false;
}
