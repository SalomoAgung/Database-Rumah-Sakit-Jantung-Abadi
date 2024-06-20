<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Transaction',
        'ID_Pegawai',
        'ID_Pasien',
        'Transaction_Date'
    ];

    protected $table = 'transaction_headers';
    public $incrementing = false;
    protected $primaryKey = 'ID_Transaction';
    protected $keyType = 'string';
    public $timestamps = false;

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'ID_Pegawai', 'ID_Pegawai');
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'ID_Pasien', 'ID_Pasien');
    }

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, 'ID_Transaction', 'ID_Transaction');
    }
}
