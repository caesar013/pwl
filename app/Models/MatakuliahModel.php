<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatakuliahModel extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $fillable = [
        'nama_matkul',
        'sks',
        'jam',
        'semester',
    ];

    public function mahasiswa_matakuliah(){
        return $this->hasMany(MahasiswaMatakuliahModel::class, 'matakuliah_id', 'id');
    }
}
