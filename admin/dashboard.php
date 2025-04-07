<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar User - Mini Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-4 rounded shadow">
        <!-- ALERT (opsional, bisa dinamis dari PHP) -->
        <!-- 
        <div class="alert alert-success alert-dismissible" role="alert">
            Berhasil menambahkan user!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        -->

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="p-3">
                <h1 class="h4 fw-bold text-dark">Daftar User</h1>
                <p class="text-muted">
                    Hello Admin, saya percayakan pengelolaan akun bank dan akun siswa ini
                    kepada anda, tolong pergunakan hak akses ini dengan baik!!
                </p>
            </div>
            <a href="create-user.html" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah User
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dtb">
                <thead class="table-primary">
                    <tr>
                        <th>Nama</th>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Jurusan - Angkatan</th>
                        <th>Rekening</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ulangi baris berikut untuk setiap user -->
                    <tr>
                        <td>John Doe</td>
                        <td>johndoe</td>
                        <td>john@example.com</td>
                        <td>Admin</td>
                        <td>RPL - 2022</td>
                        <td>1234567890</td>
                        <td class="d-flex gap-2">
                            <a href="edit-user.html?id=1" class="btn btn-sm btn-info">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <button data-bs-toggle="modal" data-bs-target="#delModal-1" class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- Modal Konfirmasi Hapus -->
                            <div class="modal fade" id="delModal-1" tabindex="-1" aria-labelledby="delModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="delModalLabel">Hapus user</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="delete-user.php" method="POST">
                                            <input type="hidden" name="user_id" value="1">
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus user <strong>John Doe</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Jika tidak ada user -->
                    <!-- 
                    <tr>
                        <td colspan="7" class="text-center text-muted">Tidak ada data user.</td>
                    </tr> 
                    -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
