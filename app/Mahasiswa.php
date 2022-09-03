<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $guarded = [];

    public function telepon(){
        return $this->hasOne(Telepon::class, 'mahasiswa_id', 'id');
    }

    public function bagian(){
        return $this->belongsTo(Bagian::class, 'bagian_id', 'id');
    }

    public function hobi(){
        return $this->belongsToMany(Hobi::class, 'hobi_mahasiswas', 'mahasiswa_id', 'hobi_id');
    }
}
