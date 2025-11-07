<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama',
        'nis',
        'nisn',
        'jenis_kelamin', 
        'kelas',
        'tanggal_lahir',
        'jurusan',
        'foto',
        'alamat'
    ];

    protected $table = 'siswas';

    // Optional: Cast tanggal_lahir ke format date
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}