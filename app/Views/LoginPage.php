<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Information System - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            background-color: rgba(6,62,75,255);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 30px;
        }
        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }
        .login-header h2 {
            color: #007bff;
            font-weight: bold;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="login-container">
                    <div class="login-header">
                        <a href="<?= base_url('/Homepage'); ?>">
                            <h2>Barangay Information System</h2>
                        </a>
                        <p class="text-muted">Login to your account</p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <a href="#" class="text-primary text-decoration-none">Forgot Password?</a>
                        </div>
                        <!-- <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div> -->
                        <div class="d-grid mb-3">
                            <a href="<?= base_url('/Admin/Dashboard'); ?>" class="btn btn-primary">Login</a>
                        </div>
                        <div class="text-center">
                            <p class="text-muted">Don't have an account? <a href="<?= base_url('/Register'); ?>" class="text-primary">Register here</a></p>
                        </div>
                        <div class="text-center">
                            <p class="text-muted"><a href="<?= base_url('/'); ?>" class="text-primary">ADMIN</a></p>
                        </div>
                        <div class="text-center">
                            <p class="text-muted">Go to <a href="<?= base_url('/Homepage'); ?>" class="text-primary">Homepage</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>