<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $fillable = ["ID_Obat", "Nama_Obat"];
    protected $table = 'obats';
    protected $primaryKey = 'ID_Obat';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function detailPasien()
    {
        return $this->hasMany(Detail_Pasien::class, 'ID_Obat', 'ID_Obat');
    }
}
