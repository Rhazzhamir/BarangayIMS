<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Information Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
    :root {
        --primary-color: #2d6ca2;
        --secondary-color: #5bc0de;
        --accent-color: #f0ad4e;
        --light-bg: #f8f9fa;
        --dark-text: #212529;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f5f5;
    }

    .navbar {
        background-color: var(--primary-color) !important;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        color: white !important;
        display: flex;
        align-items: center;
    }

    .navbar-brand img {
        margin-right: 10px;
    }

    .nav-link {
        color: rgba(255, 255, 255, 0.85) !important;
        font-weight: 500;
        transition: all 0.2s;
    }

    .nav-link:hover,
    .nav-link.active {
        color: white !important;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
    }

    .sidebar {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px 0;
    }

    .sidebar .nav-link {
        color: var(--dark-text) !important;
        border-left: 3px solid transparent;
        padding: 12px 20px;
        margin: 2px 0;
    }

    .sidebar .nav-link:hover {
        background-color: rgba(45, 108, 162, 0.05);
    }

    .sidebar .nav-link.active {
        color: var(--primary-color) !important;
        background-color: rgba(45, 108, 162, 0.1);
        border-left: 3px solid var(--primary-color);
        font-weight: 600;
    }

    .sidebar .nav-link i {
        width: 24px;
        text-align: center;
        margin-right: 8px;
    }

    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
    }

    .card-header {
        background-color: white;
        border-bottom: 1px solid #eee;
        padding: 15px 20px;
    }

    .dashboard-card {
        height: 100%;
        transition: transform 0.2s;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
    }

    .dashboard-icon {
        background-color: rgba(45, 108, 162, 0.1);
        color: var(--primary-color);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        font-size: 24px;
    }

    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .btn-primary:hover {
        background-color: #1d5a8b;
        border-color: #1d5a8b;
    }

    .btn-warning {
        background-color: var(--accent-color);
        border-color: var(--accent-color);
    }

    .search-bar {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 5px 15px;
    }

    .search-bar input {
        background: transparent;
        border: none;
        color: white;
    }

    .search-bar input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .search-bar input:focus {
        outline: none;
        box-shadow: none;
    }

    .search-bar button {
        background: transparent;
        border: none;
        color: white;
    }

    .profile-section {
        background-color: #ffffff;
        border-radius: 8px;
        padding: 20px;
    }

    .profile-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .profile-avatar {
        width: 80px;
        height: 80px;
        background-color: #e9ecef;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        font-size: 30px;
        color: #6c757d;
    }

    .quick-actions a {
        text-decoration: none;
        color: inherit;
    }

    .stats-card {
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }

    .stats-icon {
        width: 45px;
        height: 45px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        color: white;
    }

    .stats-blue {
        background-color: rgba(13, 110, 253, 0.1);
    }

    .stats-blue .stats-icon {
        background-color: #0d6efd;
    }

    .stats-green {
        background-color: rgba(25, 135, 84, 0.1);
    }

    .stats-green .stats-icon {
        background-color: #198754;
    }

    .stats-yellow {
        background-color: rgba(255, 193, 7, 0.1);
    }

    .stats-yellow .stats-icon {
        background-color: #ffc107;
    }

    .stats-red {
        background-color: rgba(220, 53, 69, 0.1);
    }

    .stats-red .stats-icon {
        background-color: #dc3545;
    }

    .stats-info {
        flex-grow: 1;
    }

    .stats-title {
        font-size: 14px;
        color: #6c757d;
        margin-bottom: 2px;
    }

    .stats-value {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 0;
    }

    .badge-status {
        font-size: 11px;
        padding: 4px 8px;
        border-radius: 20px;
    }

    .notification-badge {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #dc3545;
        color: white;
        border-radius: 50%;
        width: 16px;
        height: 16px;
        font-size: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .sidebar {
            margin-bottom: 20px;
        }
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Logo and Title -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <h5 class="cormorant-text text-white mb-0 me-2">Welcome to</h5>
                <img src="src/logo.png" style="height: 50px; width: auto;" class="me-2">
                <div class="d-flex flex-column">
                    <h4 class="mb-0 text-white">Barangay District IV</h4>
                    <small class="text-warning">Babatngon, Leyte</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-1"></i> Rhazzhamir Aguilar
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('/Login')?>"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-4">
        <div class="row">
            <!-- Main Content Area -->
            <div class="col-md-12">
                <!-- Welcome Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="mb-1">Welcome Rhazzhamir!</h4>
                            </div>
                            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                <button class="btn btn-primary">
                                    <i class="fas fa-plus-circle me-1"></i> Add Information
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistics Row -->
                <div class="row mb-4">
                    <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                        <div class="stats-card stats-blue">
                            <div class="stats-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stats-info">
                                <div class="stats-title">Total Residents</div>
                                <div class="stats-value">2,854</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
                        <div class="stats-card stats-green">
                            <div class="stats-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="stats-info">
                                <div class="stats-title">Official</div>
                                <div class="stats-value">14</div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Resident Management Card -->
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><i class="fas fa-users me-2"></i> Resident Records Management</h5>
                            <button class="btn btn-sm btn-outline-primary">View All</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                    placeholder="Search resident by name, ID, or address...">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Maria Santos</td>
                                        <td>RES-2023-001</td>
                                        <td>123 Main St.</td>
                                        <td>09123456789</td>
                                        <td><span class="badge bg-success badge-status">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Juan Dela Cruz</td>
                                        <td>RES-2023-002</td>
                                        <td>456 Acacia Ave.</td>
                                        <td>09187654321</td>
                                        <td><span class="badge bg-success badge-status">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pedro Penduko</td>
                                        <td>RES-2023-003</td>
                                        <td>789 Palm St.</td>
                                        <td>09156789012</td>
                                        <td><span class="badge bg-warning text-dark badge-status">Pending Update</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Juana Change</td>
                                        <td>RES-2023-004</td>
                                        <td>101 Mahogany St.</td>
                                        <td>09198765432</td>
                                        <td><span class="badge bg-danger badge-status">Needs Verification</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="btn btn-sm btn-outline-secondary"><i
                                                    class="fas fa-edit"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Quick Actions and Recent Activity -->
                <div class="row">
                    <!-- Quick Actions -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-bolt me-2"></i> Quick Actions</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 quick-actions">
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="p-3 text-center border rounded h-100">
                                                <i class="fas fa-user-plus fs-3 text-primary mb-2"></i>
                                                <p class="mb-0">Add New Resident</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="p-3 text-center border rounded h-100">
                                                <i class="fas fa-id-card fs-3 text-success mb-2"></i>
                                                <p class="mb-0">Issue Certificate</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="p-3 text-center border rounded h-100">
                                                <i class="fas fa-print fs-3 text-warning mb-2"></i>
                                                <p class="mb-0">Generate Report</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="p-3 text-center border rounded h-100">
                                                <i class="fas fa-envelope fs-3 text-info mb-2"></i>
                                                <p class="mb-0">Send Announcements</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-history me-2"></i> Recent Activity</h5>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center py-3">
                                        <div class="bg-primary rounded-circle p-2 me-3 text-white">
                                            <i class="fas fa-user-plus"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">New resident <strong>Ana Reyes</strong> registered</p>
                                            <small class="text-muted">Today, 10:45 AM</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-3">
                                        <div class="bg-success rounded-circle p-2 me-3 text-white">
                                            <i class="fas fa-file-alt"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Certificate issued for <strong>Carlos Manalo</strong></p>
                                            <small class="text-muted">Yesterday, 3:20 PM</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-3">
                                        <div class="bg-warning rounded-circle p-2 me-3 text-white">
                                            <i class="fas fa-edit"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Record update for <strong>Elena Santos</strong></p>
                                            <small class="text-muted">Yesterday, 11:15 AM</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-3">
                                        <div class="bg-info rounded-circle p-2 me-3 text-white">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Announcement sent: <strong>Community Meeting</strong></p>
                                            <small class="text-muted">Apr 05, 9:30 AM</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#" class="btn btn-sm btn-link">View All Activities</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">© 2025 Barangay Information Management System. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Developed by: Rhazzhamir I. Aguilar | BSIT 3-B</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>