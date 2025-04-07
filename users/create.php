<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center py-5">
        <div class="card shadow-lg p-4 rounded-lg w-100">
            <h2 class="text-center mb-4">Tambah User</h2>
            <form action="/path/ke/penyimpanan-user" method="POST">
                <!-- Tambahkan token CSRF jika dibutuhkan secara manual -->

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Muhammad Isfa" required value="">
                    <!-- Error message -->
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Nama Pengguna</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Isfa" required value="">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="muhammad@gmail.com" required value="">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="******">
                        <button class="btn btn-outline-secondary" type="button" id="sp">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="role">Role</label>
                    <select name="role" id="role" class="form-select" required>
                        <option value="admin">Admin</option>
                        <option value="bank">Bank</option>
                        <option value="siswa">Siswa</option>
                    </select>
                </div>

                <p class="text-danger fst-italic fw-bold text-decoration-underline" style="font-size: small">
                    *Kosongkan jika user bukan siswa!
                </p>

                <div class="mb-3">
                    <label class="form-label" for="major">Jurusan</label>
                    <select name="major" id="major" class="form-select">
                        <option value="rpl">Rekayasa Perangkat Lunak</option>
                        <option value="akl">Akuntansi dan Keuangan Lembaga</option>
                        <option value="br">Bisnis Ritel</option>
                        <option value="mp">Manajemen Perkantoran</option>
                        <option value="ml">Manajemen Logistik</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="batch">Angkatan</label>
                    <input type="number" name="batch" id="batch" class="form-control" placeholder="56">
                </div>

                <button type="submit" class="btn btn-primary w-100">Kirim</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputPass = document.getElementById("password");
            const btnShowPass = document.getElementById("sp");
            const iconShowPass = btnShowPass.querySelector("i");

            btnShowPass.addEventListener("click", function () {
                if (inputPass.type === 'password') {
                    inputPass.type = 'text';
                    iconShowPass.classList.remove('fa-eye');
                    iconShowPass.classList.add('fa-eye-slash');
                } else {
                    inputPass.type = 'password';
                    iconShowPass.classList.remove('fa-eye-slash');
                    iconShowPass.classList.add('fa-eye');
                }
            });
        });
    </script>
</body>
</html>
