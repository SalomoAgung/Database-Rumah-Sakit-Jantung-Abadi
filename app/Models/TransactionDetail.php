<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_Transaction',
        'ID_Detail_Pasien',
        'ID_Obat',
        'Harga'
    ];

    protected $table = 'transaction_details';
    public $incrementing = false;
    protected $primaryKey = 'ID_Transaction';
    protected $keyType = 'string';
    public $timestamps = false;

    public function detailPasien()
    {
        return $this->belongsTo(Detail_Pasien::class, 'ID_Detail_Pasien', 'ID_Detail_Pasien');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'ID_Obat', 'ID_Obat');
    }

    public function transactionHeader()
    {
        return $this->belongsTo(TransactionHeader::class, 'ID_Transaction', 'ID_Transaction');
    }
}
