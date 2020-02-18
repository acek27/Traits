<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    protected $table = 'biodata';
    protected $with = ['sekolah'];
    protected $fillable = [
        'nama', 'alamat', 'hobi', 'cita'
    ];
    public $timestamps = false;

    public function sekolah()
    {
        return $this->belongsTo(sekolah::class, 'id_sekolah', 'id');
    }
}
