<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-4 rounded shadow">
        <!-- Alert Message -->
        <div class="alert alert-success alert-dismissible" role="alert">
            User berhasil ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="p-3">
                <h1 class="h4 font-weight-bold text-dark">Daftar User</h1>
                <p class="text-muted">
                    Hello Admin, saya percayakan pengelolaan akun siswa ini kepada
                    anda, tolong pergunakan hak akses ini dengan baik!!
                </p>
            </div>
            <a href="/users/create.html" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah User
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dtb">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama pengguna</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Jurusan - Angkatan</th>
                        <th scope="col">Rekening</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dummy Data Loop -->
                    <tr>
                        <td>John Doe</td>
                        <td>johnd</td>
                        <td>john@example.com</td>
                        <td>Admin</td>
                        <td>RPL - 56</td>
                        <td>123456789</td>
                        <td class="d-flex gap-2">
                            <a href="/users/edit.html?id=1" class="btn btn-sm btn-info">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <button data-bs-toggle="modal" data-bs-target="#delModal-1" class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- Modal Hapus -->
                            <div class="modal fade" id="delModal-1" tabindex="-1" aria-labelledby="delModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="delModalLabel">Hapus user</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="/users/delete?id=1" method="POST">
                                            <!-- CSRF dan method DELETE dihapus -->
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus user John Doe?
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

                    <!-- Tambah baris lain kalau mau -->
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
