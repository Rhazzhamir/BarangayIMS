<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Information Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
            body {
        background-color: #f4f6f9;
    }

    .hero-section {
        background-color: White;
        color: white;
        padding: 100px 0;
        text-align: center;
        background-image: url('src/MunicipalityOfBabatngon.jpg');
        background-size: cover;
        background-position: top;
    }

    .officials-section {
        padding: 50px 0;
        background-color: #f8f9fa;
    }

    .captain-card {
        position: relative;
        max-width: 350px;
        overflow: hidden;
        border: none;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .captain-card-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

        filter: brightness(0.6);
        z-index: 1;
    }

    .captain-card .card-body {
        position: relative;
        z-index: 2;
        color: white;
        padding: 30px;
    }

    .captain-card img {
        width: 250px;
        height: 250px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid white;
        margin-bottom: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .official-card {
        margin-bottom: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .official-card:hover {
        transform: translateY(-10px);
    }

    .official-card img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .features-section {
        padding: 50px 0;
    }

    .feature-card {
        margin-bottom: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-10px);
    }

    .footer {
        background-color: #343a40;
        color: white;
        padding: 20px 0;
    }
    </style>
</head>

<body>
    <!-- Navigation -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid ps-5">
            <!-- Logo and Title -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <h5 class="cormorant-text text-dark mb-0 me-2">Welcome to</h5>
                <img src="src/logo.png" style="height: 70px; width: auto;" class="me-2">
                <div class="d-flex flex-column">
                    <h4 class="mb-0 text-dark">Barangay District IV</h4>
                    <small class="text-warning">Babatngon, Leyte</small>
                </div>
            </a>

            <!-- Toggle Button (For Mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav text-dark">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Modules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?= base_url('Login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?= base_url('/Register'); ?>">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4 mt-5">Barangay Information Management System</h1>
            <p class="lead">Efficient Management of Barangay Records and Resources</p>
            <a href="<?= base_url('/Login'); ?>" class="btn btn-light btn-lg mt-3">Get Started</a>
        </div>
    </div>

    <!-- Barangay Officials Section -->
    <div class="officials-section">
        <div class="container">
            <h2 class="text-center mb-5">Barangay Officials</h2>
            <div class="row justify-content-center">
                <!-- Barangay Captain (Top Row) -->
                <div class="col-12 d-flex justify-content-center mb-5">
                    <div class="card captain-card text-center">
                        <div class="captain-card-background"></div>
                        <div class="card-body">
                            <img src="/api/placeholder/250/250" alt="Barangay Captain" class="img-fluid">
                            <h4 class="card-title mt-3">Barangay Captain</h4>
                            <p class="card-text">Head of the Barangay</p>
                        </div>
                    </div>
                </div>

                <!-- Second Row: 2 Kagawads -->
                <div class="col-md-6">
                    <div class="card official-card text-center">
                        <div class="card-body">
                            <img src="/api/placeholder/200/200" alt="Kagawad 1" class="img-fluid">
                            <h5 class="card-title mt-3">Kagawad 1</h5>
                            <p class="card-text text-muted">Committee Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card official-card text-center">
                        <div class="card-body">
                            <img src="/api/placeholder/200/200" alt="Kagawad 2" class="img-fluid">
                            <h5 class="card-title mt-3">Kagawad 2</h5>
                            <p class="card-text text-muted">Committee Member</p>
                        </div>
                    </div>
                </div>

                <!-- Third Row: 3 Kagawads -->
                <div class="col-md-4">
                    <div class="card official-card text-center">
                        <div class="card-body">
                            <img src="/api/placeholder/200/200" alt="Kagawad 3" class="img-fluid">
                            <h5 class="card-title mt-3">Kagawad 3</h5>
                            <p class="card-text text-muted">Committee Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card official-card text-center">
                        <div class="card-body">
                            <img src="/api/placeholder/200/200" alt="Kagawad 4" class="img-fluid">
                            <h5 class="card-title mt-3">Kagawad 4</h5>
                            <p class="card-text text-muted">Committee Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card official-card text-center">
                        <div class="card-body">
                            <img src="/api/placeholder/200/200" alt="Kagawad 5" class="img-fluid">
                            <h5 class="card-title mt-3">Kagawad 5</h5>
                            <p class="card-text text-muted">Committee Member</p>
                        </div>
                    </div>
                </div>

                <!-- Fourth Row: SK Chairman and Secretary -->
                <div class="col-md-6">
                    <div class="card official-card text-center">
                        <div class="card-body">
                            <img src="src/image.png" alt="SK Chairman" class="img-fluid">
                            <h5 class="card-title mt-3">SK Chairman</h5>
                            <p class="card-text text-muted">Youth Sector Representative</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card official-card text-center">
                        <div class="card-body">
                            <img src="/api/placeholder/200/200" alt="Barangay Secretary" class="img-fluid">
                            <h5 class="card-title mt-3">Barangay Secretary</h5>
                            <p class="card-text text-muted">Administrative Support</p>
                        </div>
                    </div>
                </div>

                <!-- Fifth Row: Treasurer -->
                <div class="col-12 d-flex justify-content-center mt-4">
                    <div class="card official-card text-center" style="max-width: 400px;">
                        <div class="card-body">
                            <img src="/api/placeholder/200/200" alt="Barangay Treasurer" class="img-fluid">
                            <h5 class="card-title mt-3">Barangay Treasurer</h5>
                            <p class="card-text text-muted">Financial Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features-section">
        <div class="container">
            <h2 class="text-center mb-5">System Modules</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">User Management</h5>
                            <p class="card-text">Role-based access control, user authentication, and profile management.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Budget Management</h5>
                            <p class="card-text">Track income, expenses, budget allocations, and maintain financial
                                audit logs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card">
                        <div class="card-body">
                            <h5 class="card-title">Resident Records</h5>
                            <p class="card-text">Secure digital record-keeping for resident information and
                                demographics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Barangay Information Management System. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>