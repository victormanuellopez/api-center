<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $fillable = ['citfecha', 'cithora', 'citPaciente', 'cidDentista', 'citConsultorio', 'citestado', 'citobservaciones'];

    public $timestamps = false;
}
