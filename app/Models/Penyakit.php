<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $fillable = ["ID_Penyakit", "Nama_Penyakit", "Jumlah_Pasien"];
    protected $table = 'penyakits';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
