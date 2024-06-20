<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = [
        "ID_Dokter",
        "Nama_Dokter",
        "TTL_Dokter",
        "Alamat_Dokter",
        "Gender",
        "Telp_Dokter",
    ];
    protected $table = 'dokters'; // Nama tabel di database
    protected $primaryKey = 'ID_Dokter'; // Nama primary key
    public $incrementing = false; // Jika primary key tidak auto increment
    protected $keyType = 'string'; // Tipe data primary key jika bukan integer
    public $timestamps = false;

    public function detailPasien()
    {
        return $this->hasMany(Detail_Pasien::class, 'ID_Dokter', 'ID_Dokter');
    }
}
