<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = ["id_dokter", "nama", "ttl_dokter", "alamat", "gender", "telp_dokter"];

    protected $table = 'dokters';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
