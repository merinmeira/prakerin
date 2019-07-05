<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contoh1 extends Model
{
    protected $fillable = ['nama', 'umur', 'hobi', 'alamat', 'cita'];
    public $timestamp = true;
}
