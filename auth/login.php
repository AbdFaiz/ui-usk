<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Mini Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #667eea, #764ba2);
        }

        .card {
            min-height: 75%;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        .card img {
            border-radius: 15px 0 0 15px;
        }

        .card h2 {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 10px 15px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.5);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #0d448b 100%);
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-outline-primary {
            border-color: #667eea;
            color: #667eea;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: #667eea;
            color: white;
        }

        .text-center span {
            color: #666;
        }

        .text-center a {
            color: #667eea;
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 75vh;">
        <div class="card shadow-lg p-4 rounded-lg" style="width: 100%;">
            <div class="row" style="min-height: 500px;">
                <div class="col-md-6 d-block mb-md-0 mb-3">
                    <img src="img/loginmas.jpg" alt="Login" class="rounded"
                         style="width: 100%; min-height: 100%; object-fit: cover;">
                </div>

                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="mb-4">Sign In to Continue</h2>
                    <form method="POST" action="login-process.php">
                        <!-- Replace with your own PHP/JS handler -->
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input id="username" type="text" name="username" placeholder="fzz" required autofocus
                                   class="form-control">
                            <!-- Optional: Error message placeholder -->
                            <!-- <small class="text-danger">Invalid username</small> -->
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="****" required>
                                <button class="btn btn-outline-secondary" type="button" id="sp" title="Show/Hide Password">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const pInput = document.getElementById('password');
            const btnP = document.getElementById('sp');
            const iconP = btnP.querySelector('i');

            btnP.addEventListener("click", function () {
                if (pInput.type === 'password') {
                    pInput.type = 'text';
                    iconP.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    pInput.type = 'password';
                    iconP.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        });
    </script>
</body>
</html>
