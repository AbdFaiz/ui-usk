<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transaksi Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .success-card {
            border-radius: 15px;
        }

        .success-icon {
            font-size: 50px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg p-4 success-card">
            <div class="text-center">
                <div class="success-icon">
                    <i class="fas fa-check-circle text-success"></i>
                </div>
                <h2 class="text-success mt-3">Topup Berhasil!</h2>
                <p class="text-muted">Topup sebesar
                    <strong>Rp. 50.000</strong>
                    telah berhasil diajukan
                </p>
            </div>
            <hr>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>Transaction ID</th>
                        <td>: 123456</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>: 14:32 - 07 Apr 2025</td>
                    </tr>
                    <tr>
                        <th>Jenis Transaksi</th>
                        <td>: Topup</td>
                    </tr>
                    <tr>
                        <th>Penerima</th>
                        <td>: John Doe</td>
                    </tr>
                    <tr>
                        <th>Rekening Penerima</th>
                        <td>: 1234567890</td>
                    </tr>
                    <tr>
                        <th>Nominal</th>
                        <td>: Rp. 50.000</td>
                    </tr>
                </tbody>
            </table>
            <small class="fst-italic fw-bold">*Tunjukkan ke bank mini untuk bukti</small>
            <hr>
            <a href="/dashboard" class="btn btn-outline-primary w-100">
                Dashboard
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
