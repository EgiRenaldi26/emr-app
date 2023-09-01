<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'obats';
    protected $fillable = [
       'id','nama_obat','stok'
    ];

    public function siswa()
    {
        return $this->hasMany(siswa::class);
    }
}
