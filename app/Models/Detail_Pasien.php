<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pasien extends Model
{
    use HasFactory;
    protected $fillable = ["ID_Detail_Pasien","ID_Doktor","ID_Pasien", "Tekanan_Darah", "Detak_Jantung", "Gula_Darah", "ID_Penyakit"];
    protected $table = 'detail__pasiens';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
