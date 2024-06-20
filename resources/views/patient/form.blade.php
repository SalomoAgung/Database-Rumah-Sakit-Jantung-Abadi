<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff; /* putih */
        }
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            width: 100%;
            max-width: 500px;
            margin-top: 20px;
            background-color: #ffffff; /* putih */
            border: 1px solid #007bff; /* biru */
        }
        .card-header {
            background-color: #007bff; /* biru */
            color: #ffffff; /* putih */
        }
        .card-body {
            background-color: #ffffff; /* putih */
        }
        .form-control {
            border: 1px solid #007bff; /* biru */
        }
        .btn-primary {
            background-color: #007bff; /* biru */
            border-color: #007bff; /* biru */
        }
        .navbar {
            margin-bottom: 20px;
            background-color: #007bff; /* biru */
        }
        .navbar-light .navbar-brand {
            color: #000000; /* hitam */
        }
        .navbar-light .navbar-brand:hover {
            color: #007bff; /* biru saat hover */
        }
        .navbar-light .navbar-nav .nav-link {
            color: #000000; /* hitam */
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #007bff; /* biru saat hover */
        }
        .navbar-light .navbar-toggler-icon {
            background-color: #ffffff; /* putih */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RS Jantung Abadi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/login">Login as admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container form-container">
        <div class="card">
            <div class="card-header">
                <h2>Form Pasien</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('patient.details') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">No. Telp:</label>
                        <input type="text" class="form-control" id="telp" name="telp" required>
                    </div>
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
