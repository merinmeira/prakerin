<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Kategori extends Model
{
    protected $fillable = [
        'judul', 'slug', 'foto', 'konten', 'id_user', 'id_kategori'
    ];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }

    public function user()
    {
        return  $this->belongsTo('App\User', 'id_user');
    }

    public function tag()
    {
        return  $this->belongsToMany('App\Tag', 'artikel_tag', 'id_anrtikel', 'id_tag');
    }
}
