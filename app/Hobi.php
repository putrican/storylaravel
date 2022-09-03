<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $guarded = [];

    public function mahasiswa(){
        return $this->belongsToMany(Mahasiswa::class, 'hobi_mahasiswas', 'hobi_id', 'mahasiswa_id');
    }
}
