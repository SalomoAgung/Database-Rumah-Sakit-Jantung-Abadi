<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ["ID_Pasien", "Nama_Pasien", "TTL_Pasien", "Alamat_Pasien", "Gender", "Telp_Pasien"];
    protected $table = 'pasiens';
    protected $primaryKey = 'ID_Pasien';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
