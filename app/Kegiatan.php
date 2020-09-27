<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    //
    public $table = "kegiatan";
    protected $fillable = ['title', 'deskripsi', 'image'];
}
