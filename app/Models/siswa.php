<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable =
    [
        'id','nisn','nama_lengkap','nama_kelas','sakit','tanggal','nama_obat','alamat','status'
    ];
}
