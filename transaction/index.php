<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Transaksi Bank Mini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-4 rounded shadow">
        <div class="d-flex justify-content-between align-items-center pb-0 mb-0">
            <div class="p-3">
                <h1 class="h4 font-weight-bold text-dark">Daftar Transaksi Bank Mini</h1>
                <p class="text-muted mb-0">
                    Hello [Nama Pengguna], ini adalah semua daftar transaksi yang pernah terjadi di Bank Mini
                </p>
            </div>
        </div>
        <hr class="border-primary border-2 w-100 mb-4">
        <div class="table-responsive">
            <table class="table table-bordered" id="dtb">
                <thead class="thead-light">
                    <tr>
                        <th>Nama</th>
                        <th>Jurusan - Angkatan</th>
                        <th>Transaksi ID</th>
                        <th>Tipe Transaksi</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Diajukan pada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rizky</td>
                        <td>RPL - 2023</td>
                        <td>TX123</td>
                        <td>Topup</td>
                        <td>Rp. 100.000</td>
                        <td class="text-warning fw-semibold">Pending</td>
                        <td>07-Apr-2025 12:30</td>
                    </tr>
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data transaksi.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
