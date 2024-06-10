<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = ["ID_Pegawai", "Nama", "TTL_Pegawai", "Alamat", "Gender", "Telp_Pegawai", "Role_Pegawai"];
    protected $table = 'pegawais';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
