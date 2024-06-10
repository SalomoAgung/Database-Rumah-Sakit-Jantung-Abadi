<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ["ID_Pasien", "Nama", "TTL_Pasien", "Alamat", "Gender", "Telp_Pasien"];
    protected $table = 'pasiens';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
