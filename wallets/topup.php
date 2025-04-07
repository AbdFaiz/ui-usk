<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Top Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="card bg-white shadow-lg p-4 rounded-lg w-100">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center">Request Top Up</h2>
                <hr class="border-2 border-primary w-25">
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-6 col-12">
                    <img src="img/topup.jpg" class="img-fluid mb-2 mb-md-0" alt="">
                </div>
                <div class="col-md-6 col-12">
                    <div class="alert alert-primary">
                        <p class="text-muted">Top Up Request</p>
                        <hr class="my-1">
                        <small class="">Harap masukkan jumlah uang yang ingin anda top up, <br> dan serahkan uang top
                            up ke Bank Mini di Lt. 1! Terimakasih <span class="fw-bold">John Doe</span></small>
                        <hr class="">
                        <div class="d-flex justify-content-center">
                            <p class="text-muted fw-bold">(+62) 811 1083 0183</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="/topup/submit" method="POST">
                                <!-- CSRF dihapus -->
                                <div class="mb-3">
                                    <label for="amount" class="form-label mb-0">Nominal</label>
                                    <br>
                                    <small class="text-muted fst-italic">Minimal topup adalah Rp. 1.000</small>
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
