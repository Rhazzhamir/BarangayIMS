<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Information Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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

    nav {
        background-color: #343a40;

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
                <h5 class="cormorant-text text-white mb-0 me-2">Welcome to</h5>
                <img src="src/logo.png" style="height: 70px; width: auto;" class="me-2">
                <div class="d-flex flex-column">
                    <h4 class="mb-0 text-white">Barangay District IV</h4>
                    <small class="text-warning">Babatngon, Leyte</small>
                </div>
            </a>

            <!-- Toggle Button (For Mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#map">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('Login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('/Register'); ?>">Register</a>
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
        </div>
    </div>

    <!-- Barangay Officials Section -->
    <div class="officials-section py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">🏛️ Barangay Officials 🏛️</h2>

            <div class="row justify-content-center">
                <!-- Barangay Captain -->
                <div class="col-12 d-flex justify-content-center mb-4">
                    <div class="card official-card text-center shadow-lg border-0 p-3" style="max-width: 400px;">
                        <img src="src/Official_List/Brgy_Captain.jpg" alt="Barangay Captain"
                            class="img-fluid rounded-circle mx-auto d-block shadow-lg"
                            style="width: 180px; height: 180px;">
                        <div class="card-body">
                            <h4 class="card-title fw-bold text-dark">Barangay Captain</h4>
                            <p class="card-text text-muted">Head of the Barangay</p>
                        </div>
                    </div>
                </div>

                <!-- Kagawads -->
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <div class="card official-card text-center shadow border-0 p-3">
                            <img src="src/Official_List/Brgy_Kawad1.jpg" alt="Kagawad 1"
                                class="img-fluid rounded-circle mx-auto d-block shadow-lg"
                                style="width: 140px; height: 140px;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Kagawad 1</h5>
                                <p class="card-text text-muted">Committee Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card official-card text-center shadow border-0 p-3">
                            <img src="src/Official_List/Brgy_Kawad2.jpg" alt="Kagawad 2"
                                class="img-fluid rounded-circle mx-auto d-block shadow-lg"
                                style="width: 140px; height: 140px;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Kagawad 2</h5>
                                <p class="card-text text-muted">Committee Member</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card official-card text-center shadow border-0 p-3">
                            <img src="src/Official_List/Brgy_Kawad3.jpg" alt="Kagawad 3"
                                class="img-fluid rounded-circle mx-auto d-block shadow-lg"
                                style="width: 140px; height: 140px;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Kagawad 3</h5>
                                <p class="card-text text-muted">Committee Member</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SK Chairman & Secretary -->
                <div class="row text-center">
                    <div class="col-md-6 mb-4">
                        <div class="card official-card text-center shadow border-0 p-3">
                            <img src="src/Official_List/Brgy_Chairman.jpg" alt="SK Chairman"
                                class="img-fluid rounded-circle mx-auto d-block shadow-lg"
                                style="width: 140px; height: 140px;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">SK Chairman</h5>
                                <p class="card-text text-muted">Youth Sector Representative</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card official-card text-center shadow border-0 p-3">
                            <img src="src/Official_List/Brgy_Secretary.png" alt="Barangay Secretary"
                                class="img-fluid rounded-circle mx-auto d-block shadow-lg"
                                style="width: 140px; height: 140px;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Barangay Secretary</h5>
                                <p class="card-text text-muted">Administrative Support</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Treasurer -->
                <div class="col-12 d-flex justify-content-center mt-4">
                    <div class="card official-card text-center shadow-lg border-0 p-3" style="max-width: 400px;">
                        <img src="src/Official_List/Brgy_Treasurer.jpg" alt="Barangay Treasurer"
                            class="img-fluid rounded-circle mx-auto d-block shadow-lg"
                            style="width: 160px; height: 160px;">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Barangay Treasurer</h5>
                            <p class="card-text text-muted">Financial Management</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap Icons (Ensure this is included) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


    <!-- Features Section -->
    <div class="features-section py-5" style="background: #343a40; color: white;">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">🔹 System Modules 🔹</h2>
            <div class="row justify-content-center">
                <!-- User Management -->
                <div class="col-md-4">
                    <div class="card feature-card text-center shadow-lg border-0">
                        <div class="card-body p-4">
                            <div class="icon mb-3">
                                <i class="bi bi-person-circle text-primary" style="font-size: 50px;"></i>
                            </div>
                            <h5 class="card-title fw-bold">User Management</h5>
                            <p class="card-text text-muted">Role-based access control, user authentication, and profile
                                management.</p>
                        </div>
                    </div>
                </div>

                <!-- Budget Management -->
                <div class="col-md-4">
                    <div class="card feature-card text-center shadow-lg border-0">
                        <div class="card-body p-4">
                            <div class="icon mb-3">
                                <i class="bi bi-cash-stack text-success" style="font-size: 50px;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Budget Management</h5>
                            <p class="card-text text-muted">Track income, expenses, budget allocations, and maintain
                                financial audit logs.</p>
                        </div>
                    </div>
                </div>

                <!-- Resident Records -->
                <div class="col-md-4">
                    <div class="card feature-card text-center shadow-lg border-0">
                        <div class="card-body p-4">
                            <div class="icon mb-3">
                                <i class="bi bi-people-fill text-danger" style="font-size: 50px;"></i>
                            </div>
                            <h5 class="card-title fw-bold">Resident Records</h5>
                            <p class="card-text text-muted">Secure digital record-keeping for resident information and
                                demographics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons (Ensure this is included) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">



    <!-- Container for HD Map -->
    <div class="container mt-5" id="map">
        <div class="card text-white border-0 shadow-lg" style="background-color: #343a40;">
            <div class="p-3 card-header border-0 d-flex justify-content-center align-items-center text-center">
                <h3 class="card-title mb-0">Barangay Map - Babatngon District 4</h3>
            </div>
            <div class="card-body p-0">
                <div id="babatngon-map" style="height: 500px; border-radius: 10px;"></div> <!-- Mas mataas na height -->
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer text-center mt-5">
        <div class="container">
            <p>&copy; 2024 Barangay Information Management System. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
    var map = L.map('babatngon-map', {
        center: [11.4244, 124.8469], // Tamang coordinates ng Barangay District 4
        zoom: 16, // Higher zoom for better clarity
        zoomControl: true,
    });

    // Load High-Resolution Map (Esri Satellite)
    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri'
    }).addTo(map);

    // Custom Red Marker Icon
    var redIcon = L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        shadowSize: [41, 41]
    });

    // Barangay Image URL (Palitan ito ng tamang image file)
    var barangayImage = "src/barangay-district-4.jpg"; // Siguraduhin na may tamang path ang image

    // Place the red marker at Barangay District 4
    var marker = L.marker([11.4238, 124.8473], {
        icon: redIcon
    }).addTo(map);

    // Add Tooltip with Image on Hover
    const base_url = "<?= base_url('src/barangay-district-4.jpg'); ?>";
    marker.bindTooltip(`
        <div style="text-align:center;">
            <img src="${base_url}" style="width: 200px; height: auto; border-radius: 10px; box-shadow: 0 5px 10px rgba(0,0,0,0.3);">
            <h6 style="margin-top: 5px; color: black;"><b>Babatngon District 4</b></h6>
        </div>
    `, {
        permanent: false,
        direction: "top",
        opacity: 1
    });
    </script>

</body>

</html>