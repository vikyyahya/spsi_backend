<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    //
    public $table = "struktur_organisasi";
    protected $fillable = ['nama', 'jabatan'];
}
