<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp',
        'kelas_id',
        'featured_image',
    ];

    public function kelas(){
        return $this->belongsTo(KelasModel::class, 'kelas_id', 'id');
    }

    public function mahasiswa_matakuliah(){
        return $this->hasMany(MahasiswaMatakuliahModel::class, 'mahasiswa_id', 'id');
    }
}
