<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    protected $table = 'biodata';
    protected $fillable = [
        'nama', 'alamat', 'hobi', 'cita'
    ];
    public $timestamps = false;
}
