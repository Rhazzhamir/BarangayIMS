<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management System - Lockscreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f4f6f9;
    }

    .lockscreen-container {
        max-width: 400px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .password-input {
        background-color: #f8f9fa;
        border: none;
        transition: background-color 0.3s ease;
    }

    .password-input:focus {
        background-color: #f1f3f5;
        box-shadow: none;
    }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="lockscreen-container text-center">
        <div class="mb-4">
            <h2 class="fw-bold text-primary">Barangay Management System</h2>
            <p class="text-muted">Secure Access Portal</p>
        </div>
        <!-- User Image & Name -->
        <div class="d-flex align-items-center justify-content-center mb-3">
            <div class="rounded-circle border border-primary" style="width: 100px; height: 100px; overflow: hidden;">
                <img src="src/logo.png" alt="User Profile" class="w-100 h-100 object-fit-cover">
            </div>
        </div>
        <h5 class="mt-2 fw-bold">Barangay Administrator</h5>
        <!-- Password Input -->
        <form class="mt-4">
            <div class="d-flex align-items-center justify-content-center">
                <input type="password" class="form-control text-center password-input" placeholder="Enter your password"
                    style="max-width: 250px; border-radius: 30px;">
                    <a href="/Admin/Dashboard">
                        <button type="submit" class="btn btn-primary rounded-circle ms-2"
                        style="width: 50px; height: 50px;">
                        <!-- anchor tag temporary la  -->
                                <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
            </div>
        </form>
        <p class="mt-3 text-muted">Secure access to manage barangay records</p>
        <a href="/Login" class="text-primary text-decoration-none">Switch user</a>
        <!-- Footer -->
        <footer class="mt-4 text-muted small">
            <p><b> © 2024 Local Government Management Platform </b></p>
        </footer>
    </div>
    <!-- Bootstrap & FontAwesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>