<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Barangay Officials Directory</title>
    <style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --light-bg: #f8f9fa;
        --border-radius: 0.5rem;
    }

    body {
        background-color: #f0f2f5;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .page-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
        border-radius: 0 0 var(--border-radius) var(--border-radius);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .official-card {
        transition: all 0.3s ease;
        border-radius: var(--border-radius);
        border: none;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        height: 100%;
        overflow: hidden;
    }

    .official-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .card-header {
        background-color: var(--primary-color);
        color: white;
        font-weight: 500;
        padding: 0.75rem 1rem;
    }

    .position-badge {
        background-color: var(--secondary-color);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        display: inline-block;
    }

    .img-profile {
        border: 4px solid white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        object-fit: cover;
        width: 100px;
        height: 100px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .contact-item i {
        color: var(--secondary-color);
        margin-right: 0.5rem;
        width: 16px;
    }

    .btn-edit {
        background-color: var(--secondary-color);
        border: none;
        border-radius: 50px;
        padding: 0.4rem 1rem;
        transition: all 0.2s;
    }

    .btn-edit:hover {
        background-color: #2980b9;
        transform: scale(1.05);
    }

    .badge-tenure {
        background-color: var(--light-bg);
        color: var(--primary-color);
        border: 1px solid #dee2e6;
        padding: 0.3rem 0.6rem;
        border-radius: 4px;
        font-weight: 500;
    }

    .notice-panel {
        background-color: #fff3cd;
        border-left: 4px solid var(--accent-color);
        border-radius: var(--border-radius);
        padding: 1.5rem;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
    }

    /* Status indicators */
    .status-indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 5px;
    }

    .status-active {
        background-color: #28a745;
    }

    .status-ending {
        background-color: #ffc107;
    }

    .status-expired {
        background-color: #dc3545;
    }
    </style>
</head>

<body>
    <!-- Header Section -->
    <div class="page-header m-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><i class="fas fa-users me-2"></i>Barangay Officials Directory</h1>
                    <p class="lead mb-0">Serving the community with dedication and excellence</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <button class="btn btn-light"><i class="fas fa-print me-2"></i>Print Directory</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Wrapper -->
    <div class="container">
        <!-- Modal -->
        <?php
            include 'components/Modal/Official/AddModal.php';
        ?>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addOfficialModal">
            <i class="fas fa-user-plus me-2"></i>Add Official
        </button>
        <!-- Main content -->
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="row">
                    <!-- Barangay Captain -->
                    <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch mb-4">
                        <div class="official-card bg-white d-flex flex-fill">
                            <div class="card-header position-relative">
                                <span class="position-badge">Barangay Captain</span>
                                <span class="float-end">
                                    <span class="status-indicator status-active" title="Active"></span>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="/api/placeholder/128/128" alt="Juan Santos"
                                        class="img-profile rounded-circle">
                                    <h2 class="h5 mt-3 mb-1">Juan Santos</h2>
                                    <span class="badge-tenure">
                                        <i class="far fa-calendar-alt me-1"></i>2020-2024
                                    </span>
                                </div>
                                <div class="contact-info mt-3">
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>0912-345-6789</span>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>barangay.captain@local.gov</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-edit">
                                        <i class="fas fa-user-edit me-2"></i>Edit Official
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Barangay Secretary -->
                    <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch mb-4">
                        <div class="official-card bg-white d-flex flex-fill">
                            <div class="card-header position-relative">
                                <span class="position-badge">Barangay Secretary</span>
                                <span class="float-end">
                                    <span class="status-indicator status-active" title="Active"></span>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="/api/placeholder/128/128" alt="Maria Cruz"
                                        class="img-profile rounded-circle">
                                    <h2 class="h5 mt-3 mb-1">Maria Cruz</h2>
                                    <span class="badge-tenure">
                                        <i class="far fa-calendar-alt me-1"></i>2021-2025
                                    </span>
                                </div>
                                <div class="contact-info mt-3">
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>0923-456-7890</span>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>barangay.secretary@local.gov</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-edit">
                                        <i class="fas fa-user-edit me-2"></i>Edit Official
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Barangay Treasurer -->
                    <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch mb-4">
                        <div class="official-card bg-white d-flex flex-fill">
                            <div class="card-header position-relative">
                                <span class="position-badge">Barangay Treasurer</span>
                                <span class="float-end">
                                    <span class="status-indicator status-expired" title="Term Expired"></span>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="/api/placeholder/128/128" alt="Carlos Reyes"
                                        class="img-profile rounded-circle">
                                    <h2 class="h5 mt-3 mb-1">Carlos Reyes</h2>
                                    <span class="badge-tenure">
                                        <i class="far fa-calendar-alt me-1"></i>2019-2023
                                    </span>
                                </div>
                                <div class="contact-info mt-3">
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>0934-567-8901</span>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>barangay.treasurer@local.gov</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-edit">
                                        <i class="fas fa-user-edit me-2"></i>Edit Official
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kagawad 1 -->
                    <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch mb-4">
                        <div class="official-card bg-white d-flex flex-fill">
                            <div class="card-header position-relative">
                                <span class="position-badge">Kagawad</span>
                                <span class="float-end">
                                    <span class="status-indicator status-active" title="Active"></span>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="/api/placeholder/128/128" alt="Pedro Lim"
                                        class="img-profile rounded-circle">
                                    <h2 class="h5 mt-3 mb-1">Pedro Lim</h2>
                                    <span class="badge-tenure">
                                        <i class="far fa-calendar-alt me-1"></i>2020-2024
                                    </span>
                                </div>
                                <div class="contact-info mt-3">
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>0912-345-6789</span>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>kagawad1@local.gov</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-edit">
                                        <i class="fas fa-user-edit me-2"></i>Edit Official
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kagawad 2 -->
                    <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch mb-4">
                        <div class="official-card bg-white d-flex flex-fill">
                            <div class="card-header position-relative">
                                <span class="position-badge">Kagawad</span>
                                <span class="float-end">
                                    <span class="status-indicator status-active" title="Active"></span>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="/api/placeholder/128/128" alt="Ana Reyes"
                                        class="img-profile rounded-circle">
                                    <h2 class="h5 mt-3 mb-1">Ana Reyes</h2>
                                    <span class="badge-tenure">
                                        <i class="far fa-calendar-alt me-1"></i>2021-2025
                                    </span>
                                </div>
                                <div class="contact-info mt-3">
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>0923-456-7890</span>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>kagawad2@local.gov</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-edit">
                                        <i class="fas fa-user-edit me-2"></i>Edit Official
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SK Chairman -->
                    <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-stretch mb-4">
                        <div class="official-card bg-white d-flex flex-fill">
                            <div class="card-header position-relative">
                                <span class="position-badge">SK Chairman</span>
                                <span class="float-end">
                                    <span class="status-indicator status-ending" title="Term Ending Soon"></span>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <img src="/api/placeholder/128/128" alt="Miguel Santos"
                                        class="img-profile rounded-circle">
                                    <h2 class="h5 mt-3 mb-1">Miguel Santos</h2>
                                    <span class="badge-tenure">
                                        <i class="far fa-calendar-alt me-1"></i>2022-2025
                                    </span>
                                </div>
                                <div class="contact-info mt-3">
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>0934-567-8901</span>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>sk.chairman@local.gov</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-edit">
                                        <i class="fas fa-user-edit me-2"></i>Edit Official
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notice Section -->
        <div class="notice-panel mt-4 mb-5">
            <div class="row align-items-center">
                <div class="col-md-1 text-center mb-3 mb-md-0">
                    <i class="fas fa-exclamation-triangle text-danger fa-2x"></i>
                </div>
                <div class="col-md-11">
                    <h5 class="fw-bold text-danger mb-2">IMPORTANT NOTICE</h5>
                    <p class="mb-0">
                        <strong>Officials who have not yet completed their term cannot be edited.</strong><br>
                        Please wait until their designated tenure is over before making any changes.
                        Indicator colors: <span class="status-indicator status-active me-1"></span>Active,
                        <span class="status-indicator status-ending me-1"></span>Ending Soon,
                        <span class="status-indicator status-expired me-1"></span>Expired
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
</body>

</html>