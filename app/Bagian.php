<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    protected $guarded = [];

    public function Mahasiswa(){
        return $this->hasMany(Mahasiswa::class, 'bagian_id', 'id');
    }
    
}
