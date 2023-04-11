<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeluargaModel extends Model
{
    use HasFactory;

    protected $table = 'data_keluarga';
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'agama',
        'pekerjaan',
        'status'
    ];
}
