<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $fillable = ["ID_Penyakit", "Nama_Penyakit", "Jumlah_Pasien"];
    protected $table = 'penyakits';
    protected $primaryKey = 'ID_Penyakit';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function detailPasien()
    {
        return $this->hasMany(Detail_Pasien::class, 'ID_Penyakit', 'ID_Penyakit');
    }
}
