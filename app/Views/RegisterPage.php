<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Information System - Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        background-color: rgba(6, 62, 75, 255);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Arial, sans-serif;
    }

    .register-container {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
        padding: 30px;
    }

    .register-header {
        text-align: center;
        margin-bottom: 25px;
    }

    .register-header h2 {
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
    <div class="container d-flex justify-content-center align-items-center  vh-100">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="register-container">
                <div class="register-header">
                    <h2>Create Account</h2>
                    <a href="<?= base_url('/Homepage'); ?>">
                        <p class="text-muted">Register for Barangay Information System</p>
                    </a>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Enter first name"
                                required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Enter last name"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="email" placeholder="Enter email address"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-plus"></i></span>
                            <input type="text" class="form-control" id="username" placeholder="Choose a username"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" id="password" placeholder="Create password"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" id="confirmPassword"
                                placeholder="Repeat password" required>
                        </div>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                    <div class="text-center">
                        <p class="text-muted">Already have an account? <a href="<?= base_url('Login'); ?>"
                                class="text-primary">Login here</a></p>
                    </div>
                    <div class="text-center">
                        <p class="text-muted"><a href="<?= base_url('/'); ?>" class="text-primary">ADMIN</a></p>
                    </div>
                    <div class="text-center">
                        <p class="text-muted">Go to <a href="<?= base_url('/Homepage'); ?>"
                                class="text-primary">Homepage</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>