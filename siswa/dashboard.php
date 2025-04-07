<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4723D9;
            --sec-color: #5B3DD4;
            --third-color: #3B82DF;
            --fourth-color: #3BCCDF;
            --first-color-light: #AFA5D9;
            --white-color: #F7F6FB;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --info-color: #3b82f6;
            --warning-color: #f59e0b;
            --light-bg: #f8fafc;
            --dark-text: #1e293b;
            --light-text: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-500: #64748b;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            background-color: var(--gray-100);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        /* Balance Card */
        .balance-card {
            position: relative;
            background: var(--sec-color);
            color: white;
            overflow: hidden;
            height: 100%;
            border-radius: 15px;
        }

        .balance-card .circ1 {
            position: absolute;
            right: 1.3rem;
            top: 1.3rem;
            border-radius: 100%;
            height: 2rem;
            width: 2rem;
            background: var(--first-color-light);
            opacity: 0.5;
        }

        .balance-card .circ2 {
            position: absolute;
            right: 2.7rem;
            top: 1.3rem;
            border-radius: 100%;
            height: 2rem;
            width: 2rem;
            background: var(--first-color-light);
            opacity: 0.5;
        }

        .balance-card .r-pill1 {
            position: absolute;
            right: -0.5rem;
            bottom: -2rem;
            border-radius: 12rem;
            height: 11rem;
            width: 5rem;
            z-index: 1;
            background: var(--fourth-color);
        }

        .balance-card .r-pill2 {
            position: absolute;
            right: 1.2rem;
            bottom: -2rem;
            border-radius: 12rem;
            height: 8.5rem;
            width: 5rem;
            background: var(--third-color);
        }

        /* Stat Cards */
        .income-card,
        .outcome-card {
            padding: 12px;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
        }

        .income-card .bg-icon {
            font-size: 24px;
            background: rgba(13, 250, 84, 0.6);
            width: fit-content;
            padding: 0.8rem 1.2rem;
            border-radius: 100%;
        }

        .outcome-card .bg-icon {
            font-size: 24px;
            background: rgba(250, 13, 13, 0.6);
            width: fit-content;
            padding: 0.8rem 1.2rem;
            border-radius: 100%;
        }

        /* Action Buttons */
        .btn-action {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
            border-radius: 12px;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-action:hover {
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
            transform: translateY(-2px);
            color: white;
        }

        .btn-action i {
            margin-right: 8px;
        }

        /* Responsive */
        @media(max-width: 768px) {
            .txt {
                display: none;
            }

            .btn-action i {
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
<div class="container py-4">
    <!-- Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
        <div>
            <h1 class="greeting">Hi, <strong>Nama Pengguna</strong></h1>
            <div class="d-flex align-items-center">
                <p class="account-number mb-0">No. Rekening: <span id="norek">1234567890</span></p>
                <button type="button" id="salinNorek" class="btn btn-transparent btn-sm ms-1" title="Salin nomor rekening">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
            <p id="copy-message" class="text-success small fst-italic d-none mb-0">No. Rekening telah disalin!</p>
        </div>

        <!-- Optional Alert -->
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <div class="d-flex align-items-center">
                <i class="fas fa-check-circle me-2"></i>
                <div>Berhasil melakukan transaksi!</div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- Balance and Stats Section -->
    <div class="row g-4 mb-4">
        <div class="col-lg-5 col-md-6">
            <div class="balance-card p-4">
                <div class="circ1"></div>
                <div class="circ2"></div>
                <h4 class="mb-3 fw-light">Saldo Anda</h4>
                <h1 class="fw-bold mb-3">Rp 1.500.000</h1>
                <hr>
                <div class="just-info" style="margin-top: auto; z-index: 99999;">
                    <small class="text-light">Nama Pengguna</small> |
                    <small class="text-light">04 / 25</small>
                </div>
                <div class="r-pill1"></div>
                <div class="r-pill2"></div>
            </div>
        </div>

        <div class="col-lg-7 col-md-6">
            <div class="row g-4 h-100">
                <div class="col-12">
                    <div class="income-card">
                        <div class="card-body d-flex">
                            <div class="bg-icon">
                                <i class="fa-solid fa-arrow-up"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <strong class="ms-4">Total Income</strong>
                                <h3 class="fw-bold text-success ms-4">Rp 2.000.000</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-1 mx-4 text-primary">
                <div class="col-12">
                    <div class="outcome-card">
                        <div class="card-body d-flex">
                            <div class="bg-icon">
                                <i class="fa-solid fa-arrow-down"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <strong class="ms-4">Total Outcome</strong>
                                <h3 class="fw-bold text-danger ms-4">Rp 500.000</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Action Buttons Section -->
    <div class="row g-3 mb-4">
        <div class="col-md-4 col-6">
            <a href="topup.html" class="btn-action" style="background: var(--success-color);">
                <i class="fas fa-plus-circle"></i> <span class="txt">Topup</span>
            </a>
        </div>
        <div class="col-md-4 col-6">
            <a href="withdraw.html" class="btn-action" style="background: var(--danger-color);">
                <i class="fas fa-minus-circle"></i> <span class="txt">Withdraw</span>
            </a>
        </div>
        <div class="col-md-4 col-12">
            <a href="transfer.html" class="btn-action" style="background: var(--primary-color);">
                <i class="fas fa-money-bill-transfer"></i> <span class="txt">Transfer</span>
            </a>
        </div>
    </div>

    <!-- Transaction History Section -->
    <div class="card mt-4 p-3">
        <h5 class="mb-3"><i class="fas fa-history"></i> Riwayat Transaksi</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                <tr>
                    <th>No.</th>
                    <th>Description</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>More</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><div class="text-success">Topup</div></td>
                    <td><strong class="text-success">Rp. 1.000.000</strong></td>
                    <td>Sukses</td>
                    <td>07-04-2025</td>
                    <td><button class="btn btn-sm btn-primary">Detail</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><div class="text-danger">Withdraw</div></td>
                    <td><strong class="text-danger">Rp. 500.000</strong></td>
                    <td>Pending</td>
                    <td>06-04-2025</td>
                    <td><button class="btn btn-sm btn-primary">Detail</button></td>
                </tr>
                <!-- Tambah data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.getElementById('salinNorek').addEventListener('click', function () {
        const norek = document.getElementById('norek').innerText;
        navigator.clipboard.writeText(norek).then(() => {
            const msg = document.getElementById('copy-message');
            msg.classList.remove('d-none');
            setTimeout(() => msg.classList.add('d-none'), 2000);
        });
    });
</script>
</body>
</html>
