<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMataKuliahModel extends Model
{
    use HasFactory;

    protected $table = 'data_mata_kuliah';
    protected $fillable =[
        'nama',
        'dosen',
        'hari'
    ];
}
