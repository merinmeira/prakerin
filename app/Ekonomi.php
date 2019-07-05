<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekonomi extends Model
{
    protected $fillable = ['nama', 'kelas', 'pelatih', 'ekskul', 'kejuruan', 'cita'];
    public $timestamp = true;
}
