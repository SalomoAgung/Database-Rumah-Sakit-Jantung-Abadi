<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_Pasien;
use App\Models\Dokter;
use App\Models\Pegawai;
use App\Models\Obat;
use App\Models\Penyakit;
use App\Models\Pasien;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;

class PatientController extends Controller
{
    public function showForm()
    {
        return view('patient.form');
    }

    public function showDetails(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'telp' => 'required|string',
            'id' => 'required|string',
        ]);

        $patientDetails = Detail_Pasien::where('ID_Pasien', $request->id)
            ->with(['dokter', 'pegawai', 'obat', 'penyakit', 'pasien', 'transactionDetails.transactionHeader'])
            ->get();

        return view('patient.details', compact('patientDetails'));
    }
}




