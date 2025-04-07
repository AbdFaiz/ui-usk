<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Request Pending</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-4 rounded shadow mt-4">
        <!-- Alert jika ada pesan sukses/gagal -->
        <div class="alert alert-success alert-dismissible" role="alert">
            Data berhasil diproses.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="p-3">
                <h1 class="h4 font-weight-bold text-dark">Daftar request pending</h1>
                <p class="text-muted">
                    Hello Admin, saya percayakan pengelolaan keuangan siswa di bank mini ini kepada anda, tolong pergunakan hak akses ini dengan baik!!
                </p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Nama</th>
                        <th>Jurusan - Angkatan</th>
                        <th>Transaksi ID</th>
                        <th>Tipe Transaksi</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Diajukan pada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rafi Maulana</td>
                        <td>RPL - 2023</td>
                        <td>TX01234</td>
                        <td>Topup</td>
                        <td>Rp. 100.000</td>
                        <td class="text-warning fw-semibold">Pending</td>
                        <td>07-04-2025 14:55</td>
                        <td class="d-flex gap-2">
                            <form action="/approve/1" method="POST">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
                            </form>

                            <form action="/reject/1" method="POST">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-x"></i></button>
                            </form>
                        </td>
                    </tr>
                    <!-- Tambahkan baris tambahan di sini untuk data lainnya -->
                    <tr>
                        <td>Putri Ayu</td>
                        <td>TKJ - 2022</td>
                        <td>TX01235</td>
                        <td>Withdraw</td>
                        <td>Rp. 50.000</td>
                        <td class="text-success fw-semibold">Approved</td>
                        <td>06-04-2025 09:30</td>
                        <td class="d-flex gap-2">
                            <form action="/approve/2" method="POST">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
                            </form>
                            <form action="/reject/2" method="POST">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-x"></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
