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
        'id','nisn','nama_lengkap','kelas_id','sakit','tanggal','obat_id','alamat','status'
    ];

    public function class()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function class2()
    {
        return $this->belongsTo(Obat::class, 'obat_id');
    }
}
