<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    protected $table = 'sekolah';
    protected $fillable = [
        'nama_sekolah', 'akreditasi'
    ];
    public $timestamps = false;
}
