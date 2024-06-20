<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ID_Pegawai',
        'Nama_Pegawai',
        'TTL_Pegawai',
        'Alamat_Pegawai',
        'Gender',
        'Telp_Pegawai',
        'Role_Pegawai'
    ];

    protected $table = 'pegawais';
    public $incrementing = false;
    protected $primaryKey = 'ID_Pegawai';
    protected $keyType = 'string';
    public $timestamps = false;
}
