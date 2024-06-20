<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Pasien</h2>
        @if($patientDetails->isEmpty())
            <p>Data tidak ditemukan.</p>
        @else
            <p>Nama Pasien: {{ $patientDetails->first()->pasien->Nama_Pasien ?? 'Tidak Diketahui' }}</p>
            <p>ID Pasien: {{ $patientDetails->first()->ID_Pasien }}</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Dokter</th>
                        <th>Nama Pegawai</th>
                        <th>Nama Obat</th>
                        <th>Harga</th>
                        <th>Nama Penyakit</th>
                        <th>Tekanan Darah</th>
                        <th>Detak Jantung</th>
                        <th>Gula Darah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patientDetails as $detail)
                        @foreach($detail->transactionDetails as $transactionDetail)
                            <tr>
                                <td>{{ $transactionDetail->transactionHeader->Transaction_Date ?? 'Tidak Diketahui' }}</td>
                                <td>{{ $detail->dokter->Nama_Dokter ?? 'Tidak Diketahui' }}</td>
                                <td>{{ $transactionDetail->transactionHeader->pegawai->Nama_Pegawai ?? 'Tidak Diketahui' }}</td>
                                <td>{{ $transactionDetail->obat->Nama_Obat ?? 'Tidak Diketahui' }}</td>
                                <td>{{ $transactionDetail->Harga ?? 'Tidak Diketahui' }}</td>
                                <td>{{ $detail->penyakit->Nama_Penyakit ?? 'Tidak Diketahui' }}</td>
                                <td>{{ $detail->Tekanan_Darah }}</td>
                                <td>{{ $detail->Detak_Jantung }}</td>
                                <td>{{ $detail->Gula_Darah }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>            
            <a href="{{ route('patient.form') }}" class="btn btn-primary mb-3">Back</a>
        @endif
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

