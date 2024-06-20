<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pasien extends Model
{
    use HasFactory;
    protected $fillable = ["ID_Detail_Pasien","ID_Dokter","ID_Pasien", "Tekanan_Darah", "Detak_Jantung", "Gula_Darah", "ID_Penyakit"];
    protected $table = 'detail__pasiens';
    protected $primaryKey = 'ID_Detail_Pasien';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'ID_Dokter', 'ID_Dokter');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'ID_Pegawai', 'ID_Pegawai');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'ID_Obat', 'ID_Obat');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'ID_Penyakit', 'ID_Penyakit');
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'ID_Pasien', 'ID_Pasien');
    }

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, 'ID_Detail_Pasien', 'ID_Detail_Pasien');
    }
}
