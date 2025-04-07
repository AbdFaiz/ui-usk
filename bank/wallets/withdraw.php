<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Withdraw</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media(min-width:1440px) {
            .img-fluid {
                margin-left: 10rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="card bg-white shadow-lg p-4 rounded-lg w-100">
            <div class="mb-4 d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center">Request Withdraw</h2>
                <hr class="border border-primary w-25">
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <img src="img/wd.jpg" class="img-fluid" style="max-height: 30rem;" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <div class="alert alert-info">
                        <p class="text-muted">Withdraw Request</p>
                        <hr class="my-1">
                        <small class="">Harap masukkan jumlah uang yang ingin anda tarik, <br> dan ambil uang di Bank
                            Mini di Lt. 1! Terimakasih <span class="fw-bold">John Doe</span></small>
                        <hr class="">
                        <div class="d-flex justify-content-center">
                            <p class="text-muted fw-bold">(+62) 811 1083 0183</p>
                        </div>
                    </div>
                    <div class="alert alert-primary">
                        <strong class="text-muted">Saldo anda: Rp. 100.000</strong>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="/withdraw/submit" method="POST">
                                <!-- CSRF token dihapus -->
                                <div class="mb-3">
                                    <label for="amount" class="form-label mb-0">Nominal</label>
                                    <br>
                                    <small class="text-muted fst-italic">Minimal tarik tunai adalah Rp. 5.000</small>
                                    <div class="d-flex gap-2 align-items-center">
                                        <p class="mt-3 text-bg-danger px-2 py-1 rounded">Rp.</p>
                                        <input type="number" name="amount" id="amount" class="form-control bg-white"
                                            required value="">
                                    </div>
                                    <!-- Error message dihapus -->
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
