<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = ['nama', 'kelas', 'pelatih', 'ekskul', 'kejuruan'];
    public $timestamp = true;
}
