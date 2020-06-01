<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultorios extends Model
{
    protected $fillable = ['conNombre'];

    public $timestamps = false;
}
